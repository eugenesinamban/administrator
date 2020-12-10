<?php

if (!function_exists('imageUrl')) {
    /** 
     * asset wrapper for kv images
     * @param string $section
     * @param string $path
     * @param string $ext
     */
    function imageUrl($url)
    {
        $googleUrl = env("GOOGLE_CLOUD_STORAGE_URI");
        $imagePath = $googleUrl . $url;
        return $imagePath;
    }
}