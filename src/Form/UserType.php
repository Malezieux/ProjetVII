<?php

namespace App\Form;

use App\Entity\User;
use App\Entity\DonnePerso;
use App\Entity\Profil;
use App\Repository\UserRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\FormTypeInterface;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email')
            ->add('password')
            ->add('Nom', ProfilType::class, [
                'class' => Profil::class,
                'nom'  => 'nom'
            ])
            // ->add('prenom')
            // ->add('formation')
            // ->add('promotion')
            // ->add('roles', User::class, [
            //     'choices' => [
            //         'User' => 'ROLE_USER',
            //         'Admin' => 'ROLE_ADMIN',
            //     ],
            //     'multiple' => true,
            //     'expanded' => true,
            // ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
