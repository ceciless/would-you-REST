<?php

namespace  Api\ApiBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Api\ApiBundle\Entity\Matches;

class MatchesData extends AbstractFixture implements OrderedFixtureInterface
{    

    public function load(ObjectManager $manager)
    {
        $matche1 = new Matches();
        $matche1->setHomeTeamId($this->getReference('team1'));  
        $matche1->setAwayTeamId($this->getReference('team5'));  
        $matche1->setHomeScore('200');  
        $matche1->setAwayScore('100');  
        $matche1->setSnitch('2');  
        $matche1->setEventId($this->getReference('event1'));  
        $matche1->setEventOrder('1'); 
        $manager->persist($matche1);

        $matche2 = new Matches();
        $matche2->setHomeTeamId($this->getReference('team7'));  
        $matche2->setAwayTeamId($this->getReference('team1'));  
        $matche2->setHomeScore('90');  
        $matche2->setAwayScore('160');  
        $matche2->setSnitch('2');  
        $matche2->setEventId($this->getReference('event2'));  
        $matche2->setEventOrder('2'); 
        $manager->persist($matche2);

        $matche3 = new Matches();
        $matche3->setHomeTeamId($this->getReference('team5'));  
        $matche3->setAwayTeamId($this->getReference('team12'));  
        $matche3->setHomeScore('180');  
        $matche3->setAwayScore('190');  
        $matche3->setSnitch('1');  
        $matche3->setEventId($this->getReference('event1'));  
        $matche3->setEventOrder('13'); 
        $manager->persist($matche3);

        $manager->flush();

        $this->addReference('matche1', $matche1);
        $this->addReference('matche2', $matche2);
        $this->addReference('matche3', $matche3);
    }


      public function getOrder() 
      {
        return 3;  // Order in which this fixture will be executed
      }


}