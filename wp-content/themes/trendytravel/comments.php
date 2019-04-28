<?php
// Do not delete these lines
if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
die ('Please do not load this page directly. Thanks!');
 
if ( post_password_required() ) { ?>
	<p class="nocomments"><?php _e('This post is password protected. Enter the password to view comments.', 'iamd_text_domain'); ?></p>
<?php 
	return;
}
?>
<!-- START EDITING HERE. -->

<?php if(have_comments()): ?>
	
	<?php if(get_comment_pages_count() > 1 && get_option('page_comments')): ?>
    	<div class="pagination">
            <ul class="commentNav">
                <li><?php previous_comments_link(); ?></li>
                <li><?php next_comments_link(); ?></li>
            </ul>
		</div>
	<?php endif; ?>
    
    <div class="commententries" id="comments">
		<h3><?php comments_number(__('No Comments', 'iamd_text_domain'), __('Comment (1)', 'iamd_text_domain'), __('Comments (%)', 'iamd_text_domain')); ?></h3>
        <ul class="commentlist">
            <?php wp_list_comments('avatar_size=85&type=comment&callback=dt_theme_custom_comments&style=ul'); ?>
        </ul>
	</div><?php
	else:
		if('open' == $post->comment_status): ?>
            <h3><?php _e('No Comments', 'iamd_text_domain'); ?></h3><?php
		endif;
	endif;
	
	//PERFORMING COMMENT FORM...
	if('open' == $post->comment_status):
		comment_form();
	endif; ?>