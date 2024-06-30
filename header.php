<?php $render_template = $args['render_template'] ?? true ?>

<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
</head>

<body <?php body_class('bg-background-main font-peyda text-primary-20') ?>>
    <?php get_template_part('/partials/icons') ?>
    <?php get_template_part('/partials/components/reserve-popup') ?>

    <?php wp_body_open() ?>

    <?php if ($render_template) : ?>
        <header class="my-8 flex justify-between container">
            <div class="flex items-center gap-5">
                <div class="logo size-10 max-md:hidden">
                    <?php the_custom_logo() ?>
                </div>

                <nav class="flex gap-4 max-xl:hidden ">
                    <?php
                    $menu = cyn_get_menu_items_by_slug('header');

                    foreach ($menu as $menu_item) : ?>

                        <div class="text-primary-50 flex gap-1 items-center relative group">
                            <a href="<?php echo $menu_item->url ?>">
                                <?php echo $menu_item->post_title; ?>
                            </a>

                            <?php if ($menu_item->child_items) : ?>
                                <svg class="icon size-4">
                                    <use href="#icon-chevron-down"></use>
                                </svg>

                                <div class="absolute z-50 w-min min-w-[200px] pt-2 top-full opacity-0 translate-y-8 pointer-events-none transition-all group-hover:pointer-events-auto group-hover:opacity-100 group-hover:translate-y-0">
                                    <div class=" divide-y-[1px] divide-primary-90 bg-primary-100 border-primary-90">
                                        <?php foreach ($menu_item->child_items as $index => $child) : ?>
                                            <div class="px-4 py-3 text-primary-20">
                                                <a href="<?php echo $child->url ?>">
                                                    <?php echo $child->post_title ?>
                                                </a>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>

                    <?php endforeach; ?>
                </nav>

                <div class="xl:hidden flex items-center">
                    <svg class="icon size-6 rotate-180 cursor-pointer" id="mobileMenuOpener">
                        <use href="#icon-menu-burger-square" />
                    </svg>

                    <?php cyn_get_component('mobile-menu') ?>
                </div>
            </div>

            <div class="flex items-center gap-2">
                <a href="/?s=">
                    <svg class="icon size-6">
                        <use href="#icon-search-loupe" />
                    </svg>
                </a>

                <div class="reservePopUpOpener">
                    <!-- <cyn-button type="primary" size="md" href="#">
                    </cyn-button> -->

                    <div class="form-submit  w-fit flex flex-row-reverse flex-end max-lg:justify-center gap-1 relative rounded-full transition-all duration-300 cursor-pointer bg-gradient-to-t from-primary-50 to-primary-70 text-primary-100 shadow-md shadow-slate-400/50 hover:from-primary-20 hover:to-primary-20 py-2 px-8 text-body_s">
                        <?php _e('رزرو نوبت آنلاین', 'cyn-dm') ?>
                    </div>
                </div>
            </div>
        </header>
    <?php endif; ?>