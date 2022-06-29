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
    <header class="o-container o-container:header">
        <a class="o-cluster o-cluster:headLogo"
            href="<?php echo home_url();?>">
            <svg width="32" height="21" viewBox="0 0 32 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M27.9986 13.7163L24.0002 20.5753L19.9992 13.7163H27.9986Z" fill="#6BA4CC" />
                <path d="M15.9998 20.5753L19.9997 13.7158L23.9996 20.5753H15.9998Z" fill="#70A9CF" />
                <path d="M19.9987 13.7163L15.9998 20.5753L11.9998 13.7163H19.9987Z" fill="#8DC6DF" />
                <path d="M7.99988 20.5753L11.9998 13.7158L15.9997 20.5753H7.99988Z" fill="#8FC5DE" />
                <path d="M0 20.5753L3.99994 13.7163L7.99987 20.5758L0 20.5753Z" fill="#7EAFD2" />
                <path d="M32 6.85895L28.0001 13.7163L23.9996 6.85895H32Z" fill="#83C1DB" />
                <path d="M19.9997 13.7163L23.9991 6.85895L27.9985 13.7163H19.9997Z" fill="#7BB6D6" />
                <path d="M23.9996 6.85895L19.9997 13.7163L15.9998 6.85895H23.9996Z" fill="#76ACD1" />
                <path d="M11.9998 13.7163L15.9998 6.85895L19.9987 13.7163H11.9998Z" fill="#84BBD9" />
                <path d="M15.9997 6.85895L11.9998 13.7163L7.99988 6.85895H15.9997Z" fill="#72A7CE" />
                <path d="M3.99994 13.7163L7.99987 6.85895L11.9988 13.7163H3.99994Z" fill="#6393C4" />
                <path d="M23.9996 6.85894L27.9991 0L31.9995 6.85946L23.9996 6.85894Z" fill="#94D0E4" />
                <path d="M15.9998 6.85894L19.9997 0L23.9996 6.85946L15.9998 6.85894Z" fill="#81B7D6" />
                <path d="M7.99988 6.85894L11.9998 0L15.9997 6.85946L7.99988 6.85894Z" fill="#72A7CE" />
                <path d="M11.9988 0L7.99987 6.85894L3.99994 0H11.9988Z" fill="#689CC8" />
            </svg>
            <span class="o-cluster__headLogo">
                <?php echo get_vars('site', 'name');?>
            </span>
        </a>
        <nav class="c-head-nav" id="headMenu" aria-hidden="true">
            <ul class="c-gnav">
                <li class="c-gnav__item"><a class="c-gnav__link"
                        href="<?php echo home_url();?>">トップ</a></li>
                <li class="c-gnav__item"><a class="c-gnav__link"
                        href="<?php echo home_url('/company');?>">会社情報</a>
                </li>
                <li class="c-gnav__item"><a class="c-gnav__link"
                        href="<?php echo home_url('/blog');?>">ブログ</a>
                </li>
                <li class="c-gnav__item"><a class="c-gnav__link"
                        href="<?php echo home_url('/news');?>">お知らせ</a>
                </li>
                <li class="c-gnav__item"><a class="c-gnav__link"
                        href="<?php echo home_url('/inquiry');?>">お問い合わせ</a>
                </li>
            </ul>
        </nav>
        <button class="c-menu-btn" type="button" aria-label="menu close" aria-controls="headMenu" aria-expanded="false">
            <span class="c-menu-btn__bars"></span>
        </button>
    </header>
    <?php if (!is_front_page()) {
    echo get_breadcrumb();
}?>
    <main>
        <?php echo get_page_title();
