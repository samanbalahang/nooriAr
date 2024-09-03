<?php

/**
 * The template for displaying full width pages.
 *
 * Template Name: petrol
 *
 * @package storefront
 */

get_header("petrol"); ?>
<div class="container-fluid p-0">
    <section class="section-1">
        <div class="content">
            <?= the_field("petrolFirstText"); ?>
        </div>
    </section>
    <div class="container-c1">
        <section class="section-2 my-5 px-5">
            <?= the_field("petrolsectext"); ?>
        </section>
    </div>
    <section class="section-3">
        <div class="content">
            <?= the_field("petrolThirdText"); ?>
        </div>
    </section>
    <div class="container-fluid px-5">
        <section class="section-4 my-5">
            <?= the_field("petrolfourthtext"); ?>
        </section>
    </div>
    <section class="section-5">
        <div class="content">
            <?= the_field("petrolfifthtext"); ?>
        </div>
    </section>
    <div class="container-fluid px-5">
        <section class="section-6 my-5">
            <?= the_field("petrolsixtext"); ?>
        </section>
    </div>
</div>

<?php
get_footer("petrol");
