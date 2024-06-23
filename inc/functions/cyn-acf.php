<?php
add_action('acf/include_fields', 'cyn_register_acf');

function cyn_register_acf()
{
	if (!function_exists('acf_add_local_field_group')) {
		return;
	}
	cyn_acf_register_home_page();
	cyn_acf_register_price();
	cyn_acf_register_doctor();
}


function cyn_acf_register_home_page()
{

	$hero = [
		cyn_acf_add_tab('هیرو'),
		cyn_acf_add_image('hero_banner', 'بنر اصلی', 100),
		cyn_acf_add_text('hero_title', 'عنوان', 0, 33),
		cyn_acf_add_text('hero_subtitle', 'عنوان فرعی', 0, 33),
		cyn_acf_add_text('hero_desc', 'توضیحات', 0, 33),

		cyn_acf_add_text('hero_card_title_1', 'عنوان کارت 1', 0, 50),
		cyn_acf_add_url('hero_card_url_1', 'لینک کارت 1', 0, 50),
		cyn_acf_add_text('hero_card_title_2', 'عنوان کارت 2', 0, 50),
		cyn_acf_add_url('hero_card_url_2', 'لینک کارت 2', 0, 50),

		cyn_acf_add_image('hero_tiny_banner_1', 'تصویر کوچک 1'),
		cyn_acf_add_image('hero_tiny_banner_2', 'تصویر کوچک 2'),
	];


	$featuresGroup = [];
	for ($i = 1; $i <= 6; $i++) {
		array_push($featuresGroup, cyn_acf_add_group("features_$i", "ویژگی $i", [
			cyn_acf_add_text('feature_text', 'نام', 0, 50),
			cyn_acf_add_image('feature_image', 'تصویر', 50)
		], 50));
	}

	$features = [
		cyn_acf_add_tab('ویژگی های کلینیک'),
		cyn_acf_add_group('features_group', '', $featuresGroup),
	];

	$services = [
		cyn_acf_add_tab('خدمات'),
		cyn_acf_add_post_object('services', 'انتخاب خدمات', 'service', '', 1),
	];

	$videos = [
		cyn_acf_add_tab('ویدئوها'),
		cyn_acf_add_text('video_title', 'عنوان بخش ویدئوها'),
		cyn_acf_add_post_object('videos', 'انتخاب ویدئوها', 'video', '', 1),
	];

	$price = [
		cyn_acf_add_tab('ویدئوها'),
		cyn_acf_add_post_object('prices', 'انتخاب قیمت ها', 'price', '', 1),
	];

	$doctors = [
		cyn_acf_add_tab('پزشکان'),
		cyn_acf_add_post_object('doctors', 'انتخاب پزشکان', 'doctor', '', 1),
	];

	$blogs = [
		cyn_acf_add_tab('بلاگ ها'),
		cyn_acf_add_post_object('posts', 'انتخاب بلاگ ها', 'post', '', 1),
	];

	$fields = array_merge($hero, $features, $services, $videos, $price, $doctors, $blogs);

	$location = [
		[
			[
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'templates/homepage.php'
			]
		]
	];


	cyn_register_acf_group('تنظیمات صفحه اصلی', $fields, $location);
}

function cyn_acf_register_price()
{

	$fields = [
		cyn_acf_add_text('brand', 'برند'),
		cyn_acf_add_text('country', 'کشور سازنده'),
		cyn_acf_add_text('price_per_unit', 'قیمت هر واحد'),
	];

	$location = [
		[
			[
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'price'
			]
		]
	];

	cyn_register_acf_group('تنظیمات ', $fields, $location);
}

function cyn_acf_register_doctor()
{

	$social_media = [];

	for ($i = 1; $i <= 10; $i++) {
		array_push($social_media, cyn_acf_add_group("social_$i", "شبکه اجتماعی $i", [
			cyn_acf_add_image('social_image', 'تصویر شبکه اجتماعی', 50),
			cyn_acf_add_text('social_link', 'لینک شبکه اجتماعی', 0, 50)
		], 50));
	}

	$fields = [
		cyn_acf_add_tab('عمومی'),
		cyn_acf_add_text('expert', 'تخصص'),
		cyn_acf_add_tab('شبکه های اجتماعی'),
		cyn_acf_add_group('social_group', 'شبکه های اجتماعی', $social_media),
	];

	$location = [
		[
			[
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'doctor'
			]
		]
	];

	cyn_register_acf_group('تنظیمات ', $fields, $location);
}
