<?php
/**
 * WordPress Bootstrap Pagination
 */

function wp_bootstrap_pagination($args = array())
{
    $defaults = array(
        'range'           => 4,
        'custom_query'    => false,
        'previous_string' => __('Previous', 'text-domain'),
        'next_string'     => __('Next', 'text-domain'),
        'before_output'   => '<nav class="text-center"><ul class="pagination pagination-lg"><li class="pagina"><span aria-hidden="true">Página: </span></li>',
        'after_output'    => '</ul></nav>'
    );

    $args = wp_parse_args(
        $args,
        apply_filters('wp_bootstrap_pagination_defaults', $defaults)
    );

    $args['range'] = (int) $args['range'] - 1;
    if (!$args['custom_query']) {
        $args['custom_query'] = @$GLOBALS['wp_query'];
    }

    $count = (int) $args['custom_query']->max_num_pages;
    $page  = intval(get_query_var('paged'));
    $ceil  = ceil($args['range'] / 2);

    if ($count <= 1) {
        return false;
    }

    if (!$page) {
        $page = 1;
    }

    if ($count > $args['range']) {
        if ($page <= $args['range']) {
            $min = 1;
            $max = $args['range'] + 1;
        } elseif ($page >= ($count - $ceil)) {
            $min = $count - $args['range'];
            $max = $count;
        } elseif ($page >= $args['range'] && $page < ($count - $ceil)) {
            $min = $page - $ceil;
            $max = $page + $ceil;
        }
    } else {
        $min = 1;
        $max = $count;
    }

    $echo = '';

    if (!empty($min) && !empty($max)) {
        for ($i = $min; $i <= $max; $i++) {
            if ($page == $i) {
                $echo .= '<li class="active"><span class="active">' . str_pad((int)$i, 1, '0', STR_PAD_LEFT) . '</span></li>';
            } else {
                $echo .= sprintf('<li><a href="%s">%001d</a></li>', esc_attr(get_pagenum_link($i)), $i);
            }
        }
    }

    if (isset($echo)) {
        echo $args['before_output'] . $echo . $args['after_output'];
    }
}