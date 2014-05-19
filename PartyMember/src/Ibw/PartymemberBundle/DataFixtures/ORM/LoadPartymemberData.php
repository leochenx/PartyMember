<?php
namespace Ibw\PartymemberBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Ibw\PartymemberBundle\Entity\Partymember;

class LoadPartymemberData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $em)
    {
		$partymember1=new Partymember();
		$partymember1->setStuNo("10110180011");
		$partymember1->setName("王1");
		$partymember1->setSex("男");
		$partymember1->setClass("党员");
		$partymember1->setJoinDate(new \DateTime());
		$partymember1->setFullDate(new \DateTime());
		$partymember1->setBranch("13级科学学位第一党支部");
		$partymember1->setMobPho("15967143885");
		$em->persist($partymember1);
		$em->flush();
    }

    public function getOrder()
    {
        return 1; // the order in which fixtures will be loaded
    }
}