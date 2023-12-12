<?php foreach ($posts as $date => $posts_array) { ?>
        <section>
            <h2><?php echo $date; ?></h2>

            <?php foreach ($posts_array as $cur_post) { ?>
                <article>
                    <h2>
                        <?php echo $cur_post['title']; ?>
                    </h2>
                    <p><?php echo $cur_post['author']; ?></p>
                    <p><?php echo $cur_post['text']; ?></p>
                </article>
            <?php } ?>
        </section>
        <hr>
    <?php } ?>