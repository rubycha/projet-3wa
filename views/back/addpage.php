<section class="formulaire">
            <h1>New page</h1>
            <form>
                <div>
                    <label for="title">Add title </label>
                </div>
                <div>
                    <input class="title" type="title" id="title" name="title" placeholder="Title">
                </div>
                <div>
                    <label for="text">Text</label>
                </div>
                <textarea name="comment" rows="12" cols="35" placeholder="add your text here"></textarea>
                <div>
                    <input class="publishpage" type="submit" name="publishpage" id="submit" value="PUBLISH">
                </div>
            </form>
        </section>
  
<!-- <h1><?= $params['post']->title ?? 'Créer une nouvelle page' ?></h1>

<form action="<?= isset($params['post']) ? "/admin/posts/edit/{$params['post']->id}" : "/admin/posts/create" ?>" method="POST">
    <div class="form-group">
        <label for="title">Titre de l'article</label>
        <input type="text" class="form-control" name="title" id="title" value="<?= $params['post']->title ?? '' ?>">
    </div>
    <div class="form-group">
        <label for="content">Contenu de l'article</label>
        <textarea name="content" id="content" rows="8" class="form-control"><?= $params['post']->content ?? '' ?></textarea>
    </div>
    <div class="form-group">
        <label for="tags">Tags de l'article</label>
        <select multiple class="form-control" id="tags" name="tags[]">
        <?php foreach ($params['tags'] as $tag) : ?>
                <option value="<?= $tag->id ?>"
                <?php if (isset($params['post'])) : ?>
                <?php foreach ($params['post']->getTags() as $postTag) {
                    echo ($tag->id === $postTag->id) ? 'selected' : '';
                }
                ?>
                <?php endif ?>><?= $tag->name ?></option>
            <?php endforeach ?>
        </select>
    </div>
    <button type="submit" class="btn btn-primary"><?= isset($params['post']) ?'Enregistrer les modifications' : 'Enregistrer mon article' ?></button>
</form> -->