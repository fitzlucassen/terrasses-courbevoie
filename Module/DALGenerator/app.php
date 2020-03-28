<?php
	namespace fitzlucassen\FLFramework\Module\DalGenerator;

	use fitzlucassen\FLFramework\Module\DalGenerator\Library as DAL;
	use fitzlucassen\FLFramework\Library\Core;

	require_once '../../Library/Core/Sql.php';
	require_once 'library/Config.php';
	require_once 'library/FileManager.php';
	require_once 'library/Utilities.php';

	$Config = new DAL\Config();
	$fm = DAL\FileManager::getInstance();

	if(PHP_SAPI == "cli"){
		$Config->setDB($argv[1]);		// database
		$Config->setHOST($argv[2]);		// database host
		$Config->setUSER($argv[3]);		// user name
		$Config->setPWD($argv[4]);		// password
		$Config->setPATHENTITIES($argv[5]);	// The path where entities will be created
		$Config->setPATHREPOSITORIES($argv[6]);	// The path where repositories will be created
	}
	else {
		/*************************
		* PUT YOUR CONFIGS HERE *
		*************************/
		$Config->setDB("cocktailcocktail");					    // database
		$Config->setHOST("localhost");					    // database host
		$Config->setUSER("root");					        // user name
		$Config->setPWD("");						        // password
		$Config->setPATH("C:/Users/famil/Documents/thibault/projects/cocktail-cocktail-admin/Data/");			// The path where entities and repositories will be created
		
		// If there is some links into your tables, you have to precise these right here.
		// 
		// Example: you will have "getSongs" method into the "album" class, and you'll have "getALbum" instead of "getAlbumId" into "song" class
		$Config->setLink(array(
			'routeurl' => array('rewrittingurl' => 'OneToMany'),
			'rewrittingurl' => array('routeurl' => 'OneToOne'),
		));
		/*******
		* END *
		*******/
	}

	Core\Sql::setDb($Config->getDB());
	Core\Sql::setHost($Config->getHOST());
	Core\Sql::setUser($Config->getUSER());
	Core\Sql::setPwd($Config->getPWD());
	$Connexion = new Core\Sql();

	// The last argument is the array of all attributs you want to add into your classes
	$Utilities = new DAL\Utilities($Connexion, array("_pdoHelper", "_queryBuilder"), $Config->getHOST());
	// The argument is an array of which table you want to ignore
	$master_array = $Utilities->getTablesArray(array('lang', 'header', 'routeurl', 'rewrittingurl'));

	$Utilities->createClasses($Config->getPATH(), $Config->getLink());

	if(defined('STDIN')){
		exit(0);
	}

	echo "<h1>Les classes ont &eacute;t&eacute; g&eacute;n&eacute;r&eacute;es avec succ&egrave;s !</h1>";