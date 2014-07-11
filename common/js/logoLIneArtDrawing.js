/*  
 Document   : aboutLIneArtDrawing.js
 Created on : 17 Jan, 2014, 12:05:23 PM
 Last Update: 17 Jan, 2014, 12:05:23 PM
 Author     : CodeLord
 Description: This JS is used for line art drawing for Logo page.
 */


/**
 * This function is used for drawing Logo Line around canvase
 * @returns {undefined}
 */
function drawLineArtAroundCanvasInLogo()
{
    var svg = d3.select("#LogoLineArtBoxSVG");


    svg.append("path")
            .style("stroke", "#fff")
            .style("fill", "none")
            .style("stroke-width", "1.5px")
            .attr("d", "M5.507,107.409" +
                    "c-2.962-3.558-4.749-8.126-4.749-13.093V41.252c0-11.289,9.229-20.521,20.518-20.521l0,0h41.349v-6.954l8.813,8.79l9.057,9.042")
            .call(transition);


    svg.append("path")
            .style("stroke", "#fff")
            .style("fill", "none")
            .style("stroke-width", "1.5px")
            .attr("d", "M23.538,91.847" +
                    "c1.004,1.058,2.422,1.721,3.986,1.721h40.567c3.024,0,5.504-2.474,5.504-5.502V52.992h-6.958l8.793-8.813l9.076-9.029")
            .call(transition);
    svg.append("path")
            .style("stroke", "#fff")
            .style("fill", "none")
            .style("stroke-width", "1.5px")
            .attr("d", "M23.565,91.851c-0.964-0.776-1.574-2.504-1.566-3.761l0.014-40.582" +
                    "c0.011-3.034,2.482-5.513,5.512-5.513h35.102v6.953l8.813-8.792l9.053-9.035")
            .call(transition);


    svg.append("path")
            .style("stroke", "#fff")
            .style("fill", "none")
            .style("stroke-width", "1.5px")
            .attr("d", "M5.42,107.336c1.426,1.992,7.206,7.5,15.828,7.5" +
                    "h53.093c11.288,0,20.526-9.231,20.526-20.52V52.992h6.947l-8.791-8.814l-9.025-9.042")
            .call(transition);

    /**
     * This function is used for setting transiotion of line art.
     * @param {type} path
     * @returns {undefined}
     */
    function transition(path) {
        path.transition()
                .duration(2000)
                .ease("in-out")
                .attrTween("stroke-dasharray", tweenDash)
                .each("end", function() {
//                     d3.select(this).call();
//                    $('.Home_MDCCoorpLogo')
//                            .stop(true, true)
//                            .show("clip", {direction: "vertical"}, 800)
//                            .animate({opacity: 1}, {duration: 3000, queue: false});
                    $('.home_logo').animate({opacity: 1}, 1000);
                    $('#LogoLineArtBoxSVG').animate({opacity: 0}, 1000);
                    $('.div_home_paragraph').animate({opacity: 1}, 1000);



                });
    }

    /**
     * This function is used for line art for drawing line increasing one px at a pt
     * @returns {unresolved}
     */
    function tweenDash() {
        var l = this.getTotalLength(),
                i = d3.interpolateString("0," + l, l + "," + l);
        return function(t) {
            return i(t);
        };
    }

//    setTimeout(function() {
//        jQuery('#Home').addClass('show').removeClass('hide');
//    }, 14550);

}

$(window).load(function() {

    drawLineArtAroundCanvasInLogo();

});
