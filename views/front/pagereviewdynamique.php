            <section class="main">
                <h1>Reviews</h1>
                <ul>
                    <?php foreach ($params ['posts'] as $post) : ?>
                        <li>
                            <article>
                                <div class="firstdrama">
                                    <img src="../img/TIMFL.jpeg" alt="It's My First Life"> 
                                    <h4><?= $post->title ?></h4>  
                                    <?= $post->excerpt ?>
                                    <a href="/posts/<?= $post->id ?>">Read the entire review</a> 
                                </div>
                            </article>
                        </li>
                </ul>
                

                  
                    <section class="boutonnumber">
                        <FORM ACTION="1.html" >
                            <INPUT TYPE="SUBMIT" VALUE="    1    ">
                          </FORM>
                          <FORM ACTION="2.html" >
                            <INPUT TYPE="SUBMIT" VALUE="    2    ">
                          </FORM>
                          <FORM ACTION="3.html" >
                            <INPUT TYPE="SUBMIT" VALUE="    3    ">
                          </FORM>
                    </section>
                </article>
            </section>