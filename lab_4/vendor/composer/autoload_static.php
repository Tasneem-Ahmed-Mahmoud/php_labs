<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit622e619d9f63f253bddb52dc0c5122b6
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Db' => __DIR__ . '/../..' . '/Models/Db.php',
        'DbHandler' => __DIR__ . '/../..' . '/Models/Db.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit622e619d9f63f253bddb52dc0c5122b6::$classMap;

        }, null, ClassLoader::class);
    }
}
