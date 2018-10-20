<?php

class RedisClient
{

    private static $instance;

    protected static $options = [
        'host' => '192.168.10.10',
        'port' => 6379,
        'password' => 'leeong',
        'select' => 0,
        'timeout' => 0,
        'expire' => 0,
        'persistent' => false,
        'prefix' => '',
    ];

    public static function init($options = [])
    {
        if (!extension_loaded('redis')) {
            throw new \BadFunctionCallException('not support: redis');
        }

        if (self::$instance == null) {

            if (!empty($options)) {
                self::$options = array_merge(self::$options, $options);
            }

            self::$instance = new \Redis();

            if (self::$options['persistent']) {
                self::$instance->pconnect(self::$options['host'], self::$options['port'], self::$options['timeout'], 'persistent_id_' . self::$options['select']);
            } else {
                self::$instance->connect(self::$options['host'], self::$options['port'], self::$options['timeout']);
            }
            if ('' != self::$options['password']) {
                self::$instance->auth(self::$options['password']);
            }
            if (0 != self::$options['select']) {
                self::$instance->select(self::$options['select']);
            }
        }

        return self::$instance;
    }

}


$redisCli = RedisClient::init();
$keys = $redisCli->getKeys('*');
print_r($keys);
