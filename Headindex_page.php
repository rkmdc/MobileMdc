
        <meta charset="utf-8">
        <title>MDC Conepts</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1,  minimum-scale=1, maximum-scale=1">

        <link rel="stylesheet" href="common/css/app.css">
        <link rel="stylesheet" href="common/css/reset.css">
        <link rel="stylesheet" href="common/css/home.css">

        <script src="common/js/jQuery2.0.2.min.js"></script>
        <script src="common/js/src/main.js"></script>
        <script src="common/js/jquery.nicescroll.min.js"></script>
        <script src="common/js/d3.v3.min.js"></script>

        <script type="text/javascript">
            var width;
            var height;
            $(document).ready(function() {
                height = $(window).height();
                width = $(window).width();

                var Current_height = $(window).height();
                $('#app_main_content').css("height", height - 20 + "px");

            });

        </script>
        <script type="text/javascript" >

//            $(window).resize(function() {
//                var Current_width = $(window).width();
//
//                var Current_height = $(window).height();
//
//                console.log("current height =" + Current_height + " privieus heh" + height);
//                console.log("current height =" + Current_width + " privieus heh" + width);
//                if (Current_height === width || Current_width === height)
//                {
//                    location.reload();
//
//                }
//                width = Current_width;
//                height = Current_height;
//            })
            // Listen for orientation changes
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
