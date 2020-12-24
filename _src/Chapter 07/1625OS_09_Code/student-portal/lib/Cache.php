<?php

class Cache{
	public $_cache;

	public function __construct(){
		$this->_cache = new Memcached();
		$this->_cache->addServer('localhost',11211);
	}

	public function set($key, $value, $expires=600){
		return $this->_cache->set($key, $value, $expires);
	}

	public function get($key){
		return $this->_cache->get($key);
	}
	
}

