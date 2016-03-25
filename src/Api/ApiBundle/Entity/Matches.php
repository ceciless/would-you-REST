<?php

namespace Api\ApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Matches
 *
 * @ORM\Table(name="matches")
 * @ORM\Entity(repositoryClass="Api\ApiBundle\Repository\MatchesRepository")
 */
class Matches
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Api\ApiBundle\Entity\Teams", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $homeTeamId;


    /**
     * @ORM\ManyToOne(targetEntity="Api\ApiBundle\Entity\Teams", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $awayTeamId;

    /**
     * @var int
     *
     * @ORM\Column(name="home_score", type="integer")
     */
    private $homeScore;

    /**
     * @var int
     *
     * @ORM\Column(name="away_score", type="integer")
     */
    private $awayScore;

    /**
     * @var int
     *
     * @ORM\Column(name="snitch", type="integer")
     */
    private $snitch;

    /**
     * @var int
     *
     * @ORM\Column(name="P", type="integer", nullable=true)
     */
    private $p;

    /**
     * @var float
     *
     * @ORM\Column(name="Padj", type="float", nullable=true)
     */
    private $padj;

    /**
     * @var float
     *
     * @ORM\Column(name="SWIM", type="float", nullable=true)
     */
    private $SWIM;

       /**
     * @ORM\ManyToOne(targetEntity="Api\ApiBundle\Entity\Events", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $eventId;

    /**
     * @var int
     *
     * @ORM\Column(name="event_order", type="integer", nullable=true)
     */
    private $eventOrder;


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
     * Set homeScore
     *
     * @param integer $homeScore
     * @return Matches
     */
    public function setHomeScore($homeScore)
    {
        $this->homeScore = $homeScore;

        return $this;
    }

    /**
     * Get homeScore
     *
     * @return integer 
     */
    public function getHomeScore()
    {
        return $this->homeScore;
    }

    /**
     * Set awayScore
     *
     * @param integer $awayScore
     * @return Matches
     */
    public function setAwayScore($awayScore)
    {
        $this->awayScore = $awayScore;

        return $this;
    }

    /**
     * Get awayScore
     *
     * @return integer 
     */
    public function getAwayScore()
    {
        return $this->awayScore;
    }

    /**
     * Set snitch
     *
     * @param integer $snitch
     * @return Matches
     */
    public function setSnitch($snitch)
    {
        $this->snitch = $snitch;

        return $this;
    }

    /**
     * Get snitch
     *
     * @return integer 
     */
    public function getSnitch()
    {
        return $this->snitch;
    }

    /**
     * Set p
     *
     * @param integer $p
     * @return Matches
     */
    public function setP($p)
    {
        $this->p = $p;

        return $this;
    }

    /**
     * Get p
     *
     * @return integer 
     */
    public function getP()
    {
        return $this->p;
    }

    /**
     * Set padj
     *
     * @param float $padj
     * @return Matches
     */
    public function setPadj($padj)
    {
        $this->padj = $padj;

        return $this;
    }

    /**
     * Get padj
     *
     * @return float 
     */
    public function getPadj()
    {
        return $this->padj;
    }

    /**
     * Set SWIM
     *
     * @param float $SWIM
     * @return Matches
     */
    public function setSWIM($SWIM)
    {
        $this->SWIM = $SWIM;

        return $this;
    }

    /**
     * Get SWIM
     *
     * @return float 
     */
    public function getSWIM()
    {
        return $this->SWIM;
    }

    /**
     * Set eventOrder
     *
     * @param integer $eventOrder
     * @return Matches
     */
    public function setEventOrder($eventOrder)
    {
        $this->eventOrder = $eventOrder;

        return $this;
    }

    /**
     * Get eventOrder
     *
     * @return integer 
     */
    public function getEventOrder()
    {
        return $this->eventOrder;
    }

    /**
     * Set homeTeamId
     *
     * @param \Api\ApiBundle\Entity\Teams $homeTeamId
     * @return Matches
     */
    public function setHomeTeamId(\Api\ApiBundle\Entity\Teams $homeTeamId)
    {
        $this->homeTeamId = $homeTeamId;

        return $this;
    }

    /**
     * Get homeTeamId
     *
     * @return \Api\ApiBundle\Entity\Teams 
     */
    public function getHomeTeamId()
    {
        return $this->homeTeamId;
    }

    /**
     * Set awayTeamId
     *
     * @param \Api\ApiBundle\Entity\Teams $awayTeamId
     * @return Matches
     */
    public function setAwayTeamId(\Api\ApiBundle\Entity\Teams $awayTeamId)
    {
        $this->awayTeamId = $awayTeamId;

        return $this;
    }

    /**
     * Get awayTeamId
     *
     * @return \Api\ApiBundle\Entity\Teams 
     */
    public function getAwayTeamId()
    {
        return $this->awayTeamId;
    }

    /**
     * Set eventId
     *
     * @param \Api\ApiBundle\Entity\Events $eventId
     * @return Matches
     */
    public function setEventId(\Api\ApiBundle\Entity\Events $eventId)
    {
        $this->eventId = $eventId;

        return $this;
    }

    /**
     * Get eventId
     *
     * @return \Api\ApiBundle\Entity\Events 
     */
    public function getEventId()
    {
        return $this->eventId;
    }
}
