<?php

namespace App\Controller\Admin;

use App\Entity\Artist;
use ArtistImageThumbnailType;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\CollectionField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Vich\UploaderBundle\Form\Type\VichImageType;

class ArtistCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Artist::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            // IdField::new('id'),
            yield TextField::new('firstname'),
            yield TextField::new('lastname'),
            yield DateField::new('dateOfBirth'),
            yield DateField::new('dateOfDeath'),
            yield TextField::new('nationality'),
            yield TextareaField::new('description'),
            yield TextField::new('source'),
            yield TextField::new('link'),

            // yield ImageField::new('imageId')
            // ->setFormType(ArtistImageThumbnailType::class),

            // yield TextField::new('imageId')->setFormType(VichImageType::class)->onlyWhenCreating(),

            yield CollectionField::new('imageId')
            ->setEntryType(ArtistImageThumbnailType::class),

            // yield TextareaField::new('imageId')->setFormType(VichImageType::class)->setDefaults([
            //     'data_class' => Image::class
            // ]),
            // yield TextareaField::new('imageId')->setEntryType(ArtistImageThumbnailType::class),
            // yield AssociationField::new('imageId')
            // ->setEntryType(ArtistImageThumbnailType::class),

            // yield AssociationField::new('imageId'),
            // yield ImageField::new('imageId')->,
            // yield ImageField::new('imageId')->setUploadDir('image/artists/'),

            // yield ImageField::new('imageId')->setFormType(Image::class),

            yield AssociationField::new('idTypeArtist'),
            yield AssociationField::new('pistes'),
        ];
    }
}
