<?php

// Generated by Haxe 3.3.0
class haxe_macro_ClassKind extends Enum {
	public static function KAbstractImpl($a) { return new haxe_macro_ClassKind("KAbstractImpl", 7, array($a)); }
	public static function KExpr($expr) { return new haxe_macro_ClassKind("KExpr", 3, array($expr)); }
	public static function KExtension($cl, $params) { return new haxe_macro_ClassKind("KExtension", 2, array($cl, $params)); }
	public static $KGeneric;
	public static $KGenericBuild;
	public static function KGenericInstance($cl, $params) { return new haxe_macro_ClassKind("KGenericInstance", 5, array($cl, $params)); }
	public static $KMacroType;
	public static $KNormal;
	public static function KTypeParameter($constraints) { return new haxe_macro_ClassKind("KTypeParameter", 1, array($constraints)); }
	public static $__constructors = array(7 => 'KAbstractImpl', 3 => 'KExpr', 2 => 'KExtension', 4 => 'KGeneric', 8 => 'KGenericBuild', 5 => 'KGenericInstance', 6 => 'KMacroType', 0 => 'KNormal', 1 => 'KTypeParameter');
	}
haxe_macro_ClassKind::$KGeneric = new haxe_macro_ClassKind("KGeneric", 4);
haxe_macro_ClassKind::$KGenericBuild = new haxe_macro_ClassKind("KGenericBuild", 8);
haxe_macro_ClassKind::$KMacroType = new haxe_macro_ClassKind("KMacroType", 6);
haxe_macro_ClassKind::$KNormal = new haxe_macro_ClassKind("KNormal", 0);