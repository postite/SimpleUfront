<?php

// Generated by Haxe 3.3.0
class ufront_cache_CacheError extends Enum {
	public static function ECacheNotReadable($err) { return new ufront_cache_CacheError("ECacheNotReadable", 2, array($err)); }
	public static function ECacheNotWriteable($err) { return new ufront_cache_CacheError("ECacheNotWriteable", 3, array($err)); }
	public static $ENotInCache;
	public static function EUnableToConnect($err) { return new ufront_cache_CacheError("EUnableToConnect", 1, array($err)); }
	public static $__constructors = array(2 => 'ECacheNotReadable', 3 => 'ECacheNotWriteable', 0 => 'ENotInCache', 1 => 'EUnableToConnect');
	}
ufront_cache_CacheError::$ENotInCache = new ufront_cache_CacheError("ENotInCache", 0);
