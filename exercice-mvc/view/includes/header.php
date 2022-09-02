<header>
    <a href="#">
        <img src="/images/logo.svg" alt="logo">
    </a>

    <!-- Nav Bar -->
    <nav>
        <ul>
            <li><a href="/boutique" class="active">Boutique</a></li>
            <li class="nav-item dropdown">
                    <a class=" dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Catégories
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <?php foreach ($categories as $category) { ?>
                            <a class="dropdown-item" href="categorie/<?php echo $category['category_id']; ?>"><?php echo $category['title']; ?></a>
                        <?php } ?>
                    </div>
            </li>
            <li><a href="#">Panier</a></li>
            <?php if (isset($_SESSION['userId'])) { ?>
                <li class="nav-link">
                    <a href="/deconnexion" class="nav-link">Se déconnecter</a>
                </li>
                <?php } else {?>
            <li id="login"><a href="/connexion">Se connecter</a></li>
            <li id="signup"><a href="/inscription">S'inscrire</a></li>
            <?php } ?>
        </ul>
    </nav>
    <p class="btn">menu</p>
</header>