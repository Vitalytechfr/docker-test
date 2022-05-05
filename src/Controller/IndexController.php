<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * @return Response
     * @Route("/", name="index_show")
     */
    public function show()
    {
        return $this->render('index.html.twig', []);
    }

    /**
     * @return JsonResponse
     * @Route("/api-test", name="api_test")
     */
    public function api_route()
    {
        return $this->json(['sarah' => 'sasageyo']);
    }
}
