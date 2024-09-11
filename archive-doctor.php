<?php
$doctor_posts = get_posts( [ 
	'post_type' => 'doctor',
	"posts_per_page" => -1,
	'order' => 'DESC',

] );

?>

<!-- Archive Doctor Page -->
<?php get_header() ?>

<?php cyn_get_component( 'breadcrumb' ) ?>

<main class="container grid gap-[48px]">

	<!-- Title -->
	<div class="text-h1 max-lg:text-h4 pb-6">
		<?php _e( 'متخصص های مجموعه', 'cyn-dm' ) ?>
	</div>

	<div class="grid gap-4 grid-cols-1 md:grid-cols-3">

		<?php foreach ( $doctor_posts as $index => $doctor_post ) : ?>

			<?php cyn_get_card( 'doctor', [ 
				'index' => $index, 'post-id' => $doctor_post->ID
			] ) ?>

		<?php endforeach; ?>
	</div>


</main>

<div class="py-6"></div>



<?php get_footer() ?>