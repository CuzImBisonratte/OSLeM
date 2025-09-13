<?php

function loadSnippet($path)
{
    $fullPath = $_SERVER['DOCUMENT_ROOT'] . '/res/snippets/' . $path;
    // Check if html file exists
    if (file_exists($fullPath . '.html')) {
        include $fullPath . '.html';
        return true;
    }
    // Check if php file exists
    if (file_exists($fullPath . '.php')) {
        include $fullPath . '.php';
        return true;
    }
    return false;
}

function loadIcon($name, $class = '')
{
    $fullPath = $_SERVER['DOCUMENT_ROOT'] . '/res/icons/' . $name . '.svg';
    if (file_exists($fullPath)) {
        $svg = file_get_contents($fullPath);
        // Add class to svg
        if ($class !== '') $svg = str_replace('<svg ', '<svg class="' . $class . '" ', $svg);
        echo $svg;
        return true;
    }
    return false;
}

function loadJavascript($name)
{
    $fullPath = $_SERVER['DOCUMENT_ROOT'] . '/res/js/' . $name;
    if (file_exists($fullPath . '.js')) {
        echo '<script src="/res/js/' . $name . '.js"></script>';
        return true;
    }
    return false;
}
