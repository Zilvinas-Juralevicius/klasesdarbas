<?php
        $a = '<h1>Apie mane</h1>';
        $b = '<h1>Kontaktai</h1>';
?>

<html lang="lt">
<head>
    <meta charset="UTF-8"/>
    <title>Mano puslapis</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">
    <link rel="stylesheet" href="CSS/layout.css">
    <link rel="stylesheet" href="CSS/elemantai.css">
    <link rel="stylesheet" href="CSS/dizainas.css">


</head>
<body class="animate">

<header>
    <img src="/img/logo.png" alt="logo">
    <nav>
        <a href="#about" class="active">Apie</a>
        <a href="#portfolio">Portfolio</a>
        <a href="#contacts">Kontaktai</a>
    </nav>
</header>
<aside>
    <section class="amalker">
        <h4>Reklama:</h4>
        <img src="https://picsum.photos/240/300" alt="Reklama">
    </section>
</aside>
<main>
    <section id="about">
        <?php echo $a ?>
        <img src="/img/profilis.jpg" alt="Tautvydas Dulskis">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem eos laboriosam ratione saepe! Autem delectus
        distinctio, dolor dolorem ex ipsa labore quae quia tenetur velit! Ad adipisci cum eos ipsum.
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem eos laboriosam ratione saepe! Autem delectus
        distinctio, dolor dolorem ex ipsa labore quae quia tenetur velit! Ad adipisci cum eos ipsum.
        <section class="portfolio_item" id="elementas">
            <h4>Mano naujausias darbas:</h4>
            <img src="https://picsum.photos/240/240" alt="Darbas">
        </section>
    </section>
    <section id="portfolio">
        <h1>Portfolio</h1>
    </section>
    <section id="contacts">
        <?php $b; ?>
        <div id="forma"></div>
    </section>
</main>
<footer>
    <span>
        Visos teisės saugomos 2020&copy;
    </span>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<script src="JavaScript/navigacija.js"></script>
<script src="JavaScript/test_jquery.js"></script>
<script src="JavaScript/formSubmit.js"></script>

</body>
</html>