<?php

namespace AllForKids\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reservation
 *
 * @ORM\Table(name="reservation")
 * @ORM\Entity(repositoryClass="AllForKids\MainBundle\Repository\ReservationRepository")
 */
class Reservation
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_reservation", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id_reservation;

    /**
     * @var
     * @ORM\ManyToOne(targetEntity="AllForKids\MainBundle\Entity\evenement")
     * @ORM\JoinColumn(referencedColumnName="id_even")
     */

    private $id_even;


    /**
     * @var
     * @ORM\ManyToOne(targetEntity="AllForKids\MainBundle\Entity\User")
     * @ORM\JoinColumn(referencedColumnName="id")
     */

    private $id_parent;


    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_reservation", type="datetime")
     */
    private $dateReservation;

    /**
     * @var int
     *
     * @ORM\Column(name="nbre_ticket", type="integer")
     */
    private $nbreTicket;

    /**
     * @var bool
     *
     * @ORM\Column(name="payer", type="boolean")
     */
    private $payer;

    /**
     * @return int
     */
    public function getIdReservation()
    {
        return $this->id_reservation;
    }



    /**
     * Set dateReservation
     *
     * @param \DateTime $dateReservation
     *
     * @return Reservation
     */
    public function setDateReservation($dateReservation)
    {
        $this->dateReservation = $dateReservation;

        return $this;
    }

    /**
     * Get dateReservation
     *
     * @return \DateTime
     */
    public function getDateReservation()
    {
        return $this->dateReservation;
    }

    /**
     * Set nbreTicket
     *
     * @param integer $nbreTicket
     *
     * @return Reservation
     */
    public function setNbreTicket($nbreTicket)
    {
        $this->nbreTicket = $nbreTicket;

        return $this;
    }

    /**
     * Get nbreTicket
     *
     * @return int
     */
    public function getNbreTicket()
    {
        return $this->nbreTicket;
    }

    /**
     * Set payer
     *
     * @param boolean $payer
     *
     * @return Reservation
     */
    public function setPayer($payer)
    {
        $this->payer = $payer;

        return $this;
    }

    /**
     * Get payer
     *
     * @return bool
     */
    public function getPayer()
    {
        return $this->payer;
    }

    /**
     * @return mixed
     */
    public function getIdEven()
    {
        return $this->id_even;
    }

    /**
     * @return mixed
     */
    public function getIdParent()
    {
        return $this->id_parent;
    }



}

