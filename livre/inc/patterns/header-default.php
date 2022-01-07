<?php
/**
 * Default header block pattern
 */
return array(
	'title'      => __( 'Default header', 'livre' ),
	'categories' => array( 'header' ),
	'blockTypes' => array( 'core/template-part/header' ),
	'content'    => '<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"bottom":"var(--wp--custom--spacing--large, 10rem)","top":"var(--wp--custom--spacing--small, 1.25rem)"}}},"layout":{"type":"flex","justifyContent":"left"}} -->
					<div class="wp-block-group alignwide" style="padding-top:var(--wp--custom--spacing--small, 1.25rem);padding-bottom:var(--wp--custom--spacing--large, 10rem)"><!-- wp:navigation {"layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"left"},"overlayMenu":"always","overlayBackgroundColor":"background","overlayTextColor":"foreground","style":{"typography":{"fontStyle":"normal","fontWeight":"300"}},"fontSize":"x-large"} -->

					<!-- wp:page-list {"isNavigationChild":true,"showSubmenuIcon":true,"openSubmenusOnClick":false} /-->
					<!-- /wp:navigation -->

					<!-- wp:site-title {"style":{"spacing":{"padding":{"top":"0.35ch"}},"typography":{"textTransform":"uppercase"}}} /--></div>
					<!-- /wp:group -->',
);
