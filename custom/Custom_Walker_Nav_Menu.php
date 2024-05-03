<?php
class Custom_Walker_Nav_Menu extends Walker_Nav_Menu {
    // Modify the start_el method to change the class of the <li> and <a> elements
    function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $classes[] = 'nav-item'; // Add the 'nav-item' class for the <li> element
        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args, $depth));
        $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';

        $item->url = $item->ID ? get_the_permalink($item->ID) : '#';
        
        $output .= '<li' . $class_names . '>';
        
        $attributes = '';
        !empty($item->attr_title) && $attributes .= ' title="' . esc_attr($item->attr_title) . '"';
        !empty($item->target) && $attributes .= ' target="' . esc_attr($item->target) . '"';
        !empty($item->xfn) && $attributes .= ' rel="' . esc_attr($item->xfn) . '"';
        !empty($item->url) && $attributes .= ' href="' . esc_attr($item->url) . '"';
        $attributes .= ' class="nav-link me-lg-3"'; // Add the 'nav-link me-lg-3' class for the <a> element
        
        $title = apply_filters('the_title', $item->post_title, $item->ID);
        $title = apply_filters('nav_menu_item_title', $title, $item, $args, $depth);
        $item_output = '<a' . $attributes . '>';
        $item_output .= $args['before'] . $title . $args['after'];
        $item_output .= '</a>';
        
        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }
    function start_lvl(&$output, $depth = 0, $args = array()) {
        echo 'start_lvl';die();
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul class=\"navbar-nav ms-auto me-4 my-3 my-lg-0\">\n";
    }
}
?>