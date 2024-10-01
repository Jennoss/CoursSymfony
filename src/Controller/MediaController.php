<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MediaController extends AbstractController
{
    #[Route('/media/category', name: 'app_media')]
    public function index(): Response
    {
        return $this->render('media/category.html.twig');
    }

    #[Route('/media/detail', name: 'app_playlist')]
    public function playlist(): Response
    {
        return $this->render('media/detail.html.twig');
    }

    #[Route('/media/detail-serie', name: 'app_upload')]
    public function detailSerie(): Response
    {
        return $this->render('media/detail-serie.html.twig');
    }

    #[Route('/media/discover', name: 'app_upload')]
    public function discover(): Response
    {
        return $this->render('media/discover.html.twig');
    }

    #[Route('/media/list', name: 'app_upload')]
    public function list(): Response
    {
        return $this->render('media/list.html.twig');
    }

    #[Route('/media/upload', name: 'app_upload')]
    public function upload(): Response
    {
        return $this->render('media/upload.html.twig');
    }
}
