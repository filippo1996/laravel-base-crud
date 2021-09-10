<?php // routes/breadcrumbs.php

use App\Models\Comic;
use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

Breadcrumbs::for('dashboard.index', function (BreadcrumbTrail $trail) {
     $trail->push('Home', route('dashboard.index'));
});

Breadcrumbs::for('comics.index', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard.index');
    $trail->push('Comics', route('comics.index'));
});

Breadcrumbs::for('comics.show', function (BreadcrumbTrail $trail, Comic $comic) {
    $trail->parent('comics.index');
    $trail->push($comic->title, route('comics.show', $comic));
});