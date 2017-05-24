<?php

namespace ProjectBundle\Form\Type;

use Sylius\Bundle\AttributeBundle\Form\Type\AttributeType\TextareaAttributeType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\AbstractType;
use ProjectBundle\Entity\Contact;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('firstName', TextType::class, array('label' => 'Name'));
        $builder->add('email', TextType::class, array('label' => 'Email'));
        $builder->add('message', TextareaAttributeType::class, array('label' => 'Message'));
        $builder->getForm();
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array('data_class' => Contact::class));
    }

    public function getName()
    {
        return 'project_contact';
    }
}