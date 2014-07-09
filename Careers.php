<?php include_once './util.php'; 
$Menu_Active =5;
?>
<!DOCKTYPE HTML>
<html>
    <head>
        <?php include_once './Header.php'; ?>
        
          <style>

            .inputside {
                color: #395870;
                width: 250%;
                padding: 8px;
                border-radius: 9px;
                border: 1px solid;
                box-shadow: 2px 2px 6px #aaa;
            }
            .form1{
                font-family: sans-serif;
                margin:0 auto;display:block;width:43%;
            }

            .lable{margin-top:19px;}
            .textarea{
                color: #395870;
                width: 248%;
                padding: 8px;
                border-radius: 9px;
                border: 1px solid;
                box-shadow: 2px 2px 6px #aaa;
            }

            .messagebox{


                margin-left:43%;
                margin-top: 42%;
                color: #44CF54;


            }

            .file_input_hidden{
                color:#395870;width: 99%;

            }
            .filewrapper input{
               
            
            cursor: pointer;
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
                              <?php
        if (!isset($_GET['result'])) {
            
        } else {
            ?>
            <div class="messagebox <?php
            if ($_GET['result'] == 1) {
                echo 'success';
            } else {
                echo 'alert';
            }
            ?> ">

                <?php
                if ($_GET['result'] == 1) {
                    echo 'Your application has been sent.';
                } else {
                    echo 'Your application has not been sent.';
                }
                ?>

            </div> 
            <?php
        }
        ?>


        <div class="container" style="width: 70%;">

            <div style="margin-top: 54px;;">
                <h3 style="color: #FFF;">Application Form</h3>


                <form action="sendmail_Career.php" class="form1" id="myForm" method="POST" enctype="multipart/form-data">

                    <p class="lable">First Name </p>
                    <input value='' id="fname" name="fname" placeholder="" required="required" type="text" class="inputside">


                    <p class="lable">Last Name </p>
                    <input value='' id="lname" name="lname" placeholder="" required="required" type="text" class="inputside">


                    <p class="lable">Contact&nbsp;Number</p>
                    <input value='' id="contactno" name="contactno" placeholder=""required="required" type="text" class="inputside">

                    <p class="lable">Address</p>
                    <textarea  id="projinfo" name="address" placeholder="" required="required" class="textarea" rows="4" cols="50">
                    </textarea>



                    <p class="lable">Email </p>
                    <input value='' id="email" name="email" placeholder="" type="email" required="required" class="inputside">


                    <p class="lable">Photo Upload </p>
                    <span class="filewrapper"> <input type="file" class="file_input_hidden" onchange="javascript: document.getElementById('fileName').value = this.value" class="inputside" name="pic" accept="image/*" style=""></span>

                    <div style="clear:both"></div>

                    <input type="Submit" value="SUBMIT"  style=" width: auto; 
                           margin-left: 22%;
                           position: relative;

                           margin: 10px auto!important;
                           cursor:pointer;
                           display: block;
                           padding: 6px!important">


                </form>


            </div>

        </div> 
                       
                    </div>
                </div>
            </div>
         </div>
        
        
         <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-52622661-1', 'auto');
  ga('send', 'pageview');

</script>    
          
        
    </body>



</html>
