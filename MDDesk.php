<?php
include_once './util.php';
$Menu_Active = 3;
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
                    <div class="About_Text_wrapper" style="overflow: auto;">
                        <div class="mdimg" style="margin:  0 auto; display: block"> <img id="md" src="common/img/2.png" style="margin-left: 16%;">   </div>
                        <p class="mdpara" style="margin-top: 15px;font-family: sans-serif; line-height: 1.4em;">
                            <b style="text-transform: uppercase;"> Shri. Mohan Krishnaji Tapre </b> is the guiding light and pioneer of the MDC family. He holds a Bachelor's Degree in Commerce.

                            His illustrious journey began with Milan Medico which was a distributor for Zandu Balm. This company soon flourished into Milan Distributors, which had distributorship of well known FMCG and Medical brands.
                            Milan Distributors first brought Society Tea to Pune and this laid the foundation stone for MD Enterprises,MD Communications and all the success that followed. 

                            The Tapre family has also greatly contributed to the culture of Pune, being owners of the oldest cinema hall in Pune - Kirloskar Natyagruha (now known as Vasant Theatre) founded in 1905 where distinguished artists like P.L Deshpande, Bal Gandharva and Chhota Gandharva have performed. Mr.Tapre is also an active philanthropist.</p> 

                    </div>
                </div>
            </div>
        </div>



        <script>
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

        </script>       
    </body>



</html>


