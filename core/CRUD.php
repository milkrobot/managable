<?php

class managable_Crud {
	
	public static function allFields(){
		static $c;
		if($c) return $c;
		
		$f = create_function('$class', 'return get_class_vars($class);');
		$r = $f(get_called_class());
		
		$c = $r;
		return $r;
	}
	
	public static function findFieldsWithFlags($flags){
		static $c;
		if($c) return $c;
		
		$r = array_filter(
			static::allFields(),
			create_function(
				'$v',
				'return (strpos($v,"|'.implode('|")!==false && strpos($v,"|',$flags).'|")!==false)';
			)
		);
		
		$c = $r;
		return $r;
		
	}
	
	
}
