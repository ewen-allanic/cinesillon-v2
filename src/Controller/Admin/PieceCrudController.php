<?php

namespace App\Controller\Admin;

use App\Entity\Piece;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\CollectionField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use PieceImageThumbnailType;

class PieceCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Piece::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            yield TextField::new('frenchTitle', 'Nom français'),
            yield TextField::new('originalTitle', 'Nom original'),
            yield TextEditorField::new('description', 'Description'),
            yield AssociationField::new('idSupport', 'Support'),
            yield CollectionField::new('imageThumbnails')
            ->setEntryType(PieceImageThumbnailType::class)->onlyOnForms(),
            yield AssociationField::new('idTypePiece', 'Type d\'oeuvre'),
            yield AssociationField::new('idPiece', 'Oeuvre parent')->onlyOnForms(),
            yield AssociationField::new('pieces', 'Oeuvres enfants')->onlyOnForms(),

        ];
    }
    
}
