<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit52cde012d0a0d512eb939f642908557a
{
    public static $files = array (
        'c7359326b6707d98bdc176bf9ddeaebf' => __DIR__ . '/..' . '/catfan/medoo/medoo.php',
        'fc73bab8d04e21bcdda37ca319c63800' => __DIR__ . '/..' . '/mikecao/flight/flight/autoload.php',
        '5b7d984aab5ae919d3362ad9588977eb' => __DIR__ . '/..' . '/mikecao/flight/flight/Flight.php',
    );

    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
        'U' => 
        array (
            'URL\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
        'URL\\' => 
        array (
            0 => __DIR__ . '/..' . '/glenscott/url-normalizer/src/URL',
        ),
    );

    public static $prefixesPsr0 = array (
        'H' => 
        array (
            'Hashids' => 
            array (
                0 => __DIR__ . '/..' . '/hashids/hashids/lib',
            ),
        ),
        'E' => 
        array (
            'Etechnika\\IdnaConvert' => 
            array (
                0 => __DIR__ . '/..' . '/etechnika/idna-convert/src',
            ),
        ),
    );

    public static $classMap = array (
        'IPSet\\IPSet' => __DIR__ . '/..' . '/wikimedia/ip-set/src/IPSet.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit52cde012d0a0d512eb939f642908557a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit52cde012d0a0d512eb939f642908557a::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit52cde012d0a0d512eb939f642908557a::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit52cde012d0a0d512eb939f642908557a::$classMap;

        }, null, ClassLoader::class);
    }
}