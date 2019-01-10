<?php
/*
Template Name: MonthlyArchive
*/

$args = array(
      'post_type' => 'post' ,
      'orderby' => 'date' ,
      'order' => 'DESC' ,
      'category_name' => 'newsupdates',
      'paged' => get_query_var('paged'),
      'post_parent' => $parent
    ); 

    $counter = 1;
    $limit = 99;
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
    echo "\n".'';
    endif; 
?>