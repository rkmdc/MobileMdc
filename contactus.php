<?php
include_once './util.php';
$Menu_Active = 6;
?>
<!DOCKTYPE HTML>
<html>
    <head>
        <?php include_once './Header.php'; ?>

        <style>

            .button11{
                margin-top:124%;
            }

            .regs{
                width: 49%;
            }



            .corp{
                width: 49%;
            }

            .addrcorp{

                position: absolute;
                top: 35%;
                width: 40%;
                margin-left: 40%;

            }
            .addrreg{
                position: absolute;
                top: 35%;
                width: 40%;
                margin-left: 40%;

            }

            .lable{margin-top:19px;}
            textarea{
                color: #395870;
                width: 99%;
                padding: 8px;
                border-radius: 9px;
                border: 1px solid;
                box-shadow: 2px 2px 6px #aaa;
            }
            .lable{margin-top:19px;}


            .map{

                display: none;
            }
            .addrreg{display: none;}



            .contactbox{

                color: #44CF54;

                margin-left:23%;
                margin-top: 35%;

            }

            #abcd{
                width: 20%;
                position: absolute;
                top: 35%;
                right: 68%;
            }
            #abc{
                display: none;
                width: 20%;
                position: absolute;
                top: 35%;
                right: 68%;
            }

        </style>




    </head>
    <body>
        <nav class="main-left-menu">
            <?php include_once './Menu_left.php'; ?>
        </nav>
        <!--This is Right menu navigation-->
        <nav class="main-right-menu"> 
            <?php include_once './Menu_Right.php'; ?>
        </nav>

        <div class="app-wrapper">


            <!--This is fixed header part--> 
            <?php include_once './Head_page.php'; ?>

            <?php include_once './Footer.php'; ?>  



            <div id="app_main_content" class="app-content">
                <div class="Round_Blue_Canvas">
                    <div class="About_Text_wrapper">


                        <!--                        <div onclick="myfoo();" class="point" style="cursor: pointer;">
                                                
                                                
                                                    Go To my map and Address
                                                
                                                </div>
                                                <script>
                        
                                                    function myfoo()
                                                    {
                        
                                                        window.open('http://maps.google.com/maps?ll=18.495829,73.864134&z=14&t=m&hl=en-US&gl=US&mapclient=embed&cid=2290464802176146632', '_blank');
                        
                        
                                                    }
                                                </script>-->
                        <div class="btn11">   

                            <div class="button11">


                                <input type="button" id="corp" value="Corporate Office" class="corp" onclick="corporateClick();" style="cursor:pointer">


                                <img src="common/img/Map_icon.png"  id="abcd" onclick="mapping_map_corp();">
                                <p class="addrcorp" id="addrcorp">

                                    MDC Corporation (India) Pvt.Ltd.3rd Floor Deccan Avenue Pune.
                                    <br /> <b>Email:</b><a href="mailto:info@mdccorp.co.in?Subject=Hello%20again" target="_top"> Send Mail</a><br />info@mdccorp.co.in.


                                </p>

                                <input type="button" id="regs" value="Registration Office" class="regs" onclick="registerClick();"style="cursor:pointer">
                                <img src="common/img/Map_icon1.png" id="abc" onclick="mapping_map_reg();">
                                <p class="addrreg" id="addrreg">

                                    Namjoshi Building, L.B.S Road, Navi peth Pune.
                                    <br /><b>Email:</b> <a href="mailto:info@mdccorp.co.in?Subject=Hello%20again" target="_top">
Send Mail</a><br />info@mdccorp.co.in.
                                </p>

                            </div>
                        </div>




                    </div>


                    <script type="text/javascript">

                        function corporateClick()
                        {



                            document.getElementById("addrcorp").style.display = "block";
                            document.getElementById("addrreg").style.display = "none";
                            document.getElementById("abcd").display = "block";
                            document.getElementById("abc").display = "none";
                        }

                        function registerClick()
                        {


                            document.getElementById("addrcorp").style.display = "none";
                            document.getElementById("addrreg").style.display = "block";
                            document.getElementById("abcd").display = "none";
                            document.getElementById("abc").display = "block";

                        }


                    </script>


                    <script>
                        function mapping_map_corp() {
                            document.getElementById("abc").display = "block";
                            document.getElementById("abcd").display = "none";
                            window.open('https://www.google.com/maps/place/MDC+Corporation+(India)+Pvt.+Ltd./@18.516964,73.843409,14z/data=!4m2!3m1!1s0x0:0xe1554a03c8d12ad2?hl=en-US', '_system');

                        }

                        function mapping_map_reg()
                        {
                            //document.getElementById("abcd").display = "none";
                            // document.getElementById("abc").display = "block";
                            window.open('https://www.google.com/maps/place/MDC/@18.4779432,73.8511853,13z/data=!4m2!3m1!1s0x0:0x1fc95d9a283e9cc8?hl=en-US', '_system');


                        }

                    </script>



                    <script>
                        $(document).ready(function() {

                            $(".container").niceScroll({touchbehavior: true, cursorcolor: "#444", cursoropacitymax: 0.7, cursorwidth: 4, cursorborder: "1px solid #2848BE", cursorborderradius: "8px"}); // MAC like scrollbar

                        });
                    </script>

                </div>
            </div>
        </div>
    </div>


<!--        <script>
            (function(i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function() {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-52622661-1', 'auto');
            ga('send', 'pageview');

        </script>         -->

</body>



</html>
