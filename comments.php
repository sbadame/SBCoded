<?php
 # This file is called by all documents to display the comments for a given post.
 # Since there is no difference between pages on how to display comments I see no 
 # reason to divide this into mutliple pages.
?>

<?php #Make sure that this page is not accessed directly ?>
<?php if(!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME'])) : ?>
    <?php die('You can not acces this page directly!'); ?>
<?php endif; ?>

<?php #Check if a password is needed to view the post ?>
<?php if(!empty($post->post_password)) : ?>
    <?php if($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) : ?>
        <p> You did not pass the cookie hash! </p>
    <?php endif; ?>
<?php endif; ?>


<!-- Onto actually displaying some comments... -->
<?php if ($post->comment_status == "open") : ?>
    <div id="commentlist-show"><?php comments_number('No Comments as of yet', 'View the One Comment', 'View the % Comments' );?> to &#8220;<?php the_title(); ?>&#8221;</div>
    <div id="commentlist-hide"><?php comments_number('No Comments as of yet', 'View the One Comment', 'Hide the % Comments' );?> to &#8220;<?php the_title(); ?>&#8221;</div>
    <?php if ($comments) : ?> <ol id="commentlist">
            <?php foreach ($comments as $comment) : ?> <li class="commentsitem">
                <cite> <?php comment_author_link(); ?> on <?php comment_date('F jS, Y') ?> at <?php comment_time(); ?></cite>
                <?php if ($comment->comments_approved == '0') : ?>
                    <p class="commentswaitingapproval" > Comment is awaiting approval </p>
                <?php endif; ?>
                <p class="comment-content"><?php comment_text(); ?></p>
            </li> <?php endforeach; /* End comment loop */ ?>
        </ol>
    <?php endif; ?>
<?php else : // this is displayed if there are no comments so far ?>
    <p class="nocomments">Comments are closed.</p>
<?php endif; ?>

<!--  And now the magical form that actually creates comments -->
<?php if(comments_open()) : ?>
    <div id="commentwriter-show">Add a comment!</div>
    <div id="commentwriter-hide">Hide the comment form</div>
    <div id="commentwriter">
        <?php if(get_option('comment_registration') && !user_ID) :?>
            <p> Sorry, but you need to register! </p>
        <?php else : ?>
            <form id="commentForm" action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" >
                <fieldset>
                <?php if($user_ID) : ?>
                    <p>
                        Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. 
                        <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">Log out &raquo;</a>
                    </p>
                <?php else : ?>
                    <?php $name_email_req = get_option('require_name_email'); ?>
                    <p>
                        <label for="author">Name <?php if($name_email_req) echo "*"; ?></label>
                        <input type="text" name="author" class="<?php if($name_email_req) echo 'required'; ?> minlength="2" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" />
                    </p>
                    <p>
                        <label for="email">E-mail <?php if($name_email_req) echo "*"; ?></label>
                        <input type="text" name="email" id="email" class="<?php if($name_email_req) echo 'required'; ?> email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" />
                    </p>
                    <p>
                        <label for="url">Website</label>
                        <input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />
                    </p>
                <?php endif; ?>
                <p>
                    <textarea name="comment" id="comment" cols="100%" rows="10" tabindex="4"> </textarea>
                </p>
                <p>
                    <input name="submit" type="submit" id="submit" tabindex="5" value="Submit Comment" />
                    <input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
                </p>
                <?php do_action('comment_form', $post->ID); ?>
                </fieldset>
            </form>
        <?php endif; ?>
    </div>
<?php else : ?>
    <p> Sorry no comments allowed here! </p>
<?php endif; ?>
<!-- Done with comments -->
