<?php

namespace App\Controller;

use App\Service\CallApiService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    #[Route('/', name: 'default')]
    public function index(CallApiService $DataApi): Response
    {

        return $this->render('default/index.html.twig', [
            'data' => $DataApi->getOpenseaData(),
        ]);
    }
}
