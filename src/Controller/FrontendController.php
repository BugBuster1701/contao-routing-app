<?php
// src/AppBundle/Controller/FrontendController.php
namespace BugBuster\RoutingappBundle\Controller;

//use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;


/**
 * Handles front end routes.
 *
 */
class FrontendController extends Controller
{
    /**
     * Renders the content.
     *
     * @return Response
     *
     */
    public function demoAction($height = 0, $width = 0)
    {
        $strBuffer = '<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="utf-8">
  <title>Frontend Route - Contao Open Source CMS</title>
</head>
<body>
       <h1>Frontend Route</h2>
       <img src="http://contao-nordtag.de/files/themes/nordtag/images/contao-nordtag_logo_2018_rgb.svg"
	        width="660" height="202" alt="Contao Nordtag 2018" title="Contao Nordtag 2018">
       <p>Parameter: '.$height.' '.$width.'</p>
</body>
</html>';
        $objResponse = new Response($strBuffer);
        $objResponse->headers->set('Content-Type', 'text/html; charset=UTF-8');
        return $objResponse;
    }
}
