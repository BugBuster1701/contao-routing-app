<?php
// src/AppBundle/Controller/BackendController.php
namespace BugBuster\RoutingappBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

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
            'content' => '<br>Content from the BE Controller Action'
        ];
    }
}
