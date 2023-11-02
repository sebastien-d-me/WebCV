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
    <title>Sébastien D. - About me</title>
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
        <h1 class="page__title">About me</h1>

        <div>
            <picture>
                <source media="(min-width: 992px)" srcset="../assets/images/about-me/developer.webp">
                <source media="(max-width: 992px)" srcset="../assets/images/about-me/developer_small.webp">
                <img alt="Coding developer" class="about-me__image" src="../assets/images/about-me/developer.webp">
            </picture>

            <p class="about-me__description">
                Immersed in the world of technology since childhood, I became passionate about web development.
                <br><br>
                I spend a good part of my free time working on different projects (websites, games, applications) and learning to always improve myself.
                <br><br>
                It would be a pleasure for me to put my knowledge and skills at your disposal!
            </p>
        </div>

        <div class="about-me__boxes">
            <div class="box">
                <span class="box__title">SKILLS</span>
                <ul class="box__list">
                    <li>
                        <b>Front :</b> CSS, HTML, JS.
                    </li>
                    <li>
                        <b>Back :</b> PHP, SQL.
                    </li>
                    <li>
                        <b>Library :</b> React.
                    </li>
                    <li>
                        <b>Framework :</b> Symfony.
                    </li>
                </ul>
            </div>
            
            <div class="box">
                <span class="box__title">HOBBIES</span>
                <ul class="box__list">
                    <li class="box__item--flex">
                        <i class="box__icon ri-hammer-line"></i> DIY
                    </li>
                    <li class="box__item--flex">
                        <i class="box__icon ri-plant-line"></i> Gardening
                    </li>
                    <li class="box__item--flex">
                        <i class="box__icon ri-time-line"></i> History
                    </li>
                    <li class="box__item--flex">
                        <i class="box__icon ri-function-line"></i> Lego Bricks
                    <li class="box__item--flex">
                        <i class="box__icon ri-computer-line"></i> Technology
                    </li>
                </ul>
            </div>
        </div>

        <div class="about-me__experiences">
            <span class="experience__category">PROFESSIONAL EXPERIENCES</span>
            <div class="experience">
                <div class="experience__header">
                    <span class="experience__title">Future worker for your projects at your company...</span>
                </div>
                <ul class="experience__list">
                    <li>Would you like me to be part of one of your projects ?</li>
                </ul>
            </div>

            <div class="experience">
                <div class="experience__header">
                    <span class="experience__title">Web Developer [Work-Study Training]</span>
                    <span class="experience__date">08/2018 - 07/2020</span>
                </div>
                <div class="experience__badges">
                    <span class="experience__badge experience__badge--place">YPCI (France)</span>
                </div>
                <ul class="experience__list">
                    <li>Creation of websites.</li>
                    <li>Creation of modules.</li>
                    <li>Bug fixes.</li>
                    <li>Technology intelligence.</li>
                </ul>
            </div>

            <span class="experience__category">QUALIFICATIONS AND TRAINING</span>
            <div class="experience">
                <div class="experience__header">
                    <span class="experience__title">⌛ TRAINING RNCP35634 | UI Designer</span>
                    <span class="experience__date">10/2023 - In progress</span>
                </div>
                <div class="experience__badges">
                    <span class="experience__badge experience__badge--place">La Manu (France)</span>
                    <a class="experience__badge experience__badge--link" href="https://lamanu.fr/alternance/formation-concepteur-designer-ui/">See the training page</a>
                </div>
                <ul class="experience__list">
                    <li>Summary of the training :</li>
                    <li class="experience__item--nested">
                        <ul>
                            <li>Graphic design (web, print and video), web integration, digital marketing as well as project management and customer needs.</li>
                        </ul>
                    </li>
                    <li>Result :</li>
                    <li class="experience__item--nested">
                        <ul>
                            <li>In progress</li>
                        </ul>
                    </li>
                </ul>
            </div>

            <div class="experience">
                <div class="experience__header">
                    <span class="experience__title">✅ TRAINING RNCP35976 | Application developer - PHP/Symfony</span>
                    <span class="experience__date">12/2022 - 09/2023</span>
                </div>
                <div class="experience__badges">
                    <span class="experience__badge experience__badge--place">OpenClassrooms (Remote)</span>
                    <a class="experience__badge experience__badge--link" href="https://openclassrooms.com/fr/paths/500-developpeur-dapplication-php-symfony">See the training page</a>
                </div>
                <ul class="experience__list">
                    <li>Summary of the training :</li>
                    <li class="experience__item--nested">
                        <ul>
                            <li>Realization of 9 projects.</li>
                            <li>Specialization in PHP and/or Symfony applications.</li>
                        </ul>
                    </li>
                    <li>Result :</li>
                    <li class="experience__item--nested">
                        <ul>
                            <li>Diploma obtained.</li>
                        </ul>
                    </li>
                </ul>
            </div>

            <div class="experience">
                <div class="experience__header">
                    <span class="experience__title">✅ TRAINING RNCP27099 | Front-End Developer</span>
                    <span class="experience__date">09/2021 - 08/2022</span>
                </div>
                <div class="experience__badges">
                    <span class="experience__badge experience__badge--place">OpenClassrooms (Remote)</span>
                    <a class="experience__badge experience__badge--link" href="https://openclassrooms.com/fr/paths/314-developpeur-front-end">See the training page</a>
                </div>
                <ul class="experience__list">
                    <li>Summary of the training :</li>
                    <li class="experience__item--nested">
                        <ul>
                            <li>Realization of 14 projects.</li>
                            <li>Specialization in the optimization of web interfaces.</li>
                        </ul>
                    <li>Result :</li>
                    <li class="experience__item--nested">
                        <ul>
                            <li>Diploma obtained.</li>
                        </ul>
                    </li>
                </ul>
            </div>

            <div class="experience">
                <div class="experience__header">
                    <span class="experience__title">❌ LICENCE | Cybersecurity</span>
                    <span class="experience__date">09/2020 - 07/2021</span>
                </div>
                <div class="experience__badges">
                    <span class="experience__badge experience__badge--place">Proméo (France)</span>
                    <a class="experience__badge experience__badge--link" href="https://www.promeo-formation.fr/se-former-en-alternance/licence-cybersecurite">See the training page</a>
                </div>
                <ul class="experience__list">
                    <li>Skills worked on :</li>
                    <li class="experience__item--nested">
                        <ul>
                            <li>Ensure IS security by implementing tools.</li>
                            <li>Design, develop and implement secure applications.</li>
                            <li>Write or update procedures and documentation related to the activity.</li>
                            <li>Be able to carry out an IS security audit.</li>
                            <li>Lead a project from the definition of the specifications to the deliverables.</li>
                        </ul>
                    </li>
                    <li>Result :</li>
                    <li class="experience__item--nested">
                        <ul>
                            <li>I didn't get my diploma because I didn't have a company to do my work-study with.</li>
                        </ul>
                    </li>
                </ul>
            </div>

            <div class="experience">
                <div class="experience__header">
                    <span class="experience__title">✅ BTS | SIO option SLAM [Work-Study Training]</span>
                    <span class="experience__date">08/2018 - 06/2020</span>
                </div>
                <div class="experience__badges">
                    <span class="experience__badge experience__badge--place">Proméo (France)</span>
                    <a class="experience__badge experience__badge--link" href="https://www.promeo-formation.fr/se-former-en-alternance/bts-sio-services-informatiques-aux-organisations-option-slam">See the training page</a>
                </div>
                <ul class="experience__list">
                    <li>Skills worked on :</li>
                    <li class="experience__item--nested">
                        <ul>
                            <li>Define the appropriate solutions according to the users' needs (analysis of internal customer needs and study of the market offer in software packages).</li>
                            <li>Design, develop and implement applications.</li>
                            <li>Ensure the maintenance of computer programs, taking into account the cybersecurity dimension.</li>
                            <li>Write documentation and ensure the training of end users.</li>
                            <li>Be a driving force in the improvement and optimization of existing software.</li>
                        </ul>
                    </li>
                    <li>Result :</li>
                    <li class="experience__item--nested">
                        <ul>
                            <li>Diploma obtained.</li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <?php include("../partials/footer.html"); ?>

    <!-- Scripts -->
    <script src="../assets/scripts/init.js"></script>
</body>
</html>