<div class="sidebar-container">
<!---------------------------------------  BROWSE BY CATEGORY  --------------------------------------------------->
    <div class="browse-by"><i class="fas fa-th-large"></i> Browse By <strong>Category</strong></div>
        <div class="browse-category"><a href="<?php echo get_bloginfo('url'); ?>/category/news">News</a></div>
        <div class="browse-category"><a href="<?php echo get_bloginfo('url'); ?>/category/product-updates">Product Updates</a></div>
        <div class="browse-category"><a href="<?php echo get_bloginfo('url'); ?>/category/events">Events</a></div>
<!---------------------------------------  BROWSE BY MONTH  --------------------------------------------------->
    <div style="display:none;">
        <div class="browse-by"><i class="far fa-calendar-alt"></i> Monthly <strong>Archive</strong></div>

        <?php
            $args = array(
              'post_type' => 'post' ,
              'orderby' => 'date' ,
              'order' => 'DESC' ,
              'category_name' => 'newsupdates',
              'paged' => get_query_var('paged'),
              'post_parent' => $parent
            ); 

            $counter = 1;
            $limit = 5;
            $ref_month = '';
            $monthly = new WP_Query($args);
            if( $monthly->have_posts() ) : 
                while( $monthly->have_posts()) : $monthly->the_post();
                 If($counter>$limit){ ?>
                        <div class="browse-category"><a href="">>>Monthly Archive</a></div>
                <?php
                    break;
                    }
                if( get_the_date('mY') != $ref_month) {
                    if( $ref_month ) echo "\n".'</ul>';
                        $month = get_the_date('F');
                        $monthnum = get_the_date('n');
                        $year = get_the_date('Y');
                        echo "".'<div class="browse-category" ><a href="'.get_bloginfo('url').'/archive?mon='.$monthnum.'&yr='.$year.'">'.$month." ".$year.'</a></div>';
                        $ref_month = get_the_date('mY');
                        $counter = $counter + 1;
                    }
                endwhile; 
                echo "".'<div class="browse-category" ><a href="'.get_bloginfo('url').'/MonthlyArchive/">'."All Previous Months".'</a></div>';
                echo "\n".'';
                endif; 
            ?>
    </div>

    <div class="browse-by"><i class="far fa-calendar-alt"></i> Browse By <strong>Year</strong></div>
        <?php
            $args = array(
                'type'              => 'yearly',
                'show_post_count'   => true
            );
        ?>
        <div class="years-listing">
            <?php wp_get_archives($args); ?>
        </div>   
    <style>
        .years-listing{
            font-size:0.9rem;
            display:flex;
            justify-content: flex-start;
            flex-direction: column;
            width:100%;
        }
        .years-listing li{
            list-style: none;
            padding-left:1.5rem;
/*            border:1px solid black;*/
        }
        .years-listing a{
            color: #337ab7;
            font-weight:600;
            line-height:1.5rem;
            text-decoration: none;
        }
        .years-listing a:hover{
            color: #011579;
        font-weight:600;
        font-size:0.9rem;
        line-height:1.5rem;
        text-decoration: none;
        }
    </style>    
<!---------------------------------------  ARCHIVE  --------------------------------------------------->
<div style="display:none;">
    <div class="browse-by"><i class="far fa-calendar-alt"></i><strong> Archive</strong></div>
    <div class="browse-category"><a href="">Latest Posts</a></div>
    <div class="browse-category"><a href="">Older Posts</a></div>
</div>
    
<!---------------------------------------  YEARLY ARCHIVE  --------------------------------------------------->
    <div class="browse-by"><i class="fab fa-twitter"></i> <strong>Tweets</strong> <font style="font-size:0.8rem;color:#777272;">by</font> <a href="https://twitter.com/ServiceITInc" class="twitterlink">@ServiceITInc</a></div>
    <a class="twitter-timeline" data-chrome="noheader noscrollbar nofooter" data-height="300" data-theme="light" href="https://twitter.com/ServiceITInc?ref_src=twsrc%5Etfw">Tweets by ServiceITInc</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    
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
