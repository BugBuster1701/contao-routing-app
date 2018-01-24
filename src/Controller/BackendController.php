<?php
// src/AppBundle/Controller/BackendController.php
namespace BugBuster\RoutingappBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use BugBuster\Routingapp\ContaoBackendController;

/**
 * Handles back end routes.
 * 
 * @Route("/routingapp", defaults={
 *     "_scope" = "backend",
 *     "_token_check" = true,
 *     "_custom_backend_view" = true,
 *     "_backend_module" = "bemain"
 * })
 */
class BackendController extends Controller
{
    /**
     * @Route("/main", name="backend_maintest")
     * @Template("BugBusterRoutingappBundle::bemain.html.twig")
     */
    public function bemainAction()
    {
        return [
            'main' => '<br><p>Content from the BE Controller Main Action</p>',
            'link' => '<br><p><a onclick="Backend.openModalIframe({\'width\':780,\'height\':600,\'title\':\'Details\',\'url\':this.href});return false"  
                              href="'.$this->generateUrl('backend_details').'">Link to BE Controller Details Action<a/></p>'
        ];
    }
    
    /**
     * Renders the details content.
     *
     * @return Response
     *
     * @Route("/details", name="backend_details")
     */
    public function detailsAction()
    {
        $this->container->get('contao.framework')->initialize();
        $controller = new ContaoBackendController();
        return $controller->run();
    }
}
