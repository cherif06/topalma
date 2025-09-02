
<x-layout title="Topalma - Digitalisez vos chantiers">

    <!-- Hero Section -->
    <section class="w-full bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset('img/bg1.jpg') }}');">        
        <div class="container mx-auto px-4 py-20 md:py-32">
            <div class="mx-auto text-white text-center text-shadow-lg/30">
                <h1 class="text-6xl md:text-8xl montserrat text-gray-50 font-extrabold mb-6 leading-tight">Topalma</h1>
                <p class="text-xl md:text-2xl font-bold mb-8 uppercase text-gray-50">Géolocalisation | smart mobility | gestion de flotte</p>
            </div>
        </div>
    </section>
    
    <!-- Section slogan -->
    <section class="pt-12">
        <div class="container text-center mx-auto space-y-6 lg:px-[150px] px-4">
            <p class="uppercase montserrat font-extrabold text-xl lg:text-3xl">Optimisez la gestion de votre flotte et réduisez vos coûts avec Topalma</p>          
            <p class="text-lg font-grey">Topalma est la solution de référence pour la <strong>géolocalisation</strong>, la <strong>gestion de flotte</strong> et l’<strong>optimisation des ressources</strong>.
            Découvrez les fonctionnalités clés qui font la différence pour votre activité :</p>                
        </div>
    </section>
    
    <!-- Section avantage-->
    <section class="py-20">
        <div class="container mx-auto px-4 xl:px-20">
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="shadow-md rounded-md p-8 flex flex-col items-center ">
                    <div class="w-20 h-20 rounded-full flex border-4 items-center justify-center mb-6">
                        <i class="fa-solid fa-location-dot text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2 uppercase montserrat text-gray-800 text-center">Suivi en temps réel</h3>
                    <p class="text-gray-800">Gardez le contrôle de votre flotte grâce à une géolocalisation précise et un suivi en temps réel. Améliorez la
                    réactivité de vos opérations et réduisez les délais d'intervention.</p>
                </div>
                
                <!-- Feature 2 -->
                <div class="shadow-md rounded-md p-8 flex flex-col items-center ">
                    <div class="w-20 h-20 rounded-full flex border-4 items-center justify-center mb-6">
                        <i class="fa-solid fa-gas-pump text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2 uppercase montserrat text-gray-800 text-center">Réduction des coûts carburant et entretien</h3>
                    <p class="text-gray-800">Réalisez jusqu'à 20% d'économies en analysant les comportements de conduite et en identifiant les axes d'amélioration.
                    Une flotte mieux gérée, c'est des coûts maîtrisés.</p>
                </div>
                <!-- Feature 3 -->
                <div class="shadow-md rounded-md p-8 flex flex-col items-center ">
                    <div class="w-20 h-20 rounded-full flex border-4 items-center justify-center mb-6">
                        <i class="fa-solid fa-leaf text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2 uppercase montserrat text-gray-800 text-center">Réduction de l'empreinte carbone</h3>
                    <p class="text-gray-800">Suivez et analysez les émissions de CO2 de votre flotte. Identifiez les leviers pour adopter une conduite plus
                    éco-responsable et valorisez votree engagement environnemental.</p>
                </div>
                <!-- Feature 4 -->
                <div class="shadow-md rounded-md p-8 flex flex-col items-center ">
                    <div class="w-20 h-20 rounded-full flex border-4 items-center justify-center mb-6">
                        <i class="fa-solid fa-chart-simple text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2 uppercase montserrat text-gray-800 text-center">Analyse et reporting avancés</h3>
                    <p class="text-gray-800">Exploitez des tableaux de bord personnalisés pour piloter votre activité. Suivez vos indicateurs clés, identifiez les
                    tendances et optimisez vos stratégies.</p>
                </div>
                <!-- Feature 5 -->
                <div class="shadow-md rounded-md p-8 flex flex-col items-center ">
                    <div class="w-20 h-20 rounded-full flex border-4 items-center justify-center mb-6">
                        <i class="fa-solid fa-shield-halved text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2 uppercase montserrat text-gray-800 text-center">Sécurisation et protection des actifs</h3>
                    <p class="text-gray-800">Protégez vos véhicules et équipements avec des solutions avancées : antidémarrage distant, double sécurité et boîtiers
                    fantômes. Paramétrez vos alertes personnalisées en cas de déplacement non autorisé ou de tentative de vol.</p>
                </div>
                <!-- Feature 6 -->
                <div class="shadow-md rounded-md p-8 flex flex-col items-center ">
                    <div class="w-20 h-20 rounded-full flex border-4 items-center justify-center mb-6">
                        <i class="fa-solid fa-arrow-trend-up  text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2 uppercase montserrat text-gray-800 text-center">Optimisation des processus et agrégation des données constructeurs</h3>
                    <p class="text-gray-800">Bénéficiez d'une vision unifiée de votre parc grâce à l'agrégation des données des constructeurs. Centralisez les
                    informations techniques de vos engins et simplifiez votre gestion quotidienne.</p>
                </div>
                
            
            </div>
        </div>
    </section>
    
    <!-- Section solutions -->
    <section class="py-20 bg-slate-900">
        <div class="container mx-auto px-4 xl:px-20">
            <div class="flex flex-col md:flex-row gap-10 lg:gap-16">
                <div class="hidden md:w-2/5 md:flex justify-end">
                    <img src="{{ asset('img/bg2.jpg') }}" class="shadow-xl/30 rounded h-[600px] relative bottom-30" alt="">
                </div>
                <div class="md:w-3/5">
                    <h3 class="text-2xl font-semibold mb-6 uppercase montserrat text-gray-50">Gérez, Suivez, sécurisez : Maîtrise de la Géolocalisation Intelligente avec Topalma</h3>
                    <p class="text-md leading-7 mb-4 text-gray-50 ">
                        Bienvenue dans l’univers de la gestion opérationnelle redéfinie, où l’innovation rencontre la fiabilité. Topalma
                        propose des solutions novatrices pour la gestion intelligente de flotte, la géolocalisation avancée, la sécurisation
                        d’actifs et la promotion de l’éco-conduite.
                    </p>
                    <p class="text-md leading-7 text-gray-50 ">
                        Chez Topalma, nous allions innovation et fiabilité pour offrir à votre entreprise les solutions les plus avancées en
                        matière de géolocalisation, de gestion de flotte, de sécurisation d’actifs et d’éco-conduite. Notre engagement envers la
                        simplicité d’utilisation, la personnalisation et un service client dévoué fait de nous le choix idéal pour optimiser
                        votre gestion d’activité. Que vous cherchiez à suivre en temps réel votre flotte de véhicules, à maximiser la
                        productivité de votre entreprise ou à sécuriser vos actifs précieux, Topalma est là pour vous accompagner. Explorez
                        nos solutions sur mesure et découvrez comment nous pouvons transformer votre manière de gérer votre activité. Bienvenue
                        dans l’avenir de la gestion d’activité avec Topalma.
                    </p>
                    <a href="#" class="inline-block mt-7 border text-center font-semibold text-lg border-white hover:bg-white text-white hover:text-zinc-800 px-6 py-4 rounded-sm transition duration-300">Découvrez nos solutions</a>
                </div>
            </div>
        </div>
    </section>
     
    <!-- Content Section 2 -->
    <section class="py-20">
        <div class="w-full relative px-15">
            <button id="next" class="absolute top-1/2 cursor-pointer right-2 transform text-black w-10 h-10 z-10 hover:text-green-600  transition duration-300"><i class="fa-solid fa-chevron-right text-2xl md:text-4xl"></i></button> 
            <button id="prev" class="absolute top-1/2 cursor-pointer left-2 transform text-black w-10 h-10 z-10 hover:text-green-600 transition duration-300"><i class="fa-solid fa-chevron-left text-2xl md:text-4xl"></i></button>
    
            <div class="swiper">
                <div class="swiper-wrapper container">
                    <a href="Gestion-de-flotte-dentreprise" class="block swiper-slide shadow-lg/30">
                        <img src="{{ asset('img/sa1.jpg') }}" class="w-full h-50 object-cover" />
                        <div class="bg-gray-900 text-white text-center py-2 font-bold uppercase text-sm">flottes d'entreprise</div>
                    </a>
                    <a href="Gestion-de-flotte-dentreprise" class="swiper-slide shadow-lg/30">
                        <img src="{{ asset('img/sa2.jpg') }}" class="w-full h-50 object-cover" />
                        <div class="bg-gray-900 text-white text-center py-2 font-bold uppercase text-sm">btp / construction</div>
                    </a>
                    <a href="Gestion-de-flotte-dentreprise" class="swiper-slide shadow-lg/30">
                        <img src="{{ asset('img/sa3.jpg') }}" class="w-full h-50 object-cover" />
                        <div class="bg-gray-900 text-white text-center py-2 font-bold uppercase text-sm">transport / logistique</div>
                    </a>
                    <a href="Gestion-de-flotte-dentreprise" class="swiper-slide shadow-lg/30">
                        <img src="{{ asset('img/sa4.jpg') }}" class="w-full h-50 object-cover" />
                        <div class="bg-gray-900 text-white text-center py-2 font-bold uppercase text-sm">Location / Leasing</div>
                    </a>
                    <a href="Gestion-de-flotte-dentreprise" class="swiper-slide shadow-lg/30">
                        <img src="{{ asset('img/sa5.jpeg') }}" class="w-full h-50 object-cover" />
                        <div class="bg-gray-900 text-white text-center py-2 font-bold uppercase text-sm">taxis / vtc</div>
                    </a>
                    <a href="Gestion-de-flotte-dentreprise" class="swiper-slide shadow-lg/30">
                        <img src="{{ asset('img/s6.jpeg') }}" class="w-full h-50 object-cover" />
                        <div class="bg-gray-900 text-white text-center py-2 font-bold uppercase text-sm">transport de passagers</div>
                    </a>
                    <a href="Gestion-de-flotte-dentreprise" class="swiper-slide shadow-lg/30">
                        <img src="{{ asset('img/s7.jpeg') }}" class="w-full h-50 object-cover" />
                        <div class="bg-gray-900 text-white text-center py-2 font-bold uppercase text-sm">services / maintenance</div>
                    </a>
                </div>
            
            </div>
        </div>
    </section>

</x-layout>

