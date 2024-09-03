<?php

/**
 * The template for displaying full width pages.
 *
 * Template Name: arkia
 *
 * @package storefront
 */

get_header("arkia"); ?>


<div class="swiper mySwiper">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <div class="home-slider d-flex align-items-center justify-content-start pe-5 first-slider">
                <div class="content">
                    <?= the_field("firstcontent") ?>
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="home-slider d-flex align-items-center justify-content-start pe-5 second-slider">
                <div class="content">
                    <?= the_field("seccontent") ?>
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="home-slider d-flex align-items-center justify-content-start pe-5 third-slider">
                <div class="content">
                    <?= the_field("thirdcontent") ?>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div> -->
    <div class="swiper-pagination"></div>
    <!-- <div class="autoplay-progress">
        <svg viewBox="0 0 48 48">
            <circle cx="24" cy="24" r="20"></circle>
        </svg>
        <span></span>
    </div> -->
</div>
<div id="text-body" class="container-c px-5 py-md-8 my-md-8">
    <section class="my-5">
        <h1 class="h5 mb-3 mt-5 gray">
             <?= get_the_title() ?>
        </h1>
        <div class="row">
            <div class="col-12 col-md-6 pe-md-5">
                <?= the_field("aboutus1"); ?>
            </div>
            <div class="col-12 col-md-6 ps-md-5">
            <?= the_field("aboutus2"); ?>
            </div>
        </div>
       
       
    </section>
</div>


<?php
get_footer("arkia");
