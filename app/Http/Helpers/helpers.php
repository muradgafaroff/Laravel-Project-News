<?php
if (!function_exists('getTextSubStr')) {
    function getTextSubStr($text)
    {
        if (mb_strwidth($text, 'UTF-8') <= 100) {
            return strip_tags($text);
        }
        return rtrim(mb_strimwidth(strip_tags($text), 0, 100, '', 'UTF-8')) . '...';
    }
}

if (!function_exists('fileUpload')) {
    function fileUpload($file)
    {
        $ext = $file->extension();
        $fileName = rand(1, 100) . time() . '.' . $ext;
        $fileNameWithUpload ='storage/uploads/'. $fileName;
        $file->storeAs('public/uploads', $fileName);

        return $fileNameWithUpload;
    }
}
