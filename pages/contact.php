<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <!-- Meta SEO -->
    <meta content="IT enthusiast and web developer." name="description">
    <meta content="IT enthusiast and web developer." property="og:description">
    <meta content="http://127.0.0.1:5500/assets/images/logo/Logo.webp" property="og:image">
    <meta content="Sébastien D. - Contact" property="og:title">
    <meta content="website" property="og:type">
    <!-- Title -->
    <title>Sébastien D. - Contact</title>
    <!-- Icon -->
    <link href="../assets/images/favicon/favicon.webp" rel="icon">
    <!-- CSS -->
    <link href="../assets/styles/style.css" rel="stylesheet">
</head>
<body>
    <!-- Header -->
    <?php include("../partials/header.html"); ?>

    <!-- Main -->
    <main class="main" id="contact">
        <div class="container--central">
            <h1 class="page__title">Contact me</h1>

            <p class="contact__description">
                Do not hesitate to contact me for information or if you have a question. 
                    <br>
                I will answer you as soon as possible!
            </p>

            <ul class="contact__list">
                <li class="contact__item">
                    <i class="contact__icon ri-mail-send-line"></i>
                    <span class="contact__name">Email</span>
                    <a class="link" href="mailto:contact@sebastien-d.me">contact@sebastien-d.me</a>
                </li>
                <li class="contact__item">
                    <i class="contact__icon ri-external-link-line"></i>
                    <span class="contact__name">Frontend Mentor</span>
                    <a class="link" href="https://www.frontendmentor.io/profile/sebastien-d-me">@sebastien-d-me</a>
                </li>
                <li class="contact__item">
                    <i class="contact__icon ri-github-fill"></i>
                    <span class="contact__name">GitHub</span>
                    <a class="link" href="https://github.com/sebastien-d-me">@sebastien-d-me</a>
                </li>
                <li class="contact__item">
                    <i class="contact__icon ri-npmjs-line"></i>
                    <span class="contact__name">NPM</span>
                    <a class="link" href="https://www.npmjs.com/~sebastiend1">sebastiend1</a>
                </li>
            </ul>
        </div>
    </main>

    <!-- Footer -->
    <?php include("../partials/footer.html"); ?>

    <!-- Scripts -->
    <script src="../assets/scripts/init.js"></script>
</body>
</html>