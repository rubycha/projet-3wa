
            <section class="main">
                <h1>
                    Reviews
                </h1>

                <small class="text-info">Publié le <?= $post->getDateCreation() ?></small>
                <h2>
                    <?= $params ['post']->title ?>
                </h2>
                <figure class="imgreview">
                    <img  src="../img/TIMFL2.jpg" alt="">
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
                        <span>Episodes</span> : <?= $params['post']->episodes ?>(<?= $params['post']->time ?>)
                    </p>
                    <p>
                        <span>Genre</span> : <?php foreach ($params['post']->getCategory() as $category) : ?>
                            <span><?= $cateogry->name ?></span>
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
                <div class="lesboutons">
                <button>Charge More</button>
            </div>
        </section>
      