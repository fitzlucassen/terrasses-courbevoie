<?php

namespace fitzlucassen\FLFramework\Website\MVC\Controller;

use fitzlucassen\FLFramework\Website\MVC\Model;
use fitzlucassen\FLFramework\Library\Helper;
use fitzlucassen\FLFramework\Library\Adapter;
use fitzlucassen\FLFramework\Data\Repository;
use fitzlucassen\FLFramework\Data\Repository\LesterrassescategoriesRepository;
use fitzlucassen\FLFramework\Library\Core;

/*
		Class : HomeController
		Déscription : Permet de gérer les actions en relation avec le groupe de page Home
	*/

class HomeController extends Controller
{
	public function __construct($action, $manager)
	{
		parent::__construct("home", $action, $manager);
	}

	public function Index()
	{
		// Une action commencera toujours par l'initilisation de son modèle
		// Cette initialisation doit obligatoirement contenir le repository manager
		$Model = new Model\HomeModel($this->_repositoryManager);
		$Model->_categories = Repository\LesterrassescategoriesRepository::getAll($this->_repositoryManager->getConnection());
		$Model->_meals = Repository\LesterrassesmealRepository::getAll($this->_repositoryManager->getConnection());
		
		$newsRepository = $this->_repositoryManager->get('News');
		$Model->_news = $newsRepository->getLastThreeNews();

		if (Core\Request::isPost() || Core\Request::isPost()) {
			// It's a form validation
			// Clean all vars
			$data = Core\Request::cleanRequest();

			if ((isset($data["companyName"]) && !empty($data["companyName"])) || (isset($data["firstname"]) && !empty($data["firstname"]))) {
				$data["isCompany"] = (int) $data["isCompany"];
				$data["fromCompany"] = "Les-Terrasses-De-Courbevoie";
				$data["creationDate"] = (new \DateTime())->format('Y-m-d H:i:s');
				$data["id_User"] = null;
				$data["eventDate"] = isset($data["eventDate"]) && !empty($data["eventDate"]) ? $data["eventDate"] : null;
				$data["eventTime"] = isset($data["eventTime"]) && !empty($data["eventTime"]) ? $data["eventTime"] : null;
				$data["people"] = isset($data["people"]) && !empty($data["people"]) ? (int) $data["people"] : null;
				$requestRepository = $this->_repositoryManager->get('Request');
				$requestId = $requestRepository->add($data);

				$Email = new Helper\Email();

				// On configure l'email
				$Email->from("contact@lesterrassesdecourbevoie.com")
					->to("contact@lesterrassesdecourbevoie.com")
					->subject("Nouveau message depuis www.lesterrassesdecourbevoie.com")
					->fromName("Les Terrasses De Courbevoie")
					->layout("email")
					->view("default")
					->vars(array(
						"requestId" => $requestId
					));

				// Puis on construit le header et on l'envoi
				$Email->buildHeaders()->send();

				$Model->_message = "Votre message a été envoyé avec succès";
			} else {
				$Model->_message = "Un problème est survenue, veuillez remplir tous les champs correctement";
			}
		}

		// Une action finira toujours par un $this->_view->view contenant : 
		// cette fonction prend en paramètre le modèle
		$this->_view->view($Model);
	}

	public function Legal()
	{
		$Model = new Model\HomeModel($this->_repositoryManager);

		$this->_view->view($Model);
	}
	
	public function About()
	{
		$Model = new Model\HomeModel($this->_repositoryManager);

		$this->_view->view($Model);
	}

	public function Error404()
	{
		$Model = new Model\HomeModel($this->_repositoryManager);

		http_response_code(404);

		$this->_view->view($Model);
	}
}
