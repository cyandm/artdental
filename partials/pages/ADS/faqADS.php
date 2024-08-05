<?php $postId = $args['post-id'] ?? get_the_ID(); ?>

<?php if (!empty(get_field('faqs', $postId))) : ?>


    <div class="container">
        <div class="text-h2">
            <?php _e('سوالات متداول ', 'cyn-dm') ?>
        </div>
        <?php cyn_get_component('faqs', ['type' => 'acf', 'acf_field' => 'faqs', 'post-id' => $postId]) ?>
    </div>
<?php endif; ?>