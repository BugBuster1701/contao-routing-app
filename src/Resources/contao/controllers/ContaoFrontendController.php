<?php

/**
 * @copyright  Glen Langer 2017 <http://contao.ninja>
 * @author     Glen Langer (BugBuster)
 * @license    LGPL-3.0+
  */

namespace BugBuster\Routingapp;

use Symfony\Component\HttpFoundation\Response;
//use Psr\Log\LogLevel;
//use Contao\CoreBundle\Monolog\ContaoContext;

/**
 * Front end 
 *
 * @author     Glen Langer (BugBuster)
 */
class ContaoFrontendController extends \Frontend
{


	/**
	 * Initialize the object (do not remove)
	 */
	public function __construct()
	{
		parent::__construct();

		// See #4099
		if (!defined('BE_USER_LOGGED_IN'))
		{
			define('BE_USER_LOGGED_IN', false);
		}

		if (!defined('FE_USER_LOGGED_IN'))
		{
			define('FE_USER_LOGGED_IN', false);
		}
		
	}


	/**
	 * Run the controller
	 *
	 * @return Response
	 */
	public function run()
	{
	    /*
	    $logger = \System::getContainer()->get('monolog.logger.contao');
	    
        $logger->log(LogLevel::INFO,
                     "Im Contao FE Controller",
                     array('contao' => new ContaoContext('ContaoFrontendController', TL_ACCESS)));
        */
	    
	    //Pixel und raus hier
	    $objResponse = new Response( base64_decode('R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==') );
	    $objResponse->headers->set('Content-type', 'image/gif');
	    $objResponse->headers->set('Content-length', 43);
		return $objResponse;
	}
	
	
}
