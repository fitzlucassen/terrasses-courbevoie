<?php 
	/**********************************************************
	 **** File generated by fitzlucassen\DALGenerator tool ****
	 * All right reserved to fitzlucassen repository on github*
	 ************* https://github.com/fitzlucassen ************
	 **********************************************************/
	namespace fitzlucassen\FLFramework\Data\Base\Entity;

	use fitzlucassen\FLFramework\Library\Core;
	use fitzlucassen\FLFramework\Data\Entity;

	class CocktailcocktailmenuBase  {
		private $_id;
		private $_id_Category;
		private $_name;
		private $_price;
		private $_image_url;
		private $_active;
		private $_creationDate;
		private $_queryBuilder;

		public function __construct($id = '', $id_Category = '', $name = '', $price = '', $image_url = '', $active = '', $creationDate = ''){
			$this->_queryBuilder = new Core\QueryBuilder(true);
			$this->fillObject(array("id" => $id, "id_Category" => $id_Category, "name" => $name, "price" => $price, "image_url" => $image_url, "active" => $active, "creationDate" => $creationDate));
		}

		/***********
		 * GETTERS *
		 ***********/
		public function getId() {
			return $this->_id;
		}
		public function getId_Category() {
			return $this->_id_Category;
		}
		public function getName() {
			return $this->_name;
		}
		public function getPrice() {
			return $this->_price;
		}
		public function getImage_url() {
			return $this->_image_url;
		}
		public function getActive() {
			return $this->_active;
		}
		public function getCreationDate() {
			return $this->_creationDate;
		}
		/*******
		 * END *
		 *******/

		public function fillObject($properties) {
			if(!empty($properties["id"]))
				$this->_id = $properties["id"];
			if(!empty($properties["id_Category"]))
				$this->_id_Category = $properties["id_Category"];
			if(!empty($properties["name"]))
				$this->_name = $properties["name"];
			if(!empty($properties["price"]))
				$this->_price = $properties["price"];
			if(!empty($properties["image_url"]))
				$this->_image_url = $properties["image_url"];
			if(!empty($properties["active"]))
				$this->_active = $properties["active"];
			if(!empty($properties["creationDate"]))
				$this->_creationDate = $properties["creationDate"];
		}
	}
