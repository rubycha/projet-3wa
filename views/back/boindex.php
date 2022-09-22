
    <main class="index-bopages">
        <div class="btn-ajouter">
        <button class="lesboutons">Ajouter un article</button></div>
        <article class="dashboard-index-container">
                <table class="dashboard-index">
                    <thead>
                        <tr>
                            <th>Id </th>
                            <th>Nom</th>
                            <th>Création</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($params ['posts'] as $post) : ?>
                        <tr>
                            <td> <?= $post->id ?></td>
                            <td><span class="nom"><?= $post->title ?></span></td>
                            <td><span class="date">30/08</span></td>
                            <td>
                            <button class="button-action-edit"><i class="fa-solid fa-pen-to-square"></i></button>
                            <button class="button-action-trash"><i class="fa-solid fa-trash"></i></button>
                            </td>
                        </tr>
                        <?php endforeach ?>    
                    </tbody>        
                </table>
            </article>
    </main>
                        