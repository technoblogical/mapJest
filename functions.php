<?php
/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {
 register_sidebar( array(
  'name' => 'topWidgets',
  'id' => 'topWidgets',
  'before_widget' => '<li><section class="indexSection"><aside>',
  'after_widget' => '</div></aside></section></li>',
  'before_title' => '<div class="widgetTitle">',
  'after_title' => '</div><div class="widgetContent">',
 ) );
 register_sidebar( array(
  'name' => 'bottomWidgets',
  'id' => 'bottomWidgets',
  'before_widget' => '<li><section class="indexSection"><aside>',
  'after_widget' => '</div></aside></section></li>',
  'before_title' => '<div class="widgetTitle">',
  'after_title' => '</div><div class="widgetContent">',
 ) );
 register_sidebar( array(
  'name' => 'insideThePost',
  'id' => 'insideThePost',
  'before_widget' => '<div class="insideThePost">',
  'after_widget' => '</div>',
  'before_title' => '<div>',
  'after_title' => '</div>',
 ) );
}
add_action( 'widgets_init', 'arphabet_widgets_init' );

add_theme_support( 'post-thumbnails' );
?>