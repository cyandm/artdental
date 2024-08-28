<?php /* Template name: ADS */ ?>


<?php get_header() ?>
<!-- hero  -->
<div class="py-8"></div>
<?php cyn_get_page_template('ADS/hero') ?>
<!-- Description-->
<div class="py-8"></div>
<?php cyn_get_page_template('ADS/description') ?>
<!-- description more  -->
<div class="py-8"></div>
<?php cyn_get_page_template('ADS/description-more') ?>
<!-- services  -->
<div class="py-8"></div>
<?php cyn_get_page_template('home/services', ['swiper' => false]); ?>
<!-- price  -->
<div class="py-8"></div>
<?php if (!empty(get_field('price_section_off'))) : ?>
    <div id="price_section" class="scroll-mt-8 ">
        <?php cyn_get_page_template('home/price', ['title' => get_field('price_title'), 'has_button' => false]); ?>
    </div>
<?php endif; ?>
<!-- Introduction part1  -->
<div class="py-8"></div>
<div><?php cyn_get_page_template('ADS/Introduction', ['start-point' => 1, 'end-point' => 3]); ?></div>
<!-- Our Customers Comments -->
<div class="py-8"></div><?php if (!empty(get_field('Customer_comments_section_off'))) : ?>
    <div><?php cyn_get_page_template('ADS/Customers_Comments') ?></div>
<?php endif; ?>
<!-- Introduction part2  -->
<div class="py-8"></div>
<div><?php cyn_get_page_template('ADS/Introduction', ['start-point' => 4, 'end-point' => 6]); ?></div>
<!-- faq  -->
<div class="py-8"></div>
<div> <?php cyn_get_page_template('ADS/faqADS') ?></div>

<!-- <?php //cyn_get_page_template('home/faq', ["posts" => ]); 
        ?> -->
<!-- footer  -->
<div class="py-8"></div>
<?php get_footer() ?>