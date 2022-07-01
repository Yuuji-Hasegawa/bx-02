<?php

add_theme_support('title-tag');
function set_my_title()
{
    if (is_404()) {
        $my_title = '見つかりませんでした';
    } elseif (is_archive()) {
        if (is_post_type_archive('news')) {
            $my_title = 'News';
        } elseif (is_post_type_archive('gallery')) {
            $my_title = 'Gallery';
        } elseif (is_post_type_archive('staff')) {
            $my_title = 'Staff';
        } elseif (is_post_type_archive('review')) {
            $my_title = 'Review';
        } elseif (is_category()) {
            $my_title = single_cat_title('', false);
        } elseif (is_tag()) {
            $my_title = '#' . single_tag_title('', false);
        } else {
            $my_title = 'ブログ';
        }
    } else {
        $my_title = get_the_title();
    }
    return $my_title;
}
function meta_title()
{
    $title = set_my_title();
    if (!is_front_page()) {
        $meta_title = $title . ' | ' . get_bloginfo('name');
    } else {
        $meta_title = get_bloginfo('name');
    }
    return $meta_title;
}
add_filter('pre_get_document_title', 'meta_title');

function get_page_title()
{
    global $post;
    $output = '<header class="c-hero"><h1 class="o-cover o-cover:heroInner">';
    if (is_front_page()) {
        $output .= '<span class="c-hero__icon">
        <svg width="40" height="26" viewBox="0 0 40 26" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path
            fill-rule="evenodd"
            clip-rule="evenodd"
            d="M34.8751 17.026H25.3882L30.1332 25.1604L34.8751 17.026ZM33.5541 17.785H26.7096L30.133 23.6537L33.5541 17.785Z"
            fill="currentColor"
          />
          <path
            fill-rule="evenodd"
            clip-rule="evenodd"
            d="M20.2654 25.1604H29.7529L25.0091 17.0254L20.2654 25.1604ZM21.5866 24.4014H28.4317L25.0091 18.5321L21.5866 24.4014Z"
            fill="currentColor"
          />
          <path
            fill-rule="evenodd"
            clip-rule="evenodd"
            d="M24.6281 17.026H15.1418L19.8856 25.1604L24.6281 17.026ZM23.307 17.785H16.4631L19.8855 23.6536L23.307 17.785Z"
            fill="currentColor"
          />
          <path
            fill-rule="evenodd"
            clip-rule="evenodd"
            d="M10.019 25.1604H19.5066L14.7628 17.0254L10.019 25.1604ZM11.3403 24.4014H18.1853L14.7628 18.5321L11.3403 24.4014Z"
            fill="currentColor"
          />
          <path
            fill-rule="evenodd"
            clip-rule="evenodd"
            d="M0 25.1604L9.48751 25.161L4.74376 17.026L0 25.1604ZM1.32123 24.4015L8.16623 24.4019L4.74373 18.5327L1.32123 24.4015Z"
            fill="currentColor"
          />
          <path
            fill-rule="evenodd"
            clip-rule="evenodd"
            d="M40.0001 8.51379H30.512L35.2563 16.6464L40.0001 8.51379ZM38.6787 9.27281H31.8335L35.2563 15.14L38.6787 9.27281Z"
            fill="currentColor"
          />
          <path
            fill-rule="evenodd"
            clip-rule="evenodd"
            d="M25.3887 16.6464H34.875L30.1318 8.51379L25.3887 16.6464ZM26.71 15.8874H33.5536L30.1318 10.0204L26.71 15.8874Z"
            fill="currentColor"
          />
          <path
            fill-rule="evenodd"
            clip-rule="evenodd"
            d="M29.7529 8.51379H20.2654L25.0091 16.6464L29.7529 8.51379ZM28.4315 9.27281H21.5868L25.0091 15.14L28.4315 9.27281Z"
            fill="currentColor"
          />
          <path
            fill-rule="evenodd"
            clip-rule="evenodd"
            d="M15.1418 16.6464H24.6281L19.8856 8.51379L15.1418 16.6464ZM16.4633 15.8874H23.3069L19.8855 10.0204L16.4633 15.8874Z"
            fill="currentColor"
          />
          <path
            fill-rule="evenodd"
            clip-rule="evenodd"
            d="M19.5066 8.51379H10.019L14.7628 16.6464L19.5066 8.51379ZM18.1851 9.27281H11.3405L14.7628 15.14L18.1851 9.27281Z"
            fill="currentColor"
          />
          <path
            fill-rule="evenodd"
            clip-rule="evenodd"
            d="M4.896 16.6464H14.3823L9.63975 8.51379L4.896 16.6464ZM6.21743 15.8874H13.061L9.63967 10.0204L6.21743 15.8874Z"
            fill="currentColor"
          />
          <path
            fill-rule="evenodd"
            clip-rule="evenodd"
            d="M30.512 8.13442L39.9995 8.13503L35.2551 0L30.512 8.13442ZM31.8331 7.3755L38.6781 7.37594L35.2552 1.50672L31.8331 7.3755Z"
            fill="currentColor"
          />
          <path
            fill-rule="evenodd"
            clip-rule="evenodd"
            d="M20.2654 8.13442L29.7529 8.13503L25.0091 0L20.2654 8.13442ZM21.5866 7.3755L28.4316 7.37594L25.0091 1.50672L21.5866 7.3755Z"
            fill="currentColor"
          />
          <path
            fill-rule="evenodd"
            clip-rule="evenodd"
            d="M10.019 8.13442L19.5066 8.13503L14.7628 0L10.019 8.13442ZM11.3403 7.3755L18.1853 7.37594L14.7628 1.50672L11.3403 7.3755Z"
            fill="currentColor"
          />
          <path
            fill-rule="evenodd"
            clip-rule="evenodd"
            d="M14.3823 0H4.896L9.63975 8.13442L14.3823 0ZM13.0612 0.759011H6.21728L9.63967 6.62761L13.0612 0.759011Z"
            fill="currentColor"
          />
        </svg>
      </span>';
        get_vars('site', 'name') ? $name = get_vars('site', 'name') : $name = get_bloginfo('name');
        $output .= '<span class="c-hero__logo">' . $name . '</span>';
    } elseif (is_404()) {
        $output .= '<span class="c-page-heading">Not Found.</span>';
    } elseif (is_page()) {
        if (is_page('privacy-policy')) {
            $output .= '<span class="c-page-heading">Privacy Policy</span>';
        } elseif (is_page('aboutus')) {
            $output .= '<span class="c-page-heading">About Us</span>';
        } else {
            $output .= '<span class="c-page-heading">' . ucfirst($post->post_name) . '</span>';
        }
    } elseif (is_archive()) {
        if (is_post_type_archive('news')) {
            $output .= '<span class="c-page-heading">News</span>';
        } elseif (is_post_type_archive('gallery')) {
            $output .= '<span class="c-page-heading">Gallery</span>';
        } elseif (is_post_type_archive('staff')) {
            $output .= '<span class="c-page-heading">Staff</span>';
        } elseif (is_post_type_archive('review')) {
            $output .= '<span class="c-page-heading">Review</span>';
        } elseif (is_category()) {
            $output .= '<span class="c-page-heading">' . single_cat_title('', false) . '</span>';
        } elseif (is_tag()) {
            $output .= '<span class="c-page-heading">#' . single_tag_title('', false) . '</span>';
        } else {
            $output .= '<span class="c-page-heading">Blog</span>';
        }
    } else {
        $output .= '<span class="c-page-heading">' . get_the_title() . '</span>';
    }
    $output .= '</h1><picture class="o-frame">';
    if (is_single() || is_page()) {
        if (has_post_thumbnail()) {
            $output .= '<img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAAAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="' . get_the_post_thumbnail_url($post->ID, 'full') . '" decoding="async" alt="" width="100%" height="100%" />';
        } elseif (is_single()) {
            $output .= '<source type="image/avif"
            data-srcset="' . get_template_directory_uri() . '/img/thumb.avif" />
        <source type="image/webp"
            data-srcset="' . get_template_directory_uri() . '/img/thumb.webp" />
        <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAAAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
            data-src="' . get_template_directory_uri() . '/img/thumb.png"
            decoding="async" alt="" width="100%" height="100%" />';
        } else {
            $output .= '<source type="image/avif"
        data-srcset="' . get_template_directory_uri() . '/img/hero.avif" />
    <source type="image/webp"
        data-srcset="' . get_template_directory_uri() . '/img/hero.webp" />
    <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAAAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
        data-src="' . get_template_directory_uri() . '/img/hero.png"
        decoding="async" alt="" width="100%" height="100%" />';
        }
    } else {
        $output .= '<source type="image/avif"
        data-srcset="' . get_template_directory_uri() . '/img/hero.avif" />
    <source type="image/webp"
        data-srcset="' . get_template_directory_uri() . '/img/hero.webp" />
    <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAAAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
        data-src="' . get_template_directory_uri() . '/img/hero.png"
        decoding="async" alt="" width="100%" height="100%" />';
    }
    $output .= '</picture><span class="c-hero__overlay"></span></header>';
    return $output;
}
function my_robots()
{
    if ('0' != get_option('blog_public')) {
        $robots = 'noindex, nofollow';
        return '<meta name="robots" content="' . $robots .'">';
    }
}
function get_my_canonical()
{
    global $post;
    $canonical = '';
    if (is_404()) {
        $protocol = empty($_SERVER["HTTPS"]) ? "http://" : "https://";
        $canonical = esc_url($protocol. $_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"]);
    } elseif (is_single() || is_page()) {
        $canonical = esc_url(get_permalink($post->ID));
    } elseif (is_archive()) {
        if (is_post_type_archive('news')) {
            $canonical = esc_url(home_url('/news'));
        } elseif (is_category()) {
            $cat = get_queried_object();
            $canonical = esc_url(get_category_link($cat->term_id));
        } else {
            $canonical = esc_url(home_url('/blog'));
        }
    } else {
        $canonical = home_url();
    }
    return $canonical;
}
function my_keywords()
{
    global $post;
    $keywords = '';
    $base_keywords = get_vars('site', 'keywords');
    if ($base_keywords) {
        $keywords .= $base_keywords[0];
        for ($i = 1; $i < count($base_keywords); $i++) {
            $keywords .= ',' . $base_keywords[$i];
        }
    }
    if (is_single() || is_page()) {
        $add_keywords = get_post_meta($post->ID, 'meta_keywords', true);
        if ($add_keywords) {
            $keywords .= ',' . $add_keywords;
        }
    }
    return $keywords;
}
function my_description()
{
    global $post;
    $output = '';
    if (is_single() || is_page()) {
        $meta_description = esc_html(get_post_meta($post->ID, 'meta_description', true));
        if (!empty($meta_description)) {
            if (mb_strlen($meta_description, 'UTF-8') > 200) {
                $output = mb_substr($meta_description, 0, 200, 'UTF-8') . '……';
            } else {
                $output = $meta_description;
            }
        } else {
            get_vars('site', 'description') ? $output = get_vars('site', 'description') : $output = get_bloginfo('description');
        }
    } else {
        get_vars('site', 'description') ? $output = get_vars('site', 'description') : $output = get_bloginfo('description');
    }
    return $output;
}
function my_ogp()
{
    global $post;
    $img_url = '';
    if (is_single() || is_page()) {
        $ogp_title = esc_html(get_the_title($post->ID));
    } else {
        $ogp_title = get_bloginfo('name');
    }
    if (is_single() || is_page()) {
        if (has_post_thumbnail()) {
            $img_url = get_the_post_thumbnail_url($post->ID, 'full');
        }
    }
    if (!$img_url) {
        $img_url = get_template_directory_uri() . '/img/ogp.png';
    }
    $ogp = '<meta property="og:locale" content="ja_JP">';
    $ogp .= '<meta property="og:description" content="' . my_description() . '">';
    $ogp .= '<meta property="og:type" content="' . get_ogp_type() . '">';
    $ogp .= '<meta property="og:title" content="'. $ogp_title . '">';
    $ogp .= '<meta property="og:url" content="' . get_my_canonical() . '">';
    $ogp .= '<meta property="og:site_name" content="' . get_vars('site', 'name') . '">';
    $ogp .= '<meta property="og:image" content="' . $img_url . '">';
    $ogp .= '<meta name="twitter:card" content="summary_large_image">';
    $ogp .= '<meta name="twitter:site" content="@' . get_vars('sns', 'twsite') . '">';
    $ogp .= '<meta name="twitter:description" content="' . my_description() . '">';
    $ogp .= '<meta name="twitter:title" content="' . $ogp_title . '">';
    $ogp .= '<meta name="twitter:creator" content="@' . get_vars('sns', 'twcreator') . '">';
    $ogp .= '<meta name="twitter:image:src" content="' . $img_url . '">';
    return $ogp;
}
function add_head()
{
    $inserts = '<meta content="telephone=no" name="format-detection" />';
    $inserts .= '<meta content="address=no" name="format-detection" />';
    $inserts .= '<meta name="keywords" content="' . my_keywords() . '" />';
    $inserts .= '<meta name="description" content="' . my_description() . '" />';
    $inserts .= my_robots();
    $inserts .= '<link rel="canonical" href="' . get_my_canonical() . '">';
    $inserts .= my_ogp();
    $inserts .= '<link rel="icon" href="' . get_template_directory_uri() . '/favicon.ico" />';
    $inserts .= '<link rel="apple-touch-icon" sizes="180×180" href="' .  home_url() . '/pwa/icons/icon-180x180.png" />';
    $inserts .= '<meta name="theme-color" content="' . get_vars('site', 'theme') . '" />';
    $inserts .= '<link rel="manifest" href="' . home_url() . '/manifest.json" />';
    $inserts .= '<meta name="apple-mobile-web-app-title" content="' . get_vars('site', 'name') . '">';
    $inserts .= '<meta name="apple-mobile-web-app-capable" content="yes">';
    $inserts .= '<meta name="apple-mobile-web-app-status-bar-style" content="default">';
    $inserts .= '<link rel="apple-touch-icon-precomposed" href="' . home_url() . '/pwa/icons/icon-512x512.png" />';
    echo $inserts;
}
add_action('wp_head', 'add_head');
