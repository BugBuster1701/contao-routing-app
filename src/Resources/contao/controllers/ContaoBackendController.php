<?php

/**
 * @copyright  Glen Langer 2018 <http://contao.ninja>
 * @author     Glen Langer (BugBuster)
 * @license    LGPL-3.0+
 */

namespace BugBuster\Routingapp;

use Symfony\Component\HttpFoundation\Response;


/**
 * Back end 
 *
 * @author     Glen Langer (BugBuster)
 */
class ContaoBackendController extends \Backend
{

	/**
	 * Initialize the controller
	 *
	 * 1. Import the user
	 * 2. Call the parent constructor
	 * 3. Authenticate the user
	 * 4. Load the language files
	 * DO NOT CHANGE THIS ORDER!
	 */
	public function __construct()
	{
		$this->import('BackendUser', 'User');
		parent::__construct();

		$this->User->authenticate();

		\System::loadLanguageFile('default');

	}


	/**
	 * Run the controller and parse the template
	 *
	 * @return Response
	 */
	public function run()
	{
		/** @var BackendTemplate|object $objTemplate */
		$objTemplate = new \BackendTemplate('be_wildcard');
		$objTemplate->wildcard = '### ContaoBackendController ###';
		$objTemplate->title    = $this->headline;
		$objTemplate->id       = $this->id;

		return $objTemplate->getResponse(); // compile and new Response()...
	}
}
