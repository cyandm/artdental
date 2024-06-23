<!-- side bar service -->


<?php

$special_service_terms = get_terms([
    'taxonomy' => 'special-services',
    'orderby' => 'name',
    'hide_empty' => true,
]);


?>






<div class="h-full">

    <div class="grid justify-evenly sticky top-3">
        <!-- Search -->
        <div>
            <?php cyn_get_component('side-bar-search') ?>
        </div>


        <!-- Special Services  -->
        <div>
            <?php
            $posts = get_posts([
                'post_type' => 'service',
                'tax_query' => [
                    [
                        'taxonomy' => 'special-services',
                        'field' => 'slug',
                        'terms' => 'special-service',
                    ]
                ]
            ]);

            var_dump($posts);
            ?>

        </div>





        <!-- services categories  -->

<!-- code will write by faraz  -->
    </div>
</div>