<?php

use Illuminate\Support\Facades\Route;

// Route principale - Accueil
Route::get('/', function () {
    return view('accueil');
});

// Route Secteurs d'activité - page principale
Route::get('/Secteur-dactivite', function () {
    return view('secteur_activite.secteur_activite');
});

// Routes pour les secteurs d'activité spécifiques
Route::get('/Gestion-de-flotte-dentreprise', function () {
    return view('secteur_activite.flotte_entreprise');
});

Route::get('/Gestion-de-flotte-pour-btp-et-chantiers', function () {
    return view('secteur_activite.btp_construction');
});

Route::get('/Gestion-de-flotte-pour-transport-et-logistique', function () {
    return view('secteur_activite.transport_logistique');
});

Route::get('/Gestion-de-flotte-pour-leasers-et-location-de-voiture', function () {
    return view('secteur_activite.location_leasing');
});

Route::get('/Gestion-de-flotte-pour-taxis-et-vtc', function () {
    return view('secteur_activite.taxis_vtc');
});

Route::get('/Gestion-de-flotte-pour-transport-de-passagers', function () {
    return view('secteur_activite.transport_passagers');
});

Route::get('/Gestion-de-flotte-pour-services-et-maintenance', function () {
    return view('secteur_activite.services_ maintenance');
});




