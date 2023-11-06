<?php
/*
Template Name: Article standard
*/
?>
<?php get_header(); ?>

<?php get_template_part( 'template-parts/header' ); ?>

<?php get_template_part( 'template-parts/title' ); ?>

<?php the_content(); ?>

<?php get_template_part( 'template-parts/footer' ); ?>

<?php get_footer(); ?>