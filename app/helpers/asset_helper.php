<?php
if (! function_exists('asset_url')) {

    function asset_url()
    {
        return base_url('assets', null, false) . '/';
    }
}

if (! function_exists('css_url')) {

    function css_url()
    {
        return asset_url() . "css/";
    }
}

if (! function_exists('css_file_url')) {

    function css_file_url($css_file_name)
    {
        return css_url() . $css_file_name . ".css";
    }
}

if (! function_exists('js_url')) {

    function js_url()
    {
        return asset_url() . "js/";
    }
}

if (! function_exists('js_file_url')) {

    function js_file_url($js_file_name)
    {
        return js_url() . $js_file_name . ".js";
    }
}

if (! function_exists('img_url')) {

    function img_url()
    {
        return asset_url() . "pics/";
    }
}

if (! function_exists('img_file_url')) {

    function img_file_url($img_file_name, $img_file_ending = "png")
    {
        return img_url() . $img_file_name . "." . $img_file_ending;
    }
}
