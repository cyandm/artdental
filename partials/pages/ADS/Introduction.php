<?php

$start_point = $args['start-point'] ?? 1;
$end_point = $args['end-point'] ?? 6;

?>


<?php for ($i = $start_point; $i <= $end_point; $i++) : ?>

    <?php
    $IntroductionGroupImage = get_field("IntroductionGroup_image_$i");
    $IntroductionGroupTitle = get_field("IntroductionGroup_title_$i");
    $IntroductionGroupText = get_field("IntroductionGroup_text_$i");

    ?>
    <div class="container flex gap-5 max-lg:flex-col items-center  odd:lg:flex-row-reverse">

        <!--IntroductionGroup image  -->
        <div class="w-1/2 max-lg:w-full">

            <?php echo wp_get_attachment_image($IntroductionGroupImage, 'full', false, ['class' => 'w-full h-full '])
            ?>

        </div>
        <!-- IntroductionGroup info  -->
        <div class="w-1/2 max-lg:w-full flex flex-col gap-4">
            <!-- IntroductionGroup subject  -->
            <div class="text-h2 max-lg:text-body">
                <?php echo $IntroductionGroupTitle ?>
            </div>

            <!-- IntroductionGroup text  -->
            <div class="text-body_s">
                <?php echo $IntroductionGroupText ?>
            </div>
        </div>
    </div>

<?php endfor ?>