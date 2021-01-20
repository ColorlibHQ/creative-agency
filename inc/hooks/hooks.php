<?php 
/**
 * @Packge 	   : Colorlib
 * @Version    : 1.0
 * @Author 	   : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */
 
	// Block direct access
	if( !defined( 'ABSPATH' ) ){
		exit( 'Direct script access denied.' );
	}

	/**
	 *
	 * Before Wrapper
	 *
	 * @Preloader
	 *
	 */
	add_action( 'creativeagency_preloader', 'creativeagency_site_preloader', 10 );

	/**
	 * Header
	 *
	 * @Header Menu
	 * @Header Bottom
	 * 
	 */

	add_action( 'creativeagency_header', 'creativeagency_header_cb', 10 );

	/**
	 * Hook for footer
	 *
	 */
	add_action( 'creativeagency_footer', 'creativeagency_footer_area', 10 );

	/**
	 * Hook for Blog, single, page, search, archive pages wrapper.
	 */
	add_action( 'creativeagency_wrp_start', 'creativeagency_wrp_start_cb', 10 );
	add_action( 'creativeagency_wrp_end', 'creativeagency_wrp_end_cb', 10 );
	
	/**
	 * Hook for Blog, single, search, archive pages column.
	 */
	add_action( 'creativeagency_blog_col_start', 'creativeagency_blog_col_start_cb', 10 );
	add_action( 'creativeagency_blog_col_end', 'creativeagency_blog_col_end_cb', 10 );
	
	/**
	 * Hook for blog posts thumbnail.
	 */
	add_action( 'creativeagency_blog_posts_thumb', 'creativeagency_blog_posts_thumb_cb', 10 );

	/**
	 * Hook for blog details wrapper.
	 */
	add_action( 'creativeagency_blog_details_wrap_start', 'creativeagency_blog_details_wrap_start_cb', 10 );
	add_action( 'creativeagency_blog_details_wrap_end', 'creativeagency_blog_details_wrap_end_cb', 10 );

	/**
	 * Hook for blog posts title.
	 */
	add_action( 'creativeagency_blog_posts_title', 'creativeagency_blog_posts_title_cb', 10 );

	/**
	 * Hook for blog posts meta.
	 */
	add_action( 'creativeagency_blog_posts_meta', 'creativeagency_blog_posts_meta_cb', 10 );

	/**
	 * Hook for blog posts excerpt.
	 */
	add_action( 'creativeagency_blog_posts_excerpt', 'creativeagency_blog_posts_excerpt_cb', 10 );
	// add_action( 'creativeagency_blog_posts_excerpt', 'creativeagency_blog_read_more_cb', 10 );

	/**
	 * Hook for blog posts info links.
	 */
	add_action( 'creativeagency_blog_posts_info_link', 'creativeagency_blog_posts_info_link_cb', 10 );

	/**
	 * Hook for blog posts content.
	 */
	add_action( 'creativeagency_blog_posts_content', 'creativeagency_blog_posts_content_cb', 10 );
	
	/**
	 * Hook for blog single post social share option.
	 */
	add_action( 'creativeagency_blog_posts_share', 'creativeagency_blog_posts_share_cb', 10 );

	/**
	 * Hook for blog sidebar.
	 */
	add_action( 'creativeagency_blog_sidebar', 'creativeagency_blog_sidebar_cb', 10 );
	
	/**
	 * Hook for blog single post meta category, tag, next - previous link and comments form.
	 */
	add_action( 'creativeagency_blog_single_meta', 'creativeagency_blog_single_meta_cb', 10 );
	
	/**
	 * Hook for page content.
	 */
	add_action( 'creativeagency_page_content', 'creativeagency_page_content_cb', 10 );
	
	
	/**
	 * Hook for 404 page.
	 */
	add_action( 'creativeagency_fof', 'creativeagency_fof_cb', 10 );

	

?>