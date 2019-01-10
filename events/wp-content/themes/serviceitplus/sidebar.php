<div class="sidebar-container">
<!---------------------------------------  BROWSE BY CATEGORY  --------------------------------------------------->
    <div class="browse-by"><i class="fas fa-th-large"></i> Browse By <strong>Category</strong></div>
        <div class="browse-category"><a href="<?php echo get_bloginfo('url'); ?>/category/news">News</a></div>
        <div class="browse-category"><a href="<?php echo get_bloginfo('url'); ?>/category/product-updates">Product Updates</a></div>
        <div class="browse-category"><a href="<?php echo get_bloginfo('url'); ?>/category/events">Events</a></div>
        
<!---------------------------------------  BROWSE BY MONTH  --------------------------------------------------->
    <div class="browse-by"><i class="far fa-calendar-alt"></i> <strong>Archive</strong></div>
    <div class="browse-category"><a href="">Latest Posts</a></div>
    <div class="browse-category"><a href="">Older Posts</a></div>
    <div class="browse-by"><i class="fab fa-twitter"></i> <strong>Tweets</strong> <font style="font-size:0.8rem;color:#777272;">by</font> <a href="https://twitter.com/ServiceITInc" style="font-size:0.8rem;">@ServiceITInc</a></div>
    <a class="twitter-timeline" data-chrome="noheader noscrollbar nofooter" data-height="300" data-theme="light" href="https://twitter.com/ServiceITInc?ref_src=twsrc%5Etfw">Tweets by ServiceITInc</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    <style>
        .timeline-Widget{
            display:none;   
        }
    </style>
    
<!---------------------------------------  LATEST POSTS  --------------------------------------------------->
    <div class="browse-by latest"><i class="fas fa-thumbtack"></i> Tweets by ServiceITInc <strong>Posts</strong></div>
    <div class="recent-posts">

         <?php
        
            $args = array(
              'post_type' => 'post' ,
              'orderby' => 'date' ,
              'order' => 'DESC' ,
              'posts_per_page' => '4',
              'category_name' => 'newsupdates',
              'paged' => get_query_var('paged'),
              'post_parent' => $parent
            ); 
            $catquery = new WP_Query($args);
            while($catquery->have_posts()) : $catquery->the_post();
        ?>
        <div class="latest-cont"><i class="fas fa-caret-right"></i><div class="post-title-cont"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></div></div>
            <h6 class="latest-date">Published <?php echo get_the_date('F j, Y');?> at <?php echo get_the_date('h:i A');?></h6>
        <?php endwhile; ?>
    </div>
</div>
<style>
    .browse-by.latest,.recent-posts{
        display:none;
    }
</style>




<!--

<div id="ttr_sidebar" class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
<h2 ><?php _e('Categories'); ?></h2>
<ul > <?php wp_list_cats('sort_column=namonthly'); ?> </ul>
<h2 ><?php _e('Archives'); ?></h2>
<ul > <?php wp_get_archives(); ?> </ul>
</div>
-->
