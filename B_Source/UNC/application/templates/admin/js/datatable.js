function creattable(cols, data, total, sortBy, containerTable) {
    
    // Customize request sent to server to be able to set total # of records
    var generateRequest = function(oState, oSelf) {
        // Get states or use defaults
        oState = oState || { pagination: null, sortedBy: null };
        var sort = (oState.sortedBy) ? oState.sortedBy.key : sortBy;
        var dir = (oState.sortedBy && oState.sortedBy.dir === YAHOO.widget.DataTable.CLASS_DESC) ? "desc" : "asc";
        var startIndex = (oState.pagination) ? oState.pagination.recordOffset : 0;
        var results = (oState.pagination) ? oState.pagination.rowsPerPage : 25;

        // Validate input
        if(!YAHOO.lang.isNumber(total) || total < 0 || total > 1000) {
            YAHOO.util.Dom.get("total").value = 0;
            total = 0;
            alert("Total must be between 0 and 1000.");
        }

        // Build custom request
        return  "sort=" + sort +
                "&dir=" + dir +
                "&startIndex=" + startIndex +
                "&results=" + (startIndex + results) +
                "&total=" + total;
    };

    // DataTable configuration
    var myConfigs = {
        generateRequest: generateRequest,
        initialRequest: generateRequest(), // Initial request for first page of data
        dynamicData: true, // Enables dynamic server-driven data
        sortedBy : {key:sortBy, dir:YAHOO.widget.DataTable.CLASS_ASC}, // Sets UI initial sort arrow
        paginator: new YAHOO.widget.Paginator({ rowsPerPage:25 }) // Enables pagination 
    };
    
    // DataTable instance
    var myDataTable = new YAHOO.widget.DataTable(containerTable, cols, data, myConfigs);
    // Update totalRecords on the fly with values from server
    myDataTable.doBeforeLoadData = function(oRequest, oResponse, oPayload) {
        oPayload.totalRecords = oResponse.meta.totalRecords;
        oPayload.pagination.recordOffset = oResponse.meta.startIndex;
        return oPayload;
    };

    return {
        ds: data,
        dt: myDataTable
    };
        
};