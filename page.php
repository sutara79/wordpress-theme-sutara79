<?php
/**
 * 固定ページ: 個別
 *
 * @package WordPress\sutara79
 * @since 1.0.0
 */

$sutara79_main = array(
    'title' => get_the_title(),
    'body-template' => array(
        'template-parts/main/contents/page'
    )
);
include locate_template('template-parts/main/layout.php');
