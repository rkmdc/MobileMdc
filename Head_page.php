
<meta charset="utf-8">
        <title>MDC Corporation</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1,  minimum-scale=1, maximum-scale=1">
        <link rel="stylesheet" href="common/css/app.css">
        <link rel="stylesheet" href="common/css/reset.css">
        <link rel="stylesheet" href="common/css/about.css">


        <script src="common/js/jQuery2.0.2.min.js"></script>
        <!--<script src="common/js/src/swipeview.js"></script>-->
        <script src="common/js/src/main.js"></script>
        <script src="common/js/jquery.nicescroll.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                var height = $(window).height();
                $('#app_main_content').css("height", height - 20 + "px");
                $(".menu").on("tap", function() {
//                    $(this).hide();
                });
//                $(window).resize(function() {
//                    var width = $(window).width();
//                    var height = $(window).height();
////            alert(height);
////                    document.getElementById('.app-content').style.height = height + "px";
//                    $('app_main_content').css("height", "300px");
////                    document.getElementById('left_Menu_Ul_styles').style.height = height - 90 + "px";
////                    document.getElementById('Right_Menu_Ul_styles').style.height = height - 65 + "px";
////
////                    document.getElementById('right-menu').style.height = height + "px";
//                });


            });

        </script>
        <script type="text/javascript" >

//            $(window).resize(function() {
//               location.reload();
//            })
            window.addEventListener("orientationchange", function() {
                // Announce the new orientation number
                //alert("alert");
                location.reload();
            }, false);
        </script>
        <script>
            $(document).ready(function() {

                $(".About_Text_wrapper").niceScroll({touchbehavior: true, cursorcolor: "#fff", cursoropacitymax: 0.7, cursorwidth: 4, cursorborder: "1px solid #2848BE", cursorborderradius: "8px"}); // MAC like scrollbar
                $(".main-left-menu").niceScroll({touchbehavior: true, cursorcolor: "#fff", cursoropacitymax: 0.7, cursorwidth: 4, cursorborder: "1px solid #2848BE", cursorborderradius: "8px"}); // MAC like scrollbar
                $(".main-right-menu").niceScroll({touchbehavior: true, cursorcolor: "#fff", cursoropacitymax: 0.7, cursorwidth: 4, cursorborder: "1px solid #2848BE", cursorborderradius: "8px"}); // MAC like scrollbar

            });
        </script>
     