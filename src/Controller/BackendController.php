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
 *     "_backend_module" = "test"
 * })
 */
class BackendController extends Controller
{
    /**
     * @Route("/main", name="backend_test")
     * @Template("BugBusterRoutingappBundle::test.html.twig")
     */
    public function testAction()
    {
        return [
            'content' => 'Content'
        ];
    }
}
