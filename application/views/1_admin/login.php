<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asthtrade - Admin ! Login</title>
    
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url(); ?>content/admin/apple-touch-icon-ipad-retina.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url(); ?>content/admin/apple-touch-icon-iphone-retina.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url(); ?>content/admin/apple-touch-icon-ipad.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url(); ?>content/admin/apple-touch-icon-iphone.png" />
    <link rel="icon" href="<?php echo base_url(); ?>content/images/favicon.png" type="image/png" sizes="16x16">

    <!-- bootstrap -->
    <link href="<?php echo base_url(); ?>content/admin/css/bootstrap/bootstrap.css" rel="stylesheet" />
    
    <link rel="stylesheet" href="<?php echo base_url(); ?>content/admin/css/font-awesome-4.0.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>content/admin/css/jquery-ui.css" />

    <link href="<?php echo base_url(); ?>content/admin/css/style.css" rel="stylesheet" type="text/css" />

    
</head>
<body>

    <div id="loading">
        <div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>


        <div id="content" class="c-login clearfix">

            <div class="header">
                    <a href="javascript:void(0);"><img src="<?php echo base_url(); ?>content/images/logo.png"></a>
            </div> <!-- /header -->

            <div class="breadcrumbs">
                <i class="fa fa-key"></i> Login
            </div>

            
            <div class="widget-content">
                <input type="text" name="email" id="email" placeholder="Email">
                <input type="password" name="password" id="password" placeholder="Password">
                <a href="javascript:void(0);" class="btn btn-blue pull-right" type="button" onclick="login();">Login</a>
            </div>
            

            

        </div> <!-- /content -->
        <footer class="footer">
            2016 &copy; Asthatrade Admin Powered by <a href="http://www.gfsindia.com/" target="_black">Greenfield Solutions</a>
        </footer>

    </div> <!-- /wrapper -->


    <script type="text/javascript" src="<?php echo base_url(); ?>content/admin/js/prefixfree.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>content/admin/js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>content/admin/js/jquery-ui.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>content/admin/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>content/admin/js/excanvas.min.js"></script>
    
    <script type="text/javascript" src="<?php echo base_url(); ?>content/admin/js/jquery.flot.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>content/admin/js/jquery.flot.resize.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>content/admin/js/jquery.flot.categories.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>content/admin/js/jquery.flot.fillbetween.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>content/admin/js/jquery.flot.stack.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>content/admin/js/jquery.flot.crosshair.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>content/admin/js/jquery.sparkline.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>content/admin/js/jquery.hashchange.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>content/admin/js/jquery.easytabs.min.js"></script>

    <script type="text/javascript">

        $(window).load(function(){
            $('#loading').fadeOut(1000);

        // $(document).ready(function(){

            $('.collapsible > a').click(function(){
                $(this).parent().toggleClass('open');
                if( $(this).parent().siblings().hasClass('open') ){
                    $(this).parent().siblings().removeClass('open');
                }
            return false;
            }) // Collapsible


            // -------------------------- SPARKLINE miniCHARTS -----------------------------//

            $("#stats_visits").sparkline('html',{
                type: 'pie',
                sliceColors: ['#499ac7','transparent'],
                offset:-90,
                tooltipClassname:'tooltip-sp',
                disableHighlight:true
            });
            $("#stats_users").sparkline('html',{
                type: 'pie',
                sliceColors: ['#37343b','transparent'],
                offset:-90,
                tooltipClassname:'tooltip-sp',
                disableHighlight:true 
            });
            $("#stats_orders").sparkline('html',{
                type: 'pie',
                sliceColors: ['#83a854','transparent'],
                offset:-90,
                tooltipClassname:'tooltip-sp',
                disableHighlight:true
            });


            $('#sts_1').sparkline('html', { 
                type: 'bar',
                chartRangeMin: 0,
                height: '40px',
                barWidth: '5px',
                barColor: '#8fd7d4',
                tooltipClassname:'tooltip-sp'
            });
            
            $('#sts_2').sparkline('html', { 
                height: '40px',                
                tooltipClassname:'tooltip-sp',
                lineColor:'#7a706e',
                fillColor:'#8fd7d4'
            });

            $('#sts_3').sparkline('html', { 
                type: 'tristate',
                height: '40px',                
                tooltipClassname:'tooltip-sp',
                posBarColor:'#b6d88d',
                negBarColor:'#e86f56',
                zerosBarColor:'#7a706e'
            });

            $('#sts_4').sparkline('html', { 
                type: 'discrete',
                height: '40px',                
                tooltipClassname:'tooltip-sp',
                lineColor:'#0088cc'
            });

            $('#sts_5').sparkline('html', { 
                type: 'bullet',
                height: '40px',                
                tooltipClassname:'tooltip-sp',
                targetColor:'#e86f56'
            });

            $('#sts_6').sparkline('html', { 
                type: 'pie',
                height: '40px',                
                tooltipClassname:'tooltip-sp',
                targetColor:'#e86f56'
            });
            
            // -------------------------- FLOT CHARTS -----------------------------//

            var sin = [], cos = [];
            for (var i = 0; i < 20; i += 0.5) {
                sin.push([i, Math.sin(i-1.5)]);
                cos.push([i, Math.cos(i+1.6)]);
            }

            var sin2 = [], cos2 = [];
            for (var i = 0; i < 40; i += 0.7) {
                sin2.push([i, Math.sin(i-0.23) - 0.1]);
                cos2.push([i, Math.cos(i+0.80)]);
            }

            var sin3 = [], cos3 = [];
            for (var i = 0; i < 74; i += 0.7) {
                sin3.push([i, Math.sin(i-0.23) - 0.1]);
                cos3.push([i, Math.cos(i+0.80)]);
            }

            // Chart Month
            var plot = $.plot($("#chart-month"),
                   [ { data: sin, label: "sin(x)"}, { data: cos, label: "cos(x)" } ], {
                       series: {
                           lines: { show: true },
                           points: { show: true }
                       },
                       grid: { hoverable: true, clickable: true },
                       yaxis: { min: -1.1, max: 1.1 },
                       xaxis: { min: 0, max: 14 },
                       legend: {
                            show: true,
                            // margin: number of pixels or [x margin, y margin]
                            //container: '.cLegend'
                            // sorted: null/false, true, "ascending", "descending", "reverse", or a comparator
                        },
                        colors: [ '#52aed3', '#83a854' ]
                     });

            // Chart Week
             var plot = $.plot($("#chart-week"),
                   [ { data: sin2, label: "sin(x)"}, { data: cos2, label: "cos(x)" } ], {
                       series: {
                           lines: { show: true },
                           points: { show: true }
                       },
                       grid: { hoverable: true, clickable: true },
                       yaxis: { min: -1.1, max: 1.1 },
                       xaxis: { min: 0, max: 14 },
                       legend: {
                            show: true,
                            // margin: number of pixels or [x margin, y margin]
                            //container: '.cLegend'
                            // sorted: null/false, true, "ascending", "descending", "reverse", or a comparator
                        },
                        colors: [ '#52aed3', '#83a854' ]
                     });

             // Chart Day
             var plot = $.plot($("#chart-day"),
                   [ { data: sin3, label: "sin(x)"}, { data: cos3, label: "cos(x)" } ], {
                       series: {
                           lines: { show: true },
                           points: { show: true }
                       },
                       grid: { hoverable: true, clickable: true },
                       yaxis: { min: -1.1, max: 1.1 },
                       xaxis: { min: 0, max: 74 },
                       legend: {
                            show: true,
                            // margin: number of pixels or [x margin, y margin]
                            //container: '.cLegend'
                            // sorted: null/false, true, "ascending", "descending", "reverse", or a comparator
                        },
                        colors: [ '#52aed3', '#83a854' ]
                     });


            function showTooltip(x, y, contents) {
                $('<div id="chart-tooltip" class="chart-tooltip">' + contents + '</div>').css( {
                    position: 'absolute',
                    display: 'none',
                    top: y + 5,
                    left: x + 5,
                    'z-index': '9999',
                    'color': '#fff',
                    'font-size': '11px',
                    opacity: 0.8
                }).appendTo("body").fadeIn(200);
            }

            var previousPoint = null;
            $(".chart").bind("plothover", function (event, pos, item) {
                $("#x").text(pos.x.toFixed(2));
                $("#y").text(pos.y.toFixed(2));

                if ($(".chart").length > 0) {
                    if (item) {
                        if (previousPoint != item.dataIndex) {
                            previousPoint = item.dataIndex;
                            
                            $("#chart-tooltip").remove();
                            var x = item.datapoint[0].toFixed(2),
                                y = item.datapoint[1].toFixed(2);
                            
                            showTooltip(item.pageX, item.pageY,
                                        item.series.label + " of " + x + " = " + y);
                        }
                    }
                    else {
                        $("#chart-tooltip").remove();
                        previousPoint = null;            
                    }
                }
            });

            $(".chart").bind("plotclick", function (event, pos, item) {
                if (item) {
                    $("#clickdata").text("You clicked point " + item.dataIndex + " in " + item.series.label + ".");
                    plot.highlight(item.series, item.datapoint);
                }
            });




            // Chart 2
            var data = [ ["January", 10], ["February", 8], ["March", 4], ["April", 13], ["May", 17], ["June", 9] ];
            $.plot("#chart-2", [ data ], {
                series: {
                    bars: {
                        show: true,
                        barWidth: 0.6,
                        align: "center"
                    }
                },
                xaxis: {
                    mode: "categories",
                    tickLength: 0
                }
            });

            // Chart 3
            var males = {"15%": [[2, 88.0], [3, 93.3], [4, 102.0], [5, 108.5], [6, 115.7], [7, 115.6], [8, 124.6], [9, 130.3], [10, 134.3], [11, 141.4], [12, 146.5], [13, 151.7], [14, 159.9], [15, 165.4], [16, 167.8], [17, 168.7], [18, 169.5], [19, 168.0]], "90%": [[2, 96.8], [3, 105.2], [4, 113.9], [5, 120.8], [6, 127.0], [7, 133.1], [8, 139.1], [9, 143.9], [10, 151.3], [11, 161.1], [12, 164.8], [13, 173.5], [14, 179.0], [15, 182.0], [16, 186.9], [17, 185.2], [18, 186.3], [19, 186.6]], "25%": [[2, 89.2], [3, 94.9], [4, 104.4], [5, 111.4], [6, 117.5], [7, 120.2], [8, 127.1], [9, 132.9], [10, 136.8], [11, 144.4], [12, 149.5], [13, 154.1], [14, 163.1], [15, 169.2], [16, 170.4], [17, 171.2], [18, 172.4], [19, 170.8]], "10%": [[2, 86.9], [3, 92.6], [4, 99.9], [5, 107.0], [6, 114.0], [7, 113.5], [8, 123.6], [9, 129.2], [10, 133.0], [11, 140.6], [12, 145.2], [13, 149.7], [14, 158.4], [15, 163.5], [16, 166.9], [17, 167.5], [18, 167.1], [19, 165.3]], "mean": [[2, 91.9], [3, 98.5], [4, 107.1], [5, 114.4], [6, 120.6], [7, 124.7], [8, 131.1], [9, 136.8], [10, 142.3], [11, 150.0], [12, 154.7], [13, 161.9], [14, 168.7], [15, 173.6], [16, 175.9], [17, 176.6], [18, 176.8], [19, 176.7]], "75%": [[2, 94.5], [3, 102.1], [4, 110.8], [5, 117.9], [6, 124.0], [7, 129.3], [8, 134.6], [9, 141.4], [10, 147.0], [11, 156.1], [12, 160.3], [13, 168.3], [14, 174.7], [15, 178.0], [16, 180.2], [17, 181.7], [18, 181.3], [19, 182.5]], "85%": [[2, 96.2], [3, 103.8], [4, 111.8], [5, 119.6], [6, 125.6], [7, 131.5], [8, 138.0], [9, 143.3], [10, 149.3], [11, 159.8], [12, 162.5], [13, 171.3], [14, 177.5], [15, 180.2], [16, 183.8], [17, 183.4], [18, 183.5], [19, 185.5]], "50%": [[2, 91.9], [3, 98.2], [4, 106.8], [5, 114.6], [6, 120.8], [7, 125.2], [8, 130.3], [9, 137.1], [10, 141.5], [11, 149.4], [12, 153.9], [13, 162.2], [14, 169.0], [15, 174.8], [16, 176.0], [17, 176.8], [18, 176.4], [19, 177.4]]};

            var females = {"15%": [[2, 84.8], [3, 93.7], [4, 100.6], [5, 105.8], [6, 113.3], [7, 119.3], [8, 124.3], [9, 131.4], [10, 136.9], [11, 143.8], [12, 149.4], [13, 151.2], [14, 152.3], [15, 155.9], [16, 154.7], [17, 157.0], [18, 156.1], [19, 155.4]], "90%": [[2, 95.6], [3, 104.1], [4, 111.9], [5, 119.6], [6, 127.6], [7, 133.1], [8, 138.7], [9, 147.1], [10, 152.8], [11, 161.3], [12, 166.6], [13, 167.9], [14, 169.3], [15, 170.1], [16, 172.4], [17, 169.2], [18, 171.1], [19, 172.4]], "25%": [[2, 87.2], [3, 95.9], [4, 101.9], [5, 107.4], [6, 114.8], [7, 121.4], [8, 126.8], [9, 133.4], [10, 138.6], [11, 146.2], [12, 152.0], [13, 153.8], [14, 155.7], [15, 158.4], [16, 157.0], [17, 158.5], [18, 158.4], [19, 158.1]], "10%": [[2, 84.0], [3, 91.9], [4, 99.2], [5, 105.2], [6, 112.7], [7, 118.0], [8, 123.3], [9, 130.2], [10, 135.0], [11, 141.1], [12, 148.3], [13, 150.0], [14, 150.7], [15, 154.3], [16, 153.6], [17, 155.6], [18, 154.7], [19, 153.1]], "mean": [[2, 90.2], [3, 98.3], [4, 105.2], [5, 112.2], [6, 119.0], [7, 125.8], [8, 131.3], [9, 138.6], [10, 144.2], [11, 151.3], [12, 156.7], [13, 158.6], [14, 160.5], [15, 162.1], [16, 162.9], [17, 162.2], [18, 163.0], [19, 163.1]], "75%": [[2, 93.2], [3, 101.5], [4, 107.9], [5, 116.6], [6, 122.8], [7, 129.3], [8, 135.2], [9, 143.7], [10, 148.7], [11, 156.9], [12, 160.8], [13, 163.0], [14, 165.0], [15, 165.8], [16, 168.7], [17, 166.2], [18, 167.6], [19, 168.0]], "85%": [[2, 94.5], [3, 102.8], [4, 110.4], [5, 119.0], [6, 125.7], [7, 131.5], [8, 137.9], [9, 146.0], [10, 151.3], [11, 159.9], [12, 164.0], [13, 166.5], [14, 167.5], [15, 168.5], [16, 171.5], [17, 168.0], [18, 169.8], [19, 170.3]], "50%": [[2, 90.2], [3, 98.1], [4, 105.2], [5, 111.7], [6, 118.2], [7, 125.6], [8, 130.5], [9, 138.3], [10, 143.7], [11, 151.4], [12, 156.7], [13, 157.7], [14, 161.0], [15, 162.0], [16, 162.8], [17, 162.2], [18, 162.8], [19, 163.3]]};

            var dataset = [
                { label: "Female", data: females["mean"], lines: { show: true }, color: "rgb(255,50,50)" },
                { id: "f15%", data: females["15%"], lines: { show: true, lineWidth: 0, fill: false }, color: "rgb(255,50,50)" },
                { id: "f25%", data: females["25%"], lines: { show: true, lineWidth: 0, fill: 0.2 }, color: "rgb(255,50,50)", fillBetween: "f15%" },
                { id: "f50%", data: females["50%"], lines: { show: true, lineWidth: 0.5, fill: 0.4, shadowSize: 0 }, color: "rgb(255,50,50)", fillBetween: "f25%" },
                { id: "f75%", data: females["75%"], lines: { show: true, lineWidth: 0, fill: 0.4 }, color: "rgb(255,50,50)", fillBetween: "f50%" },
                { id: "f85%", data: females["85%"], lines: { show: true, lineWidth: 0, fill: 0.2 }, color: "rgb(255,50,50)", fillBetween: "f75%" },

                { label: "Male", data: males["mean"], lines: { show: true }, color: "rgb(50,50,255)" },
                { id: "m15%", data: males["15%"], lines: { show: true, lineWidth: 0, fill: false }, color: "rgb(50,50,255)" },
                { id: "m25%", data: males["25%"], lines: { show: true, lineWidth: 0, fill: 0.2 }, color: "rgb(50,50,255)", fillBetween: "m15%" },
                { id: "m50%", data: males["50%"], lines: { show: true, lineWidth: 0.5, fill: 0.4, shadowSize: 0 }, color: "rgb(50,50,255)", fillBetween: "m25%" },
                { id: "m75%", data: males["75%"], lines: { show: true, lineWidth: 0, fill: 0.4 }, color: "rgb(50,50,255)", fillBetween: "m50%" },
                { id: "m85%", data: males["85%"], lines: { show: true, lineWidth: 0, fill: 0.2 }, color: "rgb(50,50,255)", fillBetween: "m75%" }
            ];

            $.plot($("#chart-3"), dataset, {
                xaxis: {
                    tickDecimals: 0
                },
                yaxis: {
                    tickFormatter: function (v) {
                        return v + " cm";
                    }
                },
                legend: {
                    position: "ne"
                }
            });

            // Chart 4

            var d1 = [];
            for (var i = 0; i <= 10; i += 1) {
                d1.push([i, parseInt(Math.random() * 30)]);
            }

            var d2 = [];
            for (var i = 0; i <= 10; i += 1) {
                d2.push([i, parseInt(Math.random() * 30)]);
            }

            var d3 = [];
            for (var i = 0; i <= 10; i += 1) {
                d3.push([i, parseInt(Math.random() * 30)]);
            }

            var stack = 0,
                bars = true,
                lines = false,
                steps = false;

            function plotWithOptions() {
                $.plot("#chart-4", [ d1, d2, d3 ], {
                    series: {
                        stack: stack,
                        lines: {
                            show: lines,
                            fill: true,
                            steps: steps
                        },
                        bars: {
                            show: bars,
                            barWidth: 0.6
                        }
                    }
                });
            }

            plotWithOptions();


            // Chart 5

            var sin = [], cos = [];
            for (var i = 0; i < 14; i += 0.1) {
                sin.push([i, Math.sin(i)]);
                cos.push([i, Math.cos(i)]);
            }

            plot = $.plot("#chart-5", [
                { data: sin, label: "sin(x) = -0.00"},
                { data: cos, label: "cos(x) = -0.00" }
            ], {
                series: {
                    lines: {
                        show: true
                    }
                },
                crosshair: {
                    mode: "x"
                },
                grid: {
                    hoverable: true,
                    autoHighlight: false
                },
                yaxis: {
                    min: -1.2,
                    max: 1.2
                }
            });

            var legends = $("#chart-5 .legendLabel");

            legends.each(function () {
                // fix the widths so they don't jump around
                $(this).css('width', $(this).width());
            });

            var updateLegendTimeout = null;
            var latestPosition = null;

            function updateLegend() {

                updateLegendTimeout = null;

                var pos = latestPosition;

                var axes = plot.getAxes();
                if (pos.x < axes.xaxis.min || pos.x > axes.xaxis.max ||
                    pos.y < axes.yaxis.min || pos.y > axes.yaxis.max) {
                    return;
                }

                var i, j, dataset = plot.getData();
                for (i = 0; i < dataset.length; ++i) {

                    var series = dataset[i];

                    // Find the nearest points, x-wise

                    for (j = 0; j < series.data.length; ++j) {
                        if (series.data[j][0] > pos.x) {
                            break;
                        }
                    }

                    // Now Interpolate

                    var y,
                        p1 = series.data[j - 1],
                        p2 = series.data[j];

                    if (p1 == null) {
                        y = p2[1];
                    } else if (p2 == null) {
                        y = p1[1];
                    } else {
                        y = p1[1] + (p2[1] - p1[1]) * (pos.x - p1[0]) / (p2[0] - p1[0]);
                    }

                    legends.eq(i).text(series.label.replace(/=.*/, "= " + y.toFixed(2)));
                }
            }

            $("#chart-5").bind("plothover",  function (event, pos, item) {
                latestPosition = pos;
                if (!updateLegendTimeout) {
                    updateLegendTimeout = setTimeout(updateLegend, 50);
                }
            });





            // -------------------------- jQueryUI SLIDERS -----------------------------//

            $('.slider').slider();

            $('.slider.range-min').slider({
                range: "min",
                slide: function( event, ui ) {
                    $('.slider.range-min > a.ui-slider-handle').html("<div class='range-tooltip'>$ " + $(".slider.range-min").slider("value") + "</div>")
                  },
                stop: function( event, ui ) {
                    $('.range-tooltip').delay(1000).fadeOut();
                }
            });

            $('.slider.range-min').on( "slide", function( event, ui ) {
                if($(this).slider('value') > 5){
                    $('.slider.range-min > a.ui-slider-handle').addClass('color');
                } else {
                    $('.slider.range-min > a.ui-slider-handle').removeClass('color');
                }
            } );

            $('.slider.range').slider({
                range: true,
                max: 750,
                values: [ 75, 300 ],
                slide: function( event, ui ) {
                    var handleIndex = $(ui.handle).index(); // left:0 - right:2
                    if( handleIndex == 0 ){
                        $(ui.handle).html("<div class='range-tooltip'>$ " + ui.values[0] + "</div>");
                    } else if( handleIndex == 2 ){
                        $(ui.handle).html("<div class='range-tooltip'>$ " + ui.values[1] + "</div>");
                    }
                  },
                stop: function( event, ui ) {
                    $('.range-tooltip').delay(1000).fadeOut();
                }
            });

            // Iteration to set the default value of Vertical Sliders

            $('.slider.vertical').each(function(){
                $(this).slider({
                orientation: "vertical",
                  range: "min",
                  min: 0,
                  max: 100,
                  value: $(this).attr('data-vY')
                })    
            })
            
            $('.progressbar').each(function(){
                var v = parseInt($(this).attr('value'));
                $(this).progressbar({
                  value: v
                })
            })

            $('.progressbar > .ui-progressbar-value').hover(function(){
                $(this).html("<div class='progress-tooltip'>" + $(this).parent().progressbar('value') + " %</div>");
                $('.progress-tooltip').delay(2000).fadeOut()
            })

            // eTabs
            $('#eTabs').easytabs();

            // Mobile Nav
            $('.m-nav').click(function(){
                $('.main-nav').toggleClass('open');
            })

            // Quick Nav clicks
            $('.qn-arrow-left').click(function(){
                var sel = $('.quick-nav ul').find('.active');
                if( sel.hasClass('qn-first') ){
                    sel.removeClass('active');
                    sel.parent().find('.qn-last').addClass('active');
                } else {
                    sel.removeClass('active').prev().addClass('active');
                }
            })
            $('.qn-arrow-right').click(function(){
                var sel = $('.quick-nav ul').find('.active');
                if( sel.hasClass('qn-last') ){
                    sel.removeClass('active');
                    sel.parent().find('.qn-first').addClass('active');
                } else {
                    sel.removeClass('active').next().addClass('active');
                }
            })

            

        }) // Ready.
        
        function login(){
            var email = $('#email').val();
            var password = $('#password').val();
            $.ajax({
                url:'loginUser',
                data:{'email':email,'password':password},
                type:'POST',
                dataType: 'html',
                //processData: false,
                //contentType: false,
                cache: false,
                async : true,
                success : function(data){
                    if(data==1){
                        window.location.href = "<?php echo base_url(); ?>admin/dashboard";    
                    } else {
                        alert('err');
                    }
                
                },
                error : function(data){
                    alert('error occured.');
                }
            });
        }
        
    </script>
</body>
</html>