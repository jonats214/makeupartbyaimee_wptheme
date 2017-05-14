<?php
/**
 * Created by PhpStorm.
 * User: Jonats
 * Date: 6/03/2017
 * Time: 11:34 PM
 */
?>
<?php get_header(); ?>
<div class="row">
    <div class="col-sm-8 blog-main">
        <?php get_template_part( 'content', get_post_format() ); ?>
    </div> <!-- /.blog-main -->
    <?php get_sidebar(); ?>
</div> <!-- /.row -->
<?php get_footer(); ?>
