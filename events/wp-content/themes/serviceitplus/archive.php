<?php get_header(); ?>
<?php wp_head();
$year=substr("http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]",strlen($actual_link)-5,4);
?>
<style>
.banner-div{
    background:url(<?php echo get_home_url(); ?>/wp-content/uploads/2019/01/Webp.net-resizeimage.jpg);
}
</style>
<div class="banner-div">
    <h1>Events</h1>
</div>
<div class="post-container">
<?php
$args = array(
    'post_type' => 'post' ,
    'orderby' => 'date' ,
    'order' => 'DESC' ,
    'year' => $year,
    'posts_per_page' => 5,
    'paged' => get_query_var('paged'),
    'post_parent' => $parent
); 
$q = new WP_Query($args);
if ( $q->have_posts() ) { 
  while ( $q->have_posts() ) {
    $q->the_post();
    ?>
    <div class="single-post">
        <div class="single-left">
           <div class="date-container">
                <div class="date-day"><?php echo get_the_date('j');?></div>
                <div class="date-month"><?php echo get_the_date('M');?></div>
           </div>
            <?php the_post_thumbnail( 'featuredImageCropped' ); ?>
        </div>
        <div class="single-right">
            <div class="post-title"><?php the_title(); ?></div>
            <div class="post-date"><i class="far fa-clock"></i> Published at <?php echo get_the_date('F j, Y');?> at <?php echo get_the_date('h:i A');?></div>
            <div class="post-excerpt"><?php the_excerpt(); ?></div>
            <div class="post-button"><a href="<?php the_permalink() ?>"><button class="btn-danger">Read more</button></a></div>
        </div>
    </div>
    <?php
  }
}

?>
<!--------------------------------- PAGES ---------------------->

<div class="navigation">
        <?php 
        $total = $q->max_num_pages; //Get total number of pages
        echo $total;    
        if ($q->max_num_pages > 1) // check if the max number of pages is greater than 1 
        { 
            if ( !$current_page = get_query_var('paged') )
                $current_page = 1;
                // Structure of “format” depends on whether we’re using pretty permalinks
                $permalinks = get_option('permalink_structure');
                $format = empty( $permalinks ) ? '&page=%#%' : 'page/%#%/';
                echo paginate_links(array(
                    'base' => get_pagenum_link(1) . '%_%',
                    'format' => $format,
                    'current' => $current_page,
                    'total' => $total,
                    'mid_size' => 2,
                    'type' => 'list',
                    'prev_text' => '«',
                    'next_text' => '»'
                ));
        } 
        ?>
            
</div>

</div>
<div class="sidebar">
    <?php get_sidebar() ?>
</div>
<script src="../js/aos.js"></script>
<script>
  AOS.init({
    easing: 'ease-in-out-sine'
  });
</script>
<?php get_footer() ?>