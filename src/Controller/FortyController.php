<?php
// src/Controller/FortyController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FortyController extends AbstractController
{
    #[Route('/', name:'home')]
    public function index(): Response
    {
        return $this->render('index.html.twig');
    }
}
?>