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

class RequestRepository extends RepositoryBase\RequestRepositoryBase
{
	public function __construct($pdo, $lang)
	{
		parent::__construct($pdo, $lang);
	}

	public function add($properties)
	{
		$array = array(
			'isCompany' => $properties["isCompany"],
			'phoneNumber' => $properties["phoneNumber"],
			'email' => $properties["email"],
			'fromCompany' => $properties["fromCompany"],
			'message' => $properties["message"],
			'creationDate' => $properties["creationDate"]
		);

		if (isset($properties["id_User"]) && !empty($properties["id_User"]))
			$array['id_User'] = $properties["id_User"];
		if (isset($properties["companyName"]) && !empty($properties["companyName"]))
			$array['companyName'] = $properties["companyName"];
		if (isset($properties["companySiret"]) && !empty($properties["companySiret"]))
			$array['companySiret'] = $properties["companySiret"];
		if (isset($properties["firstname"]) && !empty($properties["firstname"]))
			$array['firstname'] = $properties["firstname"];
		if (isset($properties["lastname"]) && !empty($properties["lastname"]))
			$array['lastname'] = $properties["lastname"];
		if (isset($properties["eventDate"]) && !empty($properties["eventDate"]))
			$array['eventDate'] = $properties["eventDate"];
		if (isset($properties["eventTime"]) && !empty($properties["eventTime"]))
			$array['eventTime'] = $properties["eventTime"];
		if (isset($properties["people"]) && !empty($properties["people"]))
			$array['people'] = $properties["people"];
		try {
			$query = $this->_queryBuilder->insert("request", $array)->getQuery();
			return $this->_pdo->Query($query);
		} catch (PDOException $e) {
			print $e->getMessage();
		}
		return array();
	}
}
