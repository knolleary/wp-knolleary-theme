<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
<div class="storypage">
<div class="title"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></div>

<?php if (!is_page()) : ?>
<div class="meta">
 <div class="meta-date"><? the_time("j M Y"); ?></div>
 <div class="meta-category"><?php the_category('<br />') ?></div>
 <div class="meta-commentlink"><?php comments_popup_link('no comments', 'a comment', ' % comments'); ?></div>
 <?php edit_post_link('edit','<div class="meta-edit">','</div>'); ?>
</div>
<?php endif ?>

<div class="storycontent">
 <?php the_content('(more...)'); ?>
</div><!-- end storycontent -->
<div class="clearfloat"></div>
</div><!-- end story -->
<div class="storyfooter"><?php comments_popup_link('no comments', 'a comment', ' % comments'); ?></div>
</div><!-- end post -->
<?php comments_template(); ?>
<?php endwhile; else: ?>
<div class="storycontent">
<p><i>sorry, nothing to see here.</i></p>
</div>
<?php endif; ?>

<div class="history-nav">
<div class="history-nav-older"><?php next_posts_link('older things &raquo;') ?></div><div class="history-nav-newer"><?php previous_posts_link('&laquo; newer things') ?></div>
</div>

<?php get_footer(); ?>
