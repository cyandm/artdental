<?php /* Template Name: Contact us */ ?>


<!-- Contact Us page  -->
<?php get_header() ?>
<main class="container max-lg:flex max-lg:flex-col">
    <div class="text-h1 text-primary-20">
        <?php _e('اگه سوالی داری...', 'cyn-dm') ?>
    </div>
    <div class="py-2"></div>
    <div class="flex gap-11 max-lg:flex-col	">
        <!-- image  -->
        <div class="max-lg:w-full w-3/6 flex items-center justify-center">
            <!-- تصویر: acf 
         با عرض پنجاه درصد   -->
            <img src="<?php echo get_stylesheet_directory_uri()   . "/assets/img/404-image.png" ?>" alt="design-picture">
        </div>

        <!-- Contact form -->
        <div class="max-lg:w-full flex gap-4 flex-col w-3/6">
            <!-- first form text  -->
            <div class="flex flex-col text-primary-40 gap-2">
                <p class="text-h3 "> <?php _e('تماس با ما', 'cyn-dm') ?></p>
                <p class="text-body_s"> <?php _e('پیام خودتونو برای ما ارسال کنید', 'cyn-dm') ?></p>
            </div>
            <!-- Customer  information form   -->
            <div>
                <form class="flex gap-4 flex-col" action="/" method="post" name="Contact-Us" id="ContactUsForm">
                    <div><input class="max-lg:w-full w-4/5 p-2 rounded-3xl border border-primary-80 " type="text" placeholder="نام شما" required="required"></div>
                    <div><input class="max-lg:w-full w-4/5 p-2 rounded-3xl border border-primary-80" type="text" placeholder="ایمیل شما" required="required"></div>
                    <div><textarea class="max-lg:w-full w-4/5 p-2 rounded-3xl border border-primary-80" name="message" id="message" cols="30" rows="10" placeholder="پیام خودتونو بنویسید"></textarea></div>
                </form>
                <!-- Submit button -->
                <div class="max-lg:w-full w-4/5 flex justify-end items-end p-2">
                    <cyn-button type="primary" size="md" href="#">
                        <?php _e('ارسال پیام', 'cyn-dm') ?>

                    </cyn-button>
                </div>
            </div>
        </div>

    </div>

</main>
<?php get_footer() ?>