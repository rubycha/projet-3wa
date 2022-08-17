<h1>Page Manager</h1>

<?php if(isset($_GET['success'])): ?>
    <div>You are connected!</div>
<?php endif ?>

<a href="/admin/posts/create" class="lesboutons">Create a new page</a>

<table class="table">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Published Pages</th>
            <th scope="col">Date of Creation</th>
            <th scope="col">Manager</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($params['posts'] as $post) : ?>
            <tr>
                <th scope="row"><?= $post->id ?></th>
                <td><?= $post->title ?></td>
                <td><?= $post->getDateCreation() ?></td>
                <td>
                    <a href="/admin/posts/edit/<?= $post->id ?>" class="lesboutons">Revise</a>
                    <form action="/admin/posts/delete/<?= $post->id ?>" method="POST" class="d-inline">
                        <button type="submit" class="lesboutons">Delete</button>
                    </form>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>