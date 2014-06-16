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
    public function createQuery($context = 'list')
    {
    	$query = parent::createQuery($context);
    	$query->innerJoin('o.partymember_category','g','WITH',"g.is_member= 'Y'");
    	 
    	return $query;
    }
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
        	->with('个人信息')
            ->add('student_no',null,array('label' => '学号'))
            ->add('name',null,array('label' => '姓名'))
            ->add('gender','choice',array('label' => '性别','choices'=>array('男','女')))
            ->add('nation',null,array('label' => '民族'))
            ->add('birthplace',null,array('label' => '籍贯'))
            ->add('mobile',null,array('label' => '手机'))
            ->add('idcard',null,array('label' => '身份证号'))
            ->add('birthday','date',array('label' => '出生日期','format'=>'yMd'))
            ->add('grade',null,array('label' => '年级'))
            ->add('major',null,array('label' => '专业'))
            ->with('党员信息')
            ->add('approve_date','date',array('label' => '加入组织时间','format'=>'yMd'))
            ->add('full_date','date',array('label' => '转正日期','format'=>'yMd'))
            ->add('partymember_branch',null,array('label' => '所属党支部'))
            ->add('partymember_category',null,array('label'=>'党员分类'))
            ->add('state',null,array('label' => '状态'))    
            ->add('duty',null,array('label' => '党内职务'))
            ->add('first_apply_date','date',array('label' => '首次申请入党时间','format'=>'yMd'))
            ->add('recent_apply_date','date',array('label' => '最近一次申请入党时间','format'=>'yMd'))
            ->add('activist_date','date',array('label' => '列为积极分子时间','format'=>'yMd'))
            ->add('to_admin_date','date',array('label' => '拟发展时间','format'=>'yMd'))
            ->add('training_date','date',array('label' => '最近一次党校培训时间','format'=>'yMd'))
            ->add('admit_date','date',array('label' => '发展支部大会时间'))            
            ->with('其他信息',array('collapsed' => true))
            ->add('enter_date','date',array('label' => '入学时间','format'=>'yMd'))
            ->add('top_edu',null,array('label' => '最高学历'))
            ->add('top_edu_begin','date',array('label' => '最高学历起始时间','format'=>'yMd'))
            ->add('top_edu_end','date',array('label' => '最高学历获得时间','format'=>'yMd'))
            ->add('apply_no',null,array('label' => '入党志愿书编号','required'=>false))
            ->add('pre_department',null,array('label' => '转入前所在单位'))
            ->add('pre_date','date',array('label' => '转入年月'))
            ->add('pre_due_date','date',array('label' => '党费缴纳截止时间','format'=>'yMd'))
            ->add('contact1',null,array('label' => '联系人1','required' => false))
            ->add('contact1_phone',null,array('label' => '联系人1联系方式','required'=>false))
            ->add('contact2',null,array('label' => '联系人2','required'=>false))
            ->add('contact2_phone',null,array('label' => '联系人2联系方式','required'=>false))
            ->add('intro1',null,array('label' => '入党介绍人1','required'=>false))
            ->add('intro2',null,array('label' => '入党介绍人2','required'=>false))
            ->add('out_reason',null,array('label' => '转出原因','required'=>false))
            ->add('out_type',null,array('label' => '转出去向','required'=>false))
            ->add('out_department',null,array('label' => '所往单位','required'=>false))
            ->add('out_department_name',null,array('label' => '接收单位党组织','required'=>false))
            ->add('out_department_code',null,array('label' => '本市网上管理系统组织名称','required'=>false))
            ->end()
            
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('student_no',null,array('label' => '学号'))
            ->add('name',null,array('label' => '姓名'))
            ->add('idcard',null,array('label' => '身份证号'))

        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('student_no',null,array('label' => '学号'))
            ->add('name',null,array('label' => '姓名'))
            ->add('gender',null,array('label' => '性别'))
            ->add('partymember_category',null,array('label' => '党员类别'))
            ->add('approve_date','date',array('label' => '加入组织时间','format'=>'Y年m月d日'))
            ->add('full_date','date',array('label' => '转正时间','format'=>'Y年m月d日'))
            ->add('partymember_branch',null,array('label' => '所属党支部'))
            ->add('mobile',null,array('label' => '联系电话'))
            ->add('_action', 'actions', array(
                'actions' => array(
                    'show' => array(),
                    'edit' => array(),
                ),'label'=>'操作'
            ))
        ;
    }

    protected function configureShowField(ShowMapper $showMapper)
    {
        $showMapper
            ->add('student_no',null,array('label' => '学号'))
            ->add('name',null,array('label' => '姓名'))
            ->add('gender',null,array('label' => '性别'))
            ->add('nation',null,array('label' => '民族'))
            ->add('birthplace',null,array('label' => '籍贯'))
            ->add('mobile',null,array('label' => '手机'))
            ->add('idcard',null,array('label' => '身份证号'))
            ->add('birthday','date',array('label' => '出生日期','format'=>'yMd'))
            ->add('grade',null,array('label' => '年级'))
            ->add('major',null,array('label' => '专业'))
            ->add('approve_date','date',array('label' => '加入组织时间','format'=>'yMd'))
            ->add('full_date','date',array('label' => '转正日期','format'=>'yMd'))
            ->add('partymember_branch',null,array('label' => '所属党支部'))
            ->add('partymember_category',null,array('label'=>'党员分类'))
            ->add('state',null,array('label' => '状态'))    
            ->add('duty',null,array('label' => '党内职务'))
            ->add('first_apply_date','date',array('label' => '首次申请入党时间','format'=>'yMd'))
            ->add('recent_apply_date','date',array('label' => '最近一次申请入党时间','format'=>'yMd'))
            ->add('activist_date','date',array('label' => '列为积极分子时间','format'=>'yMd'))
            ->add('to_admin_date','date',array('label' => '拟发展时间','format'=>'yMd'))
            ->add('training_date','date',array('label' => '最近一次党校培训时间','format'=>'yMd'))
            ->add('admit_date','date',array('label' => '发展支部大会时间'))            
            ->add('enter_date','date',array('label' => '入学时间','format'=>'yMd'))
            ->add('top_edu',null,array('label' => '最高学历'))
            ->add('top_edu_begin','date',array('label' => '最高学历起始时间','format'=>'yMd'))
            ->add('top_edu_end','date',array('label' => '最高学历获得时间','format'=>'yMd'))
            ->add('apply_no',null,array('label' => '入党志愿书编号','required'=>false))
            ->add('pre_department',null,array('label' => '转入前所在单位'))
            ->add('pre_date','date',array('label' => '转入年月'))
            ->add('pre_due_date','date',array('label' => '党费缴纳截止时间','format'=>'yMd'))
            ->add('contact1',null,array('label' => '联系人1','required' => false))
            ->add('contact1_phone',null,array('label' => '联系人1联系方式','required'=>false))
            ->add('contact2',null,array('label' => '联系人2','required'=>false))
            ->add('contact2_phone',null,array('label' => '联系人2联系方式','required'=>false))
            ->add('intro1',null,array('label' => '入党介绍人1','required'=>false))
            ->add('intro2',null,array('label' => '入党介绍人2','required'=>false))
            ->add('out_reason',null,array('label' => '转出原因','required'=>false))
            ->add('out_type',null,array('label' => '转出去向','required'=>false))
            ->add('out_department',null,array('label' => '所往单位','required'=>false))
            ->add('out_department_name',null,array('label' => '接收单位党组织','required'=>false))
            ->add('out_department_code',null,array('label' => '本市网上管理系统组织名称','required'=>false))
        ;
    }
}