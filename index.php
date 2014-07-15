<?php
include_once './util.php';
$Menu_Active = 1;
?>

<!DOCTYPE html>
<html>
    <head>
<!--        <meta name="google-site-verification" content="zxd1iE_Pli1AHlUuPgHheRlsL8514BqY06j7GaIInFI" />-->
        <?php include_once './Headindex_page.php'; ?>


    </head>

    <body>
        <!--This is left menu navigation-->
        <nav class="main-left-menu">

            <?php include_once './Menu_leftindex.php'; ?> 
        </nav>

        <!--This is Right menu navigation-->
        <nav class="main-right-menu">
            <?php include_once './Menu_rightindex.php'; ?>
        </nav>

        <!--This is main content page-->
        <div class="app-wrapper">

            <br>
            <!--This is fixed header part--> 
            <?php include_once './Headerindex.php'; ?>
            <!--This is fixed Footer part-->

            <?php include_once './Footerindex.php'; ?>




            <div id="app_main_content" class="app-content">
                <div  class="Round_Blue_Canvas">
                    <div class="About_Text_wrapper">
                        <div  class="home_logo">
<!--                            <img src="common/img/MDCConcepts_Logo.png" alt="Home Logo" >-->
                            <svg width="122" height="169" viewBox="0 0 122 169" 
                                 class="Default_LineArtDrawingWrapper" >
                            <polygon fill="#8DB43E" points="68.309,11.717 104.4,11.717 104.4,48.112 "/>
                            <path fill="#FFFFFF" d="M20.998,20.321H62.73v-7.014l8.9,8.871l8.889,8.875l-8.889,8.879l-8.9,8.873v-7.02H27.305
                                  c-3.059,0-5.555,2.502-5.555,5.555v40.945c0,3.053,2.496,5.553,5.555,5.553h40.943c3.055,0,5.555-2.5,5.555-5.553v-35.4h-7.02
                                  l8.873-8.896l8.881-8.892l8.871,8.892l8.879,8.896h-7.017V94.59c0,11.397-9.321,20.717-20.719,20.717H20.998
                                  c-11.396,0-20.711-9.318-20.711-20.717V41.038C0.287,29.639,9.604,20.321,20.998,20.321L20.998,20.321z"/>
                            <g>
                            <path fill="#FFFFFF" d="M51.607,131.079h3.963c1.179,0,2.14,0.961,2.14,2.137v11.643c0,1.177-0.961,2.134-2.14,2.134h-3.963v7.559
                                  h7.593c2.014,0,3.983-0.486,5.346-2.053c1.467-1.676,1.824-4.092,1.824-6.236v-14.568c0-2.125-0.412-4.346-1.859-5.991
                                  c-1.326-1.519-3.123-2.082-5.111-2.082h-7.791L51.607,131.079L51.607,131.079z M45.508,131.079h6.1v-7.461H37.232v30.932h14.375
                                  v-7.559h-6.1L45.508,131.079L45.508,131.079z"/>
                            <path fill="#FFFFFF" d="M95.387,152.233v-5.317H80.043c-1.541,0-2.795-1.258-2.795-2.801v-10.394c0-1.539,1.254-2.803,2.795-2.803
                                  h15.389v0.266v-5.453c0-1.17-0.949-2.112-2.113-2.112H93.21H76.266c-2.086,0-4.104,0.51-5.561,2.075
                                  c-1.519,1.627-1.953,3.886-1.953,6.041v14.611c0,2.15,0.383,4.574,1.93,6.195c1.512,1.586,3.758,2.008,5.865,2.008l16.752-0.006
                                  c1.147-0.008,2.072-0.939,2.084-2.088L95.387,152.233z"/>
                            <path fill="#FFFFFF" d="M12.791,123.618L2.514,123.62c-1.074,0-1.938,0.858-1.953,1.928l0.004,26.969l-0.004,0.08
                                  c0,1.078,0.869,1.947,1.943,1.953H2.52h6.025v-0.998H8.59V133.57l5.861,20.98h6.588l5.971-21.568v4.261l-0.004,0.01
                                  c-0.035,0.676-0.055,1.352-0.055,2.021l0.004,15.277h5.768l0.012-0.006h0.244c1.082,0,1.957-0.869,1.957-1.953v-26.994
                                  l-0.004-0.078c-0.031-1.059-0.895-1.899-1.953-1.899H22.699l-5.031,17.342L12.791,123.618z"/>
                            </g>
                            <g>
                            <path fill="#FFFFFF" d="M109.299,0h5.578v0.852h-2.328V6.69h-0.957V0.852h-2.293V0L109.299,0z M121.098,0.008h0.889V6.69h-0.959
                                  V1.491l-2.059,2.584h-0.174l-2.08-2.584V6.69h-0.951V0.008h0.898l2.223,2.746L121.098,0.008z"/>
                            </g>
                            <g>
                            <path fill="none" stroke="#FFFFFF" stroke-miterlimit="10" d="M5.507,107.409c-2.962-3.559-4.749-8.126-4.749-13.094V41.252
                                  c0-11.289,9.229-20.521,20.518-20.521l0,0h41.35v-6.954l8.813,8.79l9.058,9.042"/>
                            <path fill="none" stroke="#FFFFFF" stroke-miterlimit="10" d="M23.538,91.847c1.004,1.058,2.422,1.721,3.985,1.721h40.567
                                  c3.024,0,5.504-2.474,5.504-5.502V52.992h-6.958l8.793-8.813l9.076-9.029"/>
                            <g>
                            <path fill="none" stroke="#FFFFFF" stroke-miterlimit="10" d="M23.565,91.851c-0.964-0.775-1.573-2.504-1.565-3.761l0.014-40.582
                                  c0.011-3.034,2.482-5.513,5.512-5.513h35.103v6.953l8.813-8.792l9.054-9.035"/>
                            </g>
                            <path fill="none" stroke="#FFFFFF" stroke-miterlimit="10" d="M5.42,107.336c1.426,1.992,7.206,7.5,15.828,7.5h53.093
                                  c11.288,0,20.526-9.231,20.526-20.521V52.992h6.946l-8.791-8.814l-9.024-9.042"/>
                            </g>
                            <g>
                            <path fill="none" stroke="#FFFFFF" stroke-miterlimit="10" d="M5.363,107.409c-2.962-3.559-4.749-8.126-4.749-13.094V41.252
                                  c0-11.289,9.229-20.521,20.519-20.521l0,0H62.48v-6.954l8.813,8.79l9.057,9.042"/>
                            <path fill="none" stroke="#FFFFFF" stroke-miterlimit="10" d="M23.395,91.847c1.004,1.058,2.422,1.721,3.986,1.721h40.567
                                  c3.023,0,5.504-2.474,5.504-5.502V52.992h-6.958l8.793-8.813l9.075-9.029"/>
                            <g>
                            <path fill="none" stroke="#FFFFFF" stroke-miterlimit="10" d="M23.422,91.851c-0.964-0.775-1.574-2.504-1.566-3.761l0.015-40.582
                                  c0.011-3.034,2.481-5.513,5.512-5.513h35.102v6.953l8.813-8.792l9.053-9.035"/>
                            </g>
                            <path fill="none" stroke="#FFFFFF" stroke-miterlimit="10" d="M5.276,107.336c1.427,1.992,7.206,7.5,15.828,7.5h53.093
                                  c11.288,0,20.526-9.231,20.526-20.521V52.992h6.947l-8.791-8.814l-9.025-9.042"/>
                            </g>
                            <g id="corporation">
                            <g>
                            <path fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" d="M7.118,168.902v-0.597c0-0.162-0.073-0.233-0.233-0.233
                                  c-0.015,0-0.044,0-0.059,0c-0.525,0.044-1.573,0.115-2.404,0.115c-1.427,0-2.536-0.859-2.536-3.306v-2.027
                                  c0-2.474,1.109-3.306,2.536-3.306c0.845,0,1.925,0.086,2.448,0.131c0.015,0,0.03,0,0.043,0c0.146,0,0.175-0.072,0.175-0.161
                                  v-0.743c0-0.129-0.102-0.174-0.233-0.188c-0.641-0.103-1.529-0.233-2.448-0.233c-1.792,0-3.846,0.933-3.846,4.501v2.027
                                  c0,3.54,2.055,4.503,3.846,4.503c1.238,0,1.807-0.073,2.418-0.191C6.986,169.163,7.118,169.077,7.118,168.902L7.118,168.902z"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" d="M16.385,164.807v-1.879c0-3.235-1.647-4.575-3.936-4.575h-0.006
                                  v1.195h0.006c1.604,0,2.594,0.932,2.594,3.38v1.879c0,2.448-1.005,3.38-2.594,3.38h-0.006v1.197h0.006
                                  C14.738,169.384,16.385,168.042,16.385,164.807L16.385,164.807z M12.443,158.353c-2.284,0.003-3.942,1.345-3.942,4.575v1.879
                                  c0,3.232,1.658,4.573,3.942,4.577v-1.197c-1.598-0.003-2.6-0.934-2.6-3.38v-1.879c0-2.444,1.016-3.378,2.6-3.38V158.353z"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" d="M25.798,169.093c0-0.045-0.015-0.089-0.044-0.133l-2.652-4.43
                                  c1.326-0.349,2.287-1.311,2.287-2.944v-0.101c0-2.158-1.483-2.99-3.496-3.117v1.197c1.44,0.1,2.186,0.624,2.186,1.92v0.101
                                  c0,1.396-0.766,1.905-2.186,2.007v1.496l2.403,4.004c0.117,0.188,0.205,0.188,0.379,0.188h0.932
                                  C25.724,169.281,25.798,169.193,25.798,169.093L25.798,169.093z M21.893,158.368c-0.189-0.013-0.385-0.016-0.583-0.016
                                  c-0.845,0-1.939,0.042-2.566,0.115c-0.261,0.03-0.349,0.118-0.349,0.321v10.199c0,0.16,0.118,0.292,0.262,0.292h0.787
                                  c0.161,0,0.262-0.144,0.262-0.292v-4.282c0.773,0.026,1.123,0.044,1.604,0.044c0.087,0,0.159,0,0.248,0c0.042,0,0.087,0,0.131,0
                                  l0.205,0.339v-1.496c-0.183,0.012-0.38,0.02-0.583,0.02c-0.336,0-0.963-0.016-1.604-0.029v-3.991
                                  c0.35-0.044,1.151-0.044,1.604-0.044c0.205,0,0.4,0.005,0.583,0.018V158.368z"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" d="M34.351,161.703v-0.188c0-2.127-1.411-2.998-3.431-3.143v1.128
                                  c1.433,0.125,2.105,0.723,2.105,2.015v0.188c0,1.341-0.591,1.995-2.105,2.129v1.112C32.94,164.797,34.351,163.908,34.351,161.703
                                  L34.351,161.703z M30.92,158.373c-0.21-0.015-0.427-0.021-0.649-0.021c-0.845,0-1.792,0.042-2.419,0.115
                                  c-0.218,0.03-0.349,0.162-0.349,0.365v10.155c0,0.16,0.116,0.292,0.263,0.292h0.786c0.16,0,0.262-0.144,0.262-0.292v-4.093
                                  c0.379,0.028,0.991,0.072,1.458,0.072c0.222,0,0.439-0.009,0.649-0.023v-1.112c-0.2,0.018-0.417,0.027-0.649,0.027
                                  c-0.379,0-1.122-0.044-1.458-0.059v-4.269c0.351-0.028,1.006-0.059,1.458-0.059c0.231,0,0.448,0.007,0.649,0.027V158.373z"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" d="M43.763,164.807v-1.879c0-3.235-1.646-4.575-3.933-4.575h-0.007
                                  v1.195h0.007c1.603,0,2.594,0.932,2.594,3.38v1.879c0,2.448-1.005,3.38-2.594,3.38h-0.007v1.197h0.007
                                  C42.117,169.384,43.763,168.042,43.763,164.807L43.763,164.807z M39.823,158.353c-2.284,0.003-3.942,1.345-3.942,4.575v1.879
                                  c0,3.232,1.658,4.573,3.942,4.577v-1.197c-1.598-0.003-2.602-0.934-2.602-3.38v-1.879c0-2.444,1.017-3.378,2.602-3.38V158.353z"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" d="M53.177,169.093c0-0.045-0.015-0.089-0.043-0.133l-2.653-4.43
                                  c1.327-0.349,2.288-1.311,2.288-2.944v-0.101c0-2.158-1.483-2.99-3.497-3.117v1.197c1.441,0.1,2.186,0.624,2.186,1.92v0.101
                                  c0,1.396-0.764,1.905-2.186,2.007v1.496l2.404,4.004c0.117,0.188,0.205,0.188,0.379,0.188h0.933
                                  C53.104,169.281,53.177,169.193,53.177,169.093L53.177,169.093z M49.271,158.368c-0.189-0.013-0.385-0.016-0.583-0.016
                                  c-0.845,0-1.938,0.042-2.564,0.115c-0.263,0.03-0.35,0.118-0.35,0.321v10.199c0,0.16,0.117,0.292,0.262,0.292h0.788
                                  c0.161,0,0.262-0.144,0.262-0.292v-4.282c0.772,0.026,1.122,0.044,1.603,0.044c0.087,0,0.161,0,0.248,0c0.043,0,0.087,0,0.131,0
                                  l0.204,0.339v-1.496c-0.183,0.012-0.377,0.02-0.583,0.02c-0.335,0-0.961-0.016-1.603-0.029v-3.991
                                  c0.35-0.044,1.152-0.044,1.603-0.044c0.205,0,0.4,0.005,0.583,0.018V158.368z"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" d="M62.544,169.048c0-0.029,0-0.073-0.012-0.104l-2.696-9.5
                                  c-0.248-0.888-0.934-1.092-1.472-1.092h-0.007v1.151h0.007c0.146,0,0.233,0.103,0.277,0.262l1.326,4.793h-1.61v1.153h1.888
                                  l0.947,3.351c0.029,0.115,0.117,0.218,0.248,0.218h0.859C62.458,169.281,62.544,169.178,62.544,169.048L62.544,169.048z
                                  M58.357,158.353c-0.552,0.003-1.234,0.221-1.479,1.106l-2.695,9.485c-0.015,0.03-0.015,0.074-0.015,0.104
                                  c0,0.13,0.101,0.232,0.247,0.232h0.86c0.116,0,0.233-0.103,0.262-0.218l0.934-3.351h1.886v-1.153h-1.61l1.326-4.793
                                  c0.042-0.156,0.13-0.258,0.284-0.262V158.353z"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" d="M71.056,159.359v-0.642c0-0.16-0.117-0.264-0.277-0.264h-7.01
                                  c-0.16,0-0.289,0.118-0.289,0.264v0.642c0,0.159,0.129,0.233,0.289,0.233h2.842v9.396c0,0.16,0.117,0.292,0.262,0.292h0.803
                                  c0.158,0,0.262-0.144,0.262-0.292v-9.396h2.842c0.16,0,0.275-0.088,0.275-0.233H71.056z"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" d="M74.173,168.989v-10.257c0-0.16-0.117-0.278-0.264-0.278h-0.801
                                  c-0.158,0-0.262,0.133-0.262,0.278v10.257c0,0.16,0.115,0.292,0.262,0.292h0.801C74.072,169.281,74.173,169.137,74.173,168.989
                                  L74.173,168.989z"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" d="M84.212,164.807v-1.879c0-3.235-1.645-4.575-3.934-4.575h-0.008
                                  v1.195h0.008c1.602,0,2.594,0.932,2.594,3.38v1.879c0,2.448-1.006,3.38-2.594,3.38h-0.008v1.197h0.008
                                  C82.568,169.384,84.212,168.042,84.212,164.807L84.212,164.807z M80.271,158.353c-2.283,0.003-3.939,1.345-3.939,4.575v1.879
                                  c0,3.232,1.656,4.573,3.939,4.577v-1.197c-1.598-0.003-2.6-0.934-2.6-3.38v-1.879c0-2.444,1.016-3.378,2.6-3.38V158.353z"/>
                            </g>
                            <path fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" d="M94.185,168.913v-10.128c0-0.145-0.102-0.278-0.262-0.278h-0.771
                                  c-0.146,0-0.264,0.134-0.264,0.278v8.524c0,0.015,0,0.044-0.014,0.044l-0.027-0.044l-4.477-8.511
                                  c-0.115-0.218-0.188-0.292-0.596-0.292h-0.803c-0.232,0-0.422,0.177-0.422,0.41v10.243c0,0.146,0.117,0.176,0.264,0.176h0.756
                                  c0.146,0,0.264-0.131,0.264-0.278v-8.51c0-0.029,0-0.044,0.014-0.044c0.016,0,0.029,0.015,0.043,0.044l4.502,8.554
                                  c0.074,0.145,0.234,0.234,0.467,0.234h0.904C93.995,169.336,94.185,169.146,94.185,168.913L94.185,168.913z"/>
                            </g>


                            </svg>
                        </div >
                        <div  class="home_logo1">


                            <svg  class="Default_LineArtDrawingWrapper" id="LogoLineArtBoxSVG" viewBox="0 0 122 169" preserveAspectRatio="xMinYMin meet" >
                            </svg>
                        </div>
                        <div  class="div_home_paragraph" >
                            <p class="home_paragragh">
                                MDC Concepts offers a complete range of WEB & DIGITAL marketing solution like website development,Search Engine Optimization(SEO),Mobile Application Development, Social Media Marketing,Brand Building,Content Creation and much more.   
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
       
        <!-- Line Art Scripts for logo-->
        <script src="common/js/logoLIneArtDrawing.js" type="text/javascript"></script>

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

        </script>    -->



    </body>
</html>
