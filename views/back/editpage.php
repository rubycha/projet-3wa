<h1><?=$params['post']->title ?? 'Create a new page' ?></h1>

<form action="<?= isset($params['post']) ? "admin/posts/edit/{$params['post']->id}" : "/admin/posts/create" ?>" method="POST">
    <div>
        <label for="title">Page's Title</label>
        <input type="text" name="title" id="title" value="<?= $params['post']->title ?? '' ?>">
    </div>
    <div>
        <label for="content">Page's content</label>
        <textarea name="content" id="content" rows="8"><?= $params['post']->content ?? '' ?></textarea>
    </div>
    <button type="submit" class="lesboutons"><?= isset($params['post']) ?'Save modifications' : 'Save my article' ?></button>
</form>
   
