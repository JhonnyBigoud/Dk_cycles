<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DKVelo</title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Google fonts -->
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body class="m-auto">

    <!-- Header -->
    <?php include 'includes/header.php'; ?>

    <h1>Catégorie</h1>

    <section class="container m-auto">
        <div class="row g-0 row-cols-1 row-cols-md-2 row-cols-lg-3 px-4">
            <?php foreach ($products as $product) { ?>
                <article class="mb-3">
                    <a href="#">
                        <figure>
                            <div class="img">
                                <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>">
                            </div>
                            <figcaption>
                                <h3><?php echo $product['name']; ?></h3>
                                <p><?php echo $product['price']; ?>€</p>
                            </figcaption>
                        </figure>
                    </a>
                </article>
            <?php } ?>            
        </div>            
    </section>

    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>