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
            <?php echo get_the_post_thumbnail(get_the_ID(), 'full') ?>
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
                <form class="flex gap-4 flex-col" action="/" method="post" id="ContactUsForm">
                    <div class="flex w-4/5 max-lg:w-full gap-4">
                        <!-- <?php //sanitize_textarea_field($name['textarea_input']) 
                                ?> -->
                        <input class=" w-1/2 max-lg:w-full p-2 rounded-3xl border border-primary-80 " type="text" placeholder="نام شما" required="required" name="name" id="name">
                        <input class=" w-1/2 max-lg:w-full p-2 rounded-3xl border border-primary-80 " maxlength="11" type="number_format" placeholder="شماره تلفن همراه شما" required="required" name="name" id="phoneNumber">
                    </div>
                    <div>
                        <input class="max-lg:w-full w-4/5 p-2 rounded-3xl border border-primary-80" type="email" placeholder="ایمیل شما" name="email" id="email">
                    </div>
                    <div>
                        <textarea class="max-lg:w-full w-4/5 p-2 rounded-3xl border border-primary-80" name="message" id="message" cols="30" rows="10" placeholder="پیام خودتونو بنویسید"></textarea>
                    </div>
                    <!-- Submit field -->
                    <div class=" flex items-end justify-end max-lg:items-center max-lg:justify-center w-4/5 max-lg:w-full">
                        <button class="max-lg:w-full max-lg:items-center max-lg:justify-center flex items-end justify-end flex-row-reverse gap-1 rounded-full transition-all duration-300 cursor-pointer
                         bg-gradient-to-t from-primary-50 to-primary-70 text-primary-100 shadow-md shadow-slate-400/50
                          hover:from-primary-20 hover:to-primary-20 py-2 px-2 text-body_s ">
                            <div class="me-2">
                                <?php _e('ارسال پیام', 'cyn-dm')  ?>
                            </div>
                            <svg class="icon text-primary-100 w-6 h-6 transform">
                                <use href="#icon-Send" />
                            </svg>

                        </button>
                    </div>
                </form>
            </div>

        </div>

    </div>
    
    
    
    
    
    
    
    <div class="py-9  pb-17 !text-black">
	<div class="container flex justify-between items-center max-md:items-start max-lg:flex-col">
		<div class="flex gap-11 max-md:flex-col">
			
			<!-- آدرس مرکز -->
			<div class="max-w-[320px] max-lg:max-w-[250px] space-y-3">
				<span class="text-h6 max-md:text-body">
					<?php _e('آدرس مرکز', 'cyn-dm') ?>
				</span>
				<p class="text-primary-40 text-body_s">
					<?php echo get_option('cyn_address') ?>
				</p>

				<span class="text-h6 max-md:text-body">
					<?php _e('مشاهده آدرس روی نقشه', 'cyn-dm') ?>
				</span>
				<div class="flex gap-2">
					<?php for ($i = 1; $i <= 10; $i++) : ?>
						<a href="<?php echo get_option("cyn_address_url_$i") ?>">
							<img src="<?php echo get_option("cyn_address_img_$i") ?>" alt="" />
						</a>
					<?php endfor; ?>
				</div>
			</div>

			<!-- شماره تماس و شبکه‌های اجتماعی -->
			<div class="space-y-3">
				<span class="text-h6 max-md:text-body">
					<?php _e('شماره تماس ها', 'cyn-dm') ?>
				</span>
				<?php for ($i = 1; $i <= 10; $i++) : ?>
					<a class="block text-primary-40 text-body_s"
						href="<?php echo 'tel:' . get_option("cyn_phone_number_$i") ?>">
						<?php echo get_option("cyn_phone_number_$i") ?>
					</a>
				<?php endfor; ?>

				<span class="text-h6 max-md:text-body">
					<?php _e('شبکه های اجتماعی', 'cyn-dm') ?>
				</span>
				<div class="flex gap-2">
					<?php for ($i = 1; $i <= 10; $i++) : ?>
						<a href="<?php echo get_option("cyn_social_media_url_$i") ?>">
							<img src="<?php echo get_option("cyn_social_media_img_$i") ?>" alt="" />
						</a>
					<?php endfor; ?>
				</div>
			</div>

			<!-- ساعات کاری -->
			<div class="space-y-3">
				<span class="text-h6 max-md:text-body">
					<?php _e('ساعات کاری', 'cyn-dm') ?>
				</span>
				<?php for ($i = 1; $i <= 10; $i++) : ?>
					<div class="text-primary-40 text-body_s">
						<?php echo get_option("cyn_work_hours_$i") ?>
					</div>
				<?php endfor; ?>
			</div>

		</div>
	</div>
</div>

</main>

<?php get_footer() ?>