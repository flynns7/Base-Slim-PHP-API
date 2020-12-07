<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita089236b27673ba23a93c2e193b46ae0
{
    public static $files = array (
        '253c157292f75eb38082b5acb06f3f01' => __DIR__ . '/..' . '/nikic/fast-route/src/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Slim\\' => 5,
        ),
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
            'Psr\\Container\\' => 14,
        ),
        'H' => 
        array (
            'HaydenPierce\\ClassFinder\\UnitTest\\' => 34,
            'HaydenPierce\\ClassFinder\\' => 25,
        ),
        'F' => 
        array (
            'FastRoute\\' => 10,
        ),
        'B' => 
        array (
            'Buki\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Slim\\' => 
        array (
            0 => __DIR__ . '/..' . '/slim/slim/Slim',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'HaydenPierce\\ClassFinder\\UnitTest\\' => 
        array (
            0 => __DIR__ . '/..' . '/haydenpierce/class-finder/test/unit',
        ),
        'HaydenPierce\\ClassFinder\\' => 
        array (
            0 => __DIR__ . '/..' . '/haydenpierce/class-finder/src',
        ),
        'FastRoute\\' => 
        array (
            0 => __DIR__ . '/..' . '/nikic/fast-route/src',
        ),
        'Buki\\' => 
        array (
            0 => __DIR__ . '/..' . '/izniburak/pdox/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'Pimple' => 
            array (
                0 => __DIR__ . '/..' . '/pimple/pimple/src',
            ),
        ),
    );

    public static $classMap = array (
        'Core\\Base\\App' => __DIR__ . '/../..' . '/core/base/App.php',
        'Core\\Base\\BaseRoutes' => __DIR__ . '/../..' . '/core/base/BaseRoutes.php',
        'ExampleModel' => __DIR__ . '/../..' . '/apps/features/example/ExampleModel.php',
        'Features\\Auth\\AuthRoutes' => __DIR__ . '/../..' . '/apps/features/auth/AuthRoutes.php',
        'Features\\Example\\ExampleController' => __DIR__ . '/../..' . '/apps/features/example/ExampleController.php',
        'Features\\Example\\ExampleRoutes' => __DIR__ . '/../..' . '/apps/features/example/ExampleRoutes.php',
        'Middleware\\AppHook' => __DIR__ . '/../..' . '/apps/middleware/AppHook.php',
        'Middleware\\AppMiddleware' => __DIR__ . '/../..' . '/apps/middleware/AppMiddleware.php',
        'RouteRegister' => __DIR__ . '/../..' . '/core/base/RouteRegister.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita089236b27673ba23a93c2e193b46ae0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita089236b27673ba23a93c2e193b46ae0::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInita089236b27673ba23a93c2e193b46ae0::$prefixesPsr0;
            $loader->classMap = ComposerStaticInita089236b27673ba23a93c2e193b46ae0::$classMap;

        }, null, ClassLoader::class);
    }
}