<?php

namespace App\Controller\Admin;

use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Artist;
use App\Entity\Piece;
use App\Entity\Support;
use App\Entity\TypeArtist;
use App\Entity\TypePiece;

class DashboardController extends AbstractDashboardController
{
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        // return parent::index();

        // Option 1. You can make your dashboard redirect to some common page of your backend
        //
        // $adminUrlGenerator = $this->container->get(AdminUrlGenerator::class);
        // return $this->redirect($adminUrlGenerator->setController(OneOfYourCrudController::class)->generateUrl());

        // Option 2. You can make your dashboard redirect to different pages depending on the user
        //
        // if ('jane' === $this->getUser()->getUsername()) {
        //     return $this->redirect('...');
        // }

        // Option 3. You can render some custom template to display a proper dashboard with widgets, etc.
        // (tip: it's easier if your template extends from @EasyAdmin/page/content.html.twig)
        //
        return $this->render('admin/my-dashboard.html.twig');

    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Cinesillon');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linktoRoute('Back to the website', 'fas fa-globe', 'home_page');
        yield MenuItem::linkToDashboard('Page d\'accueil', 'fa fa-home');
        yield MenuItem::linkToCrud('Artistes', 'fas fa-user', Artist::class);
        yield MenuItem::linkToCrud('Oeuvre', 'fas fa-headphones', Piece::class);
        yield MenuItem::linkToCrud('Support', 'fas fa-compact-disc', Support::class);
        // yield MenuItem::linkToCrud('Support', 'fas fa-compact-disc', Piste::class);
        yield MenuItem::linkToCrud('Type Artiste', 'fas fa-palette', TypeArtist::class);
        yield MenuItem::linkToCrud('Type d\'oeuvre', "fas fa-list", TypePiece::class);
        // yield MenuItem::linkToCrud('The Label', 'fas fa-list', EntityClass::class);
    }
}
