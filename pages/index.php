<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <!-- Meta SEO -->
    <meta content="IT enthusiast and web developer." name="description">
    <meta content="IT enthusiast and web developer." property="og:description">
    <meta content="http://127.0.0.1:5500/assets/images/logo/Logo.webp" property="og:image">
    <meta content="Sébastien D." property="og:title">
    <meta content="website" property="og:type">
    <!-- Title -->
    <title>Sébastien D.</title>
    <!-- Icon -->
    <link href="../assets/images/favicon/favicon.webp" rel="icon">
    <!-- CSS -->
    <link href="../assets/styles/style.css" rel="stylesheet">
</head>
<body>
    <!-- Header -->
    <?php include("../partials/header.html"); ?>

    <!-- Main -->
    <main class="main" id="home">
        <video autoplay class="home__video" loop muted>
            <source src="../assets/videos/home/writing-code.mp4">
        </video>

        <div class="container--central">
            <h1 class="home__title page__title">I'm Sébastien D.</h1>
            <p class="home__description">IT enthusiast and web developer. I make websites, apps, modules and games.</p>

            <div class="home__buttons">
                <a class="button button" href="../pages/about-me">See more about me</a>
                <a class="button button--secondary" href="../pages/projects">Discover my projects</a>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <?php include("../partials/footer.html"); ?>

    <!-- Scripts -->
    <script src="../assets/scripts/init.js"></script>
</body>
</html>