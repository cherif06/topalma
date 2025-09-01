<ul
    class="px-4 w-full bg-gray-950 text-white sticky top-0 space-x-6 py-1 text-xs sm:text-sm flex justify-end list-none">
    <li>À propos</li>
    <li>Contact</li>
    <li class="">Connexion clients</li>
    <li><i class="fa-solid fa-phone"></i> 77 654 87 87 </li>
</ul>
<header class="bg-white shadow-sm w-full sticky top-0 z-50">


    <div class="mx-auto px-4 flex w-full justify-between items-center">
        <div class="flex w-full justify-between relative lg:justify-start items-center">
            <button class="lg:hidden text-gray-700 cursor-pointer nav-trigger">
                <i class="fas fa-bars text-3xl"></i>
            </button>
            <button class="hidden text-gray-700 cursor-pointer nav-closer">
                <i class="fa-solid fa-xmark text-3xl"></i>
            </button>
            <img src="{{ asset('img/logo_topalma.png') }}" alt="Logo Topalma" class="h-[75px]">
            <nav class="hidden lg:flex ms-16 items-center space-x-8">
                <a href="{{ url('/') }}"
                    class=" hover:text-green-600 transition duration-200 text-sm uppercase font-bold">Accueil</a>
                <a href="#" class="py-8 hover:text-green-600 transition duration-200 text-sm uppercase font-bold"
                    id="link1">Solutions</a>
                <a href="{{ url('/Secteur-dactivite') }}" class="py-8 hover:text-green-600 transition duration-200 text-sm uppercase font-bold"
                    id="link2">Secteurs d'activité</a>
                <!-- <a href="#" class=" hover:text-green-600 transition duration-200 text-sm uppercase font-bold">Asset
                    tracking</a> -->
            </nav>
            <a href="#"
                class="block px-4 py-3 lg:absolute lg:right-0 border text-center font-semibold text-sm leading-none border-gray-700 hover:bg-gray-900 hover:text-white rounded-sm transition duration-300">Demandez
                une démo</a>
        </div>
    </div>

    <ul class="w-full absolute uppercase py-2 px-10 bg-white space-x-6 text-sm font-bold items-center list-none"
        id="link1Drop">
        <li class="montserrat font-extrabold leading-none text-xl me-10">nos<br>solutions</li>
        <li class="hover:text-green-600 transition duration-200 "><a href="">Plug&Trace</a></li>
        <li class="hover:text-green-600 transition duration-200"><a href="">Toutes nos solutions</a></li>
    </ul>

    <div class="w-full absolute uppercase py-2 px-10 bg-white flex items-center text-sm font-bold" id="link2Drop">
        <div class="montserrat font-extrabold leading-none text-xl me-10">secteurs<br>d'activité</div>
        <div class="space-x-6 leading-[2]">
            <span class="hover:text-green-600 transition duration-200"><a href="Gestion-de-flotte-dentreprise">Flottes d'Entreprise</a></span>
            <span class="hover:text-green-600 transition duration-200"><a href="Gestion-de-flotte-pour-btp-et-chantiers">btp / construction</a></span>
            <span class="hover:text-green-600 transition duration-200"><a href="Gestion-de-flotte-pour-transport-et-logistique">Transport / logistique</a></span>
            <span class="hover:text-green-600 transition duration-200"><a href="Gestion-de-flotte-pour-leasers-et-location-de-voiture">location / leasing</a></span>
            <span class="hover:text-green-600 transition duration-200"><a href="Gestion-de-flotte-pour-taxis-et-vtc">taxis / vtc</a></span>
            <span class="hover:text-green-600 transition duration-200"><a href="Gestion-de-flotte-pour-transport-de-passagers">transport de passagers</a></span>
            <span class="hover:text-green-600 transition duration-200"><a href="Gestion-de-flotte-pour-services-et-maintenance">services / maintenance</a></span>
        </div>
    </div>

    <ul class="w-full absolute bg-white hidden px-3 space-y-5 uppercase pb-5 mobile-nav">
        <li class="font-extrabold"></li>
        <li class="hover:text-green-600 transition duration-200 font-bold"><a href="{{ url('/') }}">Accueil</a></li>
        <li class="hover:text-green-600 transition duration-200 font-bold solution-trigger cursor-pointer">Solutions
        </li>
        <li class="hover:text-green-600 transition duration-200 font-bold hidden text-sm ml-5 solution"><a
                href="">Plug&Trace</a></li>
        <li class="hover:text-green-600 transition duration-200 font-bold hidden text-sm ml-5 solution"><a
                href="">Toutes nos solutions</a></li>
        <li class="hover:text-green-600 transition duration-200 font-bold secteur-trigger cursor-pointer"><a
               >Secteurs d'activité</a></li>
        <li class="hover:text-green-600 transition duration-200 font-bold hidden text-sm ml-5 secteur"><a
                href="Gestion-de-flotte-dentreprise">Flottes d'Entreprise</a></li>
        <li class="hover:text-green-600 transition duration-200 font-bold hidden text-sm ml-5 secteur"><a href="Gestion-de-flotte-pour-btp-et-chantiers">btp /
                construction</a></li>
        <li class="hover:text-green-600 transition duration-200 font-bold hidden text-sm ml-5 secteur"><a
                href="Gestion-de-flotte-pour-transport-et-logistique">Transport / logistique</a></li>
        <li class="hover:text-green-600 transition duration-200 font-bold hidden text-sm ml-5 secteur"><a
                href="Gestion-de-flotte-pour-leasers-et-location-de-voiture">location / leasing</a></li>
        <li class="hover:text-green-600 transition duration-200 font-bold hidden text-sm ml-5 secteur"><a href="Gestion-de-flotte-pour-taxis-et-vtc">taxis
                / vtc</a></li>
        <li class="hover:text-green-600 transition duration-200 font-bold hidden text-sm ml-5 secteur"><a
                href="Gestion-de-flotte-pour-transport-de-passagers">transport de passagers</a></li>
        <li class="hover:text-green-600 transition duration-200 font-bold hidden text-sm ml-5 secteur"><a
                href="Gestion-de-flotte-pour-services-et-maintenance">services / maintenance</a></li>
        <!-- <li class="hover:text-green-600 transition duration-200 font-bold"><a href="">Asset tracking</a></li> -->
    </ul>


</header>