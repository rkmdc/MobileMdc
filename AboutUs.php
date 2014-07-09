<?php include_once './util.php'; 
$Menu_Active =2;
?>
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

        
        
          <div id="app_main_content" class="app-content">
                <div class="Round_Blue_Canvas">
                    <div class="About_Text_wrapper">
                        <h2>About Us</h2>
                        <p>VISION<br/>
                            To be known as an innovative multi-disciplinary business
                            conglomerate making “a difference” to its stake holders.
                            To touch every sphere of human life through diverse
                            business verticals enriching it further. To provide strong
                            global foothold to all our products and services by
                            consistently adding value to our customers.
                        </p><br/>
                        <p>MISSION<br/>
                            To establish ourselves as a business entity unique to our
                            values, to create notable benchmarks on our journey to
                            growth and prosperity...To expand through our business
                            endeavors that promise sustained growth. To lead in all
                            sectors we have ventured and carve a niche in the market
                            with our unique deliverables. To establish MDC globally and
                            stand apart on the merit of our quality, by providing the
                            best value to our stake-holders.
                        </p><br/>
                        <p>OUR CORE VALUES<br/>
                            Our corporate philosophy is founded on principles of
                            Honesty, Simplicity and Integrity. We practice these three
                            principles in our everyday life as part of our personality and
                            life at MDC. Our business policy decisions are largely
                            influenced by these principles of which every MDC
                            member is truly proud of.
                        </p>
                        <br>
                       
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
