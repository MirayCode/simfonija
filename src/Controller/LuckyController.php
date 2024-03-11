<?php
//namespace je informacijsko mjesto / lokacija za klasu
//src je app to mozes vidijeti u composer.json fajlu kako je mapirano 
namespace App\Controller;

use App\Entity\Blog;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

// class RandomResponse extends Response {
//     public function __construct() {
//         $number = random_int(0, 200);
//         parent::__construct($number);
//     }
// }

class LuckyController extends AbstractController 
{
    #[Route('/lucky/number')]
    public function number(): Response ##vrati objekt klase response
    {
        $number = random_int(0, 100);

        $blog = new Blog(
            title: 'paperclip',
            short_description: 'new paperclips',
            body: "<p>We have $number new paperclips!</p>"
        );

        return $this->render('lucky/number.html.twig', 
        ['number' => $blog->getBody()]
    );
    }
}