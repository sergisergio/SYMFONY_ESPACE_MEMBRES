<?php


namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminController extends AbstractController
{
    /**
     * @Route("/admin", name="admin")
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function home() {
        return $this->render('admin.html.twig');
    }
}