<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion de flotte pour les services et la maintenance</title>
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
        <section class="w-full h-[600px] bg-center bg-no-repeat bg-cover sm:mask-l-from-90% bg-[url('img/sm1.jpg')]" style="background-image: url(assets/img/sm1.jpg);">
            <div class="container h-full px-4 lg:px-30 text-white flex items-center">
                <div class="sm:pl-10">
                    <h1 class="text-4xl lg:text-5xl lg:w-[500px] text-shadow-lg/30 montserrat text-gray-50 font-extrabold mb-6">Géolocalisation, gestion de flotte pour le service et la maintenance</h1>
                    <a href="#" class="px-4 py-3 text-center font-semibold bg-black text-lg hover:bg-white hover:text-black rounded-sm transition duration-300">Demandez une démo</a>
                </div>
            </div>
        </section>
    </div>

    <!-- Section  -->
    <section class="py-12">
        <div class="container mx-auto font-medium space-y-6 lg:px-[150px] px-4">
            <p class="text-gray-700">
                Dans le secteur dynamique des entreprises de services et de maintenance, la réactivité, l’efficacité et la satisfaction client sont des enjeux cruciaux. Topalma, spécialiste de la géolocalisation et de la gestion de flotte, vous propose des solutions sur mesure pour optimiser vos interventions et améliorer la qualité de vos services.
            </p>
            <p class="text-gray-700">
                Que vous soyez une entreprise de maintenance industrielle, de dépannage ou de services à domicile, notre technologie avancée vous aidera à relever les défis quotidiens et à offrir une expérience client exceptionnelle.
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
                        <i class="fa-solid fa-money-bills text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2 uppercase montserrat text-gray-800 text-center">Réduction des coûts</h3>
                    <p class="text-gray-800">Optimisez les trajets, la consommation de carburant et les frais d'entretien.</p>
                </div>
                <!-- Feature 1 -->
                <div class="shadow-md rounded-md p-5 flex flex-col items-center ">
                    <div class="w-20 h-20 rounded-full flex border-4 items-center justify-center mb-6">
                        <i class="fa-solid fa-arrow-trend-up text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2 uppercase montserrat text-gray-800 text-center">Réactivitée accrue</h3>
                    <p class="text-gray-800">Réduisez et maîtrisez vos délais d'intervention.</p>
                </div>
    
                <!-- Feature 2 -->
                <div class="shadow-md rounded-md p-5 flex flex-col items-center ">
                    <div class="w-20 h-20 rounded-full flex border-4 items-center justify-center mb-6">
                        <i class="fa-solid fa-shield-halved text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2 uppercase montserrat text-gray-800 text-center">SÉCURITÉ RENFORCÉE</h3>
                    <p class="text-gray-800">Encouragez une conduite responsable et protégez vos collaborateurs et vos actifs.</p>
                </div>
                <!-- Feature 3 -->
                <div class="shadow-md rounded-md p-5 flex flex-col items-center ">
                    <div class="w-20 h-20 rounded-full flex border-4 items-center justify-center mb-6">
                        <i class="fa-solid fa-location-dot text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2 uppercase montserrat text-gray-800 text-center">Suivi et traçabilité</h3>
                    <p class="text-gray-800">Bénéficiez de rapports détaillés pour une gestion et un contrôle qualité améliorés.</p>
                </div>
                <!-- Feature 4 -->
                <div class="shadow-md rounded-md p-5 flex flex-col items-center ">
                    <div class="w-20 h-20 rounded-full flex border-4 items-center justify-center mb-6">
                        <i class="fa-regular fa-calendar-check text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2 uppercase montserrat text-gray-800 text-center">Planification optimisée</h3>
                    <p class="text-gray-800">Optimisez les interventions selon les compétences, horaires et itinéraires.</p>
                </div>
                <!-- Feature 6 -->
                <div class="shadow-md rounded-md p-5 flex flex-col items-center ">
                    <div class="w-20 h-20 rounded-full flex border-4 items-center justify-center mb-6">
                        <i class="fa-solid fa-user-check text-4xl"></i>                    
                    </div>
                    <h3 class="text-xl font-semibold mb-2 uppercase montserrat text-gray-800 text-center">Satisfaction client</h3>
                    <p class="text-gray-800">Respectez vos engagements en offrant un service rapide, efficace et fiable.</p>
                </div>
    
    
            </div>
        </div>
    </section>

    <!-- Section avantage-->
    <section class="pt-10 pb-20 bg-zinc-200">
        <div class="mx-auto sm:px-4 xl:px-30">
            <h1 class="uppercase text-center montserrat font-extrabold text-3xl mb-10">Découvrez nos solutions pour les entreprises de services et de maintenance</h1>
            <div class="grid md:grid-cols-2 place-items-center gap-x-4 md:gap-y-15">
                <!-- Feature 1 -->
                <div class="p-5">
                    <h3 class="text-xl font-semibold mb-2 uppercase montserrat text-gray-800 text-center">Géolocalisation et réactivité en temps réel</h3>
                    <p class="text-gray-800 mb-3">
                        Bénéficiez d’une visibilité totale sur  votre flotte, la position de vos actifs et leur statut en temps réel grâce à notre plateforme de gestion de flotte.
                     </p>
                    <p class="text-gray-800">
                        Cette réactivité accrue vous permet de répondre rapidement aux demandes d’intervention en identifiant et en dépêchant le technicien le plus proche et le plus qualifié. Ainsi, vous optimisez la prise en charge des clients et renforcez leur satisfaction.                    
                    </p>                
                </div>
                <!-- Feature 2 -->
                <div class="p-5 content-center mb-15 md:mb-0">
                    <img src="assets/img/sm2.jpg" class="rounded " alt="">
                </div>

                <!-- Feature 3 -->
                <div class="p-5 content-center ">
                    <img src="assets/img/sm3.jpg" class="rounded" alt="">
                </div>
                <!-- Feature 4 -->
                <div class="p-5 mb-15 md:mb-0">
                    <h3 class="text-xl font-semibold mb-2 uppercase montserrat text-gray-800 text-center">Planification, optimisation et suivi des interventions</h3>
                    <p class="text-gray-800 mb-3">
                        Notre système de gestion de flotte facilite la planification et l’optimisation des interventions en prenant en compte les contraintes horaires, les compétences de vos techniciens et les itinéraires les plus efficaces.
                    </p>
                    <p class="text-gray-800">
                        Grâce à un suivi en temps réel du déroulement des interventions, vous pouvez ajuster votre planification et améliorer la coordination de vos équipes. De plus, accédez à des rapports détaillés sur les actions effectuées pour une meilleure gestion et un contrôle qualité renforcé.
                    </p>
                </div>

                <!-- Feature 5 -->
                <div class="p-5">
                    <h3 class="text-xl font-semibold mb-2 uppercase montserrat text-gray-800 text-center">Sécurité, entretien et réduction des coûts</h3>
                    <p class="text-gray-800 mb-3">
                        Assurez la sécurité de vos techniciens et de vos véhicules en surveillant la conduite et en détectant les comportements à risque grâce à nos dispositifs de suivi et d’éco-conduite.
                    </p>
                    <p class="text-gray-800 mb-3">
                        Planifiez et gérez les maintenances préventives et curatives de vos véhicules pour garantir leur fiabilité et leur longévité. grâce à l’outil de gestion d’entretiens intégré à notre solution.
                    </p>
                    <p class="text-gray-800">
                        En optimisant les trajets et la consommation de carburant, vous réduisez vos coûts d’exploitation et votre empreinte carbone, tout en améliorant la sécurité routière et la satisfaction de vos clients                    
                    </p>
                </div>
                <!-- Feature 6 -->
                <div class="p-5 content-center mb-15 md:mb-0">
                    <img src="assets/img/sm5.jpg" class="rounded max-h-[500px] " alt="">
                </div>

            </div>
        </div>
    </section>

    <!-- Section  -->
    <section class="py-12">
        <div class="container text-center mx-auto font-medium space-y-4 lg:px-[150px] px-4">
            <p class="text-gray-700">
                Notre solution de géolocalisation et de gestion de flotte est spécialement conçue pour aider les entreprises de services et de maintenance à optimiser leur efficacité opérationnelle, à réduire les coûts et à améliorer la sécurité des techniciens et des véhicules. Grâce à une gamme de fonctionnalités adaptées à vos besoins, notre solution constitue le choix idéal pour les entreprises souhaitant accroître leur productivité et leur rentabilité.            
            </p>
            <p class="text-gray-700 mb-7">
                N’hésitez pas à nous contacter dès aujourd’hui pour en savoir plus sur nos solutions et comment nous pouvons aider votre entreprise de services et de maintenance à atteindre ses objectifs et à renforcer son activité.
            </p>
            <a href="#" class="border rounded px-4 py-3 text-sm font-semibold uppercase montserrat hover:bg-black hover:text-white transition duration-300">Nous-contacter</a>
        </div>
    </section>

    <?php include_once '../sections/sticky_bottom.php'?>

    <!-- banner -->
    <div class="w-full">
        <img src="assets/img/sm6.jpg" class="bg-cover w-full" alt="">
    </div>
    
    <?php include_once '../sections/footer.php'?>

    
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="navbarJs"></script>
    <script src="swiperJs"></script>
</body>
    
    </html>