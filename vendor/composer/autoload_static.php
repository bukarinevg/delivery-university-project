<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3dd854396a1506211634e4fcfece5d93
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'api\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'api\\' => 
        array (
            0 => __DIR__ . '/../..' . '/api',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3dd854396a1506211634e4fcfece5d93::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3dd854396a1506211634e4fcfece5d93::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
