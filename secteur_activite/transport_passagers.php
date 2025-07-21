<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion de flotte pour le transport de passagers</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="Output">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            font-family: 'Roboto';
            box-sizing: border-box;
        }

        .bebas-neue {
            font-family: "Bebas Neue", sans-serif;
            font-weight: 400;
            font-style: normal;
        }

        .montserrat {
            font-family: "Montserrat";
        }

        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
        }

        .comeUp {
            opacity: 1 !important;
            pointer-events: auto;
            transition: opacity 300ms ease-in-out !important;
            display: flex !important;
        }

        .menuDrop {
            opacity: 0 !important;
            pointer-events: none !important;
            transition: opacity 300ms ease-in-out !important;
            display: none !important;
        }
    </style>
</head>

<body class="bg-gray-50">
    <!-- Header -->
    <?php require_once '../sections/navbar.php'?>


    <!-- Hero Section -->
    <div class="bg-zinc-900">
        <section class="w-full h-[600px] bg-center bg-no-repeat bg-cover sm:mask-l-from-90% bg-[url('img/tp1.jpg')]" style="background-image: url(assets/img/tp1.jpg);">
            <div class="container h-full px-4 lg:px-30 text-white flex items-center">
                <div class="sm:pl-10">
                    <h1 class="text-4xl lg:text-5xl lg:w-[500px] text-shadow-lg/30 montserrat text-gray-50 font-extrabold mb-6">Géolocalisation, gestion de flotte pour le transport de passagers</h1>
                    <a href="#" class="px-4 py-3 text-center font-semibold bg-black text-lg hover:bg-white hover:text-black rounded-sm transition duration-300">Demandez une démo</a>
                </div>
            </div>
        </section>
    </div>

    <!-- Section  -->
    <section class="py-12">
        <div class="container mx-auto font-medium space-y-6 lg:px-[150px] px-4">
            <p class="text-gray-700">
                Dans le secteur du transport de passagers, les entreprises sont constamment confrontées à des défis pour garantir leur rentabilité et leur compétitivité. Les enjeux tels que la réduction des coûts, le respect de la réglementation, l’optimisation de la productivité, la sécurité des passagers et des conducteurs, ainsi que la satisfaction client sont cruciaux.            
            </p>
            <p class="text-gray-700">
                Pour surmonter ces obstacles, il est essentiel de bénéficier d’une solution de gestion de flotte performante et fiable. Notre solution de géolocalisation et de gestion de flotte, spécialement conçue pour le transport de passagers, aide les entreprises à améliorer leur efficacité opérationnelle et à relever ces défis avec succès.            
            </p>
        </div>
    </section>

    <!-- Section avantage-->
    <section class="pt-10 pb-20 bg-zinc-200">
        <div class="container mx-auto px-4 lg:px-50">
            <h1 class="uppercase text-center montserrat font-extrabold text-3xl mb-10">La solution Topalma</h1>
            <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-4 text-center">
                <!-- Feature 5 -->
                <div class="shadow-md rounded-md p-5 flex flex-col items-center ">
                    <div class="w-20 h-20 rounded-full flex border-4 items-center justify-center mb-6">
                        <i class="fa-solid fa-location-dot text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2 uppercase montserrat text-gray-800 text-center">Suivi temps réel 24/7</h3>
                    <p class="text-gray-800">Localisez et monitorez l'ensemble de votre flotte en temps réel.</p>
                </div>
                <!-- Feature 1 -->
                <div class="shadow-md rounded-md p-5 flex flex-col items-center ">
                    <div class="w-20 h-20 rounded-full flex border-4 items-center justify-center mb-6">
                        <i class="fa-solid fa-id-badge text-4xl"></i>                    
                    </div>
                    <h3 class="text-xl font-semibold mb-2 uppercase montserrat text-gray-800 text-center">Gestion des conducteurs</h3>
                    <p class="text-gray-800">Suivez les heures et les comportements de conduite pour améliorer la sécurité.</p>
                </div>
    
                <!-- Feature 2 -->
                <div class="shadow-md rounded-md p-5 flex flex-col items-center ">
                    <div class="w-20 h-20 rounded-full flex border-4 items-center justify-center mb-6">
                        <i class="fa-solid fa-table-list text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2 uppercase montserrat text-gray-800 text-center">rapports et conformité</h3>
                    <p class="text-gray-800">Éditez vos rapports et attestez de la bonne conformité de votre activité.</p>
                </div>
                <!-- Feature 3 -->
                <div class="shadow-md rounded-md p-5 flex flex-col items-center ">
                    <div class="w-20 h-20 rounded-full flex border-4 items-center justify-center mb-6">
                        <i class="fa-solid fa-arrow-trend-up text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2 uppercase montserrat text-gray-800 text-center">Productivité optimisée</h3>
                    <p class="text-gray-800">Optimisez votre flux de travail en planifiant les itinéraires les plus adaptés.</p>
                </div>
                <!-- Feature 6 -->
                <div class="shadow-md rounded-md p-5 flex flex-col items-center ">
                    <div class="w-20 h-20 rounded-full flex border-4 items-center justify-center mb-6">
                        <i class="fa-solid fa-money-bills text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2 uppercase montserrat text-gray-800 text-center">Meilleure rentabilité</h3>
                    <p class="text-gray-800">Réduisez les coûts liés à la gestion de votre flotte et augmentez votre marge.</p>
                </div>
                <!-- Feature 4 -->
                <div class="shadow-md rounded-md p-5 flex flex-col items-center ">
                    <div class="w-20 h-20 rounded-full flex border-4 items-center justify-center mb-6">
                        <i class="fa-solid fa-screwdriver-wrench text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2 uppercase montserrat text-gray-800 text-center">Gestion entretiens</h3>
                    <p class="text-gray-800">Planifiez et assurez vos entretiens avec précision.</p>
                </div>
    
    
            </div>
        </div>
    </section>

    <!-- Section avantage-->
    <section class="pt-10 pb-20 bg-zinc-200">
        <div class="mx-auto sm:px-4 xl:px-30">
            <h1 class="uppercase text-center montserrat font-extrabold text-3xl mb-10">Découvrez nos solutions pour le secteur du transport de passagers</h1>
            <div class="grid md:grid-cols-2 place-items-center gap-x-4 md:gap-y-15">
                <!-- Feature 1 -->
                <div class="p-5">
                    <h3 class="text-xl font-semibold mb-2 uppercase montserrat text-gray-800 text-center">Géolocalisation en temps réel 24/7</h3>
                    <p class="text-gray-800 mb-3">
                        Bénéficiez d’un suivi en temps réel de la position et du statut de vos véhicules. Anticipez les retards, ajustez les horaires et informez vos passagers des éventuels changements pour leur offrir une expérience de voyage optimale.
                     </p>
                    <p class="text-gray-800">
                        Parallèlement, notre système d’optimisation des itinéraires prend en compte les conditions de circulation, les horaires et les contraintes de votre flotte pour proposer les trajets les plus efficaces. Ainsi, vous réduisez votre consommation de carburant, vos émissions de CO2 et vos coûts d’exploitation, tout en améliorant la ponctualité de vos services.
                    </p>                
                </div>
                <!-- Feature 2 -->
                <div class="p-5 content-center mb-15 md:mb-0">
                    <img src="assets/img/tp2.jpg" class="rounded" alt="">
                </div>

                <!-- Feature 3 -->
                <div class="p-5 content-center ">
                    <img src="assets/img/tp4.webp" class="rounded" alt="">
                </div>
                <!-- Feature 4 -->
                <div class="p-5 mb-15 md:mb-0">
                    <h3 class="text-xl font-semibold mb-2 uppercase montserrat text-gray-800 text-center">gestion complète de votre flotte</h3>
                    <p class="text-gray-800 mb-3">
                        Suivez en temps réel l’emplacement et l’utilisation de votre flotte. Accédez à des données détaillées sur le véhicule, telles que la consommation réelles de carburant, le kilométrage réel, les heures moteur et bien plus encore.
                    </p>
                    <p class="text-gray-800 mb-3">
                        Assurez la gestion de vos entretiens et la gestion de vos dépenses en toute simplicité grâce à nos outils dédiés.
                    </p>
                    <p class="text-gray-800">
                        Notre solution vous permet de garder le contrôle sur votre flotte à tout moment et d’optimiser la gestion de votre parc de véhicules.
                    </p>
                </div>

                <!-- Feature 5 -->
                <div class="p-5">
                    <h3 class="text-xl font-semibold mb-2 uppercase montserrat text-gray-800 text-center">Conformité réglementaire et sécurité des conducteurs</h3>
                    <p class="text-gray-800 mb-3">
                        Notre solution de téléchargement à distance des données de chronotachygraphe vous permet de respecter facilement les réglementations relatives aux temps de conduite et de repos des conducteurs et d’assurer leur sécurité.
                    </p>
                    <p class="text-gray-800 mb-3">
                        Notre solution comprend également une gamme complète d’outils d’analyse et de rapports pour faciliter la conformité réglementaire et réduire les coûts et les efforts pour vos équipes sur le terrain et au bureau.                    
                    </p>
                    <a class="uppercase inline-block self-start text-white text-sm py-1 px-2 font-semibold rounded-lg bg-slate-900 hover:bg-emerald-400 transition duration-300"><i class="fa-solid fa-eye"></i> Données chronotachygraphe</a>
                </div>
                <!-- Feature 6 -->
                <div class="p-5 content-center mb-15 md:mb-0">
                    <img src="assets/img/tp4.png" class="rounded " alt="">
                </div>

                <!-- Feature 6 -->
                <div class="p-5 content-center">
                    <img src="assets/img/fe3.jpg" class="rounded " alt="">
                </div>
                <!-- Feature 5 -->
                <div class="p-5">
                    <h3 class="text-xl font-semibold mb-2 uppercase montserrat text-gray-800 text-center">Rapports détaillés pour une gestion conforme et efficace</h3>
                    <p class="text-gray-800 mb-3">
                        Simplifiez la conformité aux exigences réglementaires et aux obligations de reporting en générant des rapports détaillés sur les visites, horaires et itinéraires de vos véhicules avec notre solution de géolocalisation.
                    </p>
                    <p class="text-gray-800">
                        Justifiez de la conformité de votre activité, renforcez la confiance de vos partenaires et améliorez vos performances en identifiant rapidement les inefficacités. Bénéficiez d’une transparence totale et d’une gestion apaisée de votre flotte de transport de passagers.                    
                    </p>
                </div>

            </div>
        </div>
    </section>

    <!-- Section  -->
    <section class="py-12">
        <div class="container text-center mx-auto font-medium space-y-4 lg:px-[150px] px-4">
            <p class="text-gray-700">
                Notre solution est spécialement élaborée pour accompagner les entreprises de transport de passagers dans l’optimisation de leur efficacité opérationnelle, la réduction des coûts et l’amélioration de la sécurité des passagers et des conducteurs. Grâce à une gamme de fonctionnalités adaptées aux besoins du transport de personnes, notre solution constitue le choix privilégié pour les entreprises désireuses d’accroître leur productivité et leur rentabilité.            </p>
            <p class="text-gray-700 mb-7">
                N’hésitez pas à nous contacter dès maintenant pour découvrir comment nos solutions peuvent vous aider à atteindre vos objectifs et renforcer votre activité de transport de passagers.
            </p>
            <a href="#" class="border rounded px-4 py-3 text-sm font-semibold uppercase montserrat hover:bg-black hover:text-white transition duration-300">Nous-contacter</a>
        </div>
    </section>

    <?php include_once '../sections/sticky_bottom.php'?>

    <!-- banner -->
    <div class="w-full">
        <img src="assets/img/tp5.jpg" class="bg-cover w-full" alt="">
    </div>
    
    <?php include_once '../sections/footer.php'?>

    
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="navbarJs"></script>
    <script src="swiperJs"></script>
</body>
    
    </html>