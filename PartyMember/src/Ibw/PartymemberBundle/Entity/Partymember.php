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
    private $StuNo;

    /**
     * @var string
     */
    private $Name;

    /**
     * @var string
     */
    private $Sex;

    /**
     * @var string
     */
    private $Class;

    /**
     * @var \DateTime
     */
    private $join_date;

    /**
     * @var \DateTime
     */
    private $Full_date;

    /**
     * @var string
     */
    private $Branch;

    /**
     * @var string
     */
    private $MobPho;

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
     * Set StuNo
     *
     * @param string $stuNo
     * @return Partymember
     */
    public function setStuNo($stuNo)
    {
        $this->StuNo = $stuNo;

        return $this;
    }

    /**
     * Get StuNo
     *
     * @return string 
     */
    public function getStuNo()
    {
        return $this->StuNo;
    }

    /**
     * Set Name
     *
     * @param string $name
     * @return Partymember
     */
    public function setName($name)
    {
        $this->Name = $name;

        return $this;
    }

    /**
     * Get Name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * Set Sex
     *
     * @param string $sex
     * @return Partymember
     */
    public function setSex($sex)
    {
        $this->Sex = $sex;

        return $this;
    }

    /**
     * Get Sex
     *
     * @return string 
     */
    public function getSex()
    {
        return $this->Sex;
    }

    /**
     * Set Class
     *
     * @param string $class
     * @return Partymember
     */
    public function setClass($class)
    {
        $this->Class = $class;

        return $this;
    }

    /**
     * Get Class
     *
     * @return string 
     */
    public function getClass()
    {
        return $this->Class;
    }

    /**
     * Set join_date
     *
     * @param \DateTime $joinDate
     * @return Partymember
     */
    public function setJoinDate($joinDate)
    {
        $this->join_date = $joinDate;

        return $this;
    }

    /**
     * Get join_date
     *
     * @return \DateTime 
     */
    public function getJoinDate()
    {
        return $this->join_date;
    }

    /**
     * Set Full_date
     *
     * @param \DateTime $fullDate
     * @return Partymember
     */
    public function setFullDate($fullDate)
    {
        $this->Full_date = $fullDate;

        return $this;
    }

    /**
     * Get Full_date
     *
     * @return \DateTime 
     */
    public function getFullDate()
    {
        return $this->Full_date;
    }

    /**
     * Set Branch
     *
     * @param string $branch
     * @return Partymember
     */
    public function setBranch($branch)
    {
        $this->Branch = $branch;

        return $this;
    }

    /**
     * Get Branch
     *
     * @return string 
     */
    public function getBranch()
    {
        return $this->Branch;
    }

    /**
     * Set MobPho
     *
     * @param string $mobPho
     * @return Partymember
     */
    public function setMobPho($mobPho)
    {
        $this->MobPho = $mobPho;

        return $this;
    }

    /**
     * Get MobPho
     *
     * @return string 
     */
    public function getMobPho()
    {
        return $this->MobPho;
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
    	$this->created_at = new \DateTime();
    }

    /**
     * @ORM\PreUpdate
     */
    public function setUpdatedAtValue()
    {
        // Add your code here
    	$this->updated_at = new \DateTime();
    }
}
