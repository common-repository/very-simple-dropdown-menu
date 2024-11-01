<?php
$app = wp_nav_menu( array(
        'theme_location'  => 'heiblack',//導航別名
        'menu'   => $array['menu'], //期望顯示的菜單
        'container'  => 'div',  //容器標籤
        'container_class' => '',//ul父節點class值
        'container_id'  => 'heiblack-menu',  //ul父節點id值
        'menu_class'   => 'black',   //ul節點class值
        'menu_id'   => '',  //ul節點id值
        'echo'  => false,//是否輸出菜單，默認爲真
        'fallback_cb' => false,  
        'before' => '', //鏈接前文本
        'after'  => '', //鏈接後文本
        'link_before'  => '',   //鏈接文本前
        'link_after'  => '',//鏈接文本後
        'items_wrap'  => '<ul id="%1$s" class="%2$s">%3$s</ul>',
        'depth' => 0,   //菜單深度，默認0
        'walker'   => new HB_MenuWalker, 
));

