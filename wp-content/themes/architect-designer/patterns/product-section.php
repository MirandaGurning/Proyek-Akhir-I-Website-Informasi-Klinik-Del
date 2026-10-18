<?php
/**
 * Category Section
 * 
 * slug: architect-designer/product-section
 * title: Team Section
 * categories: architect-designer
 */

$architect_designer_plugins_list = get_option( 'active_plugins' );
$architect_designer_plugin = 'woocommerce/woocommerce.php';
$architect_designer_results = in_array( $architect_designer_plugin , $architect_designer_plugins_list);
if ( $architect_designer_results )  {

    return array(
        'title'      =>__( 'Product Section', 'architect-designer' ),
        'categories' => array( 'architect-designer' ),
        'content'    => '<!-- wp:group {"className":"service-group","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group service-group"><!-- wp:group {"className":"product-section-top"} -->
<div class="wp-block-group product-section-top"><!-- wp:columns {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns" style="margin-bottom:var(--wp--preset--spacing--60)"><!-- wp:column {"verticalAlignment":"center","width":"66.66%","style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%"><!-- wp:heading {"textAlign":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|secaccent"}}},"typography":{"fontSize":"30px"}},"textColor":"secaccent","fontFamily":"rubik"} -->
<h2 class="wp-block-heading has-text-align-left has-secaccent-color has-text-color has-link-color has-rubik-font-family" style="font-size:30px">'. esc_html__('New Arrivals Sculptures','architect-designer') .'</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|secaccent"}}},"typography":{"fontStyle":"normal","fontWeight":"300"}},"textColor":"secaccent","fontSize":"medium","fontFamily":"rubik"} -->
<p class="has-text-align-left has-secaccent-color has-text-color has-link-color has-rubik-font-family has-medium-font-size" style="font-style:normal;font-weight:300">'. esc_html__('Lorem Ipsum is simply dummy text of the printing','architect-designer') .'</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"33.33%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
<div class="wp-block-buttons"><!-- wp:button {"textColor":"background","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"extra-small","fontFamily":"rubik"} -->
<div class="wp-block-button has-custom-font-size has-rubik-font-family has-extra-small-font-size" style="font-style:normal;font-weight:400"><a class="wp-block-button__link has-background-color has-text-color has-link-color wp-element-button">'. esc_html__('Explore More','architect-designer') .'</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group"><!-- wp:woocommerce/product-collection {"queryId":3,"query":{"perPage":8,"pages":0,"offset":0,"postType":"product","order":"asc","orderBy":"title","search":"","exclude":[],"inherit":false,"taxQuery":[],"isProductCollectionBlock":true,"featured":false,"woocommerceOnSale":false,"woocommerceStockStatus":["instock","outofstock","onbackorder"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[],"filterable":true,"relatedBy":{"categories":true,"tags":true}},"tagName":"div","displayLayout":{"type":"flex","columns":4,"shrinkColumns":true},"dimensions":{"widthType":"fill"},"queryContextIncludes":["collection"],"__privatePreviewState":{"isPreview":false,"previewMessage":"Actual products will vary depending on the page being viewed."},"className":"dynamic-product-section"} -->
<div class="wp-block-woocommerce-product-collection dynamic-product-section"><!-- wp:woocommerce/product-template -->
<!-- wp:woocommerce/product-image {"showSaleBadge":false,"imageSizing":"thumbnail","isDescendentOfQueryLoop":true,"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}}} /-->

<!-- wp:post-terms {"term":"product_cat","textAlign":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|secaccent"}}},"typography":{"fontStyle":"normal","fontWeight":"300"}},"textColor":"secaccent","fontFamily":"rubik"} /-->

<!-- wp:post-title {"textAlign":"left","level":3,"isLink":true,"style":{"spacing":{"margin":{"bottom":"0.75rem","top":"0"}},"typography":{"fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|secaccent"}}}},"textColor":"secaccent","fontSize":"medium","fontFamily":"rubik","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"left","textColor":"secaccent","fontSize":"medium","style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|secaccent"}}}}} /-->
<!-- /wp:woocommerce/product-template --></div>
<!-- /wp:woocommerce/product-collection --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->',
    );
} else {

    return array(
        'title'      =>__( 'Product Section', 'architect-designer' ),
        'categories' => array( 'architect-designer' ),
        'content'    => '<!-- wp:group {"className":"service-group","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group service-group"><!-- wp:group {"product-section-top","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group product-section-top"><!-- wp:columns {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns" style="margin-bottom:var(--wp--preset--spacing--60)"><!-- wp:column {"verticalAlignment":"center","width":"66.66%","style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%"><!-- wp:heading {"textAlign":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|secaccent"}}},"typography":{"fontSize":"30px"}},"textColor":"secaccent","fontFamily":"rubik"} -->
<h2 class="wp-block-heading has-text-align-left has-secaccent-color has-text-color has-link-color has-rubik-font-family" style="font-size:30px">'. esc_html__('New Arrivals Sculptures','architect-designer') .'</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|secaccent"}}},"typography":{"fontStyle":"normal","fontWeight":"300"}},"textColor":"secaccent","fontSize":"medium","fontFamily":"rubik"} -->
<p class="has-text-align-left has-secaccent-color has-text-color has-link-color has-rubik-font-family has-medium-font-size" style="font-style:normal;font-weight:300">'. esc_html__('Lorem Ipsum is simply dummy text of the printing','architect-designer') .'</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"33.33%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
<div class="wp-block-buttons"><!-- wp:button {"textColor":"background","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"extra-small","fontFamily":"rubik"} -->
<div class="wp-block-button has-custom-font-size has-rubik-font-family has-extra-small-font-size" style="font-style:normal;font-weight:400"><a class="wp-block-button__link has-background-color has-text-color has-link-color wp-element-button">'. esc_html__('Explore More','architect-designer') .'</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:columns {"className":"product-section-static","style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns product-section-static" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--40)"><!-- wp:column {"verticalAlignment":"center","className":"static-product","style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
<div class="wp-block-column is-vertically-aligned-center static-product"><!-- wp:image {"id":13,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/product01.png" alt="" class="wp-image-13"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|secaccent"}}},"typography":{"fontStyle":"normal","fontWeight":"300"}},"textColor":"secaccent"} -->
<p class="has-text-align-left has-secaccent-color has-text-color has-link-color" style="font-style:normal;font-weight:300">'. esc_html__('Brand Name Here','architect-designer') .'</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"left","style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|secaccent"}}}},"textColor":"secaccent","fontSize":"medium","fontFamily":"rubik"} -->
<h2 class="wp-block-heading has-text-align-left has-secaccent-color has-text-color has-link-color has-rubik-font-family has-medium-font-size" style="font-style:normal;font-weight:600">'. esc_html__('Product Name Here','architect-designer') .'</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|secaccent"}}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"secaccent","fontSize":"medium","fontFamily":"rubik"} -->
<p class="has-text-align-left has-secaccent-color has-text-color has-link-color has-rubik-font-family has-medium-font-size" style="font-style:normal;font-weight:600">'. esc_html__('$159.00','architect-designer') .'</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","className":"static-product","style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
<div class="wp-block-column is-vertically-aligned-center static-product"><!-- wp:image {"id":13,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/product02.png" alt="" class="wp-image-13"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|secaccent"}}},"typography":{"fontStyle":"normal","fontWeight":"300"}},"textColor":"secaccent"} -->
<p class="has-text-align-left has-secaccent-color has-text-color has-link-color" style="font-style:normal;font-weight:300">'. esc_html__('Brand Name Here','architect-designer') .'</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"left","style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|secaccent"}}}},"textColor":"secaccent","fontSize":"medium","fontFamily":"rubik"} -->
<h2 class="wp-block-heading has-text-align-left has-secaccent-color has-text-color has-link-color has-rubik-font-family has-medium-font-size" style="font-style:normal;font-weight:600">'. esc_html__('Product Name Here','architect-designer') .'</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|secaccent"}}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"secaccent","fontSize":"medium","fontFamily":"rubik"} -->
<p class="has-text-align-left has-secaccent-color has-text-color has-link-color has-rubik-font-family has-medium-font-size" style="font-style:normal;font-weight:600">'. esc_html__('$159.00','architect-designer') .'</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","className":"static-product","style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
<div class="wp-block-column is-vertically-aligned-center static-product"><!-- wp:image {"id":13,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/product03.png" alt="" class="wp-image-13"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|secaccent"}}},"typography":{"fontStyle":"normal","fontWeight":"300"}},"textColor":"secaccent"} -->
<p class="has-text-align-left has-secaccent-color has-text-color has-link-color" style="font-style:normal;font-weight:300">'. esc_html__('Brand Name Here','architect-designer') .'</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"left","style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|secaccent"}}}},"textColor":"secaccent","fontSize":"medium","fontFamily":"rubik"} -->
<h2 class="wp-block-heading has-text-align-left has-secaccent-color has-text-color has-link-color has-rubik-font-family has-medium-font-size" style="font-style:normal;font-weight:600">'. esc_html__('Product Name Here','architect-designer') .'</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|secaccent"}}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"secaccent","fontSize":"medium","fontFamily":"rubik"} -->
<p class="has-text-align-left has-secaccent-color has-text-color has-link-color has-rubik-font-family has-medium-font-size" style="font-style:normal;font-weight:600">'. esc_html__('$159.00','architect-designer') .'</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","className":"static-product","style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
<div class="wp-block-column is-vertically-aligned-center static-product"><!-- wp:image {"id":13,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/product04.png" alt="" class="wp-image-13"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|secaccent"}}},"typography":{"fontStyle":"normal","fontWeight":"300"}},"textColor":"secaccent"} -->
<p class="has-text-align-left has-secaccent-color has-text-color has-link-color" style="font-style:normal;font-weight:300">'. esc_html__('Brand Name Here','architect-designer') .'</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"left","style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|secaccent"}}}},"textColor":"secaccent","fontSize":"medium","fontFamily":"rubik"} -->
<h2 class="wp-block-heading has-text-align-left has-secaccent-color has-text-color has-link-color has-rubik-font-family has-medium-font-size" style="font-style:normal;font-weight:600">'. esc_html__('Product Name Here','architect-designer') .'</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|secaccent"}}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"secaccent","fontSize":"medium","fontFamily":"rubik"} -->
<p class="has-text-align-left has-secaccent-color has-text-color has-link-color has-rubik-font-family has-medium-font-size" style="font-style:normal;font-weight:600">'. esc_html__('$159.00','architect-designer') .'</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->',
);
}