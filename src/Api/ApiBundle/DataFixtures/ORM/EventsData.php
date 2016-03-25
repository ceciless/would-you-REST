<?php

namespace  Api\ApiBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Api\ApiBundle\Entity\Events;

class EventsData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $event1 = new Events();
        $event1->setName('Event #1');    
        $event1->setEventStartDate(new \DateTime("2015-09-27"));    
        $event1->setEventEndDate(new \DateTime("2015-09-28"));    
        $manager->persist($event1);

        $event2 = new Events();
        $event2->setName('Event #2');    
        $event2->setEventStartDate(new \DateTime("2015-10-11"));    
        $event2->setEventEndDate(new \DateTime("2015-10-12"));    
        $manager->persist($event2);

        $manager->flush();

        $this->addReference('event1', $event1);
        $this->addReference('event2', $event2);
        
    }

           public function getOrder()
        {
        	return 1;
        }
}
