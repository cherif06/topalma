<x-layout title="Secteurs d'activité - Topalma">

    <!-- Hero Section -->
    <div class="bg-zinc-900">
        <section class="w-full h-[600px] bg-center bg-no-repeat bg-cover sm:mask-l-from-90%" style="background-image: url({{ asset('img/sa.jpg') }});">
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
                <div class="h-[250px] bg-cover bg-center" style="background-image: url('{{ asset('img/sa1.jpg') }}')">
                    <h3 class="flex px-4 items-center justify-center text-lg backdrop-brightness-75 transition duration-300 ease-in-out hover:backdrop-brightness-50 h-full w-full font-bold uppercase montserrat">flottes d'entreprises</h3>
                </div>
                </a>
                <!-- Feature 1 -->
                 <a href="Gestion-de-flotte-pour-btp-et-chantiers">
                     <div class="h-[250px] bg-cover bg-center" style="background-image: url('{{ asset('img/btp7.jpg') }}')">
                         <h3 class="flex px-4 items-center justify-center text-lg backdrop-brightness-75 transition duration-300 ease-in-out hover:backdrop-brightness-50 h-full w-full font-bold uppercase montserrat">btp & construction</h3>
                     </div>
                 </a>
    
                <!-- Feature 2 -->
                 <a href="Gestion-de-flotte-pour-transport-et-logistique">
                     <div class="h-[250px] bg-cover bg-center" style="background-image: url('{{ asset('img/sa3.jpg') }}')">
                         <h3 class="flex px-4 items-center justify-center text-lg backdrop-brightness-75 transition duration-300 ease-in-out hover:backdrop-brightness-50 h-full w-full font-bold uppercase montserrat">transport & logistique</h3>
                     </div>
                 </a>
                <!-- Feature 3 -->
                 <a href="Gestion-de-flotte-pour-leasers-et-location-de-voiture">
                     <div class="h-[250px] bg-cover bg-center" style="background-image: url('{{ asset('img/bg5.jpg') }}')">
                         <h3 class="flex px-4 items-center justify-center text-lg backdrop-brightness-75 transition duration-300 ease-in-out hover:backdrop-brightness-50 h-full w-full font-bold uppercase montserrat">location & leasing</h3>
                     </div>
                 </a>
                <!-- Feature 4 -->
                 <a href="Gestion-de-flotte-pour-taxis-et-vtc">
                     <div class="h-[250px] bg-cover bg-center" style="background-image: url('{{ asset('img/sa5.jpeg') }}')">
                         <h3 class="flex px-4 items-center justify-center text-lg backdrop-brightness-75 transition duration-300 ease-in-out hover:backdrop-brightness-50 h-full w-full font-bold uppercase montserrat">taxis & vtc</h3>
                     </div>
                 </a>
                <!-- Feature 6 -->
                 <a href="Gestion-de-flotte-pour-transport-de-passagers">
                     <div class="h-[250px] bg-cover bg-center" style="background-image: url('{{ asset('img/tp2.jpg') }}')">
                         <h3 class="flex px-4 items-center justify-center text-lg backdrop-brightness-75 transition duration-300 ease-in-out hover:backdrop-brightness-50 h-full w-full font-bold uppercase montserrat">transport de passagers</h3>
                     </div>
                 </a>
                <!-- Feature 7 -->
                 <a href="Gestion-de-flotte-pour-services-et-maintenance">
                     <div class="h-[250px] bg-cover bg-center" style="background-image: url('{{ asset('img/tl2.jpg') }}')">
                         <h3 class="flex px-4 items-center justify-center text-lg backdrop-brightness-75 transition duration-300 ease-in-out hover:backdrop-brightness-50 h-full w-full font-bold uppercase montserrat">services & maintenance</h3>
                     </div>
                 </a>
            </div>
        </div>
    </section>

    <!-- banner -->
    <div class="w-full">
        <img src="{{ asset('img/btp7.jpg') }}" class="bg-cover w-full" alt="">
    </div>

</x-layout>