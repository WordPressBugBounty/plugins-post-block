<?php
wp_head();
// Getting Admin Options.
$fpblock_admin_opt_root      = get_option( '_fpblock_options' );
$fpblock_smooth_scroll_show  = isset( $fpblock_admin_opt_root['fpblock_smooth_scroll_show'] ) ? $fpblock_admin_opt_root['fpblock_smooth_scroll_show'] : '';
$fpblock_email_nl_show       = isset( $fpblock_admin_opt_root['fpblock_email_nl_show'] ) ? $fpblock_admin_opt_root['fpblock_email_nl_show'] : '';
$fpblock_email_shortcode     = isset( $fpblock_admin_opt_root['fpblock_email_shortcode'] ) ? $fpblock_admin_opt_root['fpblock_email_shortcode'] : '';
$fpblock_css_for_single_page = isset( $fpblock_admin_opt_root['fpblock_css_for_single_page'] ) ? $fpblock_admin_opt_root['fpblock_css_for_single_page'] : '';
$fpblock_toc_counter         = isset( $fpblock_admin_opt_root['fpblock_toc_counter'] ) ? $fpblock_admin_opt_root['fpblock_toc_counter'] : '';

/**
 * Get Theme Name.
 * Roar individual theme name.
 */
$frhd_theme_obj  = wp_get_theme();
$frhd_theme_name = $frhd_theme_obj->get( 'Name' );
if ( 'Twenty Twenty-Four' !== $frhd_theme_name ) {

  get_header();
}
wp_enqueue_style( 'single-post-template-1' );
if ( 'on-posts' === $fpblock_smooth_scroll_show ) {

  wp_enqueue_style( 'smooth-scroll-style' );
  wp_enqueue_script( 'smooth-scroll-script' );
}
wp_enqueue_script( 'single-post-template' );
wp_enqueue_style( 'fpblock-fa5-v4-shims', 'https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/all.min.css?ver=5.15.5', array(), '5.15.5', 'all' );
wp_enqueue_style( 'fpblock-fa5-v4-shims', 'https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/v4-shims.min.css?ver=5.15.5', array(), '5.15.5', 'all' );

// Getting Post Data.
$frhd_post_id       = get_the_ID();
$frhd_category_name = get_the_category( get_the_ID() );
$frhd_auth_id       = get_post_field( 'post_author', $frhd_post_id );
$frhd_author_name   = get_the_author_meta('display_name', get_post_field('post_author', $frhd_post_id));
$frhd_author_slug   = get_the_author_meta('user_nicename', get_post_field('post_author', $frhd_post_id));
$frhd_author_desc   = get_the_author_meta('description', get_post_field('post_author', $frhd_post_id));
$frhd_post_tags     = get_the_terms(get_the_ID(), 'post_tag');

// Getting Post Meta.
$frhd_post_opt_root     = get_post_meta( get_the_ID(), '_frhd_fp_post_options', true );
$frhd_post_opt_user     = isset( $frhd_post_opt_root['frhd_fp_user'] ) ? $frhd_post_opt_root['frhd_fp_user'] : '';
$frhd_post_opt_badge    = isset( $frhd_post_opt_root['frhd_fp_badge'] ) ? $frhd_post_opt_root['frhd_fp_badge'] : '';
$frhd_post_opt_role     = isset( $frhd_post_opt_root['frhd_fp_role'] ) ? $frhd_post_opt_root['frhd_fp_role'] : '';
$frhd_post_opt_crown    = isset( $frhd_post_opt_root['frhd_fp_crown_on'] ) ? $frhd_post_opt_root['frhd_fp_crown_on'] : '';
$frhd_post_opt_crown    = $frhd_post_opt_crown ? 'frhd-fp-crown-on' : '';
$frhd_post_opt_name     = get_the_author_meta( 'display_name', $frhd_post_opt_user );
$frhd_post_opt_slag     = get_the_author_meta( 'user_nicename', $frhd_post_opt_user );

// Getting Auth Meta.
$frhd_auth_meta_root   = get_user_meta( $frhd_auth_id, '_frhd_fp_user_options', true );
$frhd_auth_meta_desi   = isset( $frhd_auth_meta_root['frhd_pb_auth_designation'] ) ? $frhd_auth_meta_root['frhd_pb_auth_designation'] : '';
$frhd_auth_meta_social = isset( $frhd_auth_meta_root['frhd_pb_socials'] ) ? $frhd_auth_meta_root['frhd_pb_socials'] : '';

// Getting User Meta.
$frhd_user_meta_root      = get_user_meta( $frhd_auth_id, '_frhd_fp_user_options', true );
$frhd_pb_profile_img_from = isset( $frhd_user_meta_root['frhd_pb_profile_img_from'] ) ? $frhd_user_meta_root['frhd_pb_profile_img_from'] : '' ;
$frhd_pb_profile_img      = isset( $frhd_user_meta_root['frhd_pb_profile_img'] ) ? $frhd_user_meta_root['frhd_pb_profile_img'] : '' ;
$frhd_pb_auth_name_from   = isset( $frhd_user_meta_root['frhd_pb_auth_name_from'] ) ? $frhd_user_meta_root['frhd_pb_auth_name_from'] : '' ;
$frhd_pb_auth_name        = isset( $frhd_user_meta_root['frhd_pb_auth_name'] ) ? $frhd_user_meta_root['frhd_pb_auth_name'] : '' ;
$frhd_pb_auth_designation = isset( $frhd_user_meta_root['frhd_pb_auth_designation'] ) ? $frhd_user_meta_root['frhd_pb_auth_designation'] : '' ;
$frhd_pb_auth_bio_from    = isset( $frhd_user_meta_root['frhd_pb_auth_bio_from'] ) ? $frhd_user_meta_root['frhd_pb_auth_bio_from'] : '' ;
$frhd_pb_auth_bio         = isset( $frhd_user_meta_root['frhd_pb_auth_bio'] ) ? $frhd_user_meta_root['frhd_pb_auth_bio'] : '' ;
$frhd_pb_auth_bio_limit_count = isset( $frhd_user_meta_root['frhd_pb_auth_bio_limit_count'] ) ? $frhd_user_meta_root['frhd_pb_auth_bio_limit_count'] : '' ;
$frhd_pb_socials          = isset( $frhd_user_meta_root['frhd_pb_socials'] ) ? $frhd_user_meta_root['frhd_pb_socials'] : '' ;

/**
 * Execute Custom CSS
 * Must use html_entity_decode()
 * So that HTML entities not being converted
 * For example: ">" converted into "&gt;"
 */
if ( ! empty( $fpblock_css_for_single_page ) ) {

  echo '<style type="text/css">' . html_entity_decode( $fpblock_css_for_single_page ) . '</style>';
}
?>
<scrollbar>
<div id="frhd-fp-article-main" class="toc-type-<?php echo $fpblock_toc_counter; ?>">
  <div class="frhd-fp-article-content">
    <div class="frhd-fp-article-heading<?php echo has_post_thumbnail() ? '' : ' frhd-no-thumb'; ?>">
      <div class="frhd-fp-article-heading-content">
        <?php
        if ( has_post_thumbnail() ) {

          echo '<div class="frhd-fp-article-featured-img">' . get_the_post_thumbnail() . '</div>';
        }
        ?>
        <div class="frhd-fp-article-container">
          <div class="frhd__cat-wrapper">
          <?php
          foreach ($frhd_category_name as $frhd_category) {

            if ($frhd_category->cat_name === 'Uncategorized') {
                continue;
            }
            
            echo '<span class="frhd__cat-name">
              <a href="' . esc_url(get_category_link($frhd_category->cat_ID)) . '">' . esc_html($frhd_category->cat_name) . '</a>
            </span>';
          }        
          ?>
          </div>
          <h1 class="frhd-article-main-heading"><?php echo get_the_title(); ?></h1>
          <div class="frhd-article-publish-date" data-fetch="date">
          <?php
          $post_modified_time = get_the_modified_time('U');
          $post_published_time = get_the_time('U');      
          if ($post_modified_time == $post_published_time) {
            echo '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" color="#000000" fill="none"><path d="M18 2V4M6 2V4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M11.9955 13H12.0045M11.9955 17H12.0045M15.991 13H16M8 13H8.00897M8 17H8.00897" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M3.5 8H20.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M2.5 12.2432C2.5 7.88594 2.5 5.70728 3.75212 4.35364C5.00424 3 7.01949 3 11.05 3H12.95C16.9805 3 18.9958 3 20.2479 4.35364C21.5 5.70728 21.5 7.88594 21.5 12.2432V12.7568C21.5 17.1141 21.5 19.2927 20.2479 20.6464C18.9958 22 16.9805 22 12.95 22H11.05C7.01949 22 5.00424 22 3.75212 20.6464C2.5 19.2927 2.5 17.1141 2.5 12.7568V12.2432Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M3 8H21" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg><span>Published: <time datetime="' . get_the_time('c') . '">' . get_the_time( 'j M, Y, g:i A' ) . '</time></span>';
          } else {
            echo '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" color="#000000" fill="none"><path d="M18 2V4M6 2V4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M11.9955 13H12.0045M11.9955 17H12.0045M15.991 13H16M8 13H8.00897M8 17H8.00897" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M3.5 8H20.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M2.5 12.2432C2.5 7.88594 2.5 5.70728 3.75212 4.35364C5.00424 3 7.01949 3 11.05 3H12.95C16.9805 3 18.9958 3 20.2479 4.35364C21.5 5.70728 21.5 7.88594 21.5 12.2432V12.7568C21.5 17.1141 21.5 19.2927 20.2479 20.6464C18.9958 22 16.9805 22 12.95 22H11.05C7.01949 22 5.00424 22 3.75212 20.6464C2.5 19.2927 2.5 17.1141 2.5 12.7568V12.2432Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M3 8H21" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg><span>Updated: <time datetime="' . get_the_modified_time('c') . '">' . get_the_modified_time( 'j M, Y, g:i A' ) . '</time></span>';
          }
          ?>
          </div>
          <div class="frhd-fp-article-heading-inner">
          <div class="frhd-fp-article-author">
            <div class="frhd-fp-article-author-meta">
                <p class="frhd-fp-article-auth-prefix"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" color="#000000" fill="none">
    <path d="M15.2141 5.98239L16.6158 4.58063C17.39 3.80646 18.6452 3.80646 19.4194 4.58063C20.1935 5.3548 20.1935 6.60998 19.4194 7.38415L18.0176 8.78591M15.2141 5.98239L6.98023 14.2163C5.93493 15.2616 5.41226 15.7842 5.05637 16.4211C4.70047 17.058 4.3424 18.5619 4 20C5.43809 19.6576 6.94199 19.2995 7.57889 18.9436C8.21579 18.5877 8.73844 18.0651 9.78375 17.0198L18.0176 8.78591M15.2141 5.98239L18.0176 8.78591" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
    <path d="M11 20H17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
</svg><span>Article By</span></p>
                <div class="frhd-fp-article-auth-meta-inner">
                  <a href="<?php echo get_site_url() . '/author/' . $frhd_author_slug; ?>" class="frhd-fp-author-image">
                  <?php
                  if ( 'media_library' === $frhd_pb_profile_img_from && ! empty( $frhd_pb_profile_img['thumbnail'] ) ) {
                    
                    echo '<img src="' . $frhd_pb_profile_img['thumbnail'] . '" alt="' . $frhd_pb_profile_img['alt'] . '">';
                  } else {

                    echo get_avatar($frhd_auth_id, 56);
                  }
                  ?>
                  </a> 
                  <div class="frhd-fp-article-author-about">
                    <span><a href="<?php echo get_site_url() . '/author/' . $frhd_author_slug; ?>"><?php echo $frhd_author_name; ?></a></span>
                    <div class="frhd-fp-article-author-title"><?php echo $frhd_pb_auth_designation ? $frhd_pb_auth_designation : '<a class="frhd-fp-auth-missing" href="' . esc_url( get_site_url() . '/wp-admin/user-edit.php?user_id=' . $frhd_auth_id . '#frhd-targeted-des-to-scroll' ) . '" target="_blank">Add a designation<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M352 0c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9L370.7 96 201.4 265.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L416 141.3l41.4 41.4c9.2 9.2 22.9 11.9 34.9 6.9s19.8-16.6 19.8-29.6V32c0-17.7-14.3-32-32-32H352zM80 32C35.8 32 0 67.8 0 112V432c0 44.2 35.8 80 80 80H400c44.2 0 80-35.8 80-80V320c0-17.7-14.3-32-32-32s-32 14.3-32 32V432c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V112c0-8.8 7.2-16 16-16H192c17.7 0 32-14.3 32-32s-14.3-32-32-32H80z"/></svg></a>'; ?></div>
                  </div>
                </div>
            </div>
            <?php
            if ( $frhd_post_opt_user ) {

              $rev_user_meta_root  = get_user_meta( $frhd_post_opt_user, '_frhd_fp_user_options', true );
              $rev_profile_img_from = isset( $rev_user_meta_root['frhd_pb_profile_img_from'] ) ? $rev_user_meta_root['frhd_pb_profile_img_from'] : '';
              $rev_profile_img      = isset( $rev_user_meta_root['frhd_pb_profile_img'] ) ? $rev_user_meta_root['frhd_pb_profile_img'] : '';
              $rev_auth_designation = isset( $rev_user_meta_root['frhd_pb_auth_designation'] ) ? $rev_user_meta_root['frhd_pb_auth_designation'] : '';

              echo '<div class="frhd-fp-article-author-meta">
                <p class="frhd-fp-article-auth-prefix"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" color="#000000" fill="none">
                <path d="M21.8966 6.63081C22.2168 7.52828 21.7678 8.14274 20.8986 8.748C20.1973 9.23636 19.3039 9.76542 18.3572 10.6699C17.4291 11.5566 16.5234 12.6246 15.7184 13.6758C14.743 14.9496 13.8206 16.2801 13.0087 17.6655C12.7026 18.1902 12.1521 18.5078 11.5619 18.4999C10.9716 18.4919 10.4293 18.1597 10.1364 17.6267C9.38765 16.264 8.80986 15.7259 8.5443 15.5326C7.8075 14.9963 7 14.9035 7 13.7335C7 12.7762 7.74623 12.0002 8.66675 12.0002C9.32548 12.0266 9.92854 12.3088 10.4559 12.6927C10.7981 12.9418 11.1605 13.2711 11.5375 13.7047C11.9799 13.051 12.5131 12.2968 13.1107 11.5163C13.9787 10.3829 15.0032 9.16689 16.1019 8.11719C17.1819 7.08531 18.4306 6.11941 19.7542 5.60872C20.6172 5.27573 21.5764 5.73333 21.8966 6.63081Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M4.43961 12.0755C4.28117 12.0236 4.13796 11.9909 4.01252 11.9713C3.94995 11.9615 3.89226 11.955 3.83976 11.951L3.69887 11.9454C2.76061 11.9454 2 12.728 2 13.6933C2 14.5669 2.62294 15.2908 3.43675 15.4205C3.4652 15.4355 3.51137 15.4624 3.57407 15.5076C3.84474 15.7025 4.43367 16.2452 5.19686 17.6193C5.49542 18.1569 6.04811 18.4918 6.64983 18.4999C7.06202 18.5054 7.45518 18.3567 7.76226 18.0924M15 5.5C13.6509 6.015 12.3781 6.98904 11.2773 8.02963C10.8929 8.39299 10.5174 8.77611 10.1542 9.16884" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
            </svg><span>' . $frhd_post_opt_badge . ' By</span></p>
                  <div class="frhd-fp-article-auth-meta-inner">
                  <a href="' . get_site_url() . '/author/' . $frhd_post_opt_slag . '" class="frhd-fp-author-image ' . $frhd_post_opt_crown . '">';
                  if ( 'media_library' === $rev_profile_img_from && ! empty( $rev_profile_img['thumbnail'] ) ) {
                      
                    echo '<img src="' . $rev_profile_img['thumbnail'] . '" alt="' . $rev_profile_img['alt'] . '">';
                  } else {

                    echo get_avatar($frhd_post_opt_user, 56);
                  }
                  echo '</a>';
              echo '<div class="frhd-fp-article-author-about">
                  <div class="frhd-fp-article-about-inner">
                      <span class="frhd-fp-article-author-name"><a href="' . get_site_url() . '/author/' . $frhd_post_opt_slag . '">' . $frhd_post_opt_name . '</a></span>
                  </div>
                  <span class="frhd-fp-article-author-title">';
                  echo $frhd_post_opt_role ? $frhd_post_opt_role : $rev_auth_designation;
                  echo '</span>
                </div>
                </div>
              </div>';

            }
            ?>
          </div>
          </div>
      </div>
    </div>
    </div>
    <div id="frhd-fp-article-content-inner">
      <div class="frhd-fp-article-aside">
       <div id="frhd-fp-article-toc">
       <div id="frhd-fp-article-toc-inner">
        <h2><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" color="#000000" fill="none"><path d="M7.5 4.94531H16C16.8284 4.94531 17.5 5.61688 17.5 6.44531V7.94531" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" /><path d="M15 12.9453H9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" /><path d="M12 16.9453H9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" /><path d="M18.497 2L6.30767 2.00002C5.81071 2.00002 5.30241 2.07294 4.9007 2.36782C3.62698 3.30279 2.64539 5.38801 4.62764 7.2706C5.18421 7.7992 5.96217 7.99082 6.72692 7.99082H18.2835C19.077 7.99082 20.5 8.10439 20.5 10.5273V17.9812C20.5 20.2007 18.7103 22 16.5026 22H7.47246C5.26886 22 3.66619 20.4426 3.53959 18.0713L3.5061 5.16638" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" /></svg><span>Table of Contents</span></h2>
          <ul id="toc-list"></ul>
          <div class="frhd-fp-socials-right">
            <div class="frhd-fp-copy-container" onclick="copyToClipboard()">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" id="linkIcon"><g clip-path="url(#clip0_3168_578)"><path d="M4.16699 12.5C3.39042 12.5 3.00214 12.5 2.69585 12.3731C2.28747 12.2039 1.96302 11.8795 1.79386 11.4711C1.66699 11.1648 1.66699 10.7765 1.66699 9.99996V4.33329C1.66699 3.39987 1.66699 2.93316 1.84865 2.57664C2.00844 2.26304 2.2634 2.00807 2.57701 1.84828C2.93353 1.66663 3.40024 1.66663 4.33366 1.66663H10.0003C10.7769 1.66663 11.1652 1.66663 11.4715 1.79349C11.8798 1.96265 12.2043 2.28711 12.3735 2.69549C12.5003 3.00177 12.5003 3.39006 12.5003 4.16663M10.167 18.3333H15.667C16.6004 18.3333 17.0671 18.3333 17.4236 18.1516C17.7372 17.9918 17.9922 17.7369 18.152 17.4233C18.3337 17.0668 18.3337 16.6 18.3337 15.6666V10.1666C18.3337 9.23321 18.3337 8.7665 18.152 8.40998C17.9922 8.09637 17.7372 7.8414 17.4236 7.68162C17.0671 7.49996 16.6004 7.49996 15.667 7.49996H10.167C9.23357 7.49996 8.76686 7.49996 8.41034 7.68162C8.09674 7.8414 7.84177 8.09637 7.68198 8.40998C7.50033 8.7665 7.50033 9.23321 7.50033 10.1666V15.6666C7.50033 16.6 7.50033 17.0668 7.68198 17.4233C7.84177 17.7369 8.09674 17.9918 8.41034 18.1516C8.76686 18.3333 9.23357 18.3333 10.167 18.3333Z" stroke="#525157" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/></g><defs><clipPath id="clip0_3168_578"><rect width="20" height="20" fill="white"/></clipPath></defs></svg>
                <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512" style="display:none" id="checkIcon"><path d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"/></svg>
                <span class="copy">Copy link</span>
            </div>
            <a href="https://twitter.com/share?url=<?php echo urlencode(get_the_permalink()); ?>&text=<?php echo urlencode(get_the_title()); ?>&via=forhad_php" target="_blank">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none"><g clip-path="url(#clip0_3168_115)"><path fill-rule="evenodd" clip-rule="evenodd" d="M13.2879 19.1667L8.66337 12.5751L2.87405 19.1667H0.424805L7.57674 11.026L0.424805 0.833374H6.71309L11.0717 7.04589L16.5327 0.833374H18.982L12.1619 8.59711L19.5762 19.1667H13.2879ZM16.0154 17.3084H14.3665L3.93176 2.69171H5.58092L9.7601 8.54434L10.4828 9.55993L16.0154 17.3084Z" fill="#525157"/>
              </g><defs><clipPath id="clip0_3168_115"><rect width="20" height="20" fill="white"/></clipPath></defs></svg>
            </a>
            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(get_the_permalink()); ?>&display=popup&ref=Pluginic&src=share_button" target="_blank" rel="noopener noreferrer">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none"><g id="Social icon" clip-path="url(#clip0_3168_567)"><path id="Vector" d="M20 10C20 4.47715 15.5229 0 10 0C4.47715 0 0 4.47715 0 10C0 14.9912 3.65684 19.1283 8.4375 19.8785V12.8906H5.89844V10H8.4375V7.79688C8.4375 5.29063 9.93047 3.90625 12.2146 3.90625C13.3084 3.90625 14.4531 4.10156 14.4531 4.10156V6.5625H13.1922C11.95 6.5625 11.5625 7.3334 11.5625 8.125V10H14.3359L13.8926 12.8906H11.5625V19.8785C16.3432 19.1283 20 14.9912 20 10Z" fill="#525157"/><path id="Vector_2" d="M13.8926 12.8906L14.3359 10H11.5625V8.125C11.5625 7.33418 11.95 6.5625 13.1922 6.5625H14.4531V4.10156C14.4531 4.10156 13.3088 3.90625 12.2146 3.90625C9.93047 3.90625 8.4375 5.29063 8.4375 7.79688V10H5.89844V12.8906H8.4375V19.8785C9.47287 20.0405 10.5271 20.0405 11.5625 19.8785V12.8906H13.8926Z" fill="white"/></g><defs><clipPath id="clip0_3168_567"><rect width="20" height="20" fill="white"/></clipPath></defs></svg>
            </a>
            <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo urlencode(get_the_permalink()); ?>" target="_blank" rel="noopener noreferrer">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none"><g id="Social icon" clip-path="url(#clip0_3168_558)"><path id="Vector" d="M18.5236 0H1.47639C1.08483 0 0.709301 0.155548 0.432425 0.432425C0.155548 0.709301 0 1.08483 0 1.47639V18.5236C0 18.9152 0.155548 19.2907 0.432425 19.5676C0.709301 19.8445 1.08483 20 1.47639 20H18.5236C18.9152 20 19.2907 19.8445 19.5676 19.5676C19.8445 19.2907 20 18.9152 20 18.5236V1.47639C20 1.08483 19.8445 0.709301 19.5676 0.432425C19.2907 0.155548 18.9152 0 18.5236 0ZM5.96111 17.0375H2.95417V7.48611H5.96111V17.0375ZM4.45556 6.1625C4.11447 6.16058 3.7816 6.05766 3.49895 5.86674C3.21629 5.67582 2.99653 5.40544 2.8674 5.08974C2.73826 4.77404 2.70554 4.42716 2.77336 4.09288C2.84118 3.7586 3.0065 3.4519 3.24846 3.21148C3.49042 2.97107 3.79818 2.80772 4.13289 2.74205C4.4676 2.67638 4.81426 2.71133 5.12913 2.84249C5.44399 2.97365 5.71295 3.19514 5.90205 3.47901C6.09116 3.76288 6.19194 4.09641 6.19167 4.4375C6.19488 4.66586 6.15209 4.89253 6.06584 5.104C5.97959 5.31547 5.85165 5.50742 5.68964 5.66839C5.52763 5.82936 5.33487 5.95607 5.12285 6.04096C4.91083 6.12585 4.68389 6.16718 4.45556 6.1625ZM17.0444 17.0458H14.0389V11.8278C14.0389 10.2889 13.3847 9.81389 12.5403 9.81389C11.6486 9.81389 10.7736 10.4861 10.7736 11.8667V17.0458H7.76667V7.49306H10.6583V8.81667H10.6972C10.9875 8.22917 12.0042 7.225 13.5556 7.225C15.2333 7.225 17.0458 8.22083 17.0458 11.1375L17.0444 17.0458Z" fill="#525157"/></g><defs><clipPath id="clip0_3168_558"><rect width="20" height="20" fill="white"/></clipPath></defs></svg>
            </a>
           </div>
        </div>
       </div>
      </div>
          <div id="frhd-fp-article-body">
          <div id="frhd-fp-article-get-content" class="frhd-fp-article-the-content">
          <?php
          $frhdfp_blocks = parse_blocks( get_the_content() );
          $frhdfp_content_markup = '';
          foreach ( $frhdfp_blocks as $block ) {

            $frhdfp_content_markup .= render_block( $block );
          }
          echo $frhdfp_content_markup;
          ?>
          </div>
      <div class="frhd-fp-article-bottom">
      <?php if ( $fpblock_email_nl_show ) : ?>
          <div  class="frhd-fp-article-socials">
          <?php
          if ( $frhd_post_tags && ! is_wp_error( $frhd_post_tags ) ) {

            echo '<div class="frhd-post-tags">
              <span class="frhd-tags-label">Tags:</span>';
              foreach ($frhd_post_tags as $tag) {

                echo '<a href="' . esc_url(get_term_link($tag)) . '" class="frhd-tag">' . esc_html($tag->name) . '</a>';
              }
            echo '</div>';
          }
          ?>
          </div>
          <div class="frhd-fp-newsletter">
          <?php
          echo '<div class="frhd-fp-newsletter-content">' . wpautop( $fpblock_email_content ) . '</div>';
          echo do_shortcode( $fpblock_email_shortcode );
          ?>
          </div>
          <?php endif; // If the form show after content. ?>
          <div class="frhd-fp-about-author">
            <?php
            if ( is_user_logged_in() ) {
              echo '<a class="frhd-fp-author-edit" href="' . esc_url( get_site_url() . '/wp-admin/user-edit.php?user_id=' . $frhd_auth_id . '#frhd-fp-targeted-to-scroll' ) . '" target="_blank">Edit With Custom Options<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z"/></svg></a>';
            }

            echo '<div class="frhd-fp-about-author-inner">';
            if ( 'media_library' === $frhd_pb_profile_img_from && ! empty( $frhd_pb_profile_img['thumbnail'] ) ) {
                              
              echo '<img src="' . $frhd_pb_profile_img['thumbnail'] . '" alt="' . $frhd_pb_profile_img['alt'] . '">';
            } else {

              echo get_avatar($frhd_auth_id, 56);
            }
            echo '<div>
              <h5>' . $frhd_author_name . '</h5>
              <p>' . $frhd_pb_auth_designation . '</p>
            </div>';
            echo '</div>';
            
            if ( $frhd_author_desc ) {

              echo wpautop( $frhd_author_desc );
            } else {

              echo '<p><a class="frhd-fp-auth-missing" href="' . esc_url( get_site_url() . '/wp-admin/user-edit.php?user_id=' . $frhd_auth_id . '#description' ) . '" target="_blank">Write a bio for author<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M352 0c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9L370.7 96 201.4 265.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L416 141.3l41.4 41.4c9.2 9.2 22.9 11.9 34.9 6.9s19.8-16.6 19.8-29.6V32c0-17.7-14.3-32-32-32H352zM80 32C35.8 32 0 67.8 0 112V432c0 44.2 35.8 80 80 80H400c44.2 0 80-35.8 80-80V320c0-17.7-14.3-32-32-32s-32 14.3-32 32V432c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V112c0-8.8 7.2-16 16-16H192c17.7 0 32-14.3 32-32s-14.3-32-32-32H80z"/></svg></a></p>';
            }
            ?>
            <div class="frhd-fp-author-socials">
              <div class="frhd-fp-author-socials-inner">
                <?php
                if ( ! empty( $frhd_auth_meta_social ) ) {

                  foreach ( $frhd_auth_meta_social as $frhd_socials ) {
                
                    echo '<a href="' . esc_url( $frhd_socials['frhd_pb_social_link'] ) . '" target="_blank" class=""><i class="' . esc_attr( $frhd_socials['frhd_pb_social_icon'] ) . '"></i></a>';
                  }
                }
                ?>
              </div>
              <a href="<?php echo get_author_posts_url( $frhd_auth_id ); ?>" target="_blank" class="frhd-fp-view-post"><span>View All Post</span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M502.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l370.7 0-73.4 73.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l128-128z"/></svg></a>
            </div>
          </div>
          <?php
          // Display Comment field.
          if (comments_open() || get_comments_number()) {

            comments_template();
          }
          ?>
      </div>
          </div>
    </div>
  </div>
</div>
</scrollbar>
<div id="frhd-fp-top-progress-bar">
	<div id="frhd-fp-progress-bar-thumb"></div>
</div>
<?php
// Footer
wp_footer();
if ( 'Twenty Twenty-Four' !== $frhd_theme_name ) {

  get_footer();
}
