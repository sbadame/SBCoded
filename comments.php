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
<?php if ($comments) : ?>
    <h3 id="comments"><?php comments_number('No Responses', 'One Response', '% Responses' );?> to &#8220;<?php the_title(); ?>&#8221;</h3>
    <ol class="commentlist">
    <?php foreach ($comments as $commment) : ?>
        <li class="commentsitem">
            <?php if ($comment->comments_approved == '0') : ?>
                <p class="commentswaitingapproval"> Comment is awaiting approval </p>
            <?php endif; ?>
            <p> <?php echo $comment->ID; comment_text(); ?></p>
            <cite>
                <?php comment_type(); ?> by <?php comment_author_link(); ?> on <?php comment_date('F jS, Y') ?> at <?php comment_time(); ?>
            </cite>
        </li>
    <?php endforeach; ?>
    </ol>
<?php else : ?>
    <p class="commentsnone"> No Comments Yet. </p>
<?php endif; ?>

<!--  And now the magical form that actually creates comments -->
<?php if(comments_open()) : ?>
    <?php if(get_option('comment_registration') && !user_ID) :?>
        <p> Sorry, but you need to register! </p>
    <?php else : ?>
        <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
            <?php if($user_ID) : ?>
                <p>
                    Logged in as 
                    <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. 
                    <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">Log out &raquo;</a>
                </p>
            <?php else : ?>
                <p>
                    <input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" />
                    <label for="author"><small>Name <?php if($req) echo "(required)"; ?></small></label>
                </p>
                <p>
                    <input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" />
                    <label for="email"><small>Mail (will not be published) <?php if($req) echo "(required)"; ?></small></label>
                </p>
                <p>
                    <input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />
                    <label for="url"><small>Website</small></label>
                </p>
            <?php endif; ?>
            <p>
                <textarea name="comment" id="comment" cols="100%" rows="10" tabindex="4"> Comment goes here </textarea>
            </p>
            <p>
                <input name="submit" type="submit" id="submit" tabindex="5" value="Submit Comment" />
                <input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
            </p>
            <?php do_action('comment_form', $post->ID); ?>
        </form>
    <?php endif; ?>
<?php else : ?>
    <p> Sorry no comments allowed here! </p>
<?php endif; ?>


