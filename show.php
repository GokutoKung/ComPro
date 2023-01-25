<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VIRF</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    $url = 'http://localhost:5000/';
    $data = file_get_contents($url);
    $animes = json_decode($data);
    ?>
    <div class="main text-center">
        <div class="h-100" style="display:grid; align-items: center;">
            <div class="container">
                <h1 class="head_font">VIRF</h1>
                <form action="clear.php" method="post">
                    <div class="input-group flex-nowrap">
                        <input type="text" class="form-control" placeholder="Anime Name" aria-label="Anime Name" aria-describedby="addon-wrapping" name='anime_name'>
                        <button type="submit" class="btn btn-dark">Search</button>
                    </div>
                </form>
                <div class="row">
                    <?php foreach ($animes as $anime) : ?>
                        <div class="card col-6 m-2" style="width: 15rem; cursor: pointer;)" onclick="window.open('<?php echo $anime->link ?>')">
                            <img src="Picture/Card/<?php echo $anime->id ?>.png" class="card-img-top">
                            <div class="card-body">
                                <p class="card-text body_card_font"><?php echo $anime->show ?></p>
                                <p class="card-text body_genres">GENRES: <?php echo $anime->genres ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Use Bootstrap 5.0.0 for font-end -->
    <!-- https://getbootstrap.com/docs/5.0/getting-started/introduction/d -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>

</html>