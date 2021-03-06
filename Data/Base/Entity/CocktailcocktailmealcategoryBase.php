<?php 
	/**********************************************************
	 **** File generated by fitzlucassen\DALGenerator tool ****
	 * All right reserved to fitzlucassen repository on github*
	 ************* https://github.com/fitzlucassen ************
	 **********************************************************/
	namespace fitzlucassen\FLFramework\Data\Base\Entity;

	use fitzlucassen\FLFramework\Library\Core;
	use fitzlucassen\FLFramework\Data\Entity;

	class CocktailcocktailmealcategoryBase  {
		private $_id;
		private $_name;
		private $_price;
		private $_queryBuilder;

		public function __construct($id = '', $name = '', $price = ''){
			$this->_queryBuilder = new Core\QueryBuilder(true);
			$this->fillObject(array("id" => $id, "name" => $name, "price" => $price));
		}

		/***********
		 * GETTERS *
		 ***********/
		public function getId() {
			return $this->_id;
		}
		public function getName() {
			return $this->_name;
		}
		public function getPrice() {
			return $this->_price;
		}
		/*******
		 * END *
		 *******/

		public function fillObject($properties) {
			if(!empty($properties["id"]))
				$this->_id = $properties["id"];
			if(!empty($properties["name"]))
				$this->_name = $properties["name"];
			if(!empty($properties["price"]))
				$this->_price = $properties["price"];
		}
	}
