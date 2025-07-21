<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion de flotte pour le leasing et la location de vehicule</title>
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
        <section class="w-full h-[600px] bg-center bg-no-repeat bg-cover sm:mask-l-from-90% bg-[url('img/bg5.jpg')]" style="background-image: url(assets/img/bg5.jpg);">
            <div class="container h-full px-4 lg:px-30 text-white flex items-center">
                <div class="sm:pl-10">
                    <h1 class="text-4xl lg:text-5xl lg:w-[500px] text-shadow-lg/30 montserrat text-gray-50 font-extrabold mb-6">Géolocalisation et gestion de flotte pour locations de véhicules et leasers</h1>
                    <a href="#" class="px-4 py-3 text-center font-semibold bg-black text-lg hover:bg-white hover:text-black rounded-sm transition duration-300">Demandez une démo</a>
                </div>
            </div>
        </section>
    </div>

    <!-- Section  -->
    <section class="py-12">
        <div class="container mx-auto font-medium space-y-6 lg:px-[150px] px-4">
            <p class="text-gray-700">
                Les loueurs et leasers de véhicules font face à de nombreux défis dans leur activité quotidienne, 
                notamment le vol et l’utilisation non autorisée des véhicules, la maintenance et l’entretien réguliers, 
                la facturation précise et transparente, et l’optimisation de l’utilisation des véhicules.
            </p>
            <p class="text-gray-700">
                Topalma adresse ces problématiques et propose des solutions de géolocalisation et de gestion de flotte 
                optimisées pour aider les loueurs et leasers à réduire leurs coûts, améliorer la sécurité et la fiabilité 
                de leurs véhicules, et optimiser leur utilisation pour maximiser les revenus.
            </p>
            <p class="text-gray-700">
                Nos solutions de pointe utilisent les dernières technologies pour fournir des données précises et 
                en temps réel, ce qui permet aux loueurs et leasers de prendre des décisions éclairées et 
                d’améliorer leur activité.
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
                    <h3 class="text-xl font-semibold mb-2 uppercase montserrat text-gray-800 text-center">Suivi temps réel 24/7</h3>
                    <p class="text-gray-800">Optimisez votre flux de travail en planifiant les itinéraires les plus adaptés.</p>
                </div>
                <!-- Feature 1 -->
                <div class="shadow-md rounded-md p-5 flex flex-col items-center ">
                    <div class="w-20 h-20 rounded-full flex border-4 items-center justify-center mb-6">
                        <i class="fa-solid fa-shield-halved text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2 uppercase montserrat text-gray-800 text-center">Sécurisation</h3>
                    <p class="text-gray-800">Suivez les heures et les comportements de conduite pour améliorer la sécurité.</p>
                </div>
    
                <!-- Feature 2 -->
                <div class="shadow-md rounded-md p-5 flex flex-col items-center ">
                    <div class="w-20 h-20 rounded-full flex border-4 items-center justify-center mb-6">
                        <i class="fa-solid fa-arrow-trend-up text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2 uppercase montserrat text-gray-800 text-center">Optimisation</h3>
                    <p class="text-gray-800">Monitorez votre flotte et localisez vos véhicules en temps réel.</p>
                </div>
                <!-- Feature 3 -->
                <div class="shadow-md rounded-md p-5 flex flex-col items-center ">
                    <div class="w-20 h-20 rounded-full flex border-4 items-center justify-center mb-6">
                        <i class="fa-solid fa-screwdriver-wrench text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2 uppercase montserrat text-gray-800 text-center">Gestion entretiens</h3>
                    <p class="text-gray-800">Planifiez et assurez vos entretiens avec précision.</p>
                </div>
                <!-- Feature 4 -->
                <div class="shadow-md rounded-md p-5 flex flex-col items-center ">
                    <div class="w-20 h-20 rounded-full flex border-4 items-center justify-center mb-6">
                        <i class="fa-solid fa-money-bills text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2 uppercase montserrat text-gray-800 text-center">Réduction des coûts</h3>
                    <p class="text-gray-800">Maîtrisez vos coûts et améliorez la rentabilité de votre entreprise.</p>
                </div>
                <!-- Feature 6 -->
                <div class="shadow-md rounded-md p-5 flex flex-col items-center ">
                    <div class="w-20 h-20 rounded-full flex border-4 items-center justify-center mb-6">
                        <i class="fa-solid fa-handshake text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2 uppercase montserrat text-gray-800 text-center">Réduction des litiges</h3>
                    <p class="text-gray-800">Grâce à des rapports de données factuelles et précises.</p>
                </div>
    
    
            </div>
        </div>
    </section>

    <!-- Section avantage-->
    <section class="pt-10 pb-20 bg-zinc-200">
        <div class="mx-auto sm:px-4 xl:px-30">
            <h1 class="uppercase text-center montserrat font-extrabold text-3xl mb-10">Découvrez nos solutions pour les locations et leasing de véhicules</h1>
            <div class="grid md:grid-cols-2 place-items-center gap-x-4 md:gap-y-15">
                <!-- Feature 1 -->
                <div class="p-5">
                    <h3 class="text-xl font-semibold mb-2 uppercase montserrat text-gray-800 text-center">Géolocalisation en temps réel</h3>
                    <p class="text-gray-800 mb-3">
                        Grâce à la géolocalisation, les loueurs et leasers de véhicules peuvent suivre leurs véhicules en temps réel.
                    </p>
                    <p class="text-gray-800">
                        Les loueurs et leasers peuvent également définir des zones et des heures d’utilisation autorisées et recevoir des alertes en temps réel en cas de violation.                    </p>                
                </div>
                <!-- Feature 2 -->
                <div class="p-5 content-center mb-15 md:mb-0">
                    <img src="assets/img/city_topview.jpg" class="rounded " alt="">
                </div>

                <!-- Feature 3 -->
                <div class="p-5 content-center lg:px-10">
                    <img src="assets/img/ll2.jpeg" class="rounded" alt="">
                </div>
                <!-- Feature 4 -->
                <div class="p-5 mb-15 md:mb-0">
                    <h3 class="text-xl font-semibold mb-2 uppercase montserrat text-gray-800 text-center">Sécurisation de vos véhicules</h3>
                    <p class="text-gray-800 mb-3">
                        La sécurité de votre flotte est notre priorité absolue, louez vos véhicules en toute confiance.
                    </p>
                    <p class="text-gray-800 mb-3">
                        Nos solutions Secure360 et 360Solutions intègrent l’anti-démarrage distant, la double sécurité et des 
                        alertes qui permettent de réduire les risques de vol et d’utilisation non autorisée.                    
                    </p>
                    <p class="text-gray-800 mb-3">
                        Elles permettent également une récupération rapide en cas de vol ou de non-restitution ainsi 
                        qu’une surveillance des comportements de conduite pour prévenir les accidents. Les loueurs et 
                        leasers peuvent ainsi offrir une sécurité accrue à leurs clients tout en protégeant leur investissement.
                    </p>
                    <a class="uppercase inline-block self-start text-white text-sm py-1 px-2 font-semibold rounded-lg bg-slate-900 hover:bg-emerald-400 transition duration-300"><i class="fa-solid fa-eye"></i> Anti-démarrage distant</a>
                    <a class="uppercase inline-block self-start text-white text-sm py-1 px-2 font-semibold rounded-lg bg-slate-900 hover:bg-emerald-400 transition duration-300"><i class="fa-solid fa-eye"></i> Double sécurité</a>
                </div>

                <!-- Feature 5 -->
                <div class="p-5 ">
                    <h3 class="text-xl font-semibold mb-2 uppercase montserrat text-gray-800 text-center">Optimisation de l'utilisation des véhicules</h3>
                    <p class="text-gray-800 mb-3">
                        Planifiez les entretiens et maintenances avec précisions grâce aux remontées de kilométrage réel. 
                        Avec l’outil de gestion des entretiens, prolongez de manière significative la durée de vie de vos 
                        véhicules et assurez leur mise en place par vos locataires.
                    </p>
                    <p class="text-gray-800 mb-3">
                        Les rapports détaillés sur l’utilisation des véhicules permettent de comprendre les tendances et de prendre
                         des décisions éclairées pour réduire les coûts et améliorer la rentabilité de l’entreprise.
                    </p>
                    <p class="text-gray-800">
                        Créez vos tableaux de bord personnalisés pour visualiser toutes vos données d’un seul coup d’oeil.
                    </p>
                </div>
                <!-- Feature 6 -->
                <div class="p-5 content-center xl:px-[100px] mb-15 md:mb-0">
                    <img src="assets/img/ll3.jpg" class="rounded max-h-[500px] " alt="">
                </div>

                <!-- Feature 3 -->
                <div class="p-5 content-center lg:px-10">
                    <img src="assets/img/ll4.jpg" class="rounded" alt="">
                </div>
                <!-- Feature 4 -->
                <div class="p-5">
                    <h3 class="text-xl font-semibold mb-2 uppercase montserrat text-gray-800 text-center">accès délégué pour vos clients</h3>
                    <p class="text-gray-800 mb-3">
                        Offrez à vos clients un service supplémentaire en leur permettant de créer leur propre compte 
                        d’accès avec des droits limités. Ils pourront ainsi suivre l’emplacement et l’utilisation de leurs 
                        véhicules en temps réel, accéder à des rapports détaillés sur l’utilisation de leurs véhicules et 
                        optimiser leur utilisation.                    
                    </p>
                    <p class="text-gray-800 mb-3">
                       Cette fonctionnalité renforcera votre relation avec vos clients en leur offrant une plus grande 
                       transparence et une meilleure visibilité sur leur parc automobile.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section  -->
    <section class="py-12">
        <div class="container text-center mx-auto font-medium space-y-4 lg:px-[150px] px-4">
            <p class="text-gray-700">
                Grâce à nos solutions de géolocalisation et de gestion de flotte, les loueurs et leasers de véhicules peuvent améliorer la sécurité de leur flotte, réduire les coûts et optimiser l’utilisation de leurs véhicules.
            </p>
            <p class="text-gray-700">
                Contactez-nous dès aujourd’hui pour en savoir plus sur nos solutions de gestion de flotte pour les loueurs et leasers de véhicules.            
            </p>
            <p class="text-gray-700 mb-7">
                Nous préconisons 360Solutions qui concentre les principales fonctionnalités adaptées aux loueurs et leasers.
            </p>
            <a href="#" class="border rounded px-4 py-3 text-sm font-semibold uppercase montserrat hover:bg-black hover:text-white transition duration-300">Nous-contacter</a>
        </div>
    </section>

    <?php include_once '../sections/sticky_bottom.php'?>

    <!-- banner -->
    <div class="w-full">
        <img src="assets/img/fe4.jpg" class="bg-cover w-full" alt="">
    </div>
    
    <?php include_once '../sections/footer.php'?>

    
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="navbarJs"></script>
    <script src="swiperJs"></script>
</body>
    
    </html>