<?php

add_filter('woocommerce_loop_add_to_cart_link', 'custom_quick_add_to_cart_button');

function custom_quick_add_to_cart_button($link) {
    global $product;
    $product_link = $product->get_permalink();
    return '<a href="' . esc_url($product_link) . '" rel="nofollow" class="view_btn">View</a>';
}
