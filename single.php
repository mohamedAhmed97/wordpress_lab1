<?php
    get_header();
?>
<?php
    if(have_posts())
    {
            the_post();
?>  
                <div class="card">
                <div class="card-header">
                    <?php the_title() ?>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Welcome To "<?php   the_title(); ?>" blog </h5>
                    <?php the_post_thumbnail("medium",["class"=>"ml-5" ,"style"=>" margin-left: 300px !important;"]); ?>
                    <p class="card-text"><?php the_content();?></p>
                    <p class="card-text">published : <?php the_date();?></p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
                </div>

<?php
        }
    get_footer();
?>