<?php if (isset($_SESSION['error'])): ?>

    <?php foreach($_SESSION['error'] as $errorsArray): ?>
        <?php foreach($errorsArray as $errors): ?>
            <div>
                <?php foreach($errors as $error): ?>
                    <li><?= $error ?></li>
                    <?php endforeach ?>
            </div>
        <?php endforeach ?>
    <?php endforeach ?>

    <?php endif ?>

    <?php session_destroy(); ?>

    <h1>Connexion</h1>
    <form action="/login" method="POST">
        <div>
            <label for="username">User name</label>
            <input type="text" name="username" id="username">
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="username">
        </div>
        <button type="submit" class="lesboutons">Login</button>
    </form>