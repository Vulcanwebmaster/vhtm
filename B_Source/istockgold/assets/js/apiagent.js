$.ajaxSetup({
    async: false,
    cache: false
});

$(document).ajaxError(function (event, response, settings) {
    alert("Error: " + response.status);
});

var auth = {
    accountId: "",
    apiName: "",
    securityWord: "",

    create: function (accountId, apiName, securityWord) {
        this.accountId = accountId;
        this.apiName = apiName;
        this.securityWord = securityWord;
    },

    createAuthToken: function () {
        var date = new Date();
        var datePart = ":" + date.getUTCFullYear() + twoDigits(date.getUTCMonth() + 1) + twoDigits(date.getUTCDate()) + ":" + twoDigits(date.getUTCHours());
        var authString = this.securityWord + datePart;
        var sha256 = Crypto.SHA256(authString);
        return sha256.toUpperCase();
    }
};

var jsApiAgent = {
    auth: "",
    useHttps: true,
    //https://api2.libertyreserve.com/json/accountname
    rootUrl: "https://api2.libertyreserve.com/json/",
    initialize: function (a) {
        this.auth = a;
        //this.useHttps ? this.rootUrl = "https://" + this.rootUrl : this.rootUrl = "http://" + this.rootUrl;
    },

    buildAuthenticationTag: function (auth) {
        var id = this.generateId();
        var token = auth.createAuthToken();
    	var tag = "{\"id\": \""+id+"\",\"account\": \""+auth.accountId+"\",\"api\": \""+auth.apiName+"\",\"token\": \""+token+"\"";
        return tag;
    },

    balance: function () {
        try {
            var request = this.buildAuthenticationTag(auth);
            var url = this.rootUrl + "Balance";
            var data = this.getResponse(request, url);
            this.checkError(data);

            return data;

        } catch (e) {
            this.outputError(e);
        }
        event.preventDefault();
    },

    accountName: function (request) {
        try {
            var url = this.rootUrl + "accountname";
            temp = this.buildAuthenticationTag(auth);
            request = temp + request;
            alert(request);
            var data = this.getResponse(request, url);
            alert(data);
            this.checkError(data);
            return data;
        } catch (e) {
            this.outputError(e);
        }
    },

    history: function history(request) {
        try {
            var url = this.rootUrl + "History";
            request = this.jsonMerge(this.buildAuthenticationTag(auth), request);
            var data = this.getResponse(request, url);
            this.checkError(data);
            return data;
        } catch (e) {
            this.outputError(e);
        }

    },

    findTransaction: function (request) {
        try {
            var url = this.rootUrl + "FindTransaction";
            request = this.jsonMerge(this.buildAuthenticationTag(auth), request);
            alert(request);
            var data = this.getResponse(request, url);
            this.checkError(data);

            return data;

        } catch (e) {
            this.outputError(e);
        }
    },

    transfer: function (request) {
        try {
            var url = this.rootUrl + "Transfer";
            request = this.jsonMerge(this.buildAuthenticationTag(auth), request);
            var data = this.getResponse(request, url);
            this.checkError(data);

            return data;

        } catch (e) {
            this.outputError(e);
        }
    },

    getResponse: function (request, url) {
        $.ajax({
            url: url,
            type: 'POST',
            dataType: 'json',
            data: request,
            contentType: 'application/json',
            success: function (data, html) {
                $("#result").append(data);
                jsonData = data;
            }
        });

        return jsonData;
    },

    checkError: function (data) {
        if (data.Error) {
            throw new Error(data.Error.ErrorCode, data.Error.ErrorMessage);
        }
    },

    outputError: function (e) {
        alert(e.code + e.message);
    },

    jsonMerge: function (json1, json2) {
        var json = JSON.stringify(json1) + JSON.stringify(json2);
        json = json.replace(/\\/g, "");
        json = json.replace(/}""{/, ",");
        json = json.replace(/"{/, "{");
        json = json.replace(/}"/, "}");
        return json;
    },

    formData: function (form) {
        data = {};
        $(form).find("input[name]").each(function (i) {
            var name = $(this).attr("name");
            var value = $(this).val();
            //if (value != "") {
            var command = "data." + name + " = '" + value + "';";
            eval(command);
            //}
        });
        return data;
    },

    generateId: function () {
        return new Date().getTime();
    }
};

function Error(code, message) {
    this.code = code;
    this.message = message;
}
Error.prototype = new Error;

function twoDigits(input) {
    if (input < 10) return "0" + input;
    else return input;
}
