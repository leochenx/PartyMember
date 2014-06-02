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
            ->add('student_no',null,array('label' => '学号'))
            ->add('name',null,array('label' => '姓名'))
            ->add('gender',null,array('label' => '性别'))
            ->add('approve_date',null,array('label' => '加入组织时间'))
            ->add('full_date',null,array('label' => '转正日期'))
            ->add('branch',null,array('label' => '所属党支部'))
            ->add('mobile',null,array('label' => '手机'))
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('student_no',null,array('label' => '学号'))
            ->add('name',null,array('label' => '姓名'))

        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('student_no',null,array('label' => '学号'))
            ->add('name',null,array('label' => '姓名'))
            ->add('gender',null,array('label' => '性别'))
            ->add('class',null,array('label' => '党员类别'))
            ->add('approve_date',null,array('label' => '加入组织时间'))
            ->add('full_date',array('label' => '转正时间'))
            ->add('branch',null,array('label' => '所属党支部'))
            ->add('mobile',null,array('label' => '联系电话'))
            ->add('_action', 'actions', array(
                'actions' => array(
                    'show' => array(),
                    'edit' => array(),
                    'delete' => array(),
                ),'label'=>'操作'
            ))
        ;
    }

    protected function configureShowField(ShowMapper $showMapper)
    {
        $showMapper
            ->add('student_no')
            ->add('name')
            ->add('gender')
            ->add('branch')
            ->add('mobile')
        ;
    }
}