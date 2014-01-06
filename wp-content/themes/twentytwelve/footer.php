<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	
	</div><!-- #main .wrapper -->

	<footer id="colophon" role="contentinfo">
		<div class="sharing-icons">
			<!--<span class="share-this">Share this</span>
			 <div id="redessociales">
		          <a class="smedia facebook" title="Share on facebook" href="https://www.facebook.com/josernitos">Uno</a>
		          <a class="smedia twitter" title="Share on twitter" href="http://www.twitter.com/josernitos">Dos</a>
		          <a class="smedia gplus" title="Share on google" href="#">Tres</a>
			</div>
		    -->
		    <div id="social-icon-wrapper" style="display: none;">
    
				  <a id="twitter" class="social-icon" href="https://www.twitter.com/zessx">twitter</a>
				  
				  <a id="facebook" class="social-icon" href="https://www.facebook.com/marchal.samuel">facebook</a>
				 
				  <a id="google-plus" class="social-icon" href="http://www.linkedin.com/pub/samuel-marchal/26/a73/584">google</a>
				  
			</div>

			<div id="social-icon-sharer">
				<span id ="share-this">Share this</span>
				<img src="<?php bloginfo('url');?>/wp-content/themes/twentytwelve/images/share_01.gif"/>
			</div>
		</div>

		<div class="site-info">
			<!--Copyright Footer START-->
			<div id="copyright">
			    <div class="center">
			        <!--Site Copyright Text START-->
			        <div class="copytext">
					  <div class="iec-banners-holder">
			            
			            <span class="enca-image">
			                <a href="http://www.enca.com/coverage/2014-general-elections?gclid=CIr6g52AgrsCFVMPtAodVlUAmw" target="_blank"><img src="<?php bloginfo('url');?>/wp-content/uploads/2013/12/enca_03.png"/></a>     
			            </span>

			            <span class="ga-online">
			                <a href="http://www.gautengonline.gov.za/Government/Pages/Departments.aspx" target="_blank"><img src="<?php bloginfo('url');?>/wp-content/uploads/2013/12/gauteng-online_06.png"/></a>     
			            </span>
			            
			            <span class="iec-images">
			                <a href="http://www.elections.org.za/content/" target="_blank"><img src="<?php bloginfo('url');?>/wp-content/uploads/2013/12/iec-image_35.png"/></a>     
			            </span>
			            <span class="gov-images">
			                <a href="http://www.gov.za/" target="_blank"><img src="<?php bloginfo('url');?>/wp-content/uploads/2013/12/page2-gov_38.png"/></a>     
			            </span>
			        </div>
			        </div>
			        <!--Site Copyright Text END-->
			    </div>
			</div>
			<!--Copyright Footer Start-->
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->
    <div class="process_details" style="display: none;">
    <div style="cursor : pointer; float: right; position: absolute; padding: 0px; margin:2px; top: 0; right: 0; padding: 10px; background: #000; color: #fff;" class="button bClose">X</div>
        <p style="font-size:16px;">NB : Only South African Citizens Can Vote. <br/><br/>You Have Chosen To Vote For : <span class="chosen_party"></span>. Please Enter Your ID Number Below To Verify 
        Your Nationality And Vote For <span class="chosen_party"></span>.</p>
        <form id="idvoting" style="margin-top:40px;">
    <p><input type="text" name="id_num" id="id_num" value="" size="25" placeholder="Enter your ID number." />
    	<p><br/><br/><input type="button" value="Verify" id="verifyId" /></p>
    </form>
    </p>
    </div>


<?php wp_footer(); ?>
<script src="<?php echo bloginfo('template_url'); ?>/js/jquery-ui.js"></script>
<script src="<?php echo bloginfo('template_url'); ?>/js/jquery.bpopup.js"></script>

<script>
	jQuery(document).ready(function(){


								jQuery("form#idvoting")[0].reset();

			jQuery(".radio_voting").click(function(){
			window.party =jQuery(this).attr("party"); 
			jQuery('.chosen_party').empty();
			jQuery('.chosen_party').append(party);
			jQuery('.process_details').bPopup({
                            zIndex: 501, 
                            modalClose: false,
                            modalColor:"#000000",
                            onClose: function(){ $('.hideonclick').show(); 
					}
                        }); 
			});


			jQuery("#verifyId").click(function(){
				//alert();
				var id_num = jQuery('#id_num').val();
				jQuery.post( "http://yworld.co.za/elections/process/validate_id.php", {id_num:id_num , party:window.party})
						.done(function( data ) {
							//alert(data);
							if(data=="success") {
								alert ("Successfully Voted.");
								jQuery(".process_details").hide();
								location.reload(); }
							else if(data=="voted") {
								alert ("You Can Only Vote Once.");
								jQuery(".process_details").hide();
								location.reload(); }
							else{
								alert("Wrong ID. You Cant Vote");
								jQuery(".process_details").hide();
								jQuery("form#idvoting")[0].reset();
								location.reload(); 
							}
						});

			});
	});
</script>
  <script src="<?php echo bloginfo('template_url'); ?>/js/responsiveslides.min.js"></script>
  <script>
    jQuery(function () {

      // Slideshow 1
      jQuery("#slider1").responsiveSlides({
        maxwidth: 800,
        speed: 800
      });

      // Slideshow 2
      jQuery("#slider2").responsiveSlides({
        auto: false,
        pager: true,
        speed: 300,
        maxwidth: 540
      });

      // Slideshow 3
      jQuery("#slider3").responsiveSlides({
        manualControls: '#slider3-pager',
        maxwidth: 540
      });

      // Slideshow 4
      jQuery("#slider4").responsiveSlides({
        auto: true,
        pager: false,
        nav: true,
        speed: 500,
        namespace: "callbacks"
      });

    });
  </script>

  <script>
	jQuery('.reveal').hover(function() {
			jQuery('.fake-buttons', this).slideUp('fast');
		}, function() {
	  		jQuery('.fake-buttons', this).slideDown({duration:'fast',queue:false});
	});

	// different kind of reveal animation
	jQuery('.pop-down').hover(function() {
	  jQuery('.fake-buttons', this).animate({left:'-100%'},{duration:100});
	},
	 function() {
	   jQuery('.fake-buttons', this).animate(
	     {left:0},
	     {duration:750,
	      specialEasing:{
	        left:'easeOutBounce'
	      }
	     });                       
	});
  </script>

  <script>
  	   jQuery(document).ready(function() {
        jQuery('#social-icon-sharer img').click(function() {
                //console.log("Im clicked nje");
                jQuery('#social-icon-wrapper').fadeToggle();
                jQuery('#social-icon-sharer').hide();
        });
    });
  </script>
</body>
</html>