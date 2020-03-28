<?php 
	/**********************************************************
	 **** File generated by fitzlucassen\DALGenerator tool ****
	 * All right reserved to fitzlucassen repository on github*
	 ************* https://github.com/fitzlucassen ************
	 **********************************************************/
	namespace fitzlucassen\FLFramework\Data\Repository;

	use fitzlucassen\FLFramework\Library\Core;
	use fitzlucassen\FLFramework\Data\Entity;
	use fitzlucassen\FLFramework\Data\Base\Entity as EntityBase;
	use fitzlucassen\FLFramework\Data\Base\Repository as RepositoryBase;

	class CocktailcocktailmenuRepository extends RepositoryBase\CocktailcocktailmenuRepositoryBase {
		public function __construct($pdo, $lang) {
			parent::__construct($pdo, $lang);
		}
		public function add($properties) {
			$array = array('id_Category' => $properties["id_Category"], 'name' => $properties["name"], 'creationDate' => $properties["creationDate"]);
			if(isset($properties["price"]) && !empty($properties["price"]))
				$array["price"] = $properties["price"];

			$query = $this->_queryBuilder->insert("cocktailcocktailmenu", $array)->getQuery();

			try {
				return $this->_pdo->Query($query);
			}
			catch(PDOException $e){
				print $e->getMessage();
			}
			return array();
		}
	}
