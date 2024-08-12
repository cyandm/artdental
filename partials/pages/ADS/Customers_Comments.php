<div class="container ">
    <!-- top section(swiper + title) -->
    <div>
        <!-- title  -->
        <div class="text-h1 max-md:text-h5"> <?php _e('نظرات مشتریان ما', 'cyn-dm') ?> </div>
        <!-- swiper  -->
        <div>
            <swiper-container slides-per-view="3" space-between="12" pagination='true' class="w-full p-6 max-lg:p-2 items-end">

                <?php for ($i = 1; $i <= 10; $i++) :
                    $video = get_field("Customers_Comments_video_$i");
                    $poster_id = get_field("Customers_Comments_cover_$i");

                    if (empty($video) || empty($poster_id)) continue;

                ?>
                    <swiper-slide anim-delay="<?php echo $i * 0.3 ?>">

                        <video class="w-full h-full fade-in-down rounded-3xl" controls src="<?php echo $video['url'] ?>" poster="<?php echo wp_get_attachment_image_url($poster_id) ?>">

                        </video>


                    </swiper-slide>
                <?php endfor; ?>


            </swiper-container>
        </div>
    </div>

</div>