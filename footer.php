	<div class="kingster-copyright-wrapper">
					<div class="kingster-copyright-container kingster-container clearfix">
						<div class="kingster-copyright-left kingster-item-pdlr">Department of Mathematics</div>
						<div class="kingster-copyright-right kingster-item-pdlr">
							<!--<div class="gdlr-core-social-network-item gdlr-core-item-pdb  gdlr-core-none-align" style="padding-bottom: 0px ;">
								<a href="#" target="_blank" class="gdlr-core-social-network-icon" title="facebook">
									<i class="fa fa-facebook" ></i>
								</a>
								<a href="#" target="_blank" class="gdlr-core-social-network-icon" title="google-plus">
									<i class="fa fa-google-plus" ></i>
								</a>
								<a href="#" target="_blank" class="gdlr-core-social-network-icon" title="linkedin">
									<i class="fa fa-linkedin" ></i>
								</a>
								<a href="#" target="_blank" class="gdlr-core-social-network-icon" title="skype">
									<i class="fa fa-skype" ></i>
								</a>
								<a href="#" target="_blank" class="gdlr-core-social-network-icon" title="twitter">
									<i class="fa fa-twitter" ></i>
								</a>
								<a href="#" target="_blank" class="gdlr-core-social-network-icon" title="instagram">
									<i class="fa fa-instagram" ></i>
								</a>
							</div>-->
						</div>
					</div>
				</div>
            </footer>
        </div>
    </div>
<script type='text/javascript' src='js/jquery/jquery.js'></script>
    <script type='text/javascript' src='js/jquery/jquery-migrate.min.js'></script>
    <script type='text/javascript' src='plugins/revslider/public/assets/js/jquery.themepunch.tools.min.js'></script>
    <script type='text/javascript' src='plugins/revslider/public/assets/js/jquery.themepunch.revolution.min.js'></script>
    <script type="text/javascript" src="plugins/revslider/public/assets/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="plugins/revslider/public/assets/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="plugins/revslider/public/assets/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script type="text/javascript" src="plugins/revslider/public/assets/js/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="plugins/revslider/public/assets/js/extensions/revolution.extension.parallax.min.js"></script>  
    <script type="text/javascript" src="plugins/revslider/public/assets/js/extensions/revolution.extension.actions.min.js"></script> 
    <script type="text/javascript" src="plugins/revslider/public/assets/js/extensions/revolution.extension.video.min.js"></script>

    <script type="text/javascript">
        /*<![CDATA[*/
        function setREVStartSize(e) {
            try {
                e.c = jQuery(e.c);
                var i = jQuery(window).width(),
                    t = 9999,
                    r = 0,
                    n = 0,
                    l = 0,
                    f = 0,
                    s = 0,
                    h = 0;
                if (e.responsiveLevels && (jQuery.each(e.responsiveLevels, function(e, f) {
                        f > i && (t = r = f, l = e), i > f && f > r && (r = f, n = e)
                    }), t > r && (l = n)), f = e.gridheight[l] || e.gridheight[0] || e.gridheight, s = e.gridwidth[l] || e.gridwidth[0] || e.gridwidth, h = i / s, h = h > 1 ? 1 : h, f = Math.round(h * f), "fullscreen" == e.sliderLayout) {
                    var u = (e.c.width(), jQuery(window).height());
                    if (void 0 != e.fullScreenOffsetContainer) {
                        var c = e.fullScreenOffsetContainer.split(",");
                        if (c) jQuery.each(c, function(e, i) {
                            u = jQuery(i).length > 0 ? u - jQuery(i).outerHeight(!0) : u
                        }), e.fullScreenOffset.split("%").length > 1 && void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 ? u -= jQuery(window).height() * parseInt(e.fullScreenOffset, 0) / 100 : void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 && (u -= parseInt(e.fullScreenOffset, 0))
                    }
                    f = u
                } else void 0 != e.minHeight && f < e.minHeight && (f = e.minHeight);
                e.c.closest(".rev_slider_wrapper").css({
                    height: f
                })
            } catch (d) {
                console.log("Failure at Presize of Slider:" + d)
            }
        }; /*]]>*/
    </script>


    <script type="text/javascript">
        /*<![CDATA[*/
        function revslider_showDoubleJqueryError(sliderID) {
            var errorMessage = "Revolution Slider Error: You have some jquery.js library include that comes after the revolution files js include.";
            errorMessage += "<br> This includes make eliminates the revolution slider libraries, and make it not work.";
            errorMessage += "<br><br> To fix it you can:<br>&nbsp;&nbsp;&nbsp; 1. In the Slider Settings -> Troubleshooting set option:  <strong><b>Put JS Includes To Body</b></strong> option to true.";
            errorMessage += "<br>&nbsp;&nbsp;&nbsp; 2. Find the double jquery.js include and remove it.";
            errorMessage = "<span style='font-size:16px;color:#BC0C06;'>" + errorMessage + "</span>";
            jQuery(sliderID).show().php(errorMessage);
        } /*]]>*/
    </script>

    <script type='text/javascript' src='plugins/goodlayers-core/plugins/combine/script.js'></script>
 
    <script type='text/javascript' src='plugins/goodlayers-core/include/js/page-builder.js'></script>



    <script type='text/javascript' src='js/jquery/ui/effect.min.js'></script>
    <script type='text/javascript'>
        var kingster_script_core = {
            "home_url": "https:\/\/demo.goodlayers.com\/kingster\/"
        };
    </script>
    <script type='text/javascript' src='js/plugins.min.js'></script>

	<script type="text/javascript">
	    /*<![CDATA[*/
	    if (setREVStartSize !== undefined) setREVStartSize({
	        c: '#rev_slider_1_1',
	        gridwidth: [1380],
	        gridheight: [713],
	        sliderLayout: 'auto'
	    });
	    var revapi1, tpj;
	    (function() {
	        if (!/loaded|interactive|complete/.test(document.readyState)) document.addEventListener("DOMContentLoaded", onLoad);
	        else onLoad();

	        function onLoad() {
	            if (tpj === undefined) {
	                tpj = jQuery;
	                if ("off" == "on") tpj.noConflict();
	            }
	            if (tpj("#rev_slider_1_1").revolution == undefined) {
	                revslider_showDoubleJqueryError("#rev_slider_1_1");
	            } else {
	                revapi1 = tpj("#rev_slider_1_1").show().revolution({
	                    sliderType: "standard",
	                    jsFileLocation: "//demo.goodlayers.com/kingster/wp-content/plugins/revslider/public/assets/js/",
	                    sliderLayout: "auto",
	                    dottedOverlay: "none",
	                    delay: 9000,
	                    navigation: {
	                        keyboardNavigation: "off",
	                        keyboard_direction: "horizontal",
	                        mouseScrollNavigation: "off",
	                        mouseScrollReverse: "default",
	                        onHoverStop: "off",
	                        touch: {
	                            touchenabled: "on",
	                            touchOnDesktop: "off",
	                            swipe_threshold: 75,
	                            swipe_min_touches: 1,
	                            swipe_direction: "horizontal",
	                            drag_block_vertical: false
	                        },
	                        arrows: {
	                            style: "uranus",
	                            enable: true,
	                            hide_onmobile: true,
	                            hide_under: 1500,
	                            hide_onleave: true,
	                            hide_delay: 200,
	                            hide_delay_mobile: 1200,
	                            tmp: '',
	                            left: {
	                                h_align: "left",
	                                v_align: "center",
	                                h_offset: 20,
	                                v_offset: 0
	                            },
	                            right: {
	                                h_align: "right",
	                                v_align: "center",
	                                h_offset: 20,
	                                v_offset: 0
	                            }
	                        },
	                        bullets: {
	                            enable: true,
	                            hide_onmobile: false,
	                            hide_over: 1499,
	                            style: "uranus",
	                            hide_onleave: true,
	                            hide_delay: 200,
	                            hide_delay_mobile: 1200,
	                            direction: "horizontal",
	                            h_align: "center",
	                            v_align: "bottom",
	                            h_offset: 0,
	                            v_offset: 30,
	                            space: 7,
	                            tmp: '<span class="tp-bullet-inner"></span>'
	                        }
	                    },
	                    visibilityLevels: [1240, 1024, 778, 480],
	                    gridwidth: 1380,
	                    gridheight: 713,
	                    lazyType: "none",
	                    shadow: 0,
	                    spinner: "off",
	                    stopLoop: "off",
	                    stopAfterLoops: -1,
	                    stopAtSlide: -1,
	                    shuffle: "off",
	                    autoHeight: "off",
	                    disableProgressBar: "on",
	                    hideThumbsOnMobile: "off",
	                    hideSliderAtLimit: 0,
	                    hideCaptionAtLimit: 0,
	                    hideAllCaptionAtLilmit: 0,
	                    debugMode: false,
	                    fallbacks: {
	                        simplifyAll: "off",
	                        nextSlideOnWindowFocus: "off",
	                        disableFocusListener: false,
	                    }
	                });
	            };
	        };
	    }()); /*]]>*/
	</script>
	
</body>
</html>