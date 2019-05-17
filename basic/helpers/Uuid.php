<?php
/**
 * User: Virtice <synd13@yandex.ru>
 * Date: 17.05.2019
 * Time: 19:51
 */

namespace app\helpers;


class Uuid
{
    /**
     * schema 8-4-4-4-12
     */
    public static function generate()
    {
        $bin = openssl_random_pseudo_bytes(16);
        $hex = bin2hex($bin);
        $uuid = preg_replace('/^(\w{8})(\w{4})(\w{4})(\w{4})(\w{12})$/', '$1-$2-$3-$4-$5', $hex);

        return $uuid;
    }
}