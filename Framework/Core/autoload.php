<?php
namespace Framework\Core;

spl_autoload_register(function ($class_name)
{
// Массив папок, в которых могут находиться необходимые классы
$array_paths = array(
'/App\/Models/',
'/App\/Controllers/',
'/App\/Service/',
'/App\/View/',
'/Framework\/Core/',
'/Framework\/Databace/',
'/Framework\/Helper/',
'/Framework\/Router/',
'/Framework\/Session/',
);

// Проходим по массиву папок
foreach ($array_paths as $path) {

// Формируем имя и путь к файлу с классом
$path = ROOT_PATH . $path . $class_name . '.php';

// Если такой файл существует, подключаем его
if (is_file($path)) {
include_once $path;
}
}
});