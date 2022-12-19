<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <!-- Meta SEO -->
    <meta content="IT enthusiast and web developer." name="description">
    <meta content="IT enthusiast and web developer." property="og:description">
    <meta content="http://127.0.0.1:5500/assets/images/logo/Logo.webp" property="og:image">
    <meta content="Sébastien D. - My projects" property="og:title">
    <meta content="website" property="og:type">
    <!-- Title -->
    <title>Sébastien D. - My projects</title>
    <!-- Icon -->
    <link href="../assets/images/favicon/favicon.webp" rel="icon">
    <!-- CSS -->
    <link href="../assets/styles/style.css" rel="stylesheet">
</head>
<body>
    <!-- Header -->
    <?php include("../partials/header.html"); ?>

    <!-- Main -->
    <main class="container main">
        <h1 class="page__title">My projects</h1>

        <div class="projects__buttons">
            <button class="button button--project" data-category="sites"><i class="ri-code-line"></i>Sites</button>
            <button class="button button--project" data-category="modules"><i class="ri-settings-3-line"></i>Modules</button>
            <button class="button button--project" data-category="tools"><i class="ri-tools-line"></i>Tools</button>
            <a aria-label="Frontend Mentor challenges" class="button button--frontend-mentor" href="https://www.frontendmentor.io/profile/sebastien-d-me"></a>
        </div>

        <span class="projects__error">Error with the display of the projects. Please try again soon.</span>

        <div class="projects__list projects__sites"></div>
        <div class="projects__list projects__modules"></div>
        <div class="projects__list projects__tools"></div>
    </main>

    <!-- Footer -->
    <?php include("../partials/footer.html"); ?>

    <!-- Scripts -->
    <script src="../assets/scripts/init.js"></script>
    <script src="../assets/scripts/projects.js"></script>
</body>
</html>