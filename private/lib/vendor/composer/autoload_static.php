<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit22d0d44705cf6c89323ea5c034be06cf
{
    public static $classMap = array (
        'ComposerAutoloaderInit22d0d44705cf6c89323ea5c034be06cf' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInit22d0d44705cf6c89323ea5c034be06cf' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'app\\app' => __DIR__ . '/../../../..' . '/private/app/app.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit22d0d44705cf6c89323ea5c034be06cf::$classMap;

        }, null, ClassLoader::class);
    }
}
