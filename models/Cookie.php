<?php

function getCookie($name)
{
    if (!isset($_COOKIE[$name])) {
        return null;
    }
    return $_COOKIE[$name];
}

function saveCookie($name, $value)
{
    setcookie($name, $value, time() + (30 * 24 * 60 * 60), "/");
}

function deleteCookie($name) 
{
    setcookie($name, '', time() - 3600, '/');
}

function getCookieArray($name)
{
    $cookie = getCookie($name);
    if ($cookie != null) {
        return json_decode($cookie, true);
    }

    return array();
}

function storeArrayInCookie($name, $array)
{
    $json_array = json_encode($array);
    saveCookie($name, $json_array);
}
