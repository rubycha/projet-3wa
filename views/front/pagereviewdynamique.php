
            <section class="main">
                <h1>Reviews</h1>
                <ul class="dramapreview">
                    <?php foreach ($params ['posts'] as $post) : ?>
                        <li>
                            <article>
                                <div class="firstdrama">
                                <img src="../img/<?= $post->image ?>" class="img-recap-reviews"> 
                                    <h4><?= $post->title ?></h4>  
                                    <?= $post->excerpt ?>
                                   <p><a href="/posts/<?= $post->id ?>">Read the entire review</a></p>  
                                </div>
                            </article>
                        </li>
                        <?php endforeach ?>
                     </ul>
                </article>
            </section>