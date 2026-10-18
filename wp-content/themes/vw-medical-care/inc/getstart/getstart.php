<?php
//about theme info
add_action( 'admin_menu', 'vw_medical_care_gettingstarted' );
function vw_medical_care_gettingstarted() {
	add_theme_page( esc_html__('About VW Medical Care', 'vw-medical-care'), esc_html__('Theme Demo Import', 'vw-medical-care'), 'edit_theme_options', 'vw_medical_care_guide', 'vw_medical_care_mostrar_guide');
}

// Add a Custom CSS file to WP Admin Area
function vw_medical_care_admin_theme_style() {
   wp_enqueue_style('vw-medical-care-custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/getstart/getstart.css');
   wp_enqueue_script('vw-medical-care-tabs', esc_url(get_template_directory_uri()) . '/inc/getstart/js/tab.js');
}
add_action('admin_enqueue_scripts', 'vw_medical_care_admin_theme_style');

//guidline for about theme
function vw_medical_care_mostrar_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
	$vw_medical_care_theme = wp_get_theme( 'vw-medical-care' );
?>

<div class="wrapper-info">
    <div class="tab-sec">
		<div class="tab">
		   <div class="demo-content">
				<h3><?php esc_html_e( 'Click the below run importer button to import demo content', 'vw-medical-care' ); ?></h3>
				<?php
					/* Get Started. */
					require get_parent_theme_file_path( '/inc/getstart/demo-content.php');
					?>
			</div>
			<button role="tab" class="tablinks home" onclick="vw_medical_care_openCity(event, 'tc_index')"><?php esc_html_e( 'Free Theme Information', 'vw-medical-care' ); ?></button>
		  	<button role="tab" class="tablinks" onclick="vw_medical_care_openCity(event, 'tc_pro')"><?php esc_html_e( 'Premium Theme Information', 'vw-medical-care' ); ?></button>
		  	<button role="tab" class="tablinks" onclick="vw_medical_care_openCity(event, 'tc_create')"><?php esc_html_e( 'Theme Support', 'vw-medical-care' ); ?></button>
		</div>

		<div  id="tc_index" class="tabcontent open">
			<h2><?php esc_html_e( 'Welcome to VW Medical Care WordPress Theme', 'vw-medical-care' ); ?> <span class="version">Version: <?php echo esc_html($vw_medical_care_theme['Version']);?></span></h2>
			<hr>
			<div class="info-link">
				<a href="<?php echo esc_url( VW_MEDICAL_CARE_FREE_THEME_DOC ); ?>" target="_blank"> <?php esc_html_e( 'Documentation', 'vw-medical-care' ); ?></a>
				<a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e('Customizing', 'vw-medical-care'); ?></a>
				<a class="get-pro" href="<?php echo esc_url( VW_MEDICAL_CARE_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Get Pro', 'vw-medical-care'); ?></a>
				<!-- <div class="demo-content">
				<h3><?php esc_html_e( 'Click the below run importer button to import demo content', 'vw-medical-care' ); ?></h3>
					<?php
					/* Get Started. */
					require get_parent_theme_file_path( '/inc/getstart/demo-content.php');
					?>
			</div>  -->
			</div>
			<div class="col-tc-6">
				<img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/screenshot.png" alt="" />
			</div>
			<div class="col-tc-6">
			<P><?php esc_html_e( 'VW Medical Care is a sophisticated, competent, clean and resourceful health and medical WordPress theme to effortlessly craft out a personal or commercial website in a matter of minutes. It is developed to give skin to websites for hospitals, pharmacy, Hair loss, Skincare, Healthy eating, Reproductive health, health professionals, Digestive health, Weight loss clinics, Anti-aging, Arthritis, Back and neck pain, medical clinic, healthcare services, patient care, medical center, health clinic, medicine, nursing homes, dentist, gynecology, general hospital, pediatric clinic, physician, Diabetes treatment, cosmetic surgery, curing, healing, medicative, pharmaceutic, Herbal products, Diagnostic Centre, dietition, Childbirth services, Diabetic care center, remedial, salutary, psychiatrist, dental, physiatrist, actual private practices, physicians, medic, doctor appointment, stomatologist, doctors, surgeons, cardiology, optometrist, laboratory, veterinary clinics, medical stores, ambulance services, pharmaceuticals, physiotherapy centres. It can be used as a blog by health consultants, nutritionists, health coaches and bloggers from similar niche. It well suits personal portfolios of surgeon, vet doctor, healthcare organizations, Sars, Covid-19, dental, gynecologist, general therapist, paediatrician etc. It is integrated with WooCommerce plugin to start online drug store or sell medical equipment, all displayed in beautiful shop layouts. This medical WordPress theme is fully responsive, cross-browser compatible, Editor Style, two columns layout, Three Columns, translation ready and social media integrated. Its welcoming homepage slider is impactful to gain visitors’ trust to opt your services. Its SEO is sure to improve site’s search engine rank. VW Medical Care is based on the latest WordPress version and offers many ways for customization. It does not require any previous coding knowledge and can be handled by a novice like a pro.', 'vw-medical-care' ); ?></P></div>
    	</div>



		<div id="tc_pro" class="tabcontent">
			<h3><?php esc_html_e( 'VW Medical Care Theme Information', 'vw-medical-care' ); ?></h3>
			<hr>
			<div class="pro-image">
				<img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/medical-Responsive.png" alt="" />
			</div>
			<div class="info-link-pro">
				<p><a href="<?php echo esc_url( VW_MEDICAL_CARE_BUY_NOW ); ?>" target="_blank"> <?php esc_html_e( 'Buy Now', 'vw-medical-care' ); ?></a></p>
				<p><a href="<?php echo esc_url( VW_MEDICAL_CARE_LIVE_DEMO ); ?>" target="_blank"> <?php esc_html_e( 'Live Demo', 'vw-medical-care' ); ?></a></p>
				<p><a href="<?php echo esc_url( VW_MEDICAL_CARE_PRO_DOC ); ?>" target="_blank"> <?php esc_html_e( 'Pro Documentation', 'vw-medical-care' ); ?></a></p>
			</div>
			<div class="col-pro-5">
				<h4><?php esc_html_e( 'VW Medical Care Pro Theme', 'vw-medical-care' ); ?></h4>
				<P><?php esc_html_e( 'It is not just enough to make a website but it should be powerful, efficient and well-groomed to fulfil all your business needs to claim the online space and make the most of it. This medical WordPress theme offers you all this and much more at such an affordable price that you will always pat your back for making such a great deal. It is loaded with amazing features and good quality tools to use them whichever way you want to craft out an outstanding website that is personalized according to your needs. This medical WordPress theme suits everything concerned with health and medical be it hospital, veterinary clinic, drug store, ambulance service, Ayurveda cure centre, physiotherapy centre, spa and massage parlour, health consultant and any other related website and business. It is elegant, versatile, visually appealing and modern to impress visitors at the very first look and convince them to take your services.', 'vw-medical-care' ); ?></P>
			</div>
			<div class="col-pro-6">
				<h4><?php esc_html_e( 'Theme Features', 'vw-medical-care' ); ?></h4>
				<ul>
					<li><?php esc_html_e( 'Theme Customization', 'vw-medical-care' ); ?></li>
					<li><?php esc_html_e( 'Responsive Design', 'vw-medical-care' ); ?></li>
					<li><?php esc_html_e( 'Logo Upload', 'vw-medical-care' ); ?></li>
					<li><?php esc_html_e( 'Social Media Links', 'vw-medical-care' ); ?></li>
					<li><?php esc_html_e( 'Slider Settings', 'vw-medical-care' ); ?></li>
					<li><?php esc_html_e( 'Number of Slides', 'vw-medical-care' ); ?></li>
					<li><?php esc_html_e( 'Template Pages', 'vw-medical-care' ); ?></li>
					<li><?php esc_html_e( 'Home Page Template', 'vw-medical-care' ); ?></li>
					<li><?php esc_html_e( 'Theme sections', 'vw-medical-care' ); ?></li>
					<li><?php esc_html_e( 'Contact us Page Template', 'vw-medical-care' ); ?></li>
					<li><?php esc_html_e( 'Blog Templates & Layout', 'vw-medical-care' ); ?></li>
					<li><?php esc_html_e( 'Page Templates & Layout', 'vw-medical-care' ); ?></li>
					<li><?php esc_html_e( 'Color Pallete For Particular Sections ', 'vw-medical-care' ); ?></li>
					<li><?php esc_html_e( 'Global Color Option', 'vw-medical-care' ); ?></li>
					<li><?php esc_html_e( 'Section Reordering', 'vw-medical-care' ); ?></li>
					<li><?php esc_html_e( 'Demo Importer', 'vw-medical-care' ); ?></li>
					<li><?php esc_html_e( 'Allow To Set Site Title, Tagline, Logoo', 'vw-medical-care' ); ?></li>
					<li><?php esc_html_e( 'Enable Disable Options On All Sections, Logo', 'vw-medical-care' ); ?></li>
					<li><?php esc_html_e( 'Full Documentation', 'vw-medical-care' ); ?></li>
					<li><?php esc_html_e( 'Latest WordPress Compatibility', 'vw-medical-care' ); ?></li>
					<li><?php esc_html_e( 'Woo-Commerce Compatibility', 'vw-medical-care' ); ?></li>
					<li><?php esc_html_e( 'Support 3rd Party Plugins', 'vw-medical-care' ); ?></li>
					<li><?php esc_html_e( 'Secure and Optimized Code', 'vw-medical-care' ); ?></li>
					<li><?php esc_html_e( 'Exclusive Functionalities', 'vw-medical-care' ); ?></li>
					<li><?php esc_html_e( 'Section Enable / Disable', 'vw-medical-care' ); ?></li>
					<li><?php esc_html_e( 'Section Google Font Choices', 'vw-medical-care' ); ?></li>
					<li><?php esc_html_e( 'Gallery', 'vw-medical-care' ); ?></li>
					<li><?php esc_html_e( 'Simple & Mega Menu Option', 'vw-medical-care' ); ?></li>
					<li><?php esc_html_e( 'Support to add custom CSS / JS', 'vw-medical-care' ); ?></li>
					<li><?php esc_html_e( 'Shortcodes', 'vw-medical-care' ); ?></li>
					<li><?php esc_html_e( 'Custom Background, Colors, Header, Logo & Menu', 'vw-medical-care' ); ?></li>
					<li><?php esc_html_e( 'Premium Membership', 'vw-medical-care' ); ?></li>
					<li><?php esc_html_e( 'Budget Friendly Value', 'vw-medical-care' ); ?></li>
					<li><?php esc_html_e( 'Priority Error Fixing, Colors, Header, Logo & Menu', 'vw-medical-care' ); ?></li>
					<li><?php esc_html_e( 'Custom Feature Addition', 'vw-medical-care' ); ?></li>
					<li><?php esc_html_e( 'All Access Theme Pass', 'vw-medical-care' ); ?></li>
					<li><?php esc_html_e( 'Seamless Customer Support, Colors, Header, Logo & Menu', 'vw-medical-care' ); ?></li>
				</ul>
			</div>
		</div>

		<div id="tc_create" class="tabcontent">
			<h3><?php esc_html_e( 'Support', 'vw-medical-care' ); ?></h3>
			<hr>
			<div class="tab-cont">
		  		<h4><?php esc_html_e( 'Need Support?', 'vw-medical-care' ); ?></h4>
				<div class="info-link-support">
					<P><?php esc_html_e( 'Our team is obliged to help you in every way possible whenever you face any type of difficulties and doubts.', 'vw-medical-care' ); ?></P>
					<a href="<?php echo esc_url( VW_MEDICAL_CARE_SUPPORT ); ?>" target="_blank"> <?php esc_html_e( 'Support Forum', 'vw-medical-care' ); ?></a>
				</div>
			</div>
			<div class="tab-cont">
				<h4><?php esc_html_e('Reviews', 'vw-medical-care'); ?></h4>
				<div class="info-link-support">
					<P><?php esc_html_e( 'It is commendable to have such a theme inculcated with amazing features and robust functionalities. I feel grateful to recommend this theme to one and all.', 'vw-medical-care' ); ?></P>
					<a href="<?php echo esc_url( VW_MEDICAL_CARE_REVIEW ); ?>" target="_blank"><?php esc_html_e('Reviews', 'vw-medical-care'); ?></a>
				</div>
			</div>
		</div>
	</div>
</div>
<?php } ?>