<footer class="footer">
			2016 &copy; Asthatrade Admin Powered by <a href="http://gfsindia.com/" target="_black">Greenfield Solutions</a>
		</footer>

	</div> <!-- /wrapper -->


	<script type="text/javascript" src="<?php echo base_url(); ?>content/admin/js/prefixfree.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>content/admin/js/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>content/admin/js/jquery-ui.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>content/admin/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>content/admin/js/excanvas.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>content/admin/js/jquery.flot.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>content/admin/js/jquery.flot.resize.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>content/admin/js/jquery.sparkline.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>content/admin/js/jquery.hashchange.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>content/admin/js/jquery.easytabs.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>content/admin/js/toastr.min.js"></script>

	<script type="text/javascript">

		$(window).load(function(){
			$('#loading').fadeOut(1000);

			toastr.options = {
			  "closeButton": true,
			  "debug": false,
			  "positionClass": "toast-bottom-right",
			  "onclick": null,
			  "showDuration": "300",
			  "hideDuration": "1000",
			  "timeOut": "5000",
			  "extendedTimeOut": "1000",
			  "showEasing": "swing",
			  "hideEasing": "linear",
			  "showMethod": "fadeIn",
			  "hideMethod": "fadeOut"
			}
			/*setTimeout(function(){
				toastr.info('<span style="color:#333;">Welcome to Liberator! The new clean Admin Template.</span>');	
			},2000) ;
			
			setTimeout(function(){
				toastr.warning('<span style="color:#333;">You could navigate the different sections to discover it...</span>');	
			},4500) ;*/

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


		    // -------------------------- jQueryUI SLIDERS -----------------------------//

		    $('.slider').slider();

		    $('.slider.range-min').slider({
				range: "min",
				slide: function( event, ui ) {
			        $('.slider.range-min > a.ui-slider-handle').html("<div class='range-tooltip'>$ " + ui.value + "</div>")
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
	</script>
</body>
</html>