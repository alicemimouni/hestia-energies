<!-- ##### SECTION TITLE ######## -->
<!-- ############################## -->
<?php
  if ( have_posts() ) : while ( have_posts() ) : the_post();
?>
<!-- BACKGROUND IMAGE -->
<?php
if (has_post_thumbnail()) {
    $thumbnail_data = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'my-fun-size' );
    $thumbnail_url = $thumbnail_data[0];
}
?>
<section class="section-title text-white d-flex justify-content-center align-items-center"
    style="background: linear-gradient(0deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('<?php echo $thumbnail_url ?>')"
    <?php post_class('container-fluid'); ?>>
    <?php
  endwhile;
  endif;
?>
    <div class="container text-center p-3 reveal">
        <!-- AFFICHER LE TITRE -->
        <?php if( get_the_title() ) : ?>
        <h1 class="display-2 text-bold post-title"><?php the_title(); ?></h1>
        <?php endif; ?>
    </div>
</section>