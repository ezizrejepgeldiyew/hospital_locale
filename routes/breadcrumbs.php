<?php // routes/breadcrumbs.php

use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

//Home
Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
     $trail->push('Home', route('index'));
});

//Home > Hospital
Breadcrumbs::for('hospital', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Hassahana', route('hospital.index'));
});

//Home > Hospital > Create
Breadcrumbs::for('hospital-create', function (BreadcrumbTrail $trail) {
    $trail->parent('hospital');
    $trail->push('Gos', route('hospital.create'));
});

//Home > Citizen
Breadcrumbs::for('citizen', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Rayat', route('citizen.index'));
});

//Home > Citizen > Create
Breadcrumbs::for('citizen-create', function (BreadcrumbTrail $trail) {
    $trail->parent('citizen');
    $trail->push('Gos', route('citizen.create'));
});
