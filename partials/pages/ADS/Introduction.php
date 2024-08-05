<?php

$start_point = $args['start-point'] ?? 1;
$end_point = $args['end-point'] ?? 6;

?>


<?php for ($i = $start_point; $i <= $end_point; $i++) : ?>

    <?php
    $Image = get_field("IntroductionGroup_image_$i");
    $Title = get_field("IntroductionGroup_title_$i");
    $Text = get_field("IntroductionGroup_text_$i");

    ?>
    <div class="container flex gap-5 max-lg:flex-col items-center odd:lg:flex-row-reverse ">

        <!--IntroductionGroup image  -->
        <div class="max-lg:w-full w-1/2 ">
            <?php echo wp_get_attachment_image($Image, 'full', false, ['class' => 'w-full h-full'])
            ?>
        </div>
        <!-- IntroductionGroup info  -->
        <div class="max-lg:w-full m-4 w-1/2">
            <!-- IntroductionGroup subject  -->
            <p class="text-h2 max-lg:text-body text-primary-20 flex flex-col w-full">
                <?php echo $Title ?>
            </p>
            <!-- IntroductionGroup text  -->
            <div class="min-w-full text-body_s prose text-primary-40 w-full">
                <?php echo $Text ?>
            </div>

        </div>
    </div>
<?php endfor ?>