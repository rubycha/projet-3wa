<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Sweet Hanguk Dreams</title>
    <link rel="stylesheet" href="/public/css/style.css">
    <link rel="stylesheet" href="/public/css/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/brands.min.css">
</head>
<body>
    
        <nav class="sidebar">
            <div class="logo"><a href="/about">Sweet Hanguk Dreams</a></div>
            <input type="checkbox" id="click">
            <label for="click" class="menu-btn">
                <i id="btn" class="fas fa-bars"></i>
            </label>
            <ul>
                <li><a href="/">Home</a></li>
                    <li><a href="/about">About</a></li>
                    <li><a href="/indexdrama">Index</a></li>
                    <li><a href="/posts">Reviews</a></li>
                    <li><a href="/contact">Contact</a></li>
            </ul>
        </nav>
    <main>
        <?= $content
        
        ?>
    </main>
    <footer>
    <section class="bgfooter">
       <h5> Suscribe to my newsletter</h5>
       <label for="email">Email Address* :</label> <br>
       <input class="mail" type="mail" id="mail" name="mail"> <br>
       <input class="submit" type="submit" name="SUBMIT" methode="POST" id="submit" value="SUBMIT">
</section>
</footer>
</body>
</html>
</body>
</html>