<!-- begin sidebar -->
<div id="menu">
<div id="menu-container">


<?php if (!wp_knolleary_is_mobile()) : ?>
<div id="menu-col1">
<div class="menu-block mbtop">
recent things<ul><li><script type="text/javascript" src="http://friendfeed.com/embed/widget/knolleary?v=3&amp;hide_logo=1&amp;hide_comments_likes=1&amp;hide_subscribe=1&amp;width=220"></script><noscript><a href="http://friendfeed.com/knolleary"><img alt="View my FriendFeed" style="border:0;" src="http://friendfeed.com/embed/widget/knolleary?v=3&amp;hide_logo=1&amp;hide_comments_likes=1&amp;hide_subscribe=1&amp;width=220&amp;format=png"/></a></noscript></li></ul>
<style>#friendfeed { border: none !important; background-color: #f0f0f0 !important; }
#friendfeed.widget, #friendfeed.widget div, #friendfeed.widget span, #friendfeed.widget a, #friendfeed.widget img, #friendfeed.widget table, #friendfeed.widget tr, #friendfeed.widget td  { background-color: #f0f0f0 !important; }
#friendfeed { font-size: 1.2em !important; }
#friendfeed .info {font-size: 0.9em !important; }
#friendfeed  a {
   font-size: 0.9em !important;
   color: #444 !important;
}
#friendfeed  a:hover {
   color: #900 !important;
}

</style>
</div> <!-- /menu-block -->
</div> <!-- /col1 -->
<?php endif; ?>

<div id="menu-col2">
<div class="menu-block mbtop">
recent posts<ul><?php
 global $post;
 $myposts = get_posts('numberposts=15');
 foreach($myposts as $post) :
 ?><li><a href="<?php the_permalink(); ?>"><span class="recent-times"><?php the_time('d-m'); ?> - </span> <?php the_title(); ?></a></li><?php 
 endforeach; ?></ul>
</div> <!-- /menu-block -->
<div class="menu-block">
recent comments
<ul><?php 
 $comments = $wpdb->get_results("SELECT * FROM $wpdb->comments WHERE comment_approved = '1' and comment_type <> 'trackback' AND comment_type <> 'pingback' ORDER BY comment_date_gmt DESC LIMIT 15");
 $comments = array_slice( (array) $comments, 0, 5 );
 if ( $comments ) : foreach ( (array) $comments as $comment) :?>
<li class="recentcomments"><?php comment_date('d-m'); ?> - <?php echo get_comment_author_link(); ?> on <a href="<?php echo esc_url( get_comment_link($comment->comment_ID) );?>"><?php echo get_the_title($comment->comment_post_ID);?></a></li>
<?php endforeach; endif;?></ul></div> <!-- /menu-block -->
<div class="menu-block">
recent trackbacks
<ul><?php 
 $comments = $wpdb->get_results("SELECT * FROM $wpdb->comments WHERE comment_approved = '1' and (comment_type = 'trackback' OR comment_type = 'pingback') ORDER BY comment_date_gmt DESC LIMIT 15");
 $comments = array_slice( (array) $comments, 0, 5 );
 if ( $comments ) : foreach ( (array) $comments as $comment) :?>
<li class="recentcomments"><?php comment_date('d-m'); ?> - <?php echo get_comment_author_link(); ?> on <a href="<?php echo esc_url( get_comment_link($comment->comment_ID) );?>"><?php echo get_the_title($comment->comment_post_ID);?></a></li>
<?php endforeach; endif;?></ul></div> <!-- /menu-block -->

<div class="menu-block">
finally<ul><li>The postings on this site are my own and don’t necessarily represent IBM’s positions, strategies or opinions.</li></ul>
<ul><li><a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/2.0/uk/"><img alt="Creative Commons License" style="border-width:0" src="http://i.creativecommons.org/l/by-nc-sa/2.0/uk/80x15.png" /></a><br />All content on this site is licenced under a <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/2.0/uk/">Creative Commons Licence</a>.</li></ul>
</div> <!-- /menu-block -->

</div><!--end col2 -->
<div id="menu-col3"><!-- start col3 -->
<div class="menu-block mbtop">
archives<ul><li><select name="archive-dropdown" onchange='document.location.href=this.options[this.selectedIndex].value;'><option value=""><?php echo attribute_escape(__('Select Month')); ?></option><?php wp_get_archives("type=monthly&format=option&show_post_count=$c"); ?> </select></li></ul>
</div> <!-- /menu-block -->
<div class="menu-block">
search<ul><li>
<form action="http://www.google.com/cse" id="cse-search-box">
  <div>
    <input type="hidden" name="cx" value="011988921072415688523:koclo-uzgy8" />
    <input type="hidden" name="ie" value="UTF-8" />
    <input type="text" name="q" size="16" />
    <input type="submit" name="sa" value="Search" />
  </div>
</form>
<script type="text/javascript" src="http://www.google.com/cse/brand?form=cse-search-box&lang=en"></script>
</li></ul>
</div> <!-- /menu-block -->
<div class="menu-block">
feeds<ul><li><a href="http://knolleary.net/feed/">blog</a> / <a href="http://knolleary.net/comments/feed/">comments</a></li></ul>
</div>
<div class="menu-block">
elsewhere<ul><li><a href="http://twitter.com/knolleary" rel="me">twitter</a></li>
<li><a href="http://flickr.com/photos/knolleary" rel="me">flickr</a></li>
<li><a href="http://vimeo.com/knolleary" rel="me">vimeo</a></li>
<li><a href="https://plus.google.com/117705930791085096076" rel="me">google+</a></li>
<li><a href="http://pinboard.in/u:knolleary" rel="me">pinboard</a></li>
<li><a href="http://bkkeepr.com/people/knolleary" rel="me">bkkeepr</a></li>
<li><a href="http://www.last.fm/user/knolleary" rel="me">last.fm</a></li>
</ul>
</div> <!-- /menu-block -->
<div class="menu-block">
<?php wp_list_categories('title_li=categories'); ?>
</div> <!-- /menu-block -->
</div><!--end col3 -->
</div> <!-- end menu-container div -->
<div class="clearfloat"></div>
</div> <!-- end menu div -->
<!-- end sidebar -->



<?php 	/* Widgetized sidebar, if you have the plugin installed. */
//if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) :
?>
<?php //endif; ?>
