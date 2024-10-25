<?php
require_once('class/Owner.php');

$proprio1 = new Owner('Personne1 Nom-De-Famille', '555 rue quelconque', 'H0H 0H0', '555-5555',  'personne1@gmail.com');
$proprio2 = new Owner('Personne2 Nom-De-Famille', '2-555 rue quelconque', 'H0H 0H0', '555-5555',  'personne2@gmail.com');


// $Proprio1 = new Owner('Sam', '555 rue quelconque', 'H0H 0H0', '555-5555',  'peter@gmail.com');
// $proprio1->setOwner('Sam', '555 rue quelconque', 'H0H 0H0', '555-5555',  'peter@gmail.com');

// echo "<pre>";
// var_dump($proprio1);
// echo "</pre>";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>01 - Exercice Class</title>
    <link rel="stylesheet" href="assets/CSS/style.css">
</head>

<body>
    <!-- section header -->
    <header>
        <nav aria-label="Main Navigation">
            <div class="logo">
                <img src="assets/img/vet-logo.jpg" alt="logo" width="100">
            </div>
            <input type="checkbox" id="menu-toggle">
            <label for="menu-toggle" class="menu-button-container">
                <span>&#x2630;</span>
            </label>
            <ul role="menubar">
                <li role="menuitem"><a href="#" aria-label="Menu Home">Home</a></li>
                <li role="menuitem"><a href="#" aria-label="Menu About Us">About Us</a></li>
                <li role="menuitem"><a href="#" aria-label="Menu Services">Services</a></li>
                <li role="menuitem"><a href="#" aria-label="Menu Contact Us">Contact</a></li>
                <li role="menuitem"><a href="#" aria-label="Menu FAQ">FAQ</a></li>
            </ul>
            <button class="btn">
                <a href="#">Prendre rendez-vous</a>
            </button>
        </nav>
    </header>
    <?php include 'hero.php'; ?>
    <?php include 'main.php'; ?>

    <footer>
        © Clinique vétérinaire
    </footer>
</body>

</html>

<?php

?>