<?php

namespace AllForKids\MainBundle\Entity;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * evenement
 *
 * @ORM\Table(name="evenement")
 * @ORM\Entity(repositoryClass="AllForKids\MainBundle\Repository\evenementRepository")
 */
class evenement
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_even", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    public $id_even;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @return int
     */
    public function getIdEven()
    {
        return $this->id_even;
    }



    /**
     * Set titre
     *
     * @param string $titre
     *
     * @return evenement
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }


    /**
     * @var
     * @ORM\ManyToOne(targetEntity="AllForKids\MainBundle\Entity\Categorie")
     * @ORM\JoinColumn(referencedColumnName="id")
     */

    private $categorie;


    /**
     *  @ORM\Column(type="string", length=255,nullable=true)
     */

    private $nomImage;

    /**
     * @Assert\File(maxSize="2500k")
     */
    public $file;

    /**
     *@var string
     * @ORM\Column(name="lieu", type="string", length=255)
     */
    private $lieu;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_debut", type="datetime")
     */
    private $dateDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_fin", type="datetime")
     */
    private $dateFin;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="ticket_disponible", type="string", length=255)
     */
    private $ticketDisponible;

    /**
     * @var int
     *
     * @ORM\Column(name="Tarif", type="integer")
     */
    private $tarif;




    public function getWebPath()
    {
        return null=== $this->nomImage ? null :$this->getUploadDir.'/'.$this->nomImage;
    }
    protected function getUploadRootDir()
    {
        return __DIR__.'/../../../../web/'.$this->getUploadDir();
    }
    protected  function getUploadDir(){

        return 'images';
    }

    public function UploadProfilePicture(){
        $this->file->move($this->getUploadRootDir(),$this->file->getClientOriginalName());
        $this->nomImage=$this->file->getClientOriginalName();
        $this->file=null;
    }

    /**
     * set nomImage
     *
     * @param string $nomImage
     *
     * @return Categorie
     */
    public function setNomImage($nomImage)
    {

        $this->nomImage==$nomImage;
        return $this;
    }

    /**
     * Get nomImage
     *
     * @return  string
     */


    public function getNomImage()
    {
        return $this->nomImage;
    }

    /**
     * @return mixed
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * @param mixed $file
     */
    public function setFile($file)
    {
        $this->file = $file;
    }

    /**
     * @return mixed
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * @param mixed $categorie
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;
    }

    /**
     * @return string
     */
    public function getLieu()
    {
        return $this->lieu;
    }

    /**
     * @param string $lieu
     */
    public function setLieu($lieu)
    {
        $this->lieu = $lieu;
    }


    /**
     * @return \DateTime
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * @param \DateTime $dateDebut
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;
    }

    /**
     * @return \DateTime
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * @param \DateTime $dateFin
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getTicketDisponible()
    {
        return $this->ticketDisponible;
    }

    /**
     * @param string $ticketDisponible
     */
    public function setTicketDisponible($ticketDisponible)
    {
        $this->ticketDisponible = $ticketDisponible;
    }

    /**
     * @return int
     */
    public function getTarif()
    {
        return $this->tarif;
    }

    /**
     * @param int $tarif
     */
    public function setTarif($tarif)
    {
        $this->tarif = $tarif;
    }










}

