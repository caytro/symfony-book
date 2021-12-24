<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ConferenceController extends AbstractController
{
    #[Route('/', name: 'homepage')]
    public function index(): Response
    {
        return new Response(<<<EOF
            <html>
                <body>
                    <h1>Homepage</h1>
                    <img src="/images/under-construction.gif" />
                </body>
            </html>
            EOF
        );
    }

    #[Route('/conference', name: 'conference')]
    /**
     * @Route("/conference", name="conference")
     */
    public function conference(): Response
    {
        return new Response(<<<EOF
            <html>
                <body>
                    <h1>conference</h1>
                    <img src="/images/under-construction.gif" />
                </body>
            </html>
            EOF
        );
    }
}
