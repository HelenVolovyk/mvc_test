<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2cc2709f6c9079702b7810b5e454e5bf
{
    public static $prefixLengthsPsr4 = array (
        'V' => 
        array (
            'View\\' => 5,
        ),
        'S' => 
        array (
            'Session\\' => 8,
            'Service\\' => 8,
        ),
        'R' => 
        array (
            'Router\\' => 7,
        ),
        'M' => 
        array (
            'Models\\' => 7,
        ),
        'H' => 
        array (
            'Helpers\\' => 8,
        ),
        'F' => 
        array (
            'Framework\\' => 10,
        ),
        'D' => 
        array (
            'Database\\' => 9,
        ),
        'C' => 
        array (
            'Core\\' => 5,
            'Controllers\\' => 12,
            'Config\\' => 7,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'View\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App/View',
        ),
        'Session\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Framework/Session',
        ),
        'Service\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App/Service',
        ),
        'Router\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Framework/Router',
        ),
        'Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App/Models',
        ),
        'Helpers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Framework/Helpers',
        ),
        'Framework\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Framework',
        ),
        'Database\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Framework/Database',
        ),
        'Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Framework/Core',
        ),
        'Controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App/Controllers',
        ),
        'Config\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Config',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'App\\Controllers\\ErrorController' => __DIR__ . '/../..' . '/App/Controllers/ErrorController.php',
        'App\\Controllers\\HomeController' => __DIR__ . '/../..' . '/App/Controllers/HomeController.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Framework\\Core\\AbsController' => __DIR__ . '/../..' . '/Framework/Core/AbsController.php',
        'Framework\\Core\\Common\\Exception\\BadRouteException' => __DIR__ . '/../..' . '/Framework/Core/Common/Exception/BadRouteException.php',
        'Framework\\Core\\View' => __DIR__ . '/../..' . '/Framework/Core/View.php',
        'Framework\\Router\\Router' => __DIR__ . '/../..' . '/Framework/Router/Router.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2cc2709f6c9079702b7810b5e454e5bf::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2cc2709f6c9079702b7810b5e454e5bf::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2cc2709f6c9079702b7810b5e454e5bf::$classMap;

        }, null, ClassLoader::class);
    }
}
