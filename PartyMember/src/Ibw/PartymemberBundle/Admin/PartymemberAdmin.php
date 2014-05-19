<?php
namespace Ibw\PartymemberBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Validator\ErrorElement;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Ibw\PartymemberBundle\Entity\Partymember;
class PartymemberAdmin extends Admin
{
// setup the defaut sort column and order
    protected $datagridValues = array(
        '_sort_order' => 'DESC',
        '_sort_by' => 'id'
    );

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('StuNo')
            ->add('Name')
            ->add('Sex')
            ->add('join_date')
            ->add('Full_date')
            ->add('Branch')
            ->add('MobPho')
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('StuNo')
            ->add('Name')
            ->add('Sex')
            ->add('Branch')

        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('StuNo')
            ->add('Name')
            ->add('join_date')
            ->add('Full_date')
            ->add('Branch')
            ->add('MobPho')
            ->add('_action', 'actions', array(
                'actions' => array(
                    'view' => array(),
                    'edit' => array(),
                    'delete' => array(),
                )
            ))
        ;
    }

    protected function configureShowField(ShowMapper $showMapper)
    {
        $showMapper
            ->add('StuNo')
            ->add('Name')
            ->add('Sex')
            ->add('Branch')
            ->add('MobPho')
        ;
    }
}