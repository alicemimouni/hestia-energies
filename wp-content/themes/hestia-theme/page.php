<?php /*
Template Name: Page standard
*/
?>
<?php get_header(); ?>

<?php get_template_part( 'template-parts/header' ); ?>

<?php get_template_part( 'template-parts/title' ); ?>

<?php the_content(); ?>

<div class="grey-light-background">

    <?php get_template_part( 'template-parts/qualifications'); ?>
    
</div>

<?php get_template_part( 'template-parts/partenaires'); ?>

<?php get_template_part( 'template-parts/footer' ); ?>

<?php get_footer(); ?>