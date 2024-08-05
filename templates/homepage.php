<?php /* Template name: Home Page */ ?>

<?php get_header() ?>

<?php cyn_get_page_template('home/hero'); ?>
<div class="py-6"></div>
<?php cyn_get_page_template('home/features'); ?>
<div class="py-6"></div>
<?php cyn_get_page_template('home/services'); ?>
<!-- <div class="py-6"></div>
<?php //cyn_get_page_template('home/videos');
?> -->
<div class="py-6"></div>
<div id="price_section" class=" scroll-mt-8 ">
    <?php cyn_get_page_template('home/price'); ?>
</div>
<div class="py-6"></div>
<!-- <?php //cyn_get_page_template('home/testimonials'); 
        ?> -->
<!-- <div class="py-6"></div> -->
<?php cyn_get_page_template('home/doctors'); ?>
<div class="py-6"></div>
<?php cyn_get_page_template('home/blogs'); ?>
<div class="py-6"></div>
<?php cyn_get_page_template('home/faq'); ?>
<div class="py-6"></div>

<?php get_footer() ?>



<!-- FAQ -->
<?php if (!empty(get_field('faq-group', $postId))) : ?>
    <div class="pt-[93px]"></div>
    <div>
        <!-- Title -->
        <div class="text-h2">
            <?php _e('سوالات متداول ', 'cyn-dm') . ' ' . the_title() ?>
        </div>
        <div class="text-h2">
</div>
        <div>
            <?php cyn_get_component('faq-group', ['type' => 'acf', 'acf_field' => 'faq-group', 'post-id' => $postId]) ?>
        </div>
    </div>
<?php endif; ?>