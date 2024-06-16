<?php

add_action('rest_api_init', function () {
    register_rest_route(
        'cyn-api/v1',
        '/search',
        [
            'methods' => 'POST',
            'callback' => 'cyn_handle_search_posts',
            'permission_callback' => '__return_true'

        ]
    );
});


function cyn_handle_search_posts(WP_REST_Request $request)
{

    $post_type = $request->get_param('postType');
    $search_input = $request->get_param('s');





    if ($post_type === 'all') {
        $query = new WP_Query([
            's' => $search_input,
        ]);
    } else {
        $query = new WP_Query([
            'post_type' => $post_type,
            's' => $search_input,
        ]);
    }


    $html = cyn_render_by_query($query, 'search-result');



    $res = new WP_REST_Response([
        'found_posts' => $query->found_posts,
        'html' => $html
    ]);
    return $res;
}


function cyn_render_by_query($query, $post_type, array $args = [])
{
    ob_start();
    if ($query->have_posts()) {
        while ($query->have_posts()) :
            $query->the_post();
            cyn_get_card($post_type, $args);
        endwhile;
    } else {
        get_template_part('/templates/archive/not-found');
    }
    wp_reset_postdata();
    return ob_get_clean();
}
