<?php
    get_header();
?>
<?php
    if(have_posts())
    {
        while(have_posts())
        {   
            the_post();
?>  
                <div class="card">
                <div class="card-header">
                    <?php the_title() ?>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Welcome To "<?php   the_title(); ?>" blog </h5>
                    <p class="card-text"><?php the_content();?></p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
                </div>

<?php
    }
        }
    get_footer();
?>