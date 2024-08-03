<?php $postId = $args['post-id'] ?? get_the_ID();
$description_image = get_field("description_img"); ?>



<div class="container flex items-center gap-10 max-lg:gap-4 max-lg:flex-col">
    <!-- Description Texts -->
    <div class="max-lg:col-span-2 w-3/4">

        <!-- Title -->
        <div class="text-h1 max-lg:text-h4">
            <?php echo get_field('description_title') ?>
        </div>

        <div class="py-2"></div>

        <!-- Txt -->
        <div class="text-body max-lg:text-body_s leading-8">
            <?php echo get_field('description_txt') ?>
        </div>
    </div>
    <!-- Description Image -->
    <div class="aspect-video w-1/4">
        <?php echo wp_get_attachment_image($description_image, "full", false, ["class" => "rounded-3xl max-lg:h-[400px]"]) ?>
    </div>
</div>