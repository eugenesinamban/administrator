<?php

if (!function_exists('imageUrl')) {
    /** 
     * asset wrapper for images
     * @param string $url
     */
    function imageUrl($url)
    {
        $noImage = "/assets/images/no_image.svg";
        $googleUrl = env("GOOGLE_CLOUD_STORAGE_URI");
        $imagePath = $url ? $googleUrl . $url : $noImage;
        return $imagePath;
    }
}

if (!function_exists('goBack')) {
    /** 
     * back button url reconciliator
     */
    function goBack()
    {
        $route = Route::currentRouteName();
        $type = request()->type;
        $path = '';
        switch ($route) {
            case 'list':
                $path = route('home');
                break;
            case 'add':
            case 'show':
            case 'edit':
                $path = route('list', [$type]);
                break;
            default:
            break;
        }
        return $path;
    }

    if (!function_exists('getSubdomain')) {
        /** 
         * back button url reconciliator
         * @param string $type
         */
        function getSubdomain($type) {
            $host = request()->getHttpHost();
            return $type . '.' . $host;
        }
    }
}