<?php
$faq_cats = get_terms([
	'taxonomy' => 'faq-cat',
	'hide_empty' => true,
	// 'meta_query' => [
	// 	[
	// 		'key' => 'show_in_front',
	// 		'value' => 1,
	// 	]
	// ]
]);
$faq_select = get_field('faq-cat');
?>


<div class="container space-y-4">
	<div class="text-h1 max-lg:text-h5 flex justify-between">
		<?php _e('اگه سوالی داری...', 'cyn-dm') ?>
		<cyn-button type="primary" class="justify-center md:hidden" href="#">
			<?php _e('تماس با ما', 'cyn-dm') ?>
		</cyn-button>
	</div>
	<div class="grid grid-cols-6 gap-5">
		<div class="col-span-1 space-y-4 max-md:hidden">
			<?php foreach ($faq_select as $category): ?>
				<?php $term = get_term_by('id', $category, 'faq-cat'); ?>


				<div class="fade-in-down" anim-delay="<?php echo $index * 0.3 ?>">

					<div id="<?php echo "faq-cat-" . $term->term_id ?>"
						class="faq-handler | rounded-full cursor-pointer duration-300 text-primary-50 bg-background-card_1 text-center p-2 border border-background-card_1 hover:border-primary-0 hover:text-primary-20 transition-all ">
						<?= $term->name ?>
					</div>
				</div>

			<?php endforeach; ?>
			<div class="fade-in-down" anim-delay="<?php echo count($faq_select) * 0.3 ?>">
				<cyn-button type="primary" class="justify-center"
					href="https://artdental.center/%d8%aa%d9%85%d8%a7%d8%b3-%d8%a8%d8%a7-%d9%85%d8%a7/">
					<?php _e('تماس با ما', 'cyn-dm') ?>
				</cyn-button>
			</div>
		</div>









		<div class="col-span-5 max-md:col-span-6">
			<div class="fade-in-down" anim-delay="0.8">

				<?php foreach ($faq_select as $category): ?>
					<?php
					$term = get_term_by('id', $category, 'faq-cat');
					$term_query = new WP_Query(
						array(
							'taxonomy' => 'faq-cat',
							'hide_empty' => true,
							'posts_per_page' => 4,
							'tax_query' => array(
								array(
									'taxonomy' => 'faq-cat',
									'field' => "slug",
									'terms' => $term->slug
								)
							)
						)
					);
					?>
					<div class="faq-panel grid grid-rows-[0fr] transition-all duration-700"
						controlled-by="<?php echo "faq-cat-" . $term->term_id ?>">
						<div class="overflow-hidden">
							<?php cyn_get_component('faq-group', ['type' => 'query', 'term_ids' => [$term->term_id]]) ?>
						</div>
					</div>
					<?php wp_reset_postdata() ?>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</div>