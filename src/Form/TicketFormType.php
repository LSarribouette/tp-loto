<?php

namespace App\Form;

use App\Entity\Ticket;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use function Sodium\add;

class TicketFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('choix1',
                ChoiceType::class, [
                    'label' => '',
                    'choices' => $this->chooseNumber(50),
                ])
            ->add('choix2',
                ChoiceType::class, [
                    'label' => '',
                    'choices' => $this->chooseNumber(50),
                ])
            ->add('choix3',
                ChoiceType::class, [
                    'label' => '',
                    'choices' => $this->chooseNumber(50),
                ])
            ->add('choix4',
                ChoiceType::class, [
                    'label' => '',
                    'choices' => $this->chooseNumber(50),
                ])
            ->add('choix5',
                ChoiceType::class, [
                    'label' => '',
                    'choices' => $this->chooseNumber(50),
                ])
            ->add('luckyNumber',
                ChoiceType::class, [
                    'label' => '',
                    'choices' => $this->chooseNumber(11),
                ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Ticket::class,
        ]);
    }

    private function chooseNumber(int $max)
    {
        for ($i = 0; $i < $max; $i++) {
            $choicesTab[] = $i;
        }
        return $choicesTab;
    }
}
