<?php

function get_front_content()
{
    $output = '';
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 4,
        'orderby' => 'date',
        'order' => 'DESC',
        'no_found_rows' => true
    );
    $the_query = new WP_Query($args);
    if ($the_query->have_posts()) {
        $output = '<ul class="o-switcher o-switcher:frontTopic">';
        while ($the_query->have_posts()) {
            $the_query->the_post();
            $output .= '<li class="o-stack o-stack:s">
            <a href="' . get_the_permalink() . '">
                ' . get_thumb() . '
            </a>
            <h3 class="c-trim-title"><a class="c-trim-title__link" href="' . get_the_permalink() . '">' . get_the_title() . '</a></h3>
            <footer class="o-stack o-stack:topicFooter">
                ' . get_loop_cat() . '
                <time class="c-topic-date" datetime="' . get_the_time('Y-m-d') . '">' . my_human_time_diff(get_post_time('U', true)) . '前</time>
            </footer>
        </li>';
        }
        $output .= '</ul>';
        wp_reset_postdata();
        $output .= '<a href="' . home_url('/blog') .'"
        class="c-btn c-btn:topicList">
        コンテンツ一覧
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512">
            <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc.-->
            <path
                d="M64 448c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L178.8 256L41.38 118.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160c12.5 12.5 12.5 32.75 0 45.25l-160 160C80.38 444.9 72.19 448 64 448z"
                fill="currentColor"></path>
        </svg>
    </a>';
    }
    if ($output) {
        return $output;
    } else {
        return '<p>コンテンツはまだありません。</p>';
    }
}
