<?php 

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;


class MainController extends AbstractController
{ 
    #[Route('/')]

    public function homepage(): Response
    {

        $starshipCount = 457;

        $myShip = [
            'name' => 'USS Stuff and Things',
            'class' => 'Random',
            'captain' => 'Jack Sparrow',
            'status' => "In Davey Jones' Locker"
        ];

        return $this->render('main/homepage.html.twig', [
            'numberOfStarships' => $starshipCount,
            'myShip' => $myShip,
        ]);
    }
}