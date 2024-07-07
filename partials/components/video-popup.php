<!-- video popup wrapper-->
<?php

$teaser_cover = get_field('teaser-cover');

$teaser_video = get_field('teaser-video');

$link_video = $teaser_video['url']

?>

<section class="VideoPopUp z-50 backdrop-blur w-full h-full fixed inset-0 flex justify-center items-center overflow-hidden opacity-0 pointer-events-none transition-all duration-300">
    <!-- video pop up -->
    <div class="bg-primary-100 flex flex-col rounded-3xl">
        <!--close form button -->
        <div class="mt-5 flex">
            <div class="px-5">
                <button class="btn" size="small" id="reservePopUpCloser" variant="secondary">
                    <svg class="icon w-6 h-6">
                        <use href="#icon-xmark" />
                    </svg>
                </button>
            </div>
        </div>
        <div>

            <div class="video-teaser-main-wrapper">

                <div class="video-teaser-title-wrapper content-title | fs-title text-natural-900 pos-relative">
                    <?php _e('UAE', 'cyn-dm')
                    ?>
                </div>

                <div class="video-wrapper pos-relative">

                    <video id="video-teaser" class="video-teaser-wrapper video | radius-16" controls>
                        <source src="<?php echo $link_video; ?>" type="video/mp4">
                    </video>

                    <div class="video-teaser-cover-wrapper video-cover | pos-absolute d-flex jc-center ai-center radius-16">

                        <a href="#video" class="pos-absolute" id="icon-test">
                            <img src="<?php echo get_template_directory_uri() . '/assets/img/icon-test-13.png' ?>" alt="icon-test-13">
                        </a>

                        <img class="video-cover-img radius-16" src="<?php echo $teaser_cover['url'] ?>" alt="cover">

                    </div>

                </div>

            </div>

        </div>
    </div>
</section>