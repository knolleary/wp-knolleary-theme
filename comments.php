<?php

 if ( get_post_meta($post->ID, "no_comments", true)) {return;}

 if ( !comments_open()){return;}
 
if ( post_password_required() ) : ?>
<p><?php _e('Enter your password to view comments.'); ?></p>
<?php return; endif; ?>
<!--  begin comments -->
<div id="commentsd">
<p class="comments-meta-links comments-rss"><?php post_comments_feed_link('comments rss'); ?>
<?php if ( pings_open() ) : ?>
 | <a href="<?php trackback_url() ?>" rel="trackback">trackback</a>
<?php endif; ?>
</p>
<a id="comments"></a>
<?php if ( comments_open() || $comments ) : ?>
<ol id="commentlist">
<?php endif ?>

<?php if ( $comments ) : ?>

<?php $n = 0;
   foreach ($comments as $comment) : 
 ?>
	<li <?php comment_class(); ?> id="comment-<?php comment_ID() ?>">
	<p class="comments-meta"><?php comment_type('', 'trackback from','pingback from'); ?> <?php comment_author_link() ?> &bull; <a href="#comment-<?php comment_ID() ?>"><?php comment_date();?></a> <?php edit_comment_link("edit", ' '); ?></p>
<?php if ($comment->comment_type == 'comment' ):?>  <div class="comments-text"><?php comment_text() ?></div><?php endif; ?>
	</li>

<?php endforeach; ?>

<?php endif; ?>

<?php if ( comments_open() ) : ?>
<li class="commentformitem">
<h2 id="postcomment">leave a comment</h2>

<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<p><?php printf(__('You must be <a href="%s">logged in</a> to post a comment.'), get_option('siteurl')."/wp-login.php?redirect_to=".urlencode(get_permalink()));?></p>
<?php else : ?>

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

<?php if (! $user_ID ) : ?>

<p><input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" />
<label for="author"><small><?php _e('Name'); ?> <?php if ($req) _e('(required)'); ?></small></label></p>

<p><input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" />
<label for="email"><small><?php _e('Mail (will not be published)');?> <?php if ($req) _e('(required)'); ?></small></label></p>

<p><input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />
<label for="url"><small><?php _e('Website'); ?></small></label></p>

<?php endif; ?>

<p><textarea name="comment" id="comment" cols="80" rows="10" tabindex="4"></textarea></p>

<p><input name="submit" type="submit" id="submit" tabindex="5" value="<?php echo attribute_escape(__('Submit Comment')); ?>" />
<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
</p>
<?php do_action('comment_form', $post->ID); ?>

</form>

<?php endif; // If registration required and not logged in
?>
</li>
<?php else : // Comments are closed 
?>
<p><?php _e('Comments are closed'); ?></p>
<?php endif; ?>

<?php if ( comments_open() || $comments ) : ?>
</ol>
<?php endif ?>
</div><!-- end comments div -->
