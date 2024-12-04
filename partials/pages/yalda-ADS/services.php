<?php
$services = get_field('services') ?? [];
$swiper_show = $args['swiper'] ?? true;

if (!is_array($services) || count($services) < 1) {
	$services = get_posts([
		'post_type' => 'service',
		'posts_per_page' => -1,
		'fields' => 'ids',
	]);
}
?>

<div class="bg-primary-0 bg-noise py-9 space-y-4">
	<div class="container">
		<div class=" flex justify-between items-center">

			<div class="text-h1 max-lg:text-h3 max-md:text-h5 text-primary-100">
				<?php _e('خدمات مرکز', 'cyn-dm') ?>
			</div>
			<?php if (false !== $swiper_show): ?>

				<div class="flex gap-2">
					<button id="servicesPrev" class="border border-[#B3B3B3] rounded-full p-4 cursor-pointer">
						<svg class="icon size-4 text-primary-100 -rotate-90">
							<use href="#icon-chevron-down" />
						</svg>
					</button>

					<button id="servicesNext" class="border border-[#B3B3B3] rounded-full p-4 cursor-pointer">
						<svg class="icon size-4 text-primary-100 rotate-90">
							<use href="#icon-chevron-down" />
						</svg>
					</button>
				</div>
			<?php endif; ?>

		</div>
	</div>

	<div class="px-3">
		<swiper-container navigation-next-el="#servicesNext" navigation-prev-el="#servicesPrev" space-between="12"
			slides-per-view="auto">
			<?php foreach ($services as $index => $service): ?>
				<swiper-slide class="max-w-[350px] fade-in-down" anim-delay="<?php echo $index * 0.3 ?>">
					<?php cyn_get_card('service', ['post-id' => $service]) ?>
				</swiper-slide>
			<?php endforeach; ?>
		</swiper-container>
	</div>
</div>