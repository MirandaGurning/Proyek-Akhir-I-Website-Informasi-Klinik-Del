<?php
/**
 * Banner Section
 * 
 * slug: architect-designer/banner
 * title: Banner
 * categories: architect-designer
 */

    return array(
        'title'      =>__( 'Banner', 'architect-designer' ),
        'categories' => array( 'architect-designer' ),
        'content'    => '<!-- wp:group {"className":"main-banner-section","style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"backgroundColor":"secaccent","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group main-banner-section has-secaccent-background-color has-background" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"url":"'.esc_url(get_template_directory_uri()) .'/assets/images/banner.png","id":39,"dimRatio":30,"isUserOverlayColor":true,"minHeight":650,"className":"banner-section","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-cover banner-section" style="min-height:650px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-30 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-39" alt="" src="'.esc_url(get_template_directory_uri()) .'/assets/images/banner.png" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"0"},"margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0"}}}} -->
<div class="wp-block-columns" style="margin-top:0;margin-bottom:0;padding-right:0;padding-left:0"><!-- wp:column {"width":"10%","className":"zig-zag-img"} -->
<div class="wp-block-column zig-zag-img" style="flex-basis:10%"><!-- wp:image {"id":6,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/zig-zag.png" alt="" class="wp-image-6"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"80%"} -->
<div class="wp-block-column" style="flex-basis:80%"><!-- wp:paragraph {"className":"banner-small-text","style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"right":"10px","left":"10px"}}},"fontSize":"small"} -->
<p class="banner-small-text has-small-font-size" style="margin-right:10px;margin-left:10px;font-style:normal;font-weight:600">'. esc_html__('Design Arc','architect-designer') .'</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"banner-heading","style":{"spacing":{"padding":{"right":"0"}},"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1.3"}},"fontSize":"extra-large"} -->
<h2 class="wp-block-heading banner-heading has-extra-large-font-size" style="padding-right:0;font-style:normal;font-weight:700;line-height:1.3">'. esc_html__('Transforming Spaces with Innovative Designs: Crafting Timeless Architectural Masterpieces for Modern Living.','architect-designer') .'</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"banner-text","style":{"typography":{"lineHeight":"2","fontStyle":"normal","fontWeight":"600"}},"fontSize":"medium"} -->
<p class="banner-text has-medium-font-size" style="font-style:normal;font-weight:600;line-height:2">'. esc_html__('At Design Arc , we specialize in transforming visions into stunning architectural realities. Our expert team blends innovation, precision, and creativity to design spaces','architect-designer') .'</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"10%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:10%"><!-- wp:group {"className":"banner-social","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group banner-social" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:social-links {"iconColor":"background","iconColorValue":"#fff","openInNewTab":true,"className":"is-style-logos-only banner-social-icon","style":{"spacing":{"blockGap":{"top":"0","left":"0"},"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"right"}} -->
<ul class="wp-block-social-links has-icon-color is-style-logos-only banner-social-icon" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><!-- wp:social-link {"url":"www.facebook.com","service":"facebook"} /-->

<!-- wp:social-link {"url":"www.instagram.com","service":"instagram"} /-->

<!-- wp:social-link {"url":"www.twitter.com","service":"twitter"} /-->

<!-- wp:social-link {"url":"https://www.behance.net/","service":"behance"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->',
    );