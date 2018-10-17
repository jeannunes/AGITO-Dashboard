<?php
/**
 * Created by PhpStorm.
 * User: Jean Nunes
 * Date: 10/17/2018
 * Time: 7:18 PM
 */

namespace App\Cache\Engine;

use Cake\Cache\CacheEngine;

class MemcacheEngine extends CacheEngine
{

    private $Memcache;

    public function init(array $config = [])
    {
        $this->Memcache = new \Memcache;
        $this->Memcache->connect('localhost', 11211) or die ("Could not connect");
        return parent::init($config);
    }

    /**
     * Write value for a key into cache
     *
     * @param string $key Identifier for the data
     * @param mixed $value Data to be cached
     * @return bool True if the data was successfully cached, false on failure
     */
    public function write($key, $value)
    {
        $this->Memcache->set($key, $value);
    }

    /**
     * Read a key from the cache
     *
     * @param string $key Identifier for the data
     * @return mixed The cached data, or false if the data doesn't exist, has expired, or if there was an error fetching it
     */
    public function read($key)
    {
        return $this->Memcache->get($key);
    }

    /**
     * Increment a number under the key and return incremented value
     *
     * @param string $key Identifier for the data
     * @param int $offset How much to add
     * @return bool|int New incremented value, false otherwise
     */
    public function increment($key, $offset = 1)
    {
        $value = $this->read($key);
        if (!is_numeric($value))
            return false;
        $value += $offset;
        $this->write($key, $value);
        return $value;
    }

    /**
     * Decrement a number under the key and return decremented value
     *
     * @param string $key Identifier for the data
     * @param int $offset How much to subtract
     * @return bool|int New incremented value, false otherwise
     */
    public function decrement($key, $offset = 1)
    {
        $value = $this->read($key);
        if (!is_numeric($value))
            return false;
        $value -= $offset;
        $this->write($key, $value);
        return $value;
    }

    /**
     * Delete a key from the cache
     *
     * @param string $key Identifier for the data
     * @return bool True if the value was successfully deleted, false if it didn't exist or couldn't be removed
     */
    public function delete($key)
    {
        $this->Memcache->delete($key);
        return true;
    }

    /**
     * Delete all keys from the cache
     *
     * @param bool $check if true will check expiration, otherwise delete all
     * @return bool True if the cache was successfully cleared, false otherwise
     */
    public function clear($check)
    {
        $this->Memcache->flush();
        return true;
    }
}