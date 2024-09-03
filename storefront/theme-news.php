<?php

/**
 * The template for displaying full width pages.
 *
 * Template Name: news
 *
 * @package storefront
 */

get_header(); ?>

<div class="container-flueid o"></div>

<div class="container news-page">
    <div class="row">

<?php
$args = array(
    'post_type' => 'post',
    'posts_per_page' => 3,
    'orderby'   => 'id',
    'order' => 'DESC',
    'tax_query'     => array(
        array(
            'taxonomy'      => 'category',
            'field'         => 'slug', //This is optional, as it defaults to 
            'terms'         => 'news',
        ),
    )
);

wp_reset_postdata();
?>
</div>
</div>


<?php
get_footer();
