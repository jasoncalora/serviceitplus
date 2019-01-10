<?php get_header(); ?>
<div class="header-background"></div>
<link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/single.css' ?>" type="text/css">
<div class="content-body">
   <div class="breadcrumb-container" style="display:none;">
       <ul id="breadcrumb">
          <li><a href="http://www.serviceitplus.com"><i class="fas fa-home"></i><font style="color:rgba(0,0,0,0)">a</font></a></li>
          <li><a href="<?php echo get_bloginfo('url'); ?>"><i class="fas fa-newspaper"></i> Publications</a></li>
          <li><a href="#"><i class="fas fa-folder-open"></i> 
                 <?php 
                    $category = get_the_category();
                    echo $category[0]->cat_name;
                ?>
              </a>
          </li>
          <li class="actives"><a href="#" style="background-color:#f16a21;color:white;cursor:default;"><i class="fas fa-file"></i>
                 <?php
                  $_post = get_queried_object();
                  echo $_post->post_title;
                ?>
              </a>
          </li>
        </ul>
   </div>
    <div class="single-container">
    <div class="title-container">
        <?php the_title();  ?>
    </div>
    <div class="content-container">
       <div class="date"><i class="far fa-calendar-alt"></i> Published on <?php echo get_the_date('F j, Y');?> at <?php echo get_the_date('h:i A');?></div>
        <?php
            if (have_posts()):
                while(have_posts()) : the_post();
        the_content();
                endwhile;
            else :
                echo '<p>no content found</p>';
            endif;
         ?>  
    </div>
    
<!--
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">News, Updates and Events</a></li>
            <li class="breadcrumb-item"><a href="#">News</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php  ?></li>
          </ol>
        </nav>
-->
        
    </div>
<!--    <div class="sidebar"><?php //get_sidebar() ?></div>-->
</div>

<style>
</style>
<script>
</script>
<?php get_footer(); ?>