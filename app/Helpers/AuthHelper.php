<?php
if (!function_exists('isUserAdmin')) {

    function isUserAdmin()
    {
        $user = auth()->user()->id;
        if ($user) {
            return auth()->user()->hasRole('admin');
        }

        return false;
    }
}



if (!function_exists('isUserWriter')) {
    function isUserWriter()
    {
        $user = auth()->user()->id;
        if ($user) {
            return auth()->user()->hasRole('writer');
        }
        return false;
    }
}

if (!function_exists('isUser')) {
    function isUser()
    {
        $user = auth()->user()->id;
        if ($user) {
            return auth()->user()->hasRole('user');
        }
        return false;
    }
}
