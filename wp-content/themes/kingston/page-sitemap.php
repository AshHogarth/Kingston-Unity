<?php
/*
Template Name: Sitemap Page
*/
?>
<?php get_header(); ?>

	<div id="content" class="wow fadeIn" data-wow-delay="2s">
		<div class="container">
<h2 id="pages">Pages</h2>
<ul>
<?php
// Add pages you'd like to exclude in the exclude here
wp_list_pages(
  array(
    'exclude' => '51',
    'title_li' => '',
  )
);
?>
</ul>

<h2 id="posts">Menus</h2>
<ul>
<?php
// Add categories you'd like to exclude in the exclude here
$cats = get_categories('include=2,3,19');
foreach ($cats as $cat) {
  echo "<li><h3><a href=". get_category_link( $cat->term_id ).">".$cat->cat_name."</a></h3>";
  echo "<ul>";
  query_posts('posts_per_page=-1&cat='.$cat->cat_ID);
  while(have_posts()) {
    the_post();
    $category = get_the_category();
    // Only display a post link once, even if it's in multiple categories
    if ($category[0]->cat_ID == $cat->cat_ID) {

      $permalink = get_permalink();
      echo '<li>'.get_the_title().'</li>';

    }
  }
  echo "</ul>";
  echo "</li>";
}

?>
</ul>

<h2 id="posts">Events</h2>

<ul>
<?php $event_archive_query = new WP_Query('showposts=1000&post_type=tribe_events');
while ($event_archive_query->have_posts()) : $event_archive_query->the_post(); ?>
<li><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>
<?php endwhile; ?>
</ul>


<?php get_footer(); ?>
