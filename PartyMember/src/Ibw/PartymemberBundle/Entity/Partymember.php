<?php

namespace Ibw\PartymemberBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Partymember
 */
class Partymember
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $student_no;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $gender;

    /**
     * @var string
     */
    private $nation;

    /**
     * @var string
     */
    private $birthplace;

    /**
     * @var string
     */
    private $idcard;

    /**
     * @var \DateTime
     */
    private $birthday;

    /**
     * @var string
     */
    private $branch;

    /**
     * @var string
     */
    private $mobile;

    /**
     * @var string
     */
    private $home_phone;

    /**
     * @var string
     */
    private $grade;

    /**
     * @var string
     */
    private $major;

    /**
     * @var \DateTime
     */
    private $enter_date;

    /**
     * @var string
     */
    private $top_edu;

    /**
     * @var \DateTime
     */
    private $top_edu_begin;

    /**
     * @var \DateTime
     */
    private $top_edu_end;

    /**
     * @var string
     */
    private $state;

    /**
     * @var string
     */
    private $class;

    /**
     * @var string
     */
    private $pre_department;

    /**
     * @var \DateTime
     */
    private $pre_date;

    /**
     * @var \DateTime
     */
    private $pre_due_date;

    /**
     * @var string
     */
    private $duty;

    /**
     * @var \DateTime
     */
    private $first_apply_date;

    /**
     * @var \DateTime
     */
    private $recent_apply_date;

    /**
     * @var \DateTime
     */
    private $activist_date;

    /**
     * @var \DateTime
     */
    private $to_admin_date;

    /**
     * @var \DateTime
     */
    private $training_date;

    /**
     * @var string
     */
    private $contact1;

    /**
     * @var string
     */
    private $con1_phone;

    /**
     * @var string
     */
    private $contact2;

    /**
     * @var string
     */
    private $con2_phone;

    /**
     * @var string
     */
    private $apply_no;

    /**
     * @var \DateTime
     */
    private $admit_date;

    /**
     * @var \DateTime
     */
    private $approve_date;

    /**
     * @var \DateTime
     */
    private $full_date;

    /**
     * @var string
     */
    private $intro1;

    /**
     * @var string
     */
    private $intro2;

    /**
     * @var string
     */
    private $out_reason;

    /**
     * @var string
     */
    private $out_type;

    /**
     * @var string
     */
    private $out_department;

    /**
     * @var string
     */
    private $out_department_name;

    /**
     * @var string
     */
    private $out_department_code;

    /**
     * @var string
     */
    private $remark;

    /**
     * @var \DateTime
     */
    private $created_at;

    /**
     * @var \DateTime
     */
    private $updated_at;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set student_no
     *
     * @param string $studentNo
     * @return Partymember
     */
    public function setStudentNo($studentNo)
    {
        $this->student_no = $studentNo;

        return $this;
    }

    /**
     * Get student_no
     *
     * @return string 
     */
    public function getStudentNo()
    {
        return $this->student_no;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Partymember
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set gender
     *
     * @param string $gender
     * @return Partymember
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return string 
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set nation
     *
     * @param string $nation
     * @return Partymember
     */
    public function setNation($nation)
    {
        $this->nation = $nation;

        return $this;
    }

    /**
     * Get nation
     *
     * @return string 
     */
    public function getNation()
    {
        return $this->nation;
    }

    /**
     * Set birthplace
     *
     * @param string $birthplace
     * @return Partymember
     */
    public function setBirthplace($birthplace)
    {
        $this->birthplace = $birthplace;

        return $this;
    }

    /**
     * Get birthplace
     *
     * @return string 
     */
    public function getBirthplace()
    {
        return $this->birthplace;
    }

    /**
     * Set idcard
     *
     * @param string $idcard
     * @return Partymember
     */
    public function setIdcard($idcard)
    {
        $this->idcard = $idcard;

        return $this;
    }

    /**
     * Get idcard
     *
     * @return string 
     */
    public function getIdcard()
    {
        return $this->idcard;
    }

    /**
     * Set birthday
     *
     * @param \DateTime $birthday
     * @return Partymember
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;

        return $this;
    }

    /**
     * Get birthday
     *
     * @return \DateTime 
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * Set branch
     *
     * @param string $branch
     * @return Partymember
     */
    public function setBranch($branch)
    {
        $this->branch = $branch;

        return $this;
    }

    /**
     * Get branch
     *
     * @return string 
     */
    public function getBranch()
    {
        return $this->branch;
    }

    /**
     * Set mobile
     *
     * @param string $mobile
     * @return Partymember
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;

        return $this;
    }

    /**
     * Get mobile
     *
     * @return string 
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * Set home_phone
     *
     * @param string $homePhone
     * @return Partymember
     */
    public function setHomePhone($homePhone)
    {
        $this->home_phone = $homePhone;

        return $this;
    }

    /**
     * Get home_phone
     *
     * @return string 
     */
    public function getHomePhone()
    {
        return $this->home_phone;
    }

    /**
     * Set grade
     *
     * @param string $grade
     * @return Partymember
     */
    public function setGrade($grade)
    {
        $this->grade = $grade;

        return $this;
    }

    /**
     * Get grade
     *
     * @return string 
     */
    public function getGrade()
    {
        return $this->grade;
    }

    /**
     * Set major
     *
     * @param string $major
     * @return Partymember
     */
    public function setMajor($major)
    {
        $this->major = $major;

        return $this;
    }

    /**
     * Get major
     *
     * @return string 
     */
    public function getMajor()
    {
        return $this->major;
    }

    /**
     * Set enter_date
     *
     * @param \DateTime $enterDate
     * @return Partymember
     */
    public function setEnterDate($enterDate)
    {
        $this->enter_date = $enterDate;

        return $this;
    }

    /**
     * Get enter_date
     *
     * @return \DateTime 
     */
    public function getEnterDate()
    {
        return $this->enter_date;
    }

    /**
     * Set top_edu
     *
     * @param string $topEdu
     * @return Partymember
     */
    public function setTopEdu($topEdu)
    {
        $this->top_edu = $topEdu;

        return $this;
    }

    /**
     * Get top_edu
     *
     * @return string 
     */
    public function getTopEdu()
    {
        return $this->top_edu;
    }

    /**
     * Set top_edu_begin
     *
     * @param \DateTime $topEduBegin
     * @return Partymember
     */
    public function setTopEduBegin($topEduBegin)
    {
        $this->top_edu_begin = $topEduBegin;

        return $this;
    }

    /**
     * Get top_edu_begin
     *
     * @return \DateTime 
     */
    public function getTopEduBegin()
    {
        return $this->top_edu_begin;
    }

    /**
     * Set top_edu_end
     *
     * @param \DateTime $topEduEnd
     * @return Partymember
     */
    public function setTopEduEnd($topEduEnd)
    {
        $this->top_edu_end = $topEduEnd;

        return $this;
    }

    /**
     * Get top_edu_end
     *
     * @return \DateTime 
     */
    public function getTopEduEnd()
    {
        return $this->top_edu_end;
    }

    /**
     * Set state
     *
     * @param string $state
     * @return Partymember
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return string 
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set class
     *
     * @param string $class
     * @return Partymember
     */
    public function setClass($class)
    {
        $this->class = $class;

        return $this;
    }

    /**
     * Get class
     *
     * @return string 
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * Set pre_department
     *
     * @param string $preDepartment
     * @return Partymember
     */
    public function setPreDepartment($preDepartment)
    {
        $this->pre_department = $preDepartment;

        return $this;
    }

    /**
     * Get pre_department
     *
     * @return string 
     */
    public function getPreDepartment()
    {
        return $this->pre_department;
    }

    /**
     * Set pre_date
     *
     * @param \DateTime $preDate
     * @return Partymember
     */
    public function setPreDate($preDate)
    {
        $this->pre_date = $preDate;

        return $this;
    }

    /**
     * Get pre_date
     *
     * @return \DateTime 
     */
    public function getPreDate()
    {
        return $this->pre_date;
    }

    /**
     * Set pre_due_date
     *
     * @param \DateTime $preDueDate
     * @return Partymember
     */
    public function setPreDueDate($preDueDate)
    {
        $this->pre_due_date = $preDueDate;

        return $this;
    }

    /**
     * Get pre_due_date
     *
     * @return \DateTime 
     */
    public function getPreDueDate()
    {
        return $this->pre_due_date;
    }

    /**
     * Set duty
     *
     * @param string $duty
     * @return Partymember
     */
    public function setDuty($duty)
    {
        $this->duty = $duty;

        return $this;
    }

    /**
     * Get duty
     *
     * @return string 
     */
    public function getDuty()
    {
        return $this->duty;
    }

    /**
     * Set first_apply_date
     *
     * @param \DateTime $firstApplyDate
     * @return Partymember
     */
    public function setFirstApplyDate($firstApplyDate)
    {
        $this->first_apply_date = $firstApplyDate;

        return $this;
    }

    /**
     * Get first_apply_date
     *
     * @return \DateTime 
     */
    public function getFirstApplyDate()
    {
        return $this->first_apply_date;
    }

    /**
     * Set recent_apply_date
     *
     * @param \DateTime $recentApplyDate
     * @return Partymember
     */
    public function setRecentApplyDate($recentApplyDate)
    {
        $this->recent_apply_date = $recentApplyDate;

        return $this;
    }

    /**
     * Get recent_apply_date
     *
     * @return \DateTime 
     */
    public function getRecentApplyDate()
    {
        return $this->recent_apply_date;
    }

    /**
     * Set activist_date
     *
     * @param \DateTime $activistDate
     * @return Partymember
     */
    public function setActivistDate($activistDate)
    {
        $this->activist_date = $activistDate;

        return $this;
    }

    /**
     * Get activist_date
     *
     * @return \DateTime 
     */
    public function getActivistDate()
    {
        return $this->activist_date;
    }

    /**
     * Set to_admin_date
     *
     * @param \DateTime $toAdminDate
     * @return Partymember
     */
    public function setToAdminDate($toAdminDate)
    {
        $this->to_admin_date = $toAdminDate;

        return $this;
    }

    /**
     * Get to_admin_date
     *
     * @return \DateTime 
     */
    public function getToAdminDate()
    {
        return $this->to_admin_date;
    }

    /**
     * Set training_date
     *
     * @param \DateTime $trainingDate
     * @return Partymember
     */
    public function setTrainingDate($trainingDate)
    {
        $this->training_date = $trainingDate;

        return $this;
    }

    /**
     * Get training_date
     *
     * @return \DateTime 
     */
    public function getTrainingDate()
    {
        return $this->training_date;
    }

    /**
     * Set contact1
     *
     * @param string $contact1
     * @return Partymember
     */
    public function setContact1($contact1)
    {
        $this->contact1 = $contact1;

        return $this;
    }

    /**
     * Get contact1
     *
     * @return string 
     */
    public function getContact1()
    {
        return $this->contact1;
    }

    /**
     * Set con1_phone
     *
     * @param string $con1Phone
     * @return Partymember
     */
    public function setCon1Phone($con1Phone)
    {
        $this->con1_phone = $con1Phone;

        return $this;
    }

    /**
     * Get con1_phone
     *
     * @return string 
     */
    public function getCon1Phone()
    {
        return $this->con1_phone;
    }

    /**
     * Set contact2
     *
     * @param string $contact2
     * @return Partymember
     */
    public function setContact2($contact2)
    {
        $this->contact2 = $contact2;

        return $this;
    }

    /**
     * Get contact2
     *
     * @return string 
     */
    public function getContact2()
    {
        return $this->contact2;
    }

    /**
     * Set con2_phone
     *
     * @param string $con2Phone
     * @return Partymember
     */
    public function setCon2Phone($con2Phone)
    {
        $this->con2_phone = $con2Phone;

        return $this;
    }

    /**
     * Get con2_phone
     *
     * @return string 
     */
    public function getCon2Phone()
    {
        return $this->con2_phone;
    }

    /**
     * Set apply_no
     *
     * @param string $applyNo
     * @return Partymember
     */
    public function setApplyNo($applyNo)
    {
        $this->apply_no = $applyNo;

        return $this;
    }

    /**
     * Get apply_no
     *
     * @return string 
     */
    public function getApplyNo()
    {
        return $this->apply_no;
    }

    /**
     * Set admit_date
     *
     * @param \DateTime $admitDate
     * @return Partymember
     */
    public function setAdmitDate($admitDate)
    {
        $this->admit_date = $admitDate;

        return $this;
    }

    /**
     * Get admit_date
     *
     * @return \DateTime 
     */
    public function getAdmitDate()
    {
        return $this->admit_date;
    }

    /**
     * Set approve_date
     *
     * @param \DateTime $approveDate
     * @return Partymember
     */
    public function setApproveDate($approveDate)
    {
        $this->approve_date = $approveDate;

        return $this;
    }

    /**
     * Get approve_date
     *
     * @return \DateTime 
     */
    public function getApproveDate()
    {
        return $this->approve_date;
    }

    /**
     * Set full_date
     *
     * @param \DateTime $fullDate
     * @return Partymember
     */
    public function setFullDate($fullDate)
    {
        $this->full_date = $fullDate;

        return $this;
    }

    /**
     * Get full_date
     *
     * @return \DateTime 
     */
    public function getFullDate()
    {
        return $this->full_date;
    }

    /**
     * Set intro1
     *
     * @param string $intro1
     * @return Partymember
     */
    public function setIntro1($intro1)
    {
        $this->intro1 = $intro1;

        return $this;
    }

    /**
     * Get intro1
     *
     * @return string 
     */
    public function getIntro1()
    {
        return $this->intro1;
    }

    /**
     * Set intro2
     *
     * @param string $intro2
     * @return Partymember
     */
    public function setIntro2($intro2)
    {
        $this->intro2 = $intro2;

        return $this;
    }

    /**
     * Get intro2
     *
     * @return string 
     */
    public function getIntro2()
    {
        return $this->intro2;
    }

    /**
     * Set out_reason
     *
     * @param string $outReason
     * @return Partymember
     */
    public function setOutReason($outReason)
    {
        $this->out_reason = $outReason;

        return $this;
    }

    /**
     * Get out_reason
     *
     * @return string 
     */
    public function getOutReason()
    {
        return $this->out_reason;
    }

    /**
     * Set out_type
     *
     * @param string $outType
     * @return Partymember
     */
    public function setOutType($outType)
    {
        $this->out_type = $outType;

        return $this;
    }

    /**
     * Get out_type
     *
     * @return string 
     */
    public function getOutType()
    {
        return $this->out_type;
    }

    /**
     * Set out_department
     *
     * @param string $outDepartment
     * @return Partymember
     */
    public function setOutDepartment($outDepartment)
    {
        $this->out_department = $outDepartment;

        return $this;
    }

    /**
     * Get out_department
     *
     * @return string 
     */
    public function getOutDepartment()
    {
        return $this->out_department;
    }

    /**
     * Set out_department_name
     *
     * @param string $outDepartmentName
     * @return Partymember
     */
    public function setOutDepartmentName($outDepartmentName)
    {
        $this->out_department_name = $outDepartmentName;

        return $this;
    }

    /**
     * Get out_department_name
     *
     * @return string 
     */
    public function getOutDepartmentName()
    {
        return $this->out_department_name;
    }

    /**
     * Set out_department_code
     *
     * @param string $outDepartmentCode
     * @return Partymember
     */
    public function setOutDepartmentCode($outDepartmentCode)
    {
        $this->out_department_code = $outDepartmentCode;

        return $this;
    }

    /**
     * Get out_department_code
     *
     * @return string 
     */
    public function getOutDepartmentCode()
    {
        return $this->out_department_code;
    }

    /**
     * Set remark
     *
     * @param string $remark
     * @return Partymember
     */
    public function setRemark($remark)
    {
        $this->remark = $remark;

        return $this;
    }

    /**
     * Get remark
     *
     * @return string 
     */
    public function getRemark()
    {
        return $this->remark;
    }

    /**
     * Set created_at
     *
     * @param \DateTime $createdAt
     * @return Partymember
     */
    public function setCreatedAt($createdAt)
    {
        $this->created_at = $createdAt;

        return $this;
    }

    /**
     * Get created_at
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Set updated_at
     *
     * @param \DateTime $updatedAt
     * @return Partymember
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updated_at = $updatedAt;

        return $this;
    }

    /**
     * Get updated_at
     *
     * @return \DateTime 
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }
    /**
     * @ORM\PrePersist
     */
    public function setCreatedAtValue()
    {
        // Add your code here
       date_default_timezone_set('prc');
       $this->created_at=new \DateTime(date('Y-m-d H:i:s', time()));
    }

    /**
     * @ORM\PreUpdate
     */
    public function setUpdatedAtValue()
    {
        // Add your code here
    	date_default_timezone_set('prc');
    	$this->updated_at=new \DateTime(date('Y-m-d H:i:s', time()));
    }
}
