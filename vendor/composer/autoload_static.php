<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit577bfc1f3e12a11b89bc92aa79ea103f
{
    public static $files = array (
        'bdf151f62a69e3ca51f07e0bd032de74' => __DIR__ . '/../..' . '/src/PDO.class.php',
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit577bfc1f3e12a11b89bc92aa79ea103f::$classMap;

        }, null, ClassLoader::class);
    }
}
