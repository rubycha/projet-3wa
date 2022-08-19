<?php $title= Articles ?>
<h1><?=$params['post']->title ?? 'Create a new article' ?></h1>

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
   
