<section class="formulaire">
            <h1>New article</h1>
            <form>
                <div>
                    <label for="title">Add title </label>
                </div>
                <div>
                    <input class="title" type="title" id="title" name="title" placeholder="Title">
                </div>
                <div>
                    <label for="addimage">Add an image </label>
                </div>
                <div>
                    <input class="addimage" type="file" id="addimage" name="addimage">
                </div>
                <div>
                    <label for="text">Text</label>
                </div>
                <textarea name="comment" rows="12" cols="35" placeholder="add your text here"></textarea>
                <div>
                    <input class="publisharticle" type="submit" name="publisharticle" id="publisharticle" value="PUBLISH">
                </div>
            </form>
        </section>
   
<!-- <h1><?=$params['post']->title ?? 'Create a new article' ?></h1>

<form action="<?= isset($params['post']) ? "admin/posts/edit/{$params['post']->id}" : "/admin/posts/create" ?>" method="POST">
    <div>
        <label for="title">Article's Title</label>
        <input type="text" name="title" id="title" value="<?= $params['post']->title ?? '' ?>">
    </div>
    <div>
        <label for="content">Article's content</label>
        <textarea name="content" id="content" rows="8"><?= $params['post']->content ?? '' ?></textarea>
    </div>
    <div>
        <label for="categories">Categories</label>
        <select id="categories" name="categories[]">
        <?php foreach ($params['categories'] as $category) : ?>
                <option value="<?= $tag->id ?>" <?php if (isset($params['post'])) : ?> <?php foreach ($params['post']->getTags() as $postTag) { echo ($tag->id === $postTag->id) ? 'selected' : ''; } ?> <?php endif ?>><?= $tag->name ?></option>
            <?php endforeach ?>
        </select>
    </div>
    <button type="submit" class="lesboutons"><?= isset($params['post']) ?'Save modifications' : 'Save my article' ?></button>
</form>
   
 -->