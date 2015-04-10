<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
if (!function_exists('css_url')) {

    function css_url($nom) {
        return base_url() . 'assets/css/' . $nom . '.css';
    }

}
if (!function_exists('js_url')) {

    function js_url($nom) {
        return base_url() . 'assets/javascript/' . $nom . '.js';
    }

}
if (!function_exists('img_url')) {

    function img_url($nom) {
        return base_url() . 'assets/images/' . $nom;
    }

}
if (!function_exists('img')) {

    function img($nom, $alt = '') {
        return '<img src="' . img_url($nom) . '" alt="' . $alt . '" />';
    }

}

//Debut bootstrap

if (!function_exists('bootstrapcss_url')) {

    function bootstrapcss_url($nom) {
        return base_url() . 'assets/bootstrap-2.3.2/docs/assets/css/' . $nom . '.css';
    }

}
if (!function_exists('bootstrapjs_url')) {

    function bootstrapjs_url($nom) {
        return base_url() . 'assets/bootstrap-2.3.2/docs/assets/js/' . $nom . '.js';
    }

}

if (!function_exists('bootstrapimg_url')) {

    function bootstrapimg_url($nom) {
        return base_url() . 'assets/bootstrap-2.3.2/docs/assets/img/' . $nom;
    }

}

if (!function_exists('bootstrapimg')) {

    function bootstrapimg($nom, $alt = '') {
        return '<img src="' . bootstrapimg_url($nom) . '" alt="' . $alt . '" />';
    }

}
