<?php /* Template name: Home Page */ ?>

<?php get_header() ?>

<?php cyn_get_page_template( 'home/hero' ); ?>
<div class="py-6"></div>
<?php cyn_get_page_template( 'home/features' ); ?>
<div class="py-6"></div>
<?php cyn_get_page_template( 'home/services' ); ?>
<div class="py-6"></div>
<?php cyn_get_page_template( 'home/videos' ); ?>
<div class="py-6"></div>

<?php get_footer() ?>