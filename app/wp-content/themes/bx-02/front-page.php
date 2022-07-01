<?php get_header();?>
<div class="c-front-box" id="information">
    <h2 class="c-heading">Information</h2>
    <div class="o-container o-container:innerWrap">
        <dl class="c-table c-table:ghost u-mb-m">
            <dt class="c-table__title c-table__title:ghost">営業時間</dt>
            <dd class="c-table__content c-table__content:ghost">
                <?php echo get_vars('company', 'open');?>〜<?php echo get_vars('company', 'close');?>（L.0
                <?php echo get_vars('store', 'l.o');?>）
            </dd>
            <dt class="c-table__title c-table__title:ghost">定休日</dt>
            <dd class="c-table__content c-table__content:ghost">
                <?php echo get_vars('company', 'dayoff');?>
            </dd>
            <dt class="c-table__title c-table__title:ghost">場所</dt>
            <dd class="c-table__content c-table__content:ghost">
                〒<?php echo get_vars('company', 'zip');?><br />
                <?php echo get_vars('company', 'address');?>
            </dd>
            <dt class="c-table__title c-table__title:ghost">平均予算</dt>
            <dd class="c-table__content c-table__content:ghost">
                ¥<?php echo get_vars('store', 'budgetLow');?>〜¥<?php echo get_vars('store', 'budgetHight');?>/人
            </dd>
            <dt class="c-table__title c-table__title:ghost">お支払い方法</dt>
            <dd class="c-table__content c-table__content:ghost">
                <?php
                    $pays = get_vars('store', 'pay');
                    if ($pays) {
                        echo '<ul class="c-list">';
                        for ($i = 0; $i < count($pays); $i++) {
                            echo '<li>' . $pays[$i] . '</li>';
                        }
                        echo '</ul>';
                    }
                ?>
            </dd>
        </dl>
        <div class="o-stack o-stack:phone u-mb-m">
            <span class="c-phone-heading">ご予約</span>
            <a href="tel:<?php echo get_vars('company', 'tel');?>"
                class="o-has-icon o-has-icon:phone">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                    <path
                        d="M511.2 387l-23.25 100.8c-3.266 14.25-15.79 24.22-30.46 24.22C205.2 512 0 306.8 0 54.5c0-14.66 9.969-27.2 24.22-30.45l100.8-23.25C139.7-2.602 154.7 5.018 160.8 18.92l46.52 108.5c5.438 12.78 1.77 27.67-8.98 36.45L144.5 207.1c33.98 69.22 90.26 125.5 159.5 159.5l44.08-53.8c8.688-10.78 23.69-14.51 36.47-8.975l108.5 46.51C506.1 357.2 514.6 372.4 511.2 387z"
                        fill="currentColor" />
                </svg>
                <span class="c-phone-number"><?php echo get_vars('company', 'tel');?></span>
            </a>
        </div>
        <a href="<?php echo home_url('/inquiry');?>"
            class="c-btn c-btn:envelop">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                <path
                    d="M464 64C490.5 64 512 85.49 512 112C512 127.1 504.9 141.3 492.8 150.4L275.2 313.6C263.8 322.1 248.2 322.1 236.8 313.6L19.2 150.4C7.113 141.3 0 127.1 0 112C0 85.49 21.49 64 48 64H464zM217.6 339.2C240.4 356.3 271.6 356.3 294.4 339.2L512 176V384C512 419.3 483.3 448 448 448H64C28.65 448 0 419.3 0 384V176L217.6 339.2z"
                    fill="currentColor" />
            </svg>
            お問い合わせ
        </a>
    </div>
</div>
<div class="c-map-embed">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3279.992643865924!2d135.49217391523234!3d34.70536548043322!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e68e55df1f63%3A0xd58f533a3a832867!2z44CSNTMwLTAwMTEg5aSn6Ziq5bqc5aSn6Ziq5biC5YyX5Yy65aSn5rex55S677yT4oiS77yR!5e0!3m2!1sja!2sjp!4v1656471426814!5m2!1sja!2sjp"
        style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" width="100%"
        height="450"></iframe>
</div>
<div class="c-front-box">
    <h2 class="c-heading">News</h2>
    <div class="o-container o-container:innerWrap">
        <?php if (have_posts()):?>
        <ul class="o-stack o-stack:news">
            <?php while (have_posts()): the_post();?>
            <li class="o-switcher o-switcher:news">
                <time
                    datetime="<?php the_time('Y-m-d')?>"><?php the_time('Y.m.d');?></time>
                <a href="<?php the_permalink();?>"><?php the_title();?></a>
            </li>
            <?php endwhile;?>
        </ul>
        <a class="o-has-icon o-has-icon:goList"
            href="<?php echo home_url('/news');?>">
            ニュース一覧
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512">
                <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc.-->
                <path
                    d="M64 448c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L178.8 256L41.38 118.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160c12.5 12.5 12.5 32.75 0 45.25l-160 160C80.38 444.9 72.19 448 64 448z"
                    fill="currentColor"></path>
            </svg>
        </a>
        <?php else:?>
        <p>お知らせはまだありません。</p>
        <?php endif;?>
    </div>
</div>
<ul class="o-switcher o-switcher:vlink">
    <li class="c-vlink">
        <a class="o-cover o-cover:vlink"
            href="<?php echo home_url('/aboutus');?>">
            <span class="c-vlink__inner">
                <span class="c-vlink__icon">
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
                </span>
                <span class="c-vlink__txt"> About US<span class="c-vlink__txt__font-small">BBNについて</span> </span>
            </span>
        </a>
        <span class="c-vlink__overlay"></span>
        <picture class="o-frame o-frame:vlink">
            <source
                data-srcset="<?php echo get_template_directory_uri();?>/img/link-thumb01.avif 1x, <?php echo get_template_directory_uri();?>/img/link-thumb01@2x.avif 2x"
                type="image/avif" />
            <source
                data-srcset="<?php echo get_template_directory_uri();?>/img/link-thumb01.webp 1x, <?php echo get_template_directory_uri();?>/img/link-thumb01@2x.webp 2x"
                type="image/webp" />
            <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAAAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                data-src="<?php echo get_template_directory_uri();?>/img/link-thumb01.jpg"
                data-srcset="<?php echo get_template_directory_uri();?>/img/link-thumb01.jpg 1x, <?php echo get_template_directory_uri();?>/img/link-thumb01@2x.jpg 2x"
                alt="" />
        </picture>
    </li>
    <li class="c-vlink">
        <a class="o-cover o-cover:vlink"
            href="<?php echo home_url('/menu');?>">
            <span class="c-vlink__inner">
                <span class="c-vlink__icon">
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
                </span>
                <span class="c-vlink__txt"> Menu<span class="c-vlink__txt__font-small">メニュー</span> </span>
            </span>
        </a>
        <span class="c-vlink__overlay"></span>
        <picture class="o-frame o-frame:vlink">
            <source
                data-srcset="<?php echo get_template_directory_uri();?>/img/link-thumb02.avif 1x, <?php echo get_template_directory_uri();?>/img/link-thumb02@2x.avif 2x"
                type="image/avif" />
            <source
                data-srcset="<?php echo get_template_directory_uri();?>/img/link-thumb02.webp 1x, <?php echo get_template_directory_uri();?>/img/link-thumb02@2x.webp 2x"
                type="image/webp" />
            <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAAAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                data-src="<?php echo get_template_directory_uri();?>/img/link-thumb02.jpg"
                data-srcset="<?php echo get_template_directory_uri();?>/img/link-thumb02.jpg 1x, <?php echo get_template_directory_uri();?>/img/link-thumb02@2x.jpg 2x"
                alt="" />
        </picture>
    </li>
    <li class="c-vlink">
        <a class="o-cover o-cover:vlink"
            href="<?php echo home_url('/gallery');?>">
            <span class="c-vlink__inner">
                <span class="c-vlink__icon">
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
                </span>
                <span class="c-vlink__txt"> Gallery<span class="c-vlink__txt__font-small">ギャラリー</span> </span>
            </span>
        </a>
        <span class="c-vlink__overlay"></span>
        <picture class="o-frame o-frame:vlink">
            <source
                data-srcset="<?php echo get_template_directory_uri();?>/img/link-thumb03.avif 1x, <?php echo get_template_directory_uri();?>/img/link-thumb03@2x.avif 2x"
                type="image/avif" />
            <source
                data-srcset="<?php echo get_template_directory_uri();?>/img/link-thumb03.webp 1x, <?php echo get_template_directory_uri();?>/img/link-thumb03@2x.webp 2x"
                type="image/webp" />
            <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAAAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                data-src="<?php echo get_template_directory_uri();?>/img/link-thumb03.jpg"
                data-srcset="<?php echo get_template_directory_uri();?>/img/link-thumb03.jpg 1x, <?php echo get_template_directory_uri();?>/img/link-thumb03@2x.jpg 2x"
                alt="" />
        </picture>
    </li>
    <li class="c-vlink">
        <a class="o-cover o-cover:vlink"
            href="<?php echo home_url('/staff');?>">
            <span class="c-vlink__inner">
                <span class="c-vlink__icon">
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
                </span>
                <span class="c-vlink__txt"> Staff<span class="c-vlink__txt__font-small">スタッフ</span> </span>
            </span>
        </a>
        <span class="c-vlink__overlay"></span>
        <picture class="o-frame o-frame:vlink">
            <source
                data-srcset="<?php echo get_template_directory_uri();?>/img/link-thumb04.avif 1x, <?php echo get_template_directory_uri();?>/img/link-thumb04@2x.avif 2x"
                type="image/avif" />
            <source
                data-srcset="<?php echo get_template_directory_uri();?>/img/link-thumb04.webp 1x, <?php echo get_template_directory_uri();?>/img/link-thumb04@2x.webp 2x"
                type="image/webp" />
            <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAAAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                data-src="<?php echo get_template_directory_uri();?>/img/link-thumb04.jpg"
                data-srcset="<?php echo get_template_directory_uri();?>/img/link-thumb04.jpg 1x, <?php echo get_template_directory_uri();?>/img/link-thumb04@2x.jpg 2x"
                alt="" />
        </picture>
    </li>
</ul>
<div class="c-front-box c-front-box:border-bottom">
    <h2 class="c-heading">Review</h2>
    <div class="o-container o-container:main">
        <?php echo get_total_review();
        echo get_front_review();?>
    </div>
</div>
<div class="c-front-box">
    <h2 class="c-heading">What's New</h2>
    <div class="o-container o-container:main">
        <?php echo get_front_content();?>
    </div>
</div>
<?php get_footer();
