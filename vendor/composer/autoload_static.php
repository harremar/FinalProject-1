<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticIniteb1a0619c97dc056ae46e1ca8dbe09d0
{
    public static $classMap = array (
        'ComposerAutoloaderIniteb1a0619c97dc056ae46e1ca8dbe09d0' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticIniteb1a0619c97dc056ae46e1ca8dbe09d0' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Database' => __DIR__ . '/../..' . '/application/database.class.php',
        'Details' => __DIR__ . '/../..' . '/views/detail/sausage_detail.class.php',
        'Dispatcher' => __DIR__ . '/../..' . '/application/dispatcher.class.php',
        'Login' => __DIR__ . '/../..' . '/views/login.class.php',
        'Sausage' => __DIR__ . '/../..' . '/sausage.class.php',
        'SausageController' => __DIR__ . '/../..' . '/controllers/sausage_controller.class.php',
        'SausageError' => __DIR__ . '/../..' . '/views/error/sausage_error.class.php',
        'SausageModel' => __DIR__ . '/../..' . '/models/sausageModel.class.php',
        'SausageView' => __DIR__ . '/../..' . '/views/index_view.class.php',
        'Search' => __DIR__ . '/../..' . '/views/search.class.php',
        'WelcomeController' => __DIR__ . '/../..' . '/controllers/welcome_controller.class.php',
        'WelcomeIndex' => __DIR__ . '/../..' . '/views/welcome.index.class.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticIniteb1a0619c97dc056ae46e1ca8dbe09d0::$classMap;

        }, null, ClassLoader::class);
    }
}
