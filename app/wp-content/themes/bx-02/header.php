<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head
    prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# <?php echo get_ogp_type();?>: http://ogp.me/ns/<?php echo get_ogp_type();?>#">
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.defer = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer',
            '<?php echo get_vars('site', 'gtm');?>'
        );
    </script>
    <!-- End Google Tag Manager -->
    <meta
        charset="<?php bloginfo('charset');?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover" />
    <?php wp_head();?>
</head>

<body <?php body_class();?>>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe
            src="https://www.googletagmanager.com/ns.html?id=<?php echo get_vars('site', 'gtm');?>"
            height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <header id="header" class="o-container o-container:header">
        <a class="o-cluster o-cluster:headLogo"
            href="<?php echo home_url();?>">
            <svg width="40" height="26" viewBox="0 0 40 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M34.8751 17.026H25.3882L30.1332 25.1604L34.8751 17.026ZM33.5541 17.785H26.7096L30.133 23.6537L33.5541 17.785Z"
                    fill="currentColor" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M20.2654 25.1604H29.7529L25.0091 17.0254L20.2654 25.1604ZM21.5866 24.4014H28.4317L25.0091 18.5321L21.5866 24.4014Z"
                    fill="currentColor" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M24.6281 17.026H15.1418L19.8856 25.1604L24.6281 17.026ZM23.307 17.785H16.4631L19.8855 23.6536L23.307 17.785Z"
                    fill="currentColor" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M10.019 25.1604H19.5066L14.7628 17.0254L10.019 25.1604ZM11.3403 24.4014H18.1853L14.7628 18.5321L11.3403 24.4014Z"
                    fill="currentColor" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M0 25.1604L9.48751 25.161L4.74376 17.026L0 25.1604ZM1.32123 24.4015L8.16623 24.4019L4.74373 18.5327L1.32123 24.4015Z"
                    fill="currentColor" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M40.0001 8.51379H30.512L35.2563 16.6464L40.0001 8.51379ZM38.6787 9.27281H31.8335L35.2563 15.14L38.6787 9.27281Z"
                    fill="currentColor" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M25.3887 16.6464H34.875L30.1318 8.51379L25.3887 16.6464ZM26.71 15.8874H33.5536L30.1318 10.0204L26.71 15.8874Z"
                    fill="currentColor" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M29.7529 8.51379H20.2654L25.0091 16.6464L29.7529 8.51379ZM28.4315 9.27281H21.5868L25.0091 15.14L28.4315 9.27281Z"
                    fill="currentColor" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M15.1418 16.6464H24.6281L19.8856 8.51379L15.1418 16.6464ZM16.4633 15.8874H23.3069L19.8855 10.0204L16.4633 15.8874Z"
                    fill="currentColor" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M19.5066 8.51379H10.019L14.7628 16.6464L19.5066 8.51379ZM18.1851 9.27281H11.3405L14.7628 15.14L18.1851 9.27281Z"
                    fill="currentColor" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M4.896 16.6464H14.3823L9.63975 8.51379L4.896 16.6464ZM6.21743 15.8874H13.061L9.63967 10.0204L6.21743 15.8874Z"
                    fill="currentColor" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M30.512 8.13442L39.9995 8.13503L35.2551 0L30.512 8.13442ZM31.8331 7.3755L38.6781 7.37594L35.2552 1.50672L31.8331 7.3755Z"
                    fill="currentColor" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M20.2654 8.13442L29.7529 8.13503L25.0091 0L20.2654 8.13442ZM21.5866 7.3755L28.4316 7.37594L25.0091 1.50672L21.5866 7.3755Z"
                    fill="currentColor" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M10.019 8.13442L19.5066 8.13503L14.7628 0L10.019 8.13442ZM11.3403 7.3755L18.1853 7.37594L14.7628 1.50672L11.3403 7.3755Z"
                    fill="currentColor" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M14.3823 0H4.896L9.63975 8.13442L14.3823 0ZM13.0612 0.759011H6.21728L9.63967 6.62761L13.0612 0.759011Z"
                    fill="currentColor" />
            </svg>
            <span class="o-cluster__headLogo"><?php echo get_vars('site', 'name');?></span>
        </a>
        <button class="c-menu-btn" type="button" aria-label="menu close" aria-controls="headMenu" aria-expanded="false">
            <span class="c-menu-btn__bars"></span>
        </button>
    </header>
    <div class="c-sidebar" id="sidebar" aria-hidden="true">
        <button class="c-menu-btn c-menu-btn:sidebar" type="button" aria-label="menu close" aria-controls="headMenu"
            aria-expanded="false">
            <span class="c-menu-btn__bars"></span>
        </button>
        <nav class="o-stack">
            <a class="c-link c-link:nav"
                href="<?php echo home_url();?>">TOP</a>
            <a class="c-link c-link:nav"
                href="<?php echo home_url('/aboutus');?>">ABOUT
                US</a>
            <a class="c-link c-link:nav"
                href="<?php echo home_url('/menu');?>">MENU</a>
            <a class="c-link c-link:nav"
                href="<?php echo home_url('/gallery');?>">GALLERY</a>
            <a class="c-link c-link:nav"
                href="<?php echo home_url('/staff');?>">STAFF</a>
            <a class="c-link c-link:nav"
                href="<?php echo home_url('/inquiry');?>">INQUIRY</a>
        </nav>
    </div>
    <div class="c-sidebar-bg"></div>
    <main>
        <?php echo get_page_title();
        if (!is_front_page()) {
            echo get_breadcrumb();
        }
