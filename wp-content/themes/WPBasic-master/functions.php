<?php


$dafilters = [];

global $filters;

$filters = $dafilters;




function post_categories(){
  $post_categories = wp_get_post_categories(get_the_id());
  foreach($post_categories as $c){
      $cat = get_category( $c );
      echo $cat->slug;
  }
}
