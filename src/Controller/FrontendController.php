<?php
// src/AppBundle/Controller/FrontendController.php
namespace BugBuster\RoutingappBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;


/**
 * Handles front end routes.
 *
 * @Route("/routingapp_fe", defaults={
 *     "_scope" = "frontend", 
 *     "_token_check" = false
 * })
 */
class FrontendController extends Controller
{
    /**
     * Renders the content.
     *
     * @return Response
     *
     * @Route("/demo/{height}/{width}", name="frontend_demo", 
     *                                  requirements={
     *                                      "height"="\d+",
     *                                      "width"="\d+"
     *                                  }
     *  )
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
       <img src="https://www.contao-konferenz.de/files/userdata/various/contao-konferenz.svg"
	        width="660" height="202" alt="Contao Konferenz 2018" title="Contao Konferenz 2018">
       <p>Parameter: '.$height.'x'.$width.'</p>
</body>
</html>';
        $objResponse = new Response($strBuffer);
        $objResponse->headers->set('Content-Type', 'text/html; charset=UTF-8');
        return $objResponse;
    }
}
