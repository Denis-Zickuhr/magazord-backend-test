<?php

namespace App\Utils;

use Exception;

class View
{


    private static function getContentView($view, $data = [])
    {
        $file = "resources/view/" . $view . ".html";

        if (!file_exists($file)) {
            throw new Exception("Arquivo não encontrado!");
        }

        $file_content = file_get_contents($file);

        $keys = array_keys($data);
        $keys = array_map(function ($entry) {
            return '{{' . $entry . '}}';
        }, $keys);

        $file_content = str_replace($keys, array_values($data), $file_content);

        return $file_content;
    }

    public static function render($view, $data = [])
    {
        $contentView = self::getContentView($view, $data);
        return $contentView;
    }
}
