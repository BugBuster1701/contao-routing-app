<?php
// src/AppBundle/Controller/BackendController.php
namespace BugBuster\RoutingappBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use BugBuster\Routingapp\ContaoBackendController;

/**
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
            'main' => '<br>Content from the BE Controller Action',
            'link' => '<br><a href="'.$this->generateUrl('backend_details').'">Link zur Backend Details Route<a/>'
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
