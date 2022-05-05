<div class="comments-wrapper">

<div class="comments" id="comments">

    <div class="comments-header">

        <h2 class="comment-reply-title title-border">
            <?php 
                if( ! have_comments()) {
                    echo "Be the first to leave a comment";
                } else {
                    echo  get_comments_number(). " Comments"; 
                }
            ?>
        </h2><!-- .comments-title -->

    </div><!-- .comments-header -->

    <ul class="comment-list">

        <?php
        wp_list_comments(
            array(
                'avatar-size' => 120,
                'style' => 'li',
                'class' => 'comment'
            )
            );
        ?>

    </ul><!-- .comments-inner -->

</div><!-- comments -->

<hr class="" aria-hidden="true">

<?php 
    if(comments_open() ) { ?>
    <div id="respond" class="comment-respond mb-lg-0">
        <div class="add-comment">
        <?php 
            comment_form(
                array(
                    'class-form' => 'comment-form',
                )
            ); ?>
        </div>
    </div>
 <?php } ?>

</div>