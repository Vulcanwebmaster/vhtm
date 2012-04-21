
<?php
?>
<!-- Dinh nghia Style -->
        <script type="text/javascript" src="<?php echo base_url();?>Scripts/stmenu.js" ></script>
                        <script type="text/javascript" src="<?php echo base_url();?>Scripts/ddaccordion.js"></script>
                        <script type="text/javascript">
                            ddaccordion.init({
                                headerclass: "silverheader", //Shared CSS class name of headers group
                                contentclass: "submenu", //Shared CSS class name of contents group
                                revealtype: "mouseover", //Reveal content when user clicks or onmouseover the header? Valid value: "click", "clickgo", or "mouseover"
                                mouseoverdelay: 200, //if revealtype="mouseover", set delay in milliseconds before header expands onMouseover
                                collapseprev: true, //Collapse previous content (so only one open at any time)? true/false
                                defaultexpanded: [0], //index of content(s) open by default [index1, index2, etc] [] denotes no content
                                onemustopen: true, //Specify whether at least one header should be open always (so never all headers closed)
                                animatedefault: false, //Should contents open by default be animated into view?
                                persiststate: true, //persist state of opened contents within browser session?
                                toggleclass: ["", "selected"], //Two CSS classes to be applied to the header when it's collapsed and expanded, respectively ["class1", "class2"]
                                togglehtml: ["", "", ""], //Additional HTML added to the header when it's collapsed and expanded, respectively  ["position", "html1", "html2"] (see docs)
                                animatespeed: "fast", //speed of animation: integer in milliseconds (ie: 200), or keywords "fast", "normal", or "slow"
                                oninit: function (headers, expandedindices) { //custom code to run when headers have initalized
                                    //do nothing
                                },
                                onopenclose: function (header, index, state, isuseractivated) { //custom code to run whenever a header is opened or closed
                                    //do nothing
                                }
                            })
                        </script>
                        <style type="text/css">
                            .applemenu
                            {
                                width: 182px;
                                border: 1px solid #9A9A9A;
                            }
                            .applemenu div.silverheader a
                            {
                                background: url("../../images/bdscomvn/Images/bds.gif") /*tpa=http://batdongsan24h.com.vn/Images/Skins/bds.gif*/ no-repeat;
                                color: white;
                                display: block;
                                position: relative;
                                width: 163px;
                                height: 21px;
                                text-decoration: none;
                                padding-top: 5px;
                                padding-left: 20px;
                                font-weight: bold;
                                font-size: 12px;
                            }
                            .applemenu div.silverheader a:visited, .applemenu div.silverheader a:active
                            {
                                color: #eef7ff;
                            }
                            .applemenu div.selected a, .applemenu div.silverheader a:hover
                            {
                                background: url("../../images/bdscomvn/Images/bds.gif") /*tpa=http://batdongsan24h.com.vn/Images/Skins/bds.gif*/ no-repeat;
                                width: 163px;
                                height: 21px;
                                color: white;
                                padding-top: 5px;
                                padding-left: 20px;
                                font-weight: bold;
                                font-size: 12px;
                            }
                            .applemenu div.submenu
                            {
                                background: #eef7ff;
                            }
                        </style>
                        

 <!-- Ban cho thue hop tac -->                       
 <div style="width: 183px; height: 33px; float: left;margin-bottom: 3px; background-image: url('<?php echo base_url();?>images/banchothuehoptac.png'); margin-top: 5px;"></div>
                        <div style="width: 183px; float: left" class="left_panel">
                            <div class="applemenu">
                                <div class="silverheader">
                                    <a class="tab" href="#" style="height: 30px">Cho thuê nhà xưởng</a>                                    
                                </div>
                                <div class="submenu">
                                    
                                </div>
                                <div class="silverheader">
                                    <a class="tab" href="#" style="height: 30px">Bán nhà xưởng</a></div>
                                <div class="submenu">
                                    
                                </div>
                                <div class="silverheader">
                                    <a class="tab" href="#" style="height: 30px">Hợp tác kinh doanh</a></div>
                                <div class="submenu">
                                    
                                </div>
                                <div class="silverheader">
                                    <a class="tab" href="#" style="height: 28px">Cho thuê đất</a></div>
                                <div class="submenu">
                                    
                                </div>
                                <div class="silverheader">
                                    <a class="tab" href="#" style="height: 28px">Mua</a></div>
                                <div class="submenu">
                                    
                                </div>
                            </div>
                        </div>
                        

 <!-- Du an -->
                         <div style="width: 183px; height: 33px; float: left; background: url('<?php echo base_url();?>images/duan.png'); no-repeat;
                            margin-bottom: 0px; margin-top: 5px;" class="left_panel">
                        </div>
                        <div style="width: 181px; float: left; border: 1px #9A9A9A solid;" class="left_panel">
                            <div class="silverheader" style=" width: 162px;
                                height: 30px; padding-left: 40px; line-height: 30px; float: left">
                                <a ><font
                                    style="color: #FFFFFF"><strong>Dự án tỉnh Hà Nam</strong></font></a></div>
                            <div style="overflow-y: hidden; overflow-x: hidden; float: left; width: 183px; max-height: 700px;
                                height: auto !important; height: 700px">
                                <!-- Load du an tinh Ha Nam tu database -->
								<?=$this->load->view('modules/tnd_tinmenutrai/index')?>
                            </div>
                            <div class="silverheader" style=" width: 162px;
                                height: 30px; padding-left: 40px; line-height: 30px; float: left">
                                <a href="htm/-Tab=8&cat_id=2.htm" >
                                    <font color="#FFFFFF"><strong>Dự án tỉnh Ninh Bình</strong></font></a></div>
                            <div style="overflow-y: hidden; overflow-x: hidden; float: left; width: 183px; max-height: 700px;
                                height: auto !important; height: 700px">
                                <!-- Load du an tinh Ninh Bình tu database -->
                                <?=$this->load->view('modules/tnd_tinmenutrai2/index')?>
                            </div> 
 
 
 <!-- Cay canh -->
                            <div style="width: 182px; height: 33px; float: left; background: url('<?php echo base_url();?>images/caycanh.png') no-repeat;
                                margin-bottom: 0px; margin-top: 5px;" class="left_panel">
                            </div>                                                        
                            <div class="silverheader" style="background: url('<?php echo base_url();?>images/tabbg.png') no-repeat; width: 162px;
                                height: 30px; padding-left: 40px; line-height: 30px; float: left">
                                <a><font color="#FFFFFF"><strong>Cây cảnh phôi</strong></font></a></div>
							<div style="overflow-y: hidden; overflow-x: hidden; float: left; width: 183px; max-height: 700px;
                                height: auto !important; height: 700px">
                                <!-- Load cay canh phoi tu database -->
                                <?=$this->load->view('modules/tnd_tinmenucaycanh/index')?>
                            </div> 
                            
                            <div class="silverheader" style="background: url('<?php echo base_url();?>images/tabbg.png') no-repeat; width: 162px;
                                height: 30px; padding-left: 40px; line-height: 30px; float: left">
                                <a><font color="#FFFFFF"><strong>Cây hoàn thiện</strong></font></a></div>

								<div style="overflow-y: hidden; overflow-x: hidden; float: left; width: 183px; max-height: 700px;
                                height: auto !important; height: 700px">
                                <!-- Load cay canh phoi tu database -->
                                <?=$this->load->view('modules/tnd_tinmenucaycanh2/index')?>
                            	</div> 
                        </div>

<!-- Bang thong ke -->
                        <div style="width: 180px; padding-left: 0px; float: left; margin-top: 10px; margin-bottom:10px">
                            <div style="width: 179px; border: 1px #0088f4 solid; float: left">
                                <div style="padding: 5px; float: left; width: 175px; text-align: center">
                                    <strong>THỐNG KÊ</strong></div>
                                <div style="padding: 5px; float: left; float: left; width: 175px">
                                    <strong>Tin rao: 8.067.275</strong></div>
                                <div style="padding: 5px; float: left; float: left; width: 175px">
                                    <strong>Thành viên: 3.005.564</strong></div>
                                <div style="padding: 5px; float: left; float: left; width: 175px">
                                    <strong>Online: 342</strong></div>
                                <div style="padding: 5px; float: left; float: left; width: 175px">
                                    <strong>Tổng truy cập: 16.456.837</strong></div>
                            </div>
                        </div>
                        <div style="margin-top:10px;margin-bottom:10px"> 
                            <img src="<?php echo base_url();?>images/hanoi-travel-map.jpg" width="180px" alt="" style="margin: 0px">
                            </div>