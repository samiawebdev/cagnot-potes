<?php

namespace App\Controller;

use App\Entity\Campaign;
use App\Repository\CampaignRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(CampaignRepository $campaign): Response
    { #campaignRepository
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    #[Route('/create', name: 'app_create')]
    public function create(): Response
    {

        return $this->render('home/create.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    #[Route('/payment', name: 'app_payment')]
    public function payment(): Response
    {

        return $this->render('home/payment.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    #[Route('/show', name: 'app_show')]
    public function show(): Response
    {

        return $this->render('home/show.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
    #[Route('/cat', name: 'app_cat')]
    public function cat(): Response
    {
        $array = ["foo", "bar", "hello", "world"];
        

        return $this->render('home/cat.html.twig', [
            "tableaux" => $array, 
        ]);
    }

}
