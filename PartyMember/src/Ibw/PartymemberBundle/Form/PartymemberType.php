<?php

namespace Ibw\PartymemberBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PartymemberType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('student_no')
            ->add('name')
            ->add('gender')
            ->add('class')
            ->add('approve_date')
            ->add('full_date')
            ->add('branch')
            ->add('mobile')
            ->add('created_at')
            ->add('updated_at')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Ibw\PartymemberBundle\Entity\Partymember'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ibw_partymemberbundle_partymember';
    }
}
