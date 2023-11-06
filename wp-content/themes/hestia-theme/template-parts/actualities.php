<!--####### SECTION ACTUALITES ###### -->
    <!-- ################################# -->
<?php
    $recentPosts = new WP_Query();
    $recentPosts->query('showposts=1');
?>
<?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
<section class="section-actualite grey-light-background d-flex flex-column justify-content-center align-items-center">
            <div class="m-2 text-center container reveal">
                <h2 class="text-uppercase text-bold mt-4 mb-5">Actualités</h2>
                <!-- IMAGE --> 
                <?php the_post_thumbnail(); ?>
                <h3 class="m-3 text-bold text-capitalize"><?php the_title(); ?></h3>
                <p><?php the_excerpt(); ?></p>
                <a href="<?php the_permalink() ?>" class="btn button-primary mt-3 mb-3">Lire la suite</a>
            </div>
            
        
</section>
<?php endwhile; ?>
