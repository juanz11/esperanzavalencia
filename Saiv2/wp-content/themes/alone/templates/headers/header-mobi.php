<?php
$_FW = defined( 'FW' );
$header_options = alone_builder_options_header();
extract($header_options);

$alone_logo_settings = defined( 'FW' ) ? fw_get_db_customizer_option( 'logo_settings' ) : array();
$alone_logo_retina = defined( 'FW' ) ? fw_akg('logo/image/retina_logo', $alone_logo_settings) : '';// $alone_logo_settings['logo']['image']['retina_logo'];
$header_class_arr = array( basename( __FILE__, '.php' ), $alone_logo_retina, 'fw-menu-position-right', $alone_absolute_header );
?>
<header class="bt-header-mobi <?php echo esc_attr( implode( ' ',  $header_class_arr ) ); ?>" itemscope="itemscope" itemtype="http://schema.org/WPHeader">
	<!-- Header main menu -->
	<div class="bt-header-mobi-main">
		<div id="mobile-menu" class="container">
			<div class="bt-container-logo bt-vertical-align-middle">				
				<?php				
				if (pll_current_language() == 'en'){
        			echo '<div id="sai-logo-desktop-en" class="fw-wrap-logo"><a href="https://sai.ngo/" class="fw-site-logo"><img src="//sai.ngo/wp-content/uploads/2017/06/new-logo-mix-color_bigSize.png" alt="South American Initiative" class="main-logo"></a></div>';													
        			echo '<div id="sai-logo-mobile-en" class="fw-wrap-logo"><a href="https://sai.ngo/" class="fw-site-logo"><img src="//sai.ngo/wp-content/uploads/2018/04/mobile-sai-logo.png" alt="South American Initiative" class="main-logo"></a></div>';        		
    			}else{ 
					echo '<div id="sai-logo-desktop-en" class="fw-wrap-logo"><a href="https://sai.ngo/es/" class="fw-site-logo"><img src="//sai.ngo/wp-content/uploads/2017/06/new-logo-mix-color_bigSize.png" alt="Iniciativa Suramericana" class="main-logo"></a></div>';									
					echo '<div id="sai-logo-mobile-es" class="fw-wrap-logo"><a href="https://sai.ngo/" class="fw-site-logo"><img src="//sai.ngo/wp-content/uploads/2018/04/mobile-sai-logo.png" alt="Iniciativa Suramericana" class="main-logo"></a></div>';
				}	
				?>	
				<!-- <?php alone_logo(); ?> -->

			</div>
			<p id="pantalla-tamano">

			</p>
			<div id="donate-btn-container">

				<?php
				//Hardcoded Sticky Donate Button
						if (pll_current_language() == 'en')
        					echo '<a id="mobi-donate-btn-en" class="btn btn-primary btn-sm" href="https://sai.ngo/donate-now/" role="button">DONATE NOW</a>';													
    					else 
							echo '<a id="mobi-donate-btn-es"  class="btn btn-primary btn-sm" href="https://sai.ngo/es/donar-ahora" role="button">DONAR AHORA</a>';					
				?>					
			</div>
			<!--
			-->
			<?php
			if (pll_current_language() == 'en')
        					echo '<div  id="hamburger-icon"></div>';													
    					else 
							echo '<div  id="hamburger-icon"></div>';								
			?>
		</div>
	</div>
</header>
