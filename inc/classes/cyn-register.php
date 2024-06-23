<?php

if (!class_exists('cyn_register')) {
	class cyn_register
	{
		function __construct()
		{

			add_action('init', [$this, 'cyn_post_type_register']);
			add_action('init', [$this, 'cyn_taxonomy_register']);
			add_action('init', [$this, 'cyn_term_register']);
			add_action('init', [$this, 'cyn_page_register']);
			add_action('after_setup_theme', [$this, 'cyn_register_menus']);
		}

		public function cyn_register_menus()
		{
			register_nav_menus([
				'header' => "Header",
				'footer' => "Footer",
			]);
		}

		public function cyn_post_type_register()
		{
			$this->cyn_make_post_type('service', 'خدمت', 'خدمات', 'dashicons-info');
			$this->cyn_make_post_type('video', 'ویدئو', 'ویدئو ها', 'dashicons-video-alt3');
			$this->cyn_make_post_type('price', 'قیمت', 'قیمت ها', 'dashicons-money-alt');
			$this->cyn_make_post_type('testimonial', 'نظر', 'نظرات بیماران', 'dashicons-format-chat', ['title', 'thumbnail', 'editor']);
			$this->cyn_make_post_type('doctor', 'پزشک', 'پزشکان', 'dashicons-groups');
			$this->cyn_make_post_type('faq', 'سوال', 'سوالات متداول', 'dashicons-lightbulb', ['title', 'editor']);
			$this->cyn_make_post_type('form', 'فرم', 'فرم ها', 'dashicons-format-status', ['title', 'thumbnail', 'editor']);
		}

		public function cyn_taxonomy_register()
		{

			$this->cyn_make_taxonomy('service-cat', '  دسته بندی خدمات ', 'دسته بندی های خدمات', ['service']);
			$this->cyn_make_taxonomy('faq-cat', '  دسته بندی ', 'دسته بندی ها', ['faq']);
			$this->cyn_make_taxonomy('special-services', ' خدمت ویژه', 'خدمات ویژه', ['service']);
		}

		public function cyn_term_register()
		{
			//This terms can't be removed


			// wp_insert_term( 'name', 'taxonomy', [ 'slug' => 'slug' ] );
			wp_insert_term('نوشته های ویژه', 'special-services', ['slug' => 'special-service']);
		}

		public function cyn_page_register()
		{
			//This pages can't be removed

			if (is_null(get_page_by_path('homepage'))) {
				$front_page_id = wp_insert_post([
					'post_type' => 'page',
					'post_status' => 'publish',
					'post_title' => 'صفحه اصلی',
					'post_name' => 'homepage',
					'page_template' => 'templates/homepage.php',
				]);


				update_option('show_on_front', 'page');
				update_option('page_on_front', $front_page_id);
			}
		}


		/**
		 * Summary of cyn_make_post_type
		 * @param string $slug from Globals that defined in cyn-global.php
		 * @param string $singular_name 
		 * @param string $plural_name
		 * @param string $icon
		 * @param string[] $supports 
		 * @return void
		 */
		private function cyn_make_post_type($slug, $singular_name, $plural_name, $icon, $supports = ['title', 'thumbnail'])
		{
			$labels = [
				'name' => $singular_name,
				'singular_name' => $singular_name,
				'menu_name' => $plural_name,
				'name_admin_bar' => $singular_name,
				'add_new' => 'افزودن ' . $singular_name,
				'add_new_item' => 'افزودن ' . $singular_name . ' جدید',
				'new_item' => $singular_name . ' جدید',
				'edit_item' => 'ویرایش ' . $singular_name,
				'view_item' => 'دیدن ' . $singular_name,
				'all_items' => 'همه ' . $plural_name,
				'search_items' => 'جستجو ' . $singular_name,
				'not_found' => $singular_name . '‌ای پیدا نشد',
				'not_found_in_trash' => $singular_name . ' پیدا نشد'
			];

			$args = [
				'labels' => $labels,
				'public' => true,
				'publicly_queryable' => true,
				'show_ui' => true,
				'show_in_menu' => true,
				'query_var' => true,
				'rewrite' => ['slug' => $slug],
				'exclude_from_search' => false,
				'has_archive' => true,
				'hierarchical' => false,
				'menu_position' => null,
				'menu_icon' => $icon,
				'supports' => $supports,

			];

			register_post_type($slug, $args);
		}

		/**
		 * Summary of cyn_make_taxonomy
		 * @param string $slug from Globals that defined in cyn-global.php
		 * @param string $singular_name
		 * @param string $plural_name
		 * @param string[] $post_types 
		 * @param boolean $is_hierarchical
		 * @return void
		 */
		private function cyn_make_taxonomy($slug, $singular_name, $plural_name, $post_types, $is_hierarchical = true)
		{

			$args = [
				'labels' => [
					'name' => $plural_name,
					'menu_name' => $plural_name,
					'all_items' => 'همه ' . $plural_name,
					'add_new_item' => 'افزودن ' . $singular_name . 'جدید ',
				],
				'hierarchical' => $is_hierarchical,
				'public' => true,
				'show_ui' => true,
				'show_admin_column' => true,
				'show_in_nav_menus' => true,
				'show_tagcloud' => true,
				'query_var' => true,
				'rewrite' => ['slug' => $slug],
			];

			register_taxonomy($slug, $post_types, $args);
		}
	}
}
