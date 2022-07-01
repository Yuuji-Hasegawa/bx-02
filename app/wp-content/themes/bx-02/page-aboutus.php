<?php get_header();?>
<div class="o-container o-container:main u-pt-l u-pb-l">
    <h2 class="c-heading">Concept</h2>
    <div class="o-switcher o-switcher:media u-mb-l">
        <div class="c-media-pict">
            <picture class="o-frame">
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
        </div>
        <div class="c-media-txt">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ex tortor, dapibus sed elit nec, commodo
                sodales ipsum. Nunc augue mi, sagittis eget bibendum vel, venenatis lacinia ex.
            </p>
            <p>
                Etiam in hendrerit metus. Mauris non massa in orci ultrices cursus. Vivamus sollicitudin odio urna, in
                tincidunt eros faucibus sed.
            </p>
            <p>
                Nulla et facilisis nisl, ut sollicitudin metus. Vivamus justo nunc, ullamcorper eu ex sed, rutrum semper
                purus. Praesent tincidunt porttitor erat quis eleifend. Etiam posuere, metus vel pulvinar consequat,
                tellus dolor gravida purus, eget consectetur eros mauris sed ante. </p>
        </div>
    </div>
    <h2 class="c-heading">こだわり</h2>
    <div class="o-switcher o-switcher:media u-mb-l">
        <div class="c-media-pict">
            <picture class="o-frame">
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
        </div>
        <div class="c-media-txt">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ex tortor, dapibus sed elit nec, commodo
                sodales ipsum. Nunc augue mi, sagittis eget bibendum vel, venenatis lacinia ex.
            </p>
            <p>
                Etiam in hendrerit metus. Mauris non massa in orci ultrices cursus. Vivamus sollicitudin odio urna, in
                tincidunt eros faucibus sed.
            </p>
            <p>
                Nulla et facilisis nisl, ut sollicitudin metus. Vivamus justo nunc, ullamcorper eu ex sed, rutrum semper
                purus. Praesent tincidunt porttitor erat quis eleifend. Etiam posuere, metus vel pulvinar consequat,
                tellus dolor gravida purus, eget consectetur eros mauris sed ante. </p>
        </div>
    </div>
    <div class="c-inner-wrap">
        <h2 class="c-heading">Information</h2>
        <dl class="c-table c-table:ghost u-mb-m">
            <dt class="c-table__title c-table__title:ghost">店名</dt>
            <dd class="c-table__content c-table__content:ghost">
                <?php echo get_vars('store', 'name');?>
            </dd>
            <dt class="c-table__title c-table__title:ghost">営業時間</dt>
            <dd class="c-table__content c-table__content:ghost">
                <?php echo get_vars('company', 'open');?>〜<?php echo get_vars('company', 'close');?>（L.0
                <?php echo get_vars('store', 'l.o');?>）
            </dd>
            <dt class="c-table__title c-table__title:ghost">定休日</dt>
            <dd class="c-table__content c-table__content:ghost">
                <?php echo get_vars('company', 'dayoff');?>
            </dd>
            <dt class="c-table__title c-table__title:ghost">電話番号</dt>
            <dd class="c-table__content c-table__content:ghost">
                <?php echo get_vars('company', 'tel');?>
            </dd>
            <dt class="c-table__title c-table__title:ghost">場所</dt>
            <dd class="c-table__content c-table__content:ghost">
                〒<?php echo get_vars('company', 'zip');?><br />
                <?php echo get_vars('company', 'address');?>
            </dd>
            <dt class="c-table__title c-table__title:ghost">アクセス</dt>
            <dd class="c-table__content c-table__content:ghost">
                <?php echo get_vars('store', 'access');?>
            </dd>
            <dt class="c-table__title c-table__title:ghost">駐車場</dt>
            <dd class="c-table__content c-table__content:ghost">
                <?php
                    $parking = get_vars('store', 'parking');
                    if ($parking['flag'] === 'なし') {
                        echo $parking['flag'];
                    } else {
                        echo $parking['flag'] . "<br />";
                        echo '敷地内に' . $parking['net'] . "n台有り<br />" . $parking['detail'];
                    }
                ?>
            </dd>
            <dt class="c-table__title c-table__title:ghost">最寄駅</dt>
            <dd class="c-table__content c-table__content:ghost">
                <?php echo get_vars('store', 'station');?>
            </dd>
            <dt class="c-table__title c-table__title:ghost">予約</dt>
            <dd class="c-table__content c-table__content:ghost">
                <?php echo get_vars('store', 'access');?>
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
            <dt class="c-table__title c-table__title:ghost">禁煙・喫煙</dt>
            <dd class="c-table__content c-table__content:ghost">
                <?php echo get_vars('store', 'smoking');?>
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
                <span class="c-phone-number">
                    <?php echo get_vars('company', 'tel');?>
                </span>
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
<?php get_footer();
