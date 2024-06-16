<?php defined('ABSPATH') || exit;
global $wp_query;


$inputs = [
    [
        'label' => __('همه', 'cyn-dm'),
        'value' => 'all'
    ],
    [
        'label' => __('بلاگ ها', 'cyn-dm'),
        'value' => 'post'
    ],
    [
        'label' => __('خدمات', 'cyn-dm'),
        'value' => 'service'
    ],
    [
        'label' => __('پزشکان', 'cyn-dm'),
        'value' => 'doctor'
    ],
]
?>


<!-- header  -->
<?php get_header() ?>


<!-- Bread Crumb -->
<section class=" bg-noise bg-primary-80 py-7 space-y-2 max-lg:space-y-13">
    <div class="container">
        <P>Salam man bread crumb hastam bia mano bekhooon</P>
    </div>
</section>


<div class="py-3"></div>

<main class="container">

    <!-- search part -->
    <div class="bg-primary-100 p-5 rounded-3xl  divide-y space-y-3 divide-primary-90">

        <div class="flex justify-between items-center">
            <!-- filters  -->

            <div class="flex gap-2">
                <div>
                    <?php _e('جستجو در:', 'cyn-dm') ?>
                </div>

                <div class="flex gap-6">
                    <?php foreach ($inputs as $index => $input) : ?>
                        <div class="flex items-center gap-1">
                            <input type="radio" name="search-filter" id="<?php echo $input['value'] ?>">
                            <label for="<?php echo $input['value'] ?>"><?php echo $input['label'] ?></label>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>



            <!-- serch box  -->
            <div class="flex justify-end">
                <form action="/">
                    <div class="flex gap-1 py-2 px-3 border border-primary-50 rounded-full">
                        <button type="submit">
                            <svg class="icon size-4">
                                <use href="#icon-search-loupe" />
                            </svg>
                        </button>

                        <div>
                            <input type="search" value="<?php the_search_query() ?>" id="search" name="s" placeholder="جستجو">
                        </div>
                    </div>
                    <div class="divide-y divide-primary-70"></div>
                </form>
            </div>
        </div>

        <div class="flex justify-center items-center py-3 text-primary-30 text-caption ">

            <span id='postsCount'>
                <?php echo $wp_query->found_posts ?>
            </span>

            <span>
                <?php _e('نتیجه', 'cyn-dm') ?>
            </span>
        </div>

    </div>

    <div class="py-6"></div>


    <!-- posts  -->
    <div class="divide-y divide-primary-70" id='postsWrapper'>
        <?php if ($wp_query->have_posts()) : ?>


            <?php
            while ($wp_query->have_posts()) :
                $wp_query->the_post();
                cyn_get_card('search-result');
            endwhile;
        else : ?></div>
    <!--search not found-->
    <div>

    </div>
<?php endif; ?>

<div class="py-4"></div>





<!-- 
<div class=" pagination d-flex mb-40 jc-start">
    <?php

    // $big = 999999999;
    // echo the_posts_pagination([
    //     'screen_reader_text' => ' ',
    //     'base'               => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
    //     'format'             => '%#%',
    //     'total'              => $wp_query->max_num_pages,
    //     'current'            => max(1, get_query_var('paged')),
    //     'aria_current'       => 'page',
    //     'show_all'           => false,
    //     'prev_next'          => false,
    //     'type'               => 'plain',
    // ]);
    ?>
</div>
<div class="py-15"> </div>

-->

</main>
<?php get_footer() ?>