    <!-- CTA Section -->
    <section class="py-4 bg-slate-800">
        <div class="container mx-auto px-4 xl:px-32">
            <div class="flex flex-col lg:gap-10 lg:flex-row lg:justify-center lg:items-center">
                <div class="text-white lg:w-3/5">
                    <h2 class="text-lg lg:text-2xl uppercase montserrat font-bold">Prêt à digitaliser votre flotte ?</h2>
                    <p class="lg:text-xl text-gray-200">Découvrez comment MobilisTrack peut transformer votre gestion de flotte</p>
                </div>
                <div class="lg:w-2/5 space-x-6 lg:flex justify-end items-center mt-2 lg:mt-0"> 
                    <a href="#" class="lg:text-lg border  inline-block text-white border-white hover:bg-gray-100 hover:text-zinc-800 px-4 py-2 rounded font-semibold transition duration-300 leading-none mb-2 lg:mb-0">Contactez-nous</a>
                    <a href="#" class="lg:text-lg bg-white inline-block text-zinc-800 hover:bg-gray-100 px-4 py-2 rounded font-semibold transition duration-300 leading-none">Demander une démo</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="py-20">
        <div class="container mx-auto px-4">
            <div class="grid sm:grid-cols-2 md:grid-cols-4 border-gray-800 gap-4">
                <div class="text-zinc-800  flex flex-col items-center">
                    <img src="{{ asset('img/logo-ceges.png') }}" class="h-40 object-cover mb-2" />

                </div>
                <div class="text-zinc-800 flex flex-col items-center">
                    <img src="{{ asset('img/logo-dkrservices.jpg') }}" class="h-40 object-cover mb-2" />

                </div>
                <div class="text-zinc-800 flex flex-col items-center">
                    <img src="{{ asset('img/sa1.jpg') }}" class="h-40 object-cover mb-2" />
                    <h3 class="uppercase montserrat font-semibold">Partenaire</h3>
                    <p>Temoignage de client</p>
                </div>
                <div class="text-zinc-800 flex flex-col items-center">
                    <img src="{{ asset('img/sa1.jpg') }}" class="h-40 object-cover mb-2" />
                    <h3 class="uppercase montserrat font-semibold">Partenaire</h3>
                    <p>Temoignage de client</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->:
    <footer class="bg-slate-800 text-gray-400 pt-16 pb-8">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-10 md:gap-16 mb-12">
                <div class="col-span-1">
                    <img src="{{ asset('img/logo_MobilisTrack.png') }}" alt="MobilisTrack Logo" class="h-20 rounded mb-6">
                    <p class="mb-4">La solution innovante pour la digitalisation des processus de suivi de chantier.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white transition"><i class="fab fa-linkedin-in text-xl"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white transition"><i class="fab fa-twitter text-xl"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white transition"><i class="fab fa-facebook-f text-xl"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white transition"><i class="fab fa-youtube text-xl"></i></a>
                    </div>
                </div>
                
                <div>
                    <h3 class="text-white font-semibold mb-6 text-lg">Solutions</h3>
                    <ul class="space-y-3">
                        <li><a href="#" class="hover:text-white transition">Suivi de chantier</a></li>
                        <li><a href="#" class="hover:text-white transition">Gestion des équipes</a></li>
                        <li><a href="#" class="hover:text-white transition">Planification</a></li>
                        <li><a href="#" class="hover:text-white transition">Documentation</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-white font-semibold mb-6 text-lg">Entreprise</h3>
                    <ul class="space-y-3">
                        <li><a href="#" class="hover:text-white transition">À propos</a></li>
                        <li><a href="#" class="hover:text-white transition">Carrières</a></li>
                        <li><a href="#" class="hover:text-white transition">Blog</a></li>
                        <li><a href="#" class="hover:text-white transition">Presse</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-white font-semibold mb-6 text-lg">Contact</h3>
                    <ul class="space-y-3">
                        <li>15 rue de la Fontaine</li>
                        <li>75016 Paris</li>
                        <li>contact@MobilisTrack.fr</li>
                        <li>01 23 45 67 89</li>
                    </ul>
                </div>
            </div>
            
            <div class="pt-8 border-t border-gray-800 flex flex-col md:flex-row justify-between items-center">
                <div class="mb-4 md:mb-0">
                    <p>&copy; 2023 MobilisTrack. Tous droits réservés.</p>
                </div>
                <div class="flex flex-wrap justify-center gap-4">
                    <a href="#" class="hover:text-white transition">Mentions légales</a>
                    <a href="#" class="hover:text-white transition">Politique de confidentialité</a>
                    <a href="#" class="hover:text-white transition">CGU</a>
                    <a href="#" class="hover:text-white transition">Cookies</a>
                </div>
            </div>
        </div>
    </footer>