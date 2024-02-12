<?php

namespace App\Controller\Admin;

use App\Entity\TypePiece;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class TypePieceCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return TypePiece::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('name', 'Nom'),
        ];
    }
}
