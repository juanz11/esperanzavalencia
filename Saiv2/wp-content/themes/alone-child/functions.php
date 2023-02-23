<?php

add_filter('pll_get_post_types', 'my_pll_get_post_types');
function my_pll_get_post_types($types) {
    return array_merge($types, array('fw-event' => 'fw-event'));
}

// Omit closing PHP tag to avoid "Headers already sent" issues.