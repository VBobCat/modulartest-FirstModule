<?php

namespace ModularTest\FirstModuleBundle\Controller;

use ModularTest\FirstModuleBundle\Service\FirstService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class FirstController
 * @package ModularTest\FirstModuleBundle\Controller
 */
class FirstController extends AbstractController
{


    /**
     * FirstController constructor.
     * @param FirstService $firstService
     */
    public function __construct(private FirstService $firstService)
    {
    }

    /**
     * @return Response
     */
    #[Route('/first', name: 'modular_test_first_module_first')]
    public function index(): Response
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/FirstController.php',
            'date' => $this->firstService->now()
        ]);
    }
}
