<?php

namespace App\Controller;

use App\Entity\Ticket;
use App\Form\TicketFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PlayController extends AbstractController
{
    #[Route('/play', name: 'play_create')]
    public function create(): Response
    {
        $ticket = new Ticket();
        $ticketForm = $this->createForm(TicketFormType::class, $ticket);
        return $this->render('play/create.html.twig',
            compact('ticketForm')
        );
    }
}
