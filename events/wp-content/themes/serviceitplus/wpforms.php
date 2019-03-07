<?php 
/*
Template Name: wpforms
*/
wp_head();
?>
<div class='wrapper'>
    <div class="container">
        <?php
        if ( have_posts() ) : while ( have_posts() ) : the_post();
        the_content();
        endwhile; else: ?>
        <p>Sorry, no posts matched your criteria.</p>
        <?php endif; ?>
    </div>
</div>
<style>
    .wrapper{
/*        border:1px solid black;*/
/*        height:100%;*/
        width:100%;
        margin-top:40px;
        display:flex;
        justify-content:center;
    }
    .container{
        min-height:95%;
        min-width:95%;
        text-align: center;
/*        border:1px solid red;*/
    }
    .everest-forms .everest-forms-part-button, .everest-forms button[type=submit], .everest-forms input[type=submit]{
        font-size:1rem;
    }
    .header{
        -webkit-box-shadow: 0px 5px 5px #888888;
        box-shadow: 0px 5px 5px #888888;
    }
    .nav-item a{
            color:black;
        }
    .nav-item2 a{
            color:black;
        }
    .everest-forms .everest-forms-notice--success{
        font-size:0.8rem;
    }
</style>