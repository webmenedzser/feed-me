<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit93f828fc4ab5549a64496e06451965cd
{
    public static $files = array (
        '948ad5488880985ff1c06721a4e447fe' => __DIR__ . '/..' . '/cakephp/utility/bootstrap.php',
        'b45b351e6b6f7487d819961fef2fda77' => __DIR__ . '/..' . '/jakeasmith/http_build_url/src/http_build_url.php',
    );

    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Cake\\Utility\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Cake\\Utility\\' => 
        array (
            0 => __DIR__ . '/..' . '/cakephp/utility',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit93f828fc4ab5549a64496e06451965cd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit93f828fc4ab5549a64496e06451965cd::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
