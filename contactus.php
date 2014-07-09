<?php include_once './util.php'; ?>
<!DOCKTYPE HTML>
<html>
    <head>
        <?php include_once './Header.php'; ?>
        
         <style>
             .regs{
                 width: 49%;
             }
            
          

            .corp{
                width: 49%;
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
                        
  






        <div class="container" style="width: 195%;
             /* top: 91px; */
             overflow: hidden;
             outline: none;
             cursor: -webkit-grab;">
          
           
                <div style="float:left;width:50%">
                    <div class="parent">
                        <div class="wrapper">
                            <div class="map" id="map" >
                                <iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=mdc+corporation+namjoshi+pune&amp;aq=&amp;sll=18.516964,73.843409&amp;sspn=0.012696,0.021136&amp;ie=UTF8&amp;hq=mdc+corporation+namjoshi&amp;hnear=Pune,+Maharashtra&amp;t=m&amp;z=14&amp;iwloc=A&amp;cid=2290464802176146632&amp;ll=18.510073,73.84362&amp;output=embed"></iframe><br />   
                            </div>
                            <div class="map1" id="map1">
                                <iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=mdc+corporation+corporation+pune&amp;aq=&amp;sll=18.510073,73.84362&amp;sspn=0.025394,0.042272&amp;ie=UTF8&amp;hq=mdc+corporation+corporation&amp;hnear=Pune,+Maharashtra&amp;ll=18.516964,73.843409&amp;spn=0.025393,0.042272&amp;t=m&amp;z=14&amp;iwloc=A&amp;cid=16236965411668699858&amp;output=embed"></iframe><br/>

                            </div>
                        </div>
                    </div>


                    <div class="btn11">   
                        <div class="emaildiv" style="font-family: sans-serif; font-size: 16px;margin-top:10px;"><b>Email:</b>info@mdccorp.co.in</div>
                        <div class="button11" style="margin-top:10px;">


                            <input type="button" id="corp" value="Corporate Office" class="corp" onclick="corporateClick();" style="cursor:pointer">
                            <input type="button" id="regs" value="Registration Office" class="regs" onclick="registerClick();"style="cursor:pointer">
                            <p style="margin-top:10px;" class="addrcorp" id="addrcorp">
                                MDC Corporation (India) Pvt.Ltd.3rd Floor Deccan Avenue Pune.
                            </p>
                            <p style="margin-top:10px;" class="addrreg" id="addrreg">
                                Namjoshi Building, L.B.S Road, Navi peth Pune.
                            </p>

                        </div>
                    </div>


                </div>                  
            </div>
            <div style="clear:both"></div>
        </div>



       
      
        <script type="text/javascript">

            function corporateClick()
            {
                //var corpn=document.getElementById("corp");
                //corpn.style.display="block";
                document.getElementById("map").style.display = "none";
                document.getElementById("map1").style.display = "block";
                document.getElementById("addrcorp").style.display = "block";
                document.getElementById("addrreg").style.display = "none";
            }

            function registerClick()
            {
                //var regst=document.getElementById("regs");
                //regst.style.display="block";
                document.getElementById("map").style.display = "block";
                document.getElementById("map1").style.display = "none";
                document.getElementById("addrcorp").style.display = "none";
                document.getElementById("addrreg").style.display = "block";

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
        
        
        
        
    </body>



</html>
