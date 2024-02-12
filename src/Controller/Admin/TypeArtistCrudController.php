<?php

namespace App\Controller\Admin;

use App\Entity\TypeArtist;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class TypeArtistCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return TypeArtist::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
