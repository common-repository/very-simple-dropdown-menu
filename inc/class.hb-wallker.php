<?php
    class HB_MenuWalker extends Walker_Nav_Menu
    {   

        public function start_lvl( &$output, $depth = 0, $args = array() ) {

            $classes = array( 'sub-menu' );
            $class_names = ' class="sub-menu hide"';
            $output .= "<ul$class_names>";
        }

        public  function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
            $args = $args;
            $classes     = array('menu-item');     
            $class_names = 'class="menu-item"';   
            $id          = '';
            $output .= "<li $class_names>";
            $title = $item->title;
            if($args->walker->has_children){
                $item_output = $args->before . '<span class=\'has-child-list\'>&#9650;</span>';
            }else{
                $item_output = $args->before . '<span class=\'no-child-list\'>&#11200;</span>';    
            }  
            $item_output .= '<a href='.$item->url.'>';
            $item_output .= $args->link_before . $title . $args->link_after;
            $item_output .= '</a>';
            $item_output .= $args->after;
            $output .= $item_output; 
        }
    }