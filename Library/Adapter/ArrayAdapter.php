<?php
	/*
		Class : Array
		Déscription : Permet de gérer les Array
	 */
	
	namespace fitzlucassen\FLFramework\Library\Adapter;

	class ArrayAdapter {
		/**
		 * Select -> sélectionne une unique clef parmi un array
		 * @param type $array
		 * @param type $label
		 * @return type
		 */
		public static function select($array, $label, $level) {
			$arrayReturn = array();
			foreach($array as $key => $value){
				if($level == 2){
					foreach($value as $key => $value){
						if($key === $label){
							$arrayReturn[] = $value;
						}
					}
				}
				else {
					if($key === $label){
						$arrayReturn[] = $value;
					}
				}
			}
			
			return $arrayReturn;
		}
		
		public static function order($array){
			sort($array);
			
			return $array;
		}

		public static function orderBy($array, $key, $order = "ASC"){
			if(is_object($array[0]))
				usort($array, function($a, $b) use($key) { 
					$functionA = '$a->get' . ucfirst($key) . '()';
					$functionB = '$b->get' . ucfirst($key) . '()';
					return strcmp($functionA, $functionB);
				});
			else
				usort($array, function($a, $b) use($key) { 
					$functionA = $a[$key];
					$functionB = $b[$key];
					return strcmp($functionA, $functionB);
				});

			if($order == 'DESC')
				$array = array_reverse($array);
			return $array;
		}
		
		public static function distinct($array){
			$a = array();
			
			foreach($array as $temp){
				if(in_array($temp, $a)){
					continue;
				}
				else {
					$a[] = $temp;
				}
			}
			return $a;
		}
	}
