 <!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secteurs d'activité</title>
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
        <section class="w-full h-[600px] bg-center bg-no-repeat bg-cover sm:mask-l-from-90% bg-[url('img/sa.jpg')]" style="background-image: url(assets/img/sa.jpg);">
            <div class="container h-full px-4 lg:px-30 text-white flex items-center">
                <div class="sm:pl-10">
                    <h1 class="text-5xl lg:text-6xl lg:w-[600px] text-shadow-lg/30 montserrat text-gray-50 font-extrabold mb-6">Secteurs d'activité</h1>
                    <a href="#" class="px-4 py-3 text-center font-semibold bg-black text-lg hover:bg-white hover:text-black rounded-sm transition duration-300">Demandez une démo</a>
                </div>
            </div>
        </section>
    </div>

    <!-- Section  -->
    <section class="py-12">
        <div class="container mx-auto font-medium space-y-6 lg:px-[150px] px-4">
            <h1 class="uppercase text-center montserrat font-extrabold text-3xl mb-10">LES solutionS métiers Topalma</h1>
            <p class="text-gray-700">
                Améliorez les performances de votre entreprise, quelle que soit sa taille ou son secteur d’activité, avec les solutions de gestion de flotte et de géolocalisation de véhicules, engins et actifs de Topalma.
            </p>
            <p class="text-gray-700">
                Nos outils avancés de suivi de flotte en temps réel et notre expertise inégalée en matière de gestion de flotte vous aideront à optimiser vos opérations, à réduire les coûts et à surpasser vos concurrents. Avec Topalma, bénéficiez d’une visibilité totale sur votre flotte de véhicules, engins et actifs et prenez des décisions éclairées pour améliorer l’efficacité et la rentabilité de votre entreprise.
            </p>
        </div>
    </section>

    <!-- Section avantage-->
    <section class="pt-10 pb-20 bg-zinc-200">
        <div class="w-full md:mx-auto lg:px-50">
            <div class="grid md:grid-cols-4 text-center text-white">
                <!-- Feature 5 -->
                 <a href="Gestion-de-flotte-dentreprise">
                <div class="h-[250px] bg-[url('assets/img/sa1.jpg')] bg-cover bg-center">
                    <h3 class="flex px-4 items-center justify-center text-lg backdrop-brightness-75 transition duration-300 ease-in-out hover:backdrop-brightness-50 h-full w-full font-bold uppercase montserrat">flottes d'entreprises</h3>
                </div>
                </a>
                <!-- Feature 1 -->
                 <a href="Gestion-de-flotte-pour-btp-et-chantiers">
                     <div class="h-[250px] bg-[url('assets/img/btp7.jpg')] bg-cover bg-center">
                         <h3 class="flex px-4 items-center justify-center text-lg backdrop-brightness-75 transition duration-300 ease-in-out hover:backdrop-brightness-50 h-full w-full font-bold uppercase montserrat">btp & construction</h3>
                     </div>
                 </a>
    
                <!-- Feature 2 -->
                 <a href="Gestion-de-flotte-pour-transport-et-logistique">
                     <div class="h-[250px] bg-[url('assets/img/sa3.jpg')] bg-cover bg-center">
                         <h3 class="flex px-4 items-center justify-center text-lg backdrop-brightness-75 transition duration-300 ease-in-out hover:backdrop-brightness-50 h-full w-full font-bold uppercase montserrat">transport & logistique</h3>
                     </div>
                 </a>
                <!-- Feature 3 -->
                 <a href="Gestion-de-flotte-pour-leasers-et-location-de-voiture">
                     <div class="h-[250px] bg-[url('assets/img/bg5.jpg')] bg-cover bg-center">
                         <h3 class="flex px-4 items-center justify-center text-lg backdrop-brightness-75 transition duration-300 ease-in-out hover:backdrop-brightness-50 h-full w-full font-bold uppercase montserrat">location & leasing</h3>
                     </div>
                 </a>
                <!-- Feature 4 -->
                 <a href="Gestion-de-flotte-pour-taxis-et-vtc">
                     <div class="h-[250px] bg-[url('assets/img/sa5.jpeg')] bg-cover bg-center">
                         <h3 class="flex px-4 items-center justify-center text-lg backdrop-brightness-75 transition duration-300 ease-in-out hover:backdrop-brightness-50 h-full w-full font-bold uppercase montserrat">taxis & vtc</h3>
                     </div>
                 </a>
                <!-- Feature 6 -->
                 <a href="Gestion-de-flotte-pour-transport-de-passagers">
                     <div class="h-[250px] bg-[url('assets/img/tp2.jpg')] bg-cover bg-center">
                         <h3 class="flex px-4 items-center justify-center text-lg backdrop-brightness-75 transition duration-300 ease-in-out hover:backdrop-brightness-50 h-full w-full font-bold uppercase montserrat">transport de passagers</h3>
                     </div>
                 </a>
                <!-- Feature 7 -->
                 <a href="Gestion-de-flotte-pour-services-et-maintenance">
                     <div class="h-[250px] bg-[url('assets/img/tl2.jpg')] bg-cover bg-center">
                         <h3 class="flex px-4 items-center justify-center text-lg backdrop-brightness-75 transition duration-300 ease-in-out hover:backdrop-brightness-50 h-full w-full font-bold uppercase montserrat">services & maintenance</h3>
                     </div>
                 </a>
            </div>
        </div>
    </section>


    <?php include_once '../sections/sticky_bottom.php'?>

    <!-- banner -->
    <div class="w-full">
        <img src="assets/img/btp7.jpg" class="bg-cover w-full" alt="">
    </div>
    
    <?php include_once '../sections/footer.php'?>

    
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="navbarJs"></script>
    <script src="swiperJs"></script>
</body>
    
    </html>