
            <section class="main">
                <h1>
                    Review
                </h1>

                <small class="text-info">Published the <?= $params['post']->getDateCreation() ?></small>
                <h2>
                    <?= $params ['post']->title ?>
                </h2>
                <figure class="imgreview">
                <img src="../img/<?= $params ['post']->image ?>" class="img-review">
                </figure>
                <h3>
                    The Story
                </h3>
                <p>
                    <?= $params['post']->story ?>
                </p>
                <h3>
                    Details
                </h3>
                <div class="detailsreview">
                    <p>
                        <span>Aired</span> : <?= $params ['post']->airing_start ?> - <?= $params ['post']->airing_end ?>
                    </p>
                    <p>
                        <span>Episodes</span> : <?= $params['post']->episodes ?> (Length : <?= $params['post']->time ?>)
                    </p>
                    <p>
                        <span>Genre</span> : <?php foreach ($params['post']->getCategories() as $category) : ?>
                            <?= $category->category_name ?>
                            <?php endforeach ?>
                    </p>
                    <p>
                        <span>Cast</span> : <?= $params['post']->actors ?>
                    </p>

                    <h3>My Review</h3>
                    <p>
                    <?= $params['post']->content ?>
                    </p>
                </div>
                <section class="comments">
        <form method="post" action="ton_script_recup_data_form.php">
            <H2>Leave a comment !</H2>
            <p>Pseudo : <input type="text" name="pseudo" value="" /></p>
            <p>
                Your comment :<br />
                <textarea name="commentaire" rows="10" cols="60"></textarea>
            </p>
        </form>
        </section>
        </section>

      