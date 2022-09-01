<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DKVelo</title>

    <!-- CSS -->
    <link rel="stylesheet" href="/css/style.css">

    <!-- Google fonts -->
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body class="m-auto">

    <!-- Header -->

    <?php 
            include 'includes/header.php'; 

            if (isset($result) && $result ===false) { ?>
                <p class="text-danger">Echec de la quête</p>
        <?php }
    ?>

    <main class="container my-4">
        <h1 class="text-center">Inscription</h1>
        <section>
            <h2>Informations</h2>
            <form action="/inscription/post" method="post">
                <label for="firstname">Prénom</label>
                <input type="text" name="firstname" id="firstname" required>
                <label for="name">Nom</label>
                <input type="text" name="name" id="name" required>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" required>
                <label for="password">Mot de passe</label>
                <input type="password" name="password" id="password" required>
                <input type="submit" value="Valider">
            </form>
        </section>
    </main>

    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>