<?php 
	/**********************************************************
	 **** File generated by fitzlucassen\DALGenerator tool ****
	 * All right reserved to fitzlucassen repository on github*
	 ************* https://github.com/fitzlucassen ************
	 **********************************************************/
	namespace fitzlucassen\FLFramework\Data\Entity;

	use fitzlucassen\FLFramework\Library\Core;
	use fitzlucassen\FLFramework\Data\Base\Entity as EntityBase;

	class Requestcart extends EntityBase\RequestcartBase {
		public function __construct($id = '', $id_Request = '', $id_Menu = '', $id_Meal = '', $quantity = ''){
			parent::__construct($id, $id_Request, $id_Menu, $id_Meal, $quantity);
		}

	}