<div class="theme-offer">
	<?php 
        // Check if the demo import has been completed
        $vw_medical_care_demo_import_completed = get_option('vw_medical_care_demo_import_completed', false);

        // If the demo import is completed, display the "View Site" button
        if ($vw_medical_care_demo_import_completed) {
        echo '<p class="notice-text">' . esc_html__('Your demo import has been completed successfully.', 'vw-medical-care') . '</p>';
        echo '<span><a href="' . esc_url(home_url()) . '" class="button button-primary site-btn" target="_blank">' . esc_html__('View Site', 'vw-medical-care') . '</a></span>';
        }

		//POST and update the customizer and other related data of POLITICAL CAMPAIGN
        if (isset($_POST['submit'])) {

            // ------- Create Nav Menu --------
            $vw_medical_care_menuname = 'Main Menus';
            $vw_medical_care_bpmenulocation = 'primary';
            $vw_medical_care_menu_exists = wp_get_nav_menu_object($vw_medical_care_menuname);

            if (!$vw_medical_care_menu_exists) {
                $vw_medical_care_menu_id = wp_create_nav_menu($vw_medical_care_menuname);

                // Create Home Page
                $vw_medical_care_home_title = 'Home';
                $vw_medical_care_home = array(
                    'post_type' => 'page',
                    'post_title' => $vw_medical_care_home_title,
                    'post_content' => '',
                    'post_status' => 'publish',
                    'post_author' => 1,
                    'post_slug' => 'home'
                );
                $vw_medical_care_home_id = wp_insert_post($vw_medical_care_home);
                // Assign Home Page Template
                add_post_meta($vw_medical_care_home_id, '_wp_page_template', 'page-template/custom-home-page.php');
                // Update options to set Home Page as the front page
                update_option('page_on_front', $vw_medical_care_home_id);
                update_option('show_on_front', 'page');
                // Add Home Page to Menu
                wp_update_nav_menu_item($vw_medical_care_menu_id, 0, array(
                    'menu-item-title' => __('Home', 'vw-medical-care'),
                    'menu-item-classes' => 'home',
                    'menu-item-url' => home_url('/'),
                    'menu-item-status' => 'publish',
                    'menu-item-object-id' => $vw_medical_care_home_id,
                    'menu-item-object' => 'page',
                    'menu-item-type' => 'post_type'
                ));

                // Create Pages Page with Dummy Content
                $vw_medical_care_pages_title = 'Pages';
                $vw_medical_care_pages_content = '
                <p>Explore all the pages we have on our website. Find information about our services, company, and more.</p>

                 Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960 with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br> 

                  All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.';
                $vw_medical_care_pages = array(
                    'post_type' => 'page',
                    'post_title' => $vw_medical_care_pages_title,
                    'post_content' => $vw_medical_care_pages_content,
                    'post_status' => 'publish',
                    'post_author' => 1,
                    'post_slug' => 'pages'
                );
                $vw_medical_care_pages_id = wp_insert_post($vw_medical_care_pages);
                // Add Pages Page to Menu
                wp_update_nav_menu_item($vw_medical_care_menu_id, 0, array(
                    'menu-item-title' => __('Pages', 'vw-medical-care'),
                    'menu-item-classes' => 'pages',
                    'menu-item-url' => home_url('/pages/'),
                    'menu-item-status' => 'publish',
                    'menu-item-object-id' => $vw_medical_care_pages_id,
                    'menu-item-object' => 'page',
                    'menu-item-type' => 'post_type'
                ));

                // Create About Us Page with Dummy Content
                $vw_medical_care_about_title = 'About Us';
                $vw_medical_care_about_content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...<br>

                         Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960 with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br> 

                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isnt anything embarrassing hidden in the middle of text.<br> 

                            All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.';
                $vw_medical_care_about = array(
                    'post_type' => 'page',
                    'post_title' => $vw_medical_care_about_title,
                    'post_content' => $vw_medical_care_about_content,
                    'post_status' => 'publish',
                    'post_author' => 1,
                    'post_slug' => 'about-us'
                );
                $vw_medical_care_about_id = wp_insert_post($vw_medical_care_about);
                // Add About Us Page to Menu
                wp_update_nav_menu_item($vw_medical_care_menu_id, 0, array(
                    'menu-item-title' => __('About Us', 'vw-medical-care'),
                    'menu-item-classes' => 'about-us',
                    'menu-item-url' => home_url('/about-us/'),
                    'menu-item-status' => 'publish',
                    'menu-item-object-id' => $vw_medical_care_about_id,
                    'menu-item-object' => 'page',
                    'menu-item-type' => 'post_type'
                ));

                // Set the menu location if it's not already set
                if (!has_nav_menu($vw_medical_care_bpmenulocation)) {
                    $locations = get_theme_mod('nav_menu_locations'); // Use 'nav_menu_locations' to get locations array
                    if (empty($locations)) {
                        $locations = array();
                    }
                    $locations[$vw_medical_care_bpmenulocation] = $vw_medical_care_menu_id;
                    set_theme_mod('nav_menu_locations', $locations);
                }
                
        }

           
            // Set the demo import completion flag
    		update_option('vw_medical_care_demo_import_completed', true);
    		// Display success message and "View Site" button
    		echo '<p class="notice-text">' . esc_html__('Your demo import has been completed successfully.', 'vw-medical-care') . '</p>';
    		echo '<span><a href="' . esc_url(home_url()) . '" class="button button-primary site-btn" target="_blank">' . esc_html__('VIEW SITE', 'vw-medical-care') . '</a></span>';
            //end 


            // Top Bar //
            set_theme_mod( 'vw_medical_care_search_icon', 'fas fa-search' );  
            set_theme_mod( 'vw_medical_care_search_close_icon', 'fa fa-window-close' );  
            set_theme_mod( 'vw_medical_care_header_text', 'Do you have any question? Call Us +123456780' );  
            set_theme_mod( 'vw_medical_care_slider_small_title', 'LOREM IPSUM IS SIMPLY DUMMY TEXT' );  
            
            // slider section start // 
            set_theme_mod( 'vw_medical_care_slider_button_text', 'READ MORE' );
            
            for($vw_medical_care_i=1;$vw_medical_care_i<=3;$vw_medical_care_i++){
               $vw_medical_care_slider_title = 'LOREM IPSUM IS SIMPLY TEXT';
               $vw_medical_care_slider_content = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s.';
                  // Create post object
               $my_post = array(
               'post_title'    => wp_strip_all_tags( $vw_medical_care_slider_title ),
               'post_content'  => $vw_medical_care_slider_content,
               'post_status'   => 'publish',
               'post_type'     => 'page',
               );

               // Insert the post into the database
               $vw_medical_care_post_id = wp_insert_post( $my_post );

               if ($vw_medical_care_post_id) {
                 // Set the theme mod for the slider page
                 set_theme_mod('vw_medical_care_slider_page' . $vw_medical_care_i, $vw_medical_care_post_id);

                  $vw_medical_care_image_url = get_template_directory_uri().'/assets/images/slider'.$vw_medical_care_i.'.png';

                $vw_medical_care_image_id = media_sideload_image($vw_medical_care_image_url, $vw_medical_care_post_id, null, 'id');

                    if (!is_wp_error($vw_medical_care_image_id)) {
                        // Set the downloaded image as the post's featured image
                        set_post_thumbnail($vw_medical_care_post_id, $vw_medical_care_image_id);
                    }
                }
            }  

            // Contact us Section //
            set_theme_mod( 'vw_medical_care_phone_icon', 'fas fa-phone' );
            set_theme_mod( 'vw_medical_care_call_text', 'Phone No.' );
            set_theme_mod( 'vw_medical_care_call', '+00 987 654 1230' );
            set_theme_mod('vw_medical_care_location_icon', 'fas fa-map-marker-alt'); 
            set_theme_mod( 'vw_medical_care_address_text', 'Hospital Address' );
            set_theme_mod( 'vw_medical_care_address', '123 dummy street opp to dummy appartment' ); 
            set_theme_mod('vw_medical_care_email_address_icon', 'fas fa-envelope-open'); 
            set_theme_mod( 'vw_medical_care_email_text', 'Email Address' );
            set_theme_mod( 'vw_medical_care_email', 'example@gmail.com' ); 
            

            // Our Facilities Section //
            set_theme_mod( 'vw_medical_care_services_button_text', 'Read More' );
            set_theme_mod('vw_medical_care_facilities', 'servicecategory1');

            // Define post category names and post titles
            $vw_medical_care_category_names = array('servicecategory1', 'servicecategory2', 'servicecategory3', 'servicecategory4');
            $vw_medical_care_title_array = array(
                array("FACILITIES TITLE 1", "FACILITIES TITLE 2", "FACILITIES TITLE 3"),
                array("FACILITIES TITLE 1", "FACILITIES TITLE 2", "FACILITIES TITLE 3"),
                array("FACILITIES TITLE 1", "FACILITIES TITLE 2", "FACILITIES TITLE 3"),
                array("FACILITIES TITLE 1", "FACILITIES TITLE 2", "FACILITIES TITLE 3")
            );

            foreach ($vw_medical_care_category_names as $vw_medical_care_index => $vw_medical_care_category_name) {
                // Create or retrieve the post category term ID
                $vw_medical_care_term = term_exists($vw_medical_care_category_name, 'category');
                if ($vw_medical_care_term === 0 || $vw_medical_care_term === null) {
                    // If the term does not exist, create it
                    $vw_medical_care_term = wp_insert_term($vw_medical_care_category_name, 'category');
                }
                if (is_wp_error($vw_medical_care_term)) {
                    error_log('Error creating category: ' . $vw_medical_care_term->get_error_message());
                    continue; // Skip to the next iteration if category creation fails
                }

                for ($vw_medical_care_i = 0; $vw_medical_care_i < 3; $vw_medical_care_i++) {
                    // Create post content
                    $vw_medical_care_title = $vw_medical_care_title_array[$vw_medical_care_index][$vw_medical_care_i];
                    $vw_medical_care_content = 'Lorem Ipsum has been the industrys standard dummy text ever since the 1500s';

                    // Create post post object
                    $vw_medical_care_my_post = array(
                        'post_title'    => wp_strip_all_tags($vw_medical_care_title),
                        'post_content'  => $vw_medical_care_content,
                        'post_status'   => 'publish',
                        'post_type'     => 'post', // Post type set to 'post'
                    );

                    // Insert the post into the database
                    $vw_medical_care_post_id = wp_insert_post($vw_medical_care_my_post);

                    if (is_wp_error($vw_medical_care_post_id)) {
                        error_log('Error creating post: ' . $vw_medical_care_post_id->get_error_message());
                        continue; // Skip to the next post if creation fails
                    }

                    // Assign the category to the post
                    wp_set_post_categories($vw_medical_care_post_id, array((int)$vw_medical_care_term['term_id']));

                    // Handle the featured image using media_sideload_image
                    $vw_medical_care_image_url = get_template_directory_uri() . '/assets/images/service' . ($vw_medical_care_i + 1) . '.png';
                    $vw_medical_care_image_id = media_sideload_image($vw_medical_care_image_url, $vw_medical_care_post_id, null, 'id');

                    if (is_wp_error($vw_medical_care_image_id)) {
                        error_log('Error downloading image: ' . $vw_medical_care_image_id->get_error_message());
                        continue; // Skip to the next post if image download fails
                    }
                    // Assign featured image to post
                    set_post_thumbnail($vw_medical_care_post_id, $vw_medical_care_image_id);
                }
            }   
            //Copyright Text
            set_theme_mod( 'vw_medical_care_footer_text', 'By VWThemes' );  
     
        }
    ?>
  
	
    <form action="<?php echo esc_url(home_url()); ?>/wp-admin/themes.php?page=vw_medical_care_guide" method="POST" onsubmit="return validate(this);">
    <?php if (!get_option('vw_medical_care_demo_import_completed')) : ?>
        <form method="post">
        <p><?php esc_html_e('Please back up your website if it’s already live with data. This importer will overwrite your existing settings with the new customizer values for VW Medical Care','vw-medical-care'); ?></p>
            <input class= "run-import" type="submit" name="submit" value="<?php esc_attr_e('Run Importer','vw-medical-care'); ?>" class="button button-primary button-large">
        </form>
    <?php endif; ?>
    </form>
	<script type="text/javascript">
		function validate(valid) {
			 if(confirm("Do you really want to import the theme demo content?")){
			    document.forms[0].submit();
			}
		    else {
			    return false;
		    }
		}
	</script>
</div>

