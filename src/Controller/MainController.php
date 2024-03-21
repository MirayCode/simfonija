<?php
//namespace je informacijsko mjesto / lokacija za klasu
//src je app to mozes vidijeti u composer.json fajlu kako je mapirano 
namespace App\Controller;

use App\Entity\Blog;
use App\Repository\BlogRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MainController extends AbstractController 
{
    #[Route('/blog')]
    public function index(BlogRepository $blogRepository): Response ##vrati objekt klase response
    {
        return $this->render('list.html.twig');
    }
}