<?php
// Function to get the client IP address
function get_client_ip() {
    $ipaddress = '';
    if (isset($_SERVER['HTTP_CLIENT_IP']))
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_X_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if(isset($_SERVER['REMOTE_ADDR']))
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}
$actual=get_client_ip();
get_header();
session_start();

$_SESSION['donated']=true;

global $wp_query;

$alone_sidebar_position = function_exists( 'fw_ext_sidebars_get_current_position' ) ? fw_ext_sidebars_get_current_position() : 'right';
$alone_portfolio_settings = alone_get_options_portfolio();
$alone_portfolio_single_settings = $alone_portfolio_settings['portfolio_single'];

$ext_portfolio_instance = fw()->extensions->get( 'portfolio' );
$ext_portfolio_settings = $ext_portfolio_instance->get_settings();
$thumbnails = fw_theme_ext_portfolio_get_gallery_images();
// echo '<pre>'; print_r($thumbnails); echo '</pre>';

$prevPost = get_previous_post();
$nextPost = get_next_post();

alone_title_bar();
?>
<section class="bt-main-row bt-section-space <?php alone_get_content_class( 'main', $alone_sidebar_position ); ?>" role="main" itemprop="mainEntity" itemscope="itemscope" itemtype="http://schema.org/Blog">
	<div class="container">
		<div class="row">
			<div class="bt-content-area <?php alone_get_content_class( 'content', $alone_sidebar_position ); ?>">
				<div class="bt-col-inner">
					<?php // if( function_exists('fw_ext_breadcrumbs') ) fw_ext_breadcrumbs(); ?>
					<?php while ( have_posts() ) : the_post();
						$term_list = get_the_term_list( get_the_ID(), 'fw-portfolio-category', '', ', ' );
						?>
            <article id="post-<?php the_ID(); ?>" <?php post_class( "portfolio portfolio-details" ); ?> itemscope="itemscope" itemtype="http://schema.org/PortfolioPosting" itemprop="portfolioPost">
            	<div class="fw-col-inner">
            		<div class="entry-content clearfix" itemprop="text">
									<div class="row">
										
										<!-- Campaign Title -->
										<h2 id="title-campaign" class="title"><?php the_title(); ?></h2>

										<!-- Badges Code -->
										<div id="badge-block">
											<span>
												<?php 												
													echo do_shortcode( '[simple_tooltip bubbleposition=\'center\' content=\'<img style="max-width: 100%; width: 150px;" src="https://sai.ngo/wp-content/uploads/2019/03/vetted_large.png"  class="fix"  onclick="sayHi(event);" alt="#"/><div><h5 style="color:#fff;">Vetted by Global Giving 2019</h5>South American Initiative has been vetted by GlobalGiving’s rigorous due diligence process. <p><a href="https://www.globalgiving.org/donate/42484/south-american-initiative/" target="_blank">Learn More</a></p></div>\']' .'<img onclick="sayHi(event);" class="fix" src="https://sai.ngo/wp-content/uploads/2018/03/vetted.svg">'. '[/simple_tooltip]' );													
																								
													echo do_shortcode( '[simple_tooltip bubbleposition=\'center\' content=\'<img style="max-width: 100%; width: 150px;" src="https://sai.ngo/wp-content/uploads/2019/03/topRanked_large.png"  class="fix" alt="#"/><div><h5 style="color:#fff;">Top Ranked 2019</h5>South American Initiative has ranked top charity level by GlobalGiving. <p><a href="https://www.globalgiving.org/learn/introducing-gg-rewards/" target="_blank">Learn More</a></p></div>\']' .'<img src="https://sai.ngo/wp-content/uploads/2018/03/topRanked.svg" class="fix">'. '[/simple_tooltip]' );													
												
													echo do_shortcode( '[simple_tooltip bubbleposition=\'center\' content=\'<img style="max-width: 100%; width: 140px;" class="fix" src="https://sai.ngo/wp-content/uploads/2019/03/put-platinum2019-seal.png" class="fix" alt="#"/><div><h5 style="color:#fff;">Seal Of Transparency</h5>South American Initiative has earned seal of transparency for their efforts to learn, improve, and grow their impact.<p><a href="https://www.guidestar.org/profile/81-1747993" target="_blank">Learn More</a></p>  </div>\']' .'<img src="https://sai.ngo/wp-content/uploads/2018/03/effectiveNonprofit.svg" class="fix" >'. '[/simple_tooltip]' );


													echo do_shortcode( '[simple_tooltip bubbleposition=\'center\' content=\'<img style="max-width: 100%; width: 170px;" src="https://sai.ngo/wp-content/uploads/2019/03/effectiveNonprofit_large.png" class="fix"  alt="#"/><div><h5 style="color:#fff;">Effective Organization 2019</h5>South American initiative is ranked a top rated non-profit by Great Nonprofits.<p><a href="https://greatnonprofits.org/org/south-american-initiative-inc" target="_blank">Learn More</a></p>  </div>\']' .'<img src="https://sai.ngo/wp-content/uploads/2018/09/ribbon.png" class="fix">'. '[/simple_tooltip]' );																										
												?>																																				
											</span>
										</div>
										
										<!-- Left Column -->
										<div class="col-md-8">
	
											<!-- Title Image Post and Gallery Image -->											
											<div id="gallery-wrap" class="gallery-wrap" data-bears-lightgallery='{"selector": ".zoom-image", "thumbnail": "true"}'>
												<?php
												$post_id = get_the_ID();
												/* post thumbnail */
											if( $post_id !=2739 and $post_id !=2776 ){
												if ( has_post_thumbnail( get_the_ID() ) ) :
													$thumbnail_url = get_the_post_thumbnail_url( get_the_ID(), 'full' );
													echo "<a href='{$thumbnail_url}' class='zoom-image'><img src='{$thumbnail_url}' alt='". get_the_title() ."'></a>";
												endif;

											}

												/* gallery */
												if(! empty($thumbnails) && count($thumbnails) > 0) :
													foreach($thumbnails as $thumb_item) :
														$image_data = wp_get_attachment_image_src($thumb_item['attachment_id'], '
															large');
													
										
													
															echo "<a href='{$thumb_item['url']}' class='zoom-image'><img src='{$image_data[0]}' alt='". get_the_title() ."'></a>";
														
														

													endforeach;
												endif;
												?>
											</div>
										
											<!-- Content for Campaign -->
											<div id="content-campaign" class="entry-content-wrap">
												<div class="entry-the-content">
													<?php the_content(); ?>
													<?php
				            			wp_link_pages( array(
				            				'before'      => '<div class="page-links"><span class="page-links-title">' . esc_html__( 'Pages:', 'alone' ) . '</span>',
				            				'after'       => '</div>',
				            				'link_before' => '<span>',
				            				'link_after'  => '</span>',
				            			) );
				            			?>
												</div>																							
											</div>
										</div>

										<!-- Right Column -->
										<div id="campaign-right-column" class="col-md-4">										

										<!-- Estructura switch PHP para desplegar los donorbox para cada campana  -->
										<?php 	 
										
										$post_id = get_the_ID();
									
										switch ($post_id) {

											case  4289:
											?>
					

								
											<script src="https://donorbox.org/widget.js" paypalExpress="false"></script><iframe src="https://donorbox.org/embed/latin-american-education-fund" height="685px" width="100%" style="max-width:500px; min-width:310px; max-height:none!important" seamless="seamless" name="donorbox" frameborder="0" scrolling="no" allowpaymentrequest></iframe>

											<?php
												break;
												case 4513 :
										    ?>
										    	<!-- Brain surgery  -->
										
												<script src="https://donorbox.org/widget.js" paypalExpress="false"></script><iframe src="https://donorbox.org/embed/life-saving-neurosurgery-venezuela" height="685px" width="100%" style="max-width:500px; min-width:310px; max-height:none!important" seamless="seamless" name="donorbox" frameborder="0" scrolling="no" allowpaymentrequest></iframe>
												
			
										    <?php
										      
										        break;												
												case  4257:
											?>
					

											<script src="https://donorbox.org/widget.js"></script><iframe  class="ifrimi" src="https://donorbox.org/embed/endangered-animal-rescue-fund" height="685px" width="100%" style="max-width:500px; min-width:310px; max-height:none!important" seamless="seamless" name="donorbox" frameborder="0" scrolling="no" ></iframe>
												

											<?php
												break; 	
											case  2146:
											?>
											<!-- Help Venezuela 
												<div class="meter-bar">
													<div style="width:100%;">
														<p class="styled"><progress value="28" max="100"></progress></p>
													</div>
													<div class="meter-caption" style="width:100%;">
														<p class="bold"><span>$9,593</span><span>Raised</span></p>
														<p><span>97</span><span>Donors</span></p>
														<p><span>$35,000</span><span>Goal</span></p>
													</div>													
												</div>

											    <script src="https://donorbox.org/widget.js" type="text/javascript"></script><iframe src="https://donorbox.org/embed/helpvenezuela-us" height="685px" width="100%" style="max-width:500px; min-width:310px; max-height:none!important" seamless="seamless" name="donorbox" frameborder="0" scrolling="no" allowpaymentrequest ></iframe>  -->
												<?if($actual!="138.59.10.15" && $actual!="186.185.199.8" ){?>
												<script src="https://donorbox.org/widget.js" type="text/javascript"></script><iframe class="ifrimi" src="https://donorbox.org/embed/helpvenezuela-us?only_donation_meter=true&donation_meter_color=%232ecc71" width="100%" style="max-width:500px; min-width:310px; max-height:93px!important;height:93px!important;" seamless="seamless" name="donorbox" frameborder="0" scrolling="no"></iframe>
												<?}?>
												<script src="https://donorbox.org/widget.js" type="text/javascript"></script><iframe class="aframa" id="ifrimi" src="https://donorbox.org/embed/helpvenezuela-us?hide_donation_meter=true" height="685px" width="100%" style="max-width:500px; min-width:310px; max-height:none!important" seamless="seamless" name="donorbox" frameborder="0" scrolling="no" allowpaymentrequest ></iframe>
											<?php
												break; 	
											case  4044:
											?>
											<!-- Help Venezuela 
												<div class="meter-bar">
													<div style="width:100%;">
														<p class="styled"><progress value="28" max="100"></progress></p>
													</div>
													<div class="meter-caption" style="width:100%;">
														<p class="bold"><span>$9,593</span><span>Raised</span></p>
														<p><span>97</span><span>Donors</span></p>
														<p><span>$35,000</span><span>Goal</span></p>
													</div>													
												</div>

											    <script src="https://donorbox.org/widget.js" type="text/javascript"></script><iframe src="https://donorbox.org/embed/helpvenezuela-us" height="685px" width="100%" style="max-width:500px; min-width:310px; max-height:none!important" seamless="seamless" name="donorbox" frameborder="0" scrolling="no" allowpaymentrequest ></iframe>  -->
									<!-- Venezolanos refugiados -->
											<?if($actual!="138.59.10.15" && $actual!="186.185.199.8" ){?> 	
												<script src="https://donorbox.org/widget.js" type="text/javascript"></script><iframe class="ifrimi" src="https://donorbox.org/embed/venezuelan-refugee-fund?only_donation_meter=true&donation_meter_color=%232ecc71" width="100%" style="max-width:500px; min-width:310px; max-height:93px!important;height:93px!important;" seamless="seamless" name="donorbox" frameborder="0" scrolling="no"></iframe>
											<?}?>	
												<script src="https://donorbox.org/widget.js" paypalExpress="false"></script><iframe class="aframa" src="https://donorbox.org/embed/venezuelan-refugee-fund?hide_donation_meter=true" height="685px" width="100%" style="max-width:500px; min-width:310px; max-height:93px!important" seamless="seamless" name="donorbox" frameborder="0" scrolling="no" allowpaymentrequest></iframe>
											

										<?php
												break; 													
										    case 964:
										    ?>
										    <!-- Help Hospitals and Children
										    	<div class="meter-bar">
													<div style="width:100%;">
														<p class="styled"><progress value="13" max="100"></progress></p>
													</div>
													<div class="meter-caption" style="width:100%;">
														<p class="bold"><span>$3,195</span><span>Raised</span></p>
														<p><span>65</span><span>Donors</span></p>
														<p><span>$30,000</span><span>Goal</span></p>
													</div>													
												</div>

										    	 <script src="https://donorbox.org/widget.js" type="text/javascript"></script><iframe src="https://donorbox.org/embed/hospitals-us" height="685px" width="100%" style="max-width:500px; min-width:310px; max-height:none!important" seamless="seamless" name="donorbox" frameborder="0" scrolling="no" allowpaymentrequest ></iframe>-->
												<?if($actual!="138.59.10.15" && $actual!="186.185.199.8" ){?> 
												<script src="https://donorbox.org/widget.js" type="text/javascript"></script><iframe class="ifrimi" src="https://donorbox.org/embed/hospitals-us?only_donation_meter=true&donation_meter_color=%232ecc71" width="100%"  style="max-width:500px; min-width:310px; max-height:93px!important;height:93px!important;" seamless="seamless" name="donorbox" frameborder="0" scrolling="no"></iframe>
												<?}?>
												<script src="https://donorbox.org/widget.js" type="text/javascript"></script><iframe class="aframa" src="https://donorbox.org/embed/hospitals-us?hide_donation_meter=true" height="685px" width="100%" style="max-width:500px; min-width:310px; max-height:none!important" seamless="seamless" name="donorbox" frameborder="0" scrolling="no" allowpaymentrequest ></iframe> 
										    <?php 
										        break;
										    case 966:
										    ?>
										    	<!-- Help Venezuelan Orphans 
										  		<div class="meter-bar">
													<div style="width:100%;">
														<p class="styled"><progress value="15" max="100"></progress></p>
													</div>
													<div class="meter-caption" style="width:100%;">
														<p class="bold"><span>$6,577.05</span><span>Raised</span></p>
														<p><span>65</span><span>Donors</span></p>
														<p><span>$30,000</span><span>Goal</span></p>
													</div>													
												</div>

										    	<script src="https://donorbox.org/widget.js" type="text/javascript"></script><iframe src="https://donorbox.org/embed/orphans-us" height="685px" width="100%" style="max-width:500px; min-width:310px; max-height:none!important" seamless="seamless" name="donorbox" frameborder="0" scrolling="no" allowpaymentrequest ></iframe> -->
											<?if($actual!="138.59.10.15" && $actual!="186.185.199.8" ){?> 
												<script src="https://donorbox.org/widget.js" type="text/javascript"></script><iframe class="ifrimi" src="https://donorbox.org/embed/orphans-us?only_donation_meter=true&donation_meter_color=%232ecc71" width="100%"  style="max-width:500px; min-width:310px; max-height:93px!important;height:93px!important;" seamless="seamless" name="donorbox" frameborder="0" scrolling="no"></iframe>
										    <?}?>
												<script src="https://donorbox.org/widget.js" type="text/javascript"></script><iframe class="aframa" src="https://donorbox.org/embed/orphans-us?hide_donation_meter=true" height="685px" width="100%" style="max-width:500px; min-width:310px; max-height:none!important;" seamless="seamless" name="donorbox" frameborder="0" scrolling="no" allowpaymentrequest ></iframe>
												
			
										    <?php
											break;
										
												 case 4405 :
										    ?>
										    	<!-- Brain surgery  -->
										
												<script src="https://donorbox.org/widget.js" paypalExpress="false"></script><iframe src="https://donorbox.org/embed/life-saving-neurosurgery-venezuela" height="685px" width="100%" style="max-width:500px; min-width:310px; max-height:none!important" seamless="seamless" name="donorbox" frameborder="0" scrolling="no" allowpaymentrequest></iframe>
												
			
										    <?php
										        break;
												
												
										    case 494:
										    ?>
										    	<!-- Help Abandoned Pets in Venezuela
										    	<div class="meter-bar">
													<div style="width:100%;">
														<p class="styled"><progress value="13" max="100"></progress></p>
													</div>
													<div class="meter-caption" style="width:100%;">
														<p class="bold"><span>$3625.06</span><span>Raised</span></p>
														<p><span>56</span><span>Donors</span></p>
														<p><span>$20,000</span><span>Goal</span></p>
													</div>													
												</div>
										    	 <script src="https://donorbox.org/widget.js" type="text/javascript"></script><iframe src="https://donorbox.org/embed/pets-us" height="685px" width="100%" style="max-width:500px; min-width:310px; max-height:none!important" seamless="seamless" name="donorbox" frameborder="0" scrolling="no" allowpaymentrequest ></iframe> -->
											<?if($actual!="138.59.10.15" && $actual!="186.185.199.8" ){?> 
												<script src="https://donorbox.org/widget.js" type="text/javascript"></script><iframe class="ifrimi" src="https://donorbox.org/embed/pets-us?only_donation_meter=true&donation_meter_color=%232ecc71" width="100%"  style="max-width:500px; min-width:310px; max-height:93px!important;height:93px!important;" seamless="seamless" name="donorbox" frameborder="0" scrolling="no"></iframe>
											<?}?>
										     	<script src="https://donorbox.org/widget.js" type="text/javascript"></script><iframe class="aframa" src="https://donorbox.org/embed/pets-us?hide_donation_meter=true" height="685px" width="100%" style="max-width:500px; min-width:310px; max-height:none!important" seamless="seamless" name="donorbox" frameborder="0" scrolling="no" allowpaymentrequest ></iframe> 
										    <?php										    											        
										        break;
										    case 991:
										    ?>
										    	<!-- Let’s Fight Cancer Together
										    	<div class="meter-bar">
													<div style="width:100%;">
														<p class="styled"><progress value="5" max="100"></progress></p>
													</div>
													<div class="meter-caption" style="width:100%;">
														<p class="bold"><span>$1,970</span><span>Raised</span></p>
														<p><span>37</span><span>Donors</span></p>
														<p><span>$30,000</span><span>Goals</span></p>
													</div>													
												</div>
										    	<script src="https://donorbox.org/widget.js" type="text/javascript"></script><iframe src="https://donorbox.org/embed/cancer-us" height="685px" width="100%" style="max-width:500px; min-width:310px; max-height:none!important" seamless="seamless" name="donorbox" frameborder="0" scrolling="no" allowpaymentrequest ></iframe>-->
										    	
												<script src="https://donorbox.org/widget.js" type="text/javascript"></script><iframe src="https://donorbox.org/embed/cancer-us?hide_donation_meter=true" height="685px" width="100%" style="max-width:500px; min-width:310px; max-height:none!important" seamless="seamless" name="donorbox" frameborder="0" scrolling="no" allowpaymentrequest ></iframe> 
										     <?php										    											        
										        break;
													    case 4027:
										    ?>
										    	<!-- Let’s Fight Cancer Together
										    	<div class="meter-bar">
													<div style="width:100%;">
														<p class="styled"><progress value="5" max="100"></progress></p>
													</div>
													<div class="meter-caption" style="width:100%;">
														<p class="bold"><span>$1,970</span><span>Raised</span></p>
														<p><span>37</span><span>Donors</span></p>
														<p><span>$30,000</span><span>Goals</span></p>
													</div>													
												</div>
										    	<script src="https://donorbox.org/widget.js" type="text/javascript"></script><iframe src="https://donorbox.org/embed/cancer-us" height="685px" width="100%" style="max-width:500px; min-width:310px; max-height:none!important" seamless="seamless" name="donorbox" frameborder="0" scrolling="no" allowpaymentrequest ></iframe>-->
										    	
												<script src="https://donorbox.org/widget.js" paypalExpress="false"></script><iframe src="https://donorbox.org/embed/giving-orphans-a-gift" height="685px" width="100%" style="max-width:500px; min-width:310px; max-height:none!important" seamless="seamless" name="donorbox" frameborder="0" scrolling="no" allowpaymentrequest></iframe>
										     <?php										    											        
										        break;
										    case 2776:
										    ?>		
										    <!-- Venezolanos refugiados -->
											<?if($actual!="138.59.10.15" && $actual!="186.185.199.8" ){?> 	
												<script src="https://donorbox.org/widget.js" type="text/javascript"></script><iframe class="ifrimi" src="https://donorbox.org/embed/venezuelan-refugee-fund?only_donation_meter=true&donation_meter_color=%232ecc71" width="100%" style="max-width:500px; min-width:310px; max-height:93px!important;height:93px!important;" seamless="seamless" name="donorbox" frameborder="0" scrolling="no"></iframe>
											<?}?>	
												<script src="https://donorbox.org/widget.js" paypalExpress="false"></script><iframe class="aframa" src="https://donorbox.org/embed/venezuelan-refugee-fund?hide_donation_meter=true" height="685px" width="100%" style="max-width:500px; min-width:310px; max-height:93px!important" seamless="seamless" name="donorbox" frameborder="0" scrolling="no" allowpaymentrequest></iframe>
											<?php	
											
										        break;
											case 2739:
											?>	
												<!--venezuelan  refueee 
										    	<div class="meter-bar">
													<div style="width:100%;">
														<p class="styled"><progress value="4" max="100"></progress></p>
													</div>
													<div class="meter-caption" style="width:100%;">
														<p class="bold"><span>$1,200</span><span>Raised</span></p>
														<p><span>28</span><span>Donors</span></p>
														<p><span>$95,000</span><span>Goals</span></p>
													</div>													
												</div>-->
											<?if($actual!="138.59.10.15" && $actual!="186.185.199.8" ){?> 	
												<script src="https://donorbox.org/widget.js" type="text/javascript"></script><iframe class="ifrimi" src="https://donorbox.org/embed/venezuelan-refugee-fund?only_donation_meter=true&donation_meter_color=%232ecc71" width="100%"  style="max-width:500px; min-width:310px; max-height:93px!important;height:93px!important;" seamless="seamless" name="donorbox" frameborder="0" scrolling="no"></iframe>
											<?}?>
												<script src="https://donorbox.org/widget.js" paypalExpress="false"></script><iframe class="aframa" src="https://donorbox.org/embed/venezuelan-refugee-fund?hide_donation_meter=true" height="685px" width="100%" style="max-width:500px; min-width:310px; max-height:none!important" seamless="seamless" name="donorbox" frameborder="0" scrolling="no" allowpaymentrequest></iframe>
												
											<?
											break;
											case 2161:
										    ?>
										    	<!-- ////////////////////////////////////////////////////////////////////////////////////////// -->
										    	<!-- ES ES ES ES ES ES ES ES ES ES ES ES ES ES ES ES ES ES ES ES ES ES ES ES ES ES ES ES ES ES  -->
										    	<!-- ////////////////////////////////////////////////////////////////////////////////////////// -->

										    	<!-- Ayudemos a Venezuela
										    	<div class="meter-bar">
													<div style="width:100%;">
														<p class="styled"><progress value="28" max="100"></progress></p>
													</div>
													<div class="meter-caption" style="width:100%;">												
														<p class="bold"><span>$9,593</span><span>Acumulado</span></p>
														<p><span>97</span><span>Donantes</span></p>
														<p><span>$35,000</span><span>Meta</span></p>
													</div>													
												</div>
										    	<script src="https://donorbox.org/widget.js" type="text/javascript"></script><iframe src="https://donorbox.org/embed/ayudavenezuela-us" height="685px" width="100%" style="max-width:500px; min-width:310px; max-height:none!important" seamless="seamless" name="donorbox" frameborder="0" scrolling="no" allowpaymentrequest ></iframe> -->
											<?if($actual!="138.59.10.15"  ){?> 
												<script src="https://donorbox.org/widget.js" type="text/javascript"></script><iframe class="ifrimi" src="https://donorbox.org/embed/helpvenezuela-us?only_donation_meter=true&donation_meter_color=%232ecc71" width="100%"  style="max-width:500px; min-width:310px; max-height:93px!important;height:93px!important;" seamless="seamless" name="donorbox" frameborder="0" scrolling="no"></iframe>
										    <?}?>	
												<script src="https://donorbox.org/widget.js" type="text/javascript"></script><iframe class="aframa" src="https://donorbox.org/embed/helpvenezuela-us?hide_donation_meter=true" height="685px" width="100%" style="max-width:500px; min-width:310px; max-height:none!important" seamless="seamless" name="donorbox" frameborder="0" scrolling="no" allowpaymentrequest ></iframe>
										   	<?php	
										   	break;	
										    case 1594:
										    ?>
										    	<!-- Ayudemos a los Huérfanos de Venezuela 
										    	<div class="meter-bar">
													<div style="width:100%;">
														<p class="styled"><progress value="15" max="100"></progress></p>
													</div>
													<div class="meter-caption" style="width:100%;">
														<p class="bold"><span>$6,577.05</span><span>Acumulado</span></p>
														<p><span>65</span><span>Donantes</span></p>
														<p><span>$30,000</span><span>Meta</span></p>
													</div>													
												</div>
										    	 <script src="https://donorbox.org/widget.js" type="text/javascript"></script><iframe src="https://donorbox.org/embed/huerfanos-us" height="685px" width="100%" style="max-width:500px; min-width:310px; max-height:none!important" seamless="seamless" name="donorbox" frameborder="0" scrolling="no" allowpaymentrequest ></iframe> -->

												<?if($actual!="138.59.10.15"  ){?>
												<script src="https://donorbox.org/widget.js" paypalExpress="false"></script><iframe class="ifrimi" src="https://donorbox.org/embed/giving-orphans-a-gift?only_donation_meter=true&donation_meter_color=%232ecc71" height="685px" width="100%" style="max-width:500px; min-width:310px; max-height:93px!important" seamless="seamless" name="donorbox" frameborder="0" scrolling="no"></iframe>
												<?}?>
												<script src="https://donorbox.org/widget.js" type="text/javascript"></script><iframe class="aframa" src="https://donorbox.org/embed/giving-orphans-a-gift?hide_donation_meter=true" height="685px" width="100%" style="max-width:500px; min-width:310px; max-height:none!important" seamless="seamless" name="donorbox" frameborder="0" scrolling="no" allowpaymentrequest ></iframe> 
										    <?php										    											       
										        break;
										    case 4032:
										    ?>

										    <?if($actual!="138.59.10.15"  ){?> 
												<script src="https://donorbox.org/widget.js" type="text/javascript"></script><iframe class="ifrimi" src="https://donorbox.org/embed/orphans-us?only_donation_meter=true&donation_meter_color=%232ecc71" height="685px" width="100%" style="max-width:500px; min-width:310px; max-height:93px!important;height:93px!important;" seamless="seamless" name="donorbox" frameborder="0" scrolling="no"></iframe>
											<?}?>
												<script src="https://donorbox.org/widget.js" type="text/javascript"></script><iframe class="aframa" src="https://donorbox.org/embed/orphans-us?hide_donation_meter=true" height="685px" width="100%" style="max-width:500px; min-width:310px; max-height:none!important" seamless="seamless" name="donorbox" frameborder="0" scrolling="no" allowpaymentrequest ></iframe> 
										    <?php										    											       
										        break;
										    case 1591:
										    ?>
										    	<!-- Luchemos Juntos Contra el Cáncer
										    	<div class="meter-bar">
													<div style="width:100%;">
														<p class="styled"><progress value="10" max="100"></progress></p>
													</div>
													<div class="meter-caption" style="width:100%;">
														<p class="bold"><span>$1,970</span><span>Acumulado</span></p>
														<p><span>37</span><span>Donantes</span></p>
														<p><span>$30,000</span><span>Meta</span></p>
													</div>													
												</div> -->
										    	<script src="https://donorbox.org/widget.js" type="text/javascript"></script><iframe src="https://donorbox.org/embed/cancer-espa-us?hide_donation_meter=true" height="685px" width="100%" style="max-width:500px; min-width:310px; max-height:none!important" seamless="seamless" name="donorbox" frameborder="0" scrolling="no" allowpaymentrequest ></iframe>
										    	<!-- <script src="https://donorbox.org/widget.js" type="text/javascript"></script><iframe src="https://donorbox.org/embed/cancer-espa-us?hide_donation_meter=true" height="685px" width="100%" style="max-width:500px; min-width:310px; max-height:none!important" seamless="seamless" name="donorbox" frameborder="0" scrolling="no" allowpaymentrequest ></iframe> -->
										    <?php										    											       
										        break;
										    case 1599:
										    ?>
										    	<!-- Brindando Asistencia a Hospitales Venezolanos
										    	<div class="meter-bar">
													<div style="width:100%;">
														<p class="styled"><progress value="13" max="100"></progress></p>
													</div>
													<div class="meter-caption" style="width:100%;">
														<p class="bold"><span>$3,195</span><span>Acumulado</span></p>
														<p><span>65</span><span>Donantes</span></p>
														<p><span>$30,000</span><span>Meta</span></p>
													</div>													
												</div>

												 -->
												 
											<?if($actual!="138.59.10.15"  ){?> 
												<script src="https://donorbox.org/widget.js" type="text/javascript"></script><iframe class="ifrimi" src="https://donorbox.org/embed/hospitals-us?only_donation_meter=true&donation_meter_color=%232ecc71" width="100%"  style="max-width:500px; min-width:310px; max-height:93px!important;height:93px!important;" seamless="seamless" name="donorbox" frameborder="0" scrolling="no"></iframe>
										    <?}?>	
												<script src="https://donorbox.org/widget.js" type="text/javascript"></script><iframe class="aframa" src="https://donorbox.org/embed/hospitals-us?hide_donation_meter=true" height="685px" width="100%" style="max-width:500px; min-width:310px; max-height:none!important" seamless="seamless" name="donorbox" frameborder="0" scrolling="no" allowpaymentrequest ></iframe>
										    	<!-- <script src="https://donorbox.org/widget.js" type="text/javascript"></script><iframe src="https://donorbox.org/embed/hospitales-us?hide_donation_meter=true" height="685px" width="100%" style="max-width:500px; min-width:310px; max-height:none!important" seamless="seamless" name="donorbox" frameborder="0" scrolling="no" allowpaymentrequest ></iframe> -->
										    <?php										    											       
										        break;
										    case 1604:
										    ?>
										    	<!-- Ayudando a Mascotas Abandonadas en Venezuela
										    	<div class="meter-bar">
													<div style="width:100%;">
														<p class="styled"><progress value="13" max="100"></progress></p>
													</div>
													<div class="meter-caption" style="width:100%;">
														<p class="bold"><span>$3625.06</span><span>Acumulado</span></p>
														<p><span>56</span><span>Donantes</span></p>
														<p><span>$20,000</span><span>Meta</span></p>
													</div>													
												</div> -->
											<?if($actual!="138.59.10.15"  ){?> 
												<script src="https://donorbox.org/widget.js" type="text/javascript"></script><iframe class="ifrimi" src="https://donorbox.org/embed/pets-us?only_donation_meter=true&donation_meter_color=%232ecc71" width="100%"  style="max-width:500px; min-width:310px; max-height:93px!important;height:93px!important;" seamless="seamless" name="donorbox" frameborder="0" scrolling="no"></iframe>
										    <?}?>
												<script src="https://donorbox.org/widget.js" type="text/javascript"></script><iframe class="aframa" src="https://donorbox.org/embed/pets-us?hide_donation_meter=true" height="685px" width="100%" style="max-width:500px; min-width:310px; max-height:none!important" seamless="seamless" name="donorbox" frameborder="0" scrolling="no" allowpaymentrequest ></iframe>
										    	<!-- <script src="https://donorbox.org/widget.js" type="text/javascript"></script><iframe src="https://donorbox.org/embed/mascotas-us?hide_donation_meter=true" height="685px" width="100%" style="max-width:500px; min-width:310px; max-height:none!important" seamless="seamless" name="donorbox" frameborder="0" scrolling="no" allowpaymentrequest ></iframe> -->
										    <?php										    											       
										        break;										   
										}
										?>											
											<div id="prev-next-camp">
											<!-- Previous, Next -->									 
											<?php if($prevPost || $nextPost) : ?>
													<ul class="previous-next-link">
														<?php if($prevPost) { ?>
													    <li class="previous">
													    	<?php $prevthumbnail = get_the_post_thumbnail($prevPost->ID, array(80,80) ); ?>
													      <?php previous_post_link('%link', $prevthumbnail . '<div><div class="icon"><span class="ion-ios-arrow-thin-left"></span> '.__('Previous', 'alone').'</div> <div class="title">%title</div></div>'); ?>
													    </li>
														<?php } if($nextPost) { ?>
													    <li class="next">
													    	<?php $nextthumbnail = get_the_post_thumbnail($nextPost->ID, array(80,80) ); ?>
													      <?php next_post_link('%link', $nextthumbnail . '<div><div class="icon">'.__('Next', 'alone').' <span class="ion-ios-arrow-thin-right"></span></div> <div class="title">%title</div></div>'); ?>
													    </li>
														<?php } ?>
													</ul>
											<?php endif; ?>		
											<!-- Previous, Next  -->
											</div>

											<!-- Social Sharing -->									 
											<div id="social-sharing-icons" class="social-share-entry">
												<h4><strong>Share this campaign on:</strong></h4>
													<?php echo alone_share_post(array('facebook' => true, 'twitter' => true)); ?>
											</div>
											<!-- End Social Sharing -->

										</div>
									</div>
            		</div>
            	</div>
            </article>
            <?php
						if ($alone_portfolio_single_settings['show_comment'] == 'yes') comments_template();
						break;
					endwhile; ?>
				</div><!-- /.bt-col-inner -->
			</div><!-- /.bt-content-area -->
			<?php get_sidebar(); ?>
		</div><!-- /.row -->
	</div><!-- /.container -->
</section>
<?php
// free memory
unset( $ext_portfolio_instance );
unset( $ext_portfolio_settings );
set_query_var( 'fw_portfolio_loop_data', '' );
get_footer();
