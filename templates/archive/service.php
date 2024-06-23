<?php defined('ABSPATH') || exit; ?>


<?php get_header() ?>

<!-- Bread Crumb -->
<?php cyn_get_component('breadcrumb') ?>


<!-- Archive Service -->
<main class="container grid grid-cols-4 gap-6">

    <!-- Side Bar -->
    <section class="col-span-1 max-lg:col-span-4 max-lg:order-1">
        <?php cyn_get_component("archive-service-side-bar") ?>
    </section>


    
    <!-- Paragraph -->
    <section class="col-span-3 max-lg:col-span-4 max-xl:mx-5">


    </section>

</main>

<?php get_footer() ?>