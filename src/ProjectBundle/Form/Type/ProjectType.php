<?php

namespace ProjectBundle\Form\Type;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\AbstractType;
use ProjectBundle\Entity\Project;

class ProjectType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('title', TextType::class, array('label' => 'Author'));
        $builder->add('author', TextType::class, array('label' => 'Title'));
        $builder->add('file', 'enhavo_files', array('label' => 'File',
                                                    'translation_domain' => 'FileInterface',
                                                    'information' => array(
                                                    'Upload your Book here'),
                                                    'multiple' => false,
                                                    'fields' => array(
                                                        'title' => array(
                                                            'label' => 'media.form.label.title',
                                                            'translationDomain' => 'FileInterface'
                                                     ))));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array('data_class' => Project::class));
    }

    public function getName()
    {
        return 'project_project';
    }
}