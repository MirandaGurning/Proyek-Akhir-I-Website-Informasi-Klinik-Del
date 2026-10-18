<?php
/**
 * The template part for top header
 *
 * @package VW Medical Care 
 * @subpackage vw_medical_care
 * @since VW Medical Care 1.0
 */
?>
<?php if( get_theme_mod( 'vw_medical_care_topbar_hide_show', true) == 1 || get_theme_mod( 'vw_medical_care_resp_topbar_hide_show', true) == 1) { ?>
  <div id="topbar">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6">
          <?php if( get_theme_mod( 'vw_medical_care_header_text') != '') { ?>
            <p><?php echo esc_html(get_theme_mod('vw_medical_care_header_text',''));?></p>
          <?php }?>
        </div>      
        <div class="col-lg-5 col-md-5">
          <?php if (is_active_sidebar('social-links')) : ?>
            <?php dynamic_sidebar('social-links'); ?>
          <?php else : ?>
            <!-- Default Social Icons Widgets -->
              <div class="widget">
                  <ul class="custom-social-icons" >
                    <li><a href="https://facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a></li> 
                    <li><a href="https://google.com" target="_blank"><i class="fab fa-google-plus-g"></i></a></li> 
                    <li><a href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i></a></li> 
                    <li><a href="https://pinterest.com" target="_blank"><i class="fab fa-pinterest-p"></i></a></li> 
                    <li><a href="https://linkedin.com" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>                   
                    <li><a href="https://youtube.com" target="_blank"><i class="fab fa-youtube"></i></a></li>                     
                  </ul>
              </div>
          <?php endif; ?>  
        </div>
        <div class="col-lg-1 col-md-1">
          <?php if( get_theme_mod( 'vw_medical_care_header_search',true) == 1) { ?>
            <div class="search-box">
              <span><a href="#"><i class="<?php echo esc_attr(get_theme_mod('vw_medical_care_search_icon','fas fa-search')); ?>"></i></a></span>
            </div>
          <?php }?>
        </div>
        <div class="serach_outer">
          <div class="closepop"><a href="#maincontent"><i class="<?php echo esc_attr(get_theme_mod('vw_medical_care_search_close_icon','fa fa-window-close')); ?>"></i></a></div>
          <div class="serach_inner">
            <?php get_search_form(); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php }?>