<?php

namespace  Api\ApiBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Api\ApiBundle\Entity\Teams;

class TeamsData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $team1 = new Teams();
        $team1->setName('Paris');     
        $manager->persist($team1);

        $team2 = new Teams();
        $team2->setName('Caen');     
        $manager->persist($team2);

        $team3 = new Teams();
        $team3->setName('Rouen');     
        $manager->persist($team3);

        $team4 = new Teams();
        $team4->setName('Lille');     
        $manager->persist($team4);    

        $team5 = new Teams();
        $team5->setName('Toulouse');     
        $manager->persist($team5);   

        $team6 = new Teams();
        $team6->setName('Nantes');     
        $manager->persist($team6);   

        $team7 = new Teams();
        $team7->setName('Strasbourg');     
        $manager->persist($team7);   

        $team8 = new Teams();
        $team8->setName('Juvisy');     
        $manager->persist($team8);   

        $team9 = new Teams();
        $team9->setName('Dijon');     
        $manager->persist($team9);   

        $team10 = new Teams();
        $team10->setName('Rennes');     
        $manager->persist($team10);   

        $team11 = new Teams();
        $team11->setName('St-Etienne');     
        $manager->persist($team11);   

        $team12 = new Teams();
        $team12->setName('Lyon');     
        $manager->persist($team12);    

        $manager->flush();

        $this->addReference('team1', $team1);
        $this->addReference('team2', $team2);
        $this->addReference('team3', $team3);
        $this->addReference('team4', $team4);
        $this->addReference('team5', $team5);
        $this->addReference('team6', $team6);
        $this->addReference('team7', $team7);
        $this->addReference('team8', $team8);
        $this->addReference('team9', $team9);
        $this->addReference('team10', $team10);
        $this->addReference('team11', $team11);
        $this->addReference('team12', $team12);
        
    }

           public function getOrder()
        {
            return 2;
        }
}