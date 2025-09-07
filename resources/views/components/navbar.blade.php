<ul
    class="px-4 w-full bg-slate-800 text-white sticky top-0 space-x-6 py-1 text-xs sm:text-sm flex justify-end list-none">
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
            <img src="{{ asset('img/logo_mobilistrack.png') }}" alt="Logo mobilistrack" class="h-[75px]">
            <nav class="hidden lg:flex ms-16 items-center space-x-8">
                <a href="{{ url('/') }}"
                    class=" hover:text-orange-600 transition duration-200 text-sm uppercase font-bold">Accueil</a>
                <a href="#" class="py-8 hover:text-orange-600 transition duration-200 text-sm uppercase font-bold"
                    id="link1">Solutions</a>
                <a href="{{ url('/Secteur-dactivite') }}" class="py-8 hover:text-orange-600 transition duration-200 text-sm uppercase font-bold"
                    id="link2">Secteurs d'activité</a>
                <!-- <a href="#" class=" hover:text-orange-600 transition duration-200 text-sm uppercase font-bold">Asset
                    tracking</a> -->
            </nav>
            <a href="#"
                class="block px-4 py-3 lg:absolute lg:right-0 border text-center font-semibold text-sm leading-none border-gray-700 hover:border-0 hover:bg-orange-700 hover:text-white rounded-sm transition duration-300">Demandez
                une démo</a>
        </div>
    </div>

    <ul class="w-full absolute uppercase py-2 px-10 bg-white space-x-6 text-sm font-bold items-center list-none"
        id="link1Drop">
        <li class="montserrat font-extrabold leading-none text-xl me-10">nos<br>solutions</li>
        <li class="hover:text-orange-600 transition duration-200 "><a href="">Plug&Trace</a></li>
        <li class="hover:text-orange-600 transition duration-200"><a href="">Toutes nos solutions</a></li>
    </ul>

    <div class="w-full absolute uppercase py-2 px-10 bg-white flex items-center text-sm font-bold" id="link2Drop">
        <div class="montserrat font-extrabold leading-none text-xl me-10">secteurs<br>d'activité</div>
        <div class="space-x-6 leading-[2]">
            <span class="hover:text-orange-600 transition duration-200"><a href="Gestion-de-flotte-dentreprise">Flottes d'Entreprise</a></span>
            <span class="hover:text-orange-600 transition duration-200"><a href="Gestion-de-flotte-pour-btp-et-chantiers">btp / construction</a></span>
            <span class="hover:text-orange-600 transition duration-200"><a href="Gestion-de-flotte-pour-transport-et-logistique">Transport / logistique</a></span>
            <span class="hover:text-orange-600 transition duration-200"><a href="Gestion-de-flotte-pour-leasers-et-location-de-voiture">location / leasing</a></span>
            <span class="hover:text-orange-600 transition duration-200"><a href="Gestion-de-flotte-pour-taxis-et-vtc">taxis / vtc</a></span>
            <span class="hover:text-orange-600 transition duration-200"><a href="Gestion-de-flotte-pour-transport-de-passagers">transport de passagers</a></span>
            <span class="hover:text-orange-600 transition duration-200"><a href="Gestion-de-flotte-pour-services-et-maintenance">services / maintenance</a></span>
        </div>
    </div>

    <!-- Mobile Sidebar Overlay -->
    <div class="fixed inset-0 bg-black bg-opacity-50 z-40 hidden transition-opacity duration-300 mobile-overlay"></div>
    
    <!-- Mobile Sidebar -->
    <div class="fixed top-0 left-0 h-full w-80 bg-white z-50 transform -translate-x-full transition-transform duration-300 ease-in-out mobile-sidebar shadow-xl">
        <!-- Sidebar Header -->
        <div class="flex justify-between p-4 border-b border-gray-200">
            <img src="{{ asset('img/logo_mobilistrack.png') }}" alt="Logo mobilistrack" class="h-16">
            <button class="text-gray-700 cursor-pointer nav-closer">
                <i class="fa-solid fa-xmark text-3xl"></i>
            </button>
        </div>
        
        <!-- Sidebar Content -->
        <div class="overflow-y-auto h-full pb-20">
            <ul class="px-4 py-6 space-y-4 uppercase">
                <li class="border-b border-gray-100 pb-3">
                    <a href="{{ url('/') }}" class="block py-2 font-bold text-gray-800 hover:text-orange-600 transition duration-200">
                        <i class="fa-solid fa-home mr-3"></i>Accueil
                    </a>
                </li>
                
                <!-- Solutions Section -->
                <li class="border-b border-gray-100 pb-3">
                    <div class="solution-trigger cursor-pointer py-2 font-bold text-gray-800 hover:text-orange-600 transition duration-200 flex items-center justify-between">
                        <span><i class="fa-solid fa-cogs mr-3"></i>Solutions</span>
                        <i class="fa-solid fa-chevron-down text-sm solution-arrow transition-transform duration-200"></i>
                    </div>
                    <ul class="ml-6 mt-2 space-y-2 hidden solution-submenu">
                        <li class="py-1">
                            <a href="" class="text-sm text-gray-600 hover:text-orange-600 transition duration-200 block">
                                Plug&Trace
                            </a>
                        </li>
                        <li class="py-1">
                            <a href="" class="text-sm text-gray-600 hover:text-orange-600 transition duration-200 block">
                                Toutes nos solutions
                            </a>
                        </li>
                    </ul>
                </li>
                
                <!-- Secteurs d'activité Section -->
                <li class="border-b border-gray-100 pb-3">
                    <div class="secteur-trigger cursor-pointer py-2 font-bold text-gray-800 hover:text-orange-600 transition duration-200 flex items-center justify-between">
                        <span><i class="fa-solid fa-industry mr-3"></i>Secteurs d'activité</span>
                        <i class="fa-solid fa-chevron-down text-sm secteur-arrow transition-transform duration-200"></i>
                    </div>
                    <ul class="ml-6 mt-2 space-y-2 hidden secteur-submenu">
                        <li class="py-1">
                            <a href="Gestion-de-flotte-dentreprise" class="text-sm text-gray-600 hover:text-orange-600 transition duration-200 block">
                                Flottes d'Entreprise
                            </a>
                        </li>
                        <li class="py-1">
                            <a href="Gestion-de-flotte-pour-btp-et-chantiers" class="text-sm text-gray-600 hover:text-orange-600 transition duration-200 block">
                                BTP / Construction
                            </a>
                        </li>
                        <li class="py-1">
                            <a href="Gestion-de-flotte-pour-transport-et-logistique" class="text-sm text-gray-600 hover:text-orange-600 transition duration-200 block">
                                Transport / Logistique
                            </a>
                        </li>
                        <li class="py-1">
                            <a href="Gestion-de-flotte-pour-leasers-et-location-de-voiture" class="text-sm text-gray-600 hover:text-orange-600 transition duration-200 block">
                                Location / Leasing
                            </a>
                        </li>
                        <li class="py-1">
                            <a href="Gestion-de-flotte-pour-taxis-et-vtc" class="text-sm text-gray-600 hover:text-orange-600 transition duration-200 block">
                                Taxis / VTC
                            </a>
                        </li>
                        <li class="py-1">
                            <a href="Gestion-de-flotte-pour-transport-de-passagers" class="text-sm text-gray-600 hover:text-orange-600 transition duration-200 block">
                                Transport de Passagers
                            </a>
                        </li>
                        <li class="py-1">
                            <a href="Gestion-de-flotte-pour-services-et-maintenance" class="text-sm text-gray-600 hover:text-orange-600 transition duration-200 block">
                                Services / Maintenance
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            
            <!-- Bottom Section -->
            <div class="px-4 mt-8 space-y-4">
                <a href="#" class="block w-full px-4 py-3 text-center font-semibold text-sm border-2 hover:bg-black hover:text-white transition duration-300">
                    Demandez une démo
                </a>
                
                <div class="pt-4 border-t border-gray-200">
                    <div class="space-y-2 text-sm text-gray-600">
                        <div class="flex items-center">
                            <i class="fa-solid fa-phone mr-2"></i>
                            <span>77 654 87 87</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fa-solid fa-envelope mr-2"></i>
                            <span>Contact</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fa-solid fa-info-circle mr-2"></i>
                            <span>À propos</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fa-solid fa-user mr-2"></i>
                            <span>Connexion clients</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</header>