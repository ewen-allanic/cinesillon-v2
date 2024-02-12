<?php

namespace App\Controller;

use App\Repository\PieceRepository;
use App\Entity\Artist;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

class HomePageController extends AbstractController
{
    #[Route('/', name: 'home_page')]
    public function index(PieceRepository $pieceRepository, EntityManagerInterface $entityManager): Response
    {
        $pageName = 'Home Page';

        $filmPieces = $pieceRepository->findFirstThreeFilmPieces();
        $albumPieces = $pieceRepository->findFirstThreeAlbumPieces();

        $artistRepository = $entityManager->getRepository(Artist::class);
        $latestArtists = $artistRepository->findLatestArtists();


        return $this->render('home_page/index.html.twig', [
            'pageName' => $pageName,
            'filmPieces' => $filmPieces,
            'albumPieces' => $albumPieces,
            'latestArtists' => $latestArtists,
        ]);
    }
}
