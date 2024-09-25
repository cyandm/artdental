<?php
$id = $args['post-id'] ?? '';
$acf_field = $args['acf-field'] ?? '';
$acf_poster = $args['acf-poster'] ?? null;
$video = get_field($acf_field, $id);
$poster_url = $acf_poster ? wp_get_attachment_url(get_field($acf_poster, $id)) : get_the_post_thumbnail_url($id, 'full');

if (! $video)
	return;
?>

<div class="relative">
	<div class="absolute -top-8 -right-8 bg-stone-800 rounded-full p-3 cursor-pointer"
		id="closePopUp">
		<svg class="icon">
			<use href="#icon-xmark" />
		</svg>
	</div>

	<video class="plyr-video"
		playsinline
		controls
		autoplay
		data-poster="<?php echo $poster_url  ?>">

		<source src="<?php echo $video['url'] ?> "
			type="<?php echo $video['mime_type'] ?>" />

	</video>



	<div class="absolute -bottom-16 right-0">

		<div class="grid">
			<span class="text-lg"><?php echo get_the_title($id) ?></span>
		</div>
	</div>



</div>