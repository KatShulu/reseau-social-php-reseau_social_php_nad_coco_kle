<article>
    <h3>
        <time>
        <a href="wall.php?user_id=<?php echo $post["author_id"] ?>"><?php echo $post['author_name']?></a>
        </time>
    </h3>
    <address>
        <?php echo $post['created'] ?>
    </address>
    <div>
        <p>
            <?php echo $post['content'] ?>
        </p>
    </div>
    <footer>
        <small>❤
            <?php echo $post['like_number'] ?>
        </small>

        <?php require("tags_management.php") ?>

    </footer>
</article>