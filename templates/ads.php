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
<?php cyn_get_page_template('home/services'); ?>
<!-- price  -->
<div class="py-8"></div>
<div id="price_section" class=" scroll-mt-8 "><?php cyn_get_page_template('home/price'); ?></div>
<!-- Introduction part1  -->
<div class="py-8"></div>
<div><?php cyn_get_page_template('ADS/Introduction', ['start-point' => 1, 'end-point' => 3]); ?></div>
<!-- Our Customers Comments -->
<div class="py-8"></div>
<div><?php cyn_get_page_template('ADS/Customers_Comments') ?></div>
<!-- Introduction part2  -->
<div class="py-8"></div>
<div><?php cyn_get_page_template('ADS/Introduction', ['start-point' => 4, 'end-point' => 6]); ?></div>
<!-- faq  -->
<div class="py-8"></div>
<?php cyn_get_page_template('home/faq'); ?>
<!-- footer  -->
<div class="py-8"></div>
<?php get_footer() ?>