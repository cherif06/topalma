<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion de flotte pour les taxis et vtc</title>
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
        <section class="w-full h-[600px] bg-center bg-no-repeat bg-cover sm:mask-l-from-90% bg-[url('img/tv1.jpg')]" style="background-image: url(assets/img/tv1.jpg);">
            <div class="container h-full px-4 lg:px-30 text-white flex items-center">
                <div class="sm:pl-10">
                    <h1 class="text-4xl lg:text-5xl lg:w-[500px] text-shadow-lg/30 montserrat text-gray-50 font-extrabold mb-6">Géolocalisation, gestion de flotte pour les taxis et vtc</h1>
                    <a href="#" class="px-4 py-3 text-center font-semibold bg-black text-lg hover:bg-white hover:text-black rounded-sm transition duration-300">Demandez une démo</a>
                </div>
            </div>
        </section>
    </div>

    <!-- Section  -->
    <section class="py-12">
        <div class="container mx-auto font-medium space-y-6 lg:px-[150px] px-4">
            <p class="text-gray-700">
                Grâce à notre solution de géolocalisation et de gestion de flotte pour les entreprises de taxis et VTC, vous pouvez offrir à vos clients une expérience de transport plus fiable, plus sûre et plus économique.
            </p>
            <p class="text-gray-700">
                En optimisant la gestion de votre parc de véhicules, réduisez les temps d’attente pour vos clients, améliorez la sécurité de vos chauffeurs et réduisez les coûts liés à la maintenance et à l’entretien des véhicules.
            </p>
            <p class="text-gray-700">
                Découvrez comment Topalma peut transformer la gestion de votre activité en une expérience plus intelligente, plus efficace, plus rentable et simplifiée.
            </p>
        </div>
    </section>

    <!-- Section avantage-->
    <section class="pt-10 pb-20 bg-zinc-200">
        <div class="container mx-auto px-4 lg:px-50">
            <h1 class="uppercase text-center montserrat font-extrabold text-3xl mb-10">La solution de gestion de flotte Topalma</h1>
            <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-4 text-center">
                <!-- Feature 5 -->
                <div class="shadow-md rounded-md p-5 flex flex-col items-center ">
                    <div class="w-20 h-20 rounded-full flex border-4 items-center justify-center mb-6">
                        <i class="fa-solid fa-location-dot text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2 uppercase montserrat text-gray-800 text-center">Suivi temps réel</h3>
                    <p class="text-gray-800">Localisez vos véhicules en temps réel pour plus d'efficacité opérationnelle.</p>
                </div>
                <!-- Feature 1 -->
                <div class="shadow-md rounded-md p-5 flex flex-col items-center ">
                    <div class="w-20 h-20 rounded-full flex border-4 items-center justify-center mb-6">
                        <i class="fa-solid fa-money-bills text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2 uppercase montserrat text-gray-800 text-center">Meilleure rentabilité</h3>
                    <p class="text-gray-800">Réduisez les coûts liés à la gestion de votre flotte et augmentez votre marge.</p>
                </div>
    
                <!-- Feature 2 -->
                <div class="shadow-md rounded-md p-5 flex flex-col items-center ">
                    <div class="w-20 h-20 rounded-full flex border-4 items-center justify-center mb-6">
                        <i class="fa-solid fa-face-smile text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2 uppercase montserrat text-gray-800 text-center">satisfaction client</h3>
                    <p class="text-gray-800">Assurez un service ponctuel et optimisé et réduisez vos délais de prise en charge.</p>
                </div>
                <!-- Feature 3 -->
                <div class="shadow-md rounded-md p-5 flex flex-col items-center ">
                    <div class="w-20 h-20 rounded-full flex border-4 items-center justify-center mb-6">
                        <i class="fa-solid fa-arrow-trend-up text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2 uppercase montserrat text-gray-800 text-center">Productivité optimisée</h3>
                    <p class="text-gray-800">Optimisez votre flux de travail en planifiant les itinéraires les plus adaptés.</p>
                </div>
                <!-- Feature 4 -->
                <div class="shadow-md rounded-md p-5 flex flex-col items-center ">
                    <div class="w-20 h-20 rounded-full flex border-4 items-center justify-center mb-6">
                        <i class="fa-solid fa-screwdriver-wrench text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2 uppercase montserrat text-gray-800 text-center">Gestion entretiens</h3>
                    <p class="text-gray-800">Planifiez et assurez vos entretiens avec précision.</p>
                </div>
                <!-- Feature 6 -->
                <div class="shadow-md rounded-md p-5 flex flex-col items-center ">
                    <div class="w-20 h-20 rounded-full flex border-4 items-center justify-center mb-6">
                        <i class="fa-solid fa-id-badge text-4xl"></i>                    
                    </div>
                    <h3 class="text-xl font-semibold mb-2 uppercase montserrat text-gray-800 text-center">Gestion des conducteurs</h3>
                    <p class="text-gray-800">Contrôlez les heures de travail et les comportements de conduite.</p>
                </div>
    
    
            </div>
        </div>
    </section>

    <!-- Section avantage-->
    <section class="pt-10 pb-20 bg-zinc-200">
        <div class="mx-auto sm:px-4 xl:px-30">
            <h1 class="uppercase text-center montserrat font-extrabold text-3xl mb-10">Découvrez nos solutions pour les TAXIS et VTC</h1>
            <div class="grid md:grid-cols-2 place-items-center gap-x-4 md:gap-y-15">
                <!-- Feature 1 -->
                <div class="p-5">
                    <h3 class="text-xl font-semibold mb-2 uppercase montserrat text-gray-800 text-center">Suivi en temps réel pour une meilleure efficacité</h3>
                    <p class="text-gray-800 mb-3">
                        Grâce à notre système de suivi en temps réel, vous pouvez localiser vos véhicules à tout moment et optimiser leur utilisation.
                     </p>
                    <p class="text-gray-800 mb-3">
                        Les chauffeurs peuvent être affectés aux courses les plus proches, ce qui réduit les temps d’attente pour les clients et améliore l’efficacité de votre entreprise.
                    </p>
                    <p class="text-gray-800">
                        Notre fonctionnalité de suivi du kilométrage réel et de la consommation réelle vous permet de réduire les coûts liés au carburant et d’optimiser l’utilisation de vos véhicules.                    </p>                
                </div>
                <!-- Feature 2 -->
                <div class="p-5 content-center lg:px-[100px] mb-15 md:mb-0">
                    <img src="assets/img/tv2.jpg" class="rounded " alt="">
                </div>

                <!-- Feature 3 -->
                <div class="p-5 content-center ">
                    <img src="assets/img/tv3.jpg" class="rounded" alt="">
                </div>
                <!-- Feature 4 -->
                <div class="p-5 mb-15 md:mb-0">
                    <h3 class="text-xl font-semibold mb-2 uppercase montserrat text-gray-800 text-center">Gestion simplifiée de la maintenance et des entretiens</h3>
                    <p class="text-gray-800 mb-3">
                        Planifiez et suivez les interventions de maintenance de vos véhicules en toute simplicité. Notre fonctionnalité de gestion des entretiens vous permet de prolonger la durée de vie de vos véhicules et de réduire les coûts de maintenance.
                    </p>
                    <p class="text-gray-800">
                        Notre système de suivi du kilométrage réel vous permet de planifier les entretiens en fonction de l’utilisation réelle de vos véhicules, ce qui vous permet de réduire les temps d’arrêt et d’améliorer la disponibilité de vos véhicules pour les clients.
                    </p>
                </div>

                <!-- Feature 5 -->
                <div class="p-5">
                    <h3 class="text-xl font-semibold mb-2 uppercase montserrat text-gray-800 text-center">Éco-conduite et respect de la vie privée pour une expérience client de qualité</h3>
                    <p class="text-gray-800 mb-3">
                        Encouragez l’éco-conduite de vos chauffeurs grâce à nos outils d’analyse et réduisez la consommation de carburant et les émissions de CO2, tout en améliorant la sécurité routière.
                    </p>
                    <p class="text-gray-800 mb-3">
                        Notre mode vie privée vous permet de respecter la vie privée de vos chauffeurs en désactivant le suivi en dehors de leurs heures de travail.
                    </p>
                    <p class="text-gray-800">
                        Offrez à vos clients une expérience de conduite plus sûre, plus économique et plus respectueuse de l’environnement.                    
                    </p>
                </div>
                <!-- Feature 6 -->
                <div class="p-5 content-center mb-15 md:mb-0">
                    <img src="assets/img/tv4.jpg" class="rounded max-h-[500px] " alt="">
                </div>

            </div>
        </div>
    </section>

    <!-- Section  -->
    <section class="py-12">
        <div class="container text-center mx-auto font-medium space-y-4 lg:px-[150px] px-4">
            <p class="text-gray-700">
                En choisissant Topalma pour la gestion de votre flotte de taxis ou VTC, vous bénéficiez d’une solution complète et personnalisable qui répond aux exigences de votre métier. Notre technologie de pointe vous permet de suivre en temps réel l’emplacement et l’état de vos véhicules, de planifier et de suivre les entretiens, de contrôler les dépenses et d’optimiser les itinéraires. Nous sommes à votre disposition pour répondre à toutes vos questions et pour vous aider à choisir la formule qui convient le mieux à vos besoins.            
            </p>
            <p class="text-gray-700 mb-7">
                Contactez-nous dès aujourd’hui pour en savoir plus sur nos solutions et comment nous pouvons aider votre entreprise à atteindre ses objectifs.
            </p>
            <a href="#" class="border rounded px-4 py-3 text-sm font-semibold uppercase montserrat hover:bg-black hover:text-white transition duration-300">Nous-contacter</a>
        </div>
    </section>

    <?php include_once '../sections/sticky_bottom.php'?>

    <!-- banner -->
    <div class="w-full">
        <img src="assets/img/tv5.jpg" class="bg-cover w-full" alt="">
    </div>
    
    <?php include_once '../sections/footer.php'?>

    
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="navbarJs"></script>
    <script src="swiperJs"></script>
</body>
    
    </html>