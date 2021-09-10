<?php

/**
 * Funzione che verifica l'url path situato nella request
 */
if(!function_exists('requestRouteIs')){
    function requestRouteIs(string $url) :bool {
        $route = parse_url($url, PHP_URL_PATH);
        $route = substr($route, 1);
        if( !request()->is("$route*") ){
            return false;
        }
        return true;
    }
}