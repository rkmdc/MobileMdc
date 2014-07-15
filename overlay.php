<div class="overlay"  style="position: absolute;height: 100%;width: 100%;background-color:rgb(255,255,255); overflow: none; z-index: 100;">
    <div class="load" style="display: block;margin: 0 auto;">
        <img id="loading_gif"  class="image" src="common/img/MDC_Band--Animation2.gif"  alt="gif file" style="width: 100%; margin-top: 50%; overflow: none; position: absolute;">
<!--        <img src="common/img/MDC_Band--07_1_00096.jpg" alt="gif image" style="width: 100%; position: absolute;top: 33%;
display: none;">-->

    </div>

</div>
<script>

    setTimeout(function() {
        $('#loading_gif').attr('src', 'common/img/MDC_Band--07_1_00096.jpg');
//        console.log($('#loading_gif').attr('src'));
    }, 4000);


    $(window).load(function() {
        $('.rightmenu_div').show();
        $('.overlay').fadeOut(500);

    });
</script>
