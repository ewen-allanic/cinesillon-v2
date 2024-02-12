<?php

use App\Entity\Image;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Vich\UploaderBundle\Form\Type\VichImageType;

class ArtistImageThumbnailType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder->add('file', VichImageType::class, [
            'label' => 'Image',
        ]);
    }
    

    public function configureOptions(OptionsResolver $resolver):void
    {
        $resolver->setDefaults([
            'data_class' => Image::class
        ]);
    }

}