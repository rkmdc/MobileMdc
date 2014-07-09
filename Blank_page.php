<?php include_once './util.php'; ?>
<!DOCKTYPE HTML>
<html>
    <head>
        <?php include_once './Header.php'; ?>
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

       
        
            <div id="app_main_content" class="app-content" style="background: #060E1E;">
                <div class="Round_Blue_Canvas">
                    <div class="About_Text_wrapper">
                        
                       
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
