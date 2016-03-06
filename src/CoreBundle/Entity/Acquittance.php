<?php

namespace CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Acquittance
 *
 * @ORM\Table(name="acquittance")
 * @ORM\Entity(repositoryClass="CoreBundle\Repository\AcquittanceRepository")
 */
class Acquittance
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
     * @var string
     *
     * @ORM\Column(name="nomLocataire", type="string", length=50, nullable=true)
     */
    private $nomLocataire;

    /**
     * @var string
     *
     * @ORM\Column(name="adresseLocataire", type="string", length=255, nullable=true)
     */
    private $adresseLocataire;

    /**
     * @var string
     *
     * @ORM\Column(name="nomProprietaire", type="string", length=50, nullable=true)
     */
    private $nomProprietaire;

    /**
     * @var string
     *
     * @ORM\Column(name="adresseProprietaire", type="string", length=255, nullable=true)
     */
    private $adresseProprietaire;

    /**
     * @var string
     *
     * @ORM\Column(name="adresseBien", type="string", length=255, nullable=true)
     */
    private $adresseBien;

    /**
     * @var string
     *
     * @ORM\Column(name="debutPeriode", type="string", length=255, nullable=true)
     */
    private $debutPeriode;

    /**
     * @var string
     *
     * @ORM\Column(name="finPeriode", type="string", length=255, nullable=true)
     */
    private $finPeriode;

    /**
     * @var string
     *
     * @ORM\Column(name="montantLoyer", type="string", length=255, nullable=true)
     */
    private $montantLoyer;

    /**
     * @var string
     *
     * @ORM\Column(name="montantLoyerLettre", type="string", length=255, nullable=true)
     */
    private $montantLoyerLettre;

    /**
     * @var int
     *
     * @ORM\Column(name="montantHorsCharge", type="integer", nullable=true)
     */
    private $montantHorsCharge;

    /**
     * @var int
     *
     * @ORM\Column(name="montantCharges", type="integer", nullable=true)
     */
    private $montantCharges;

    /**
     * @var int
     *
     * @ORM\Column(name="total", type="integer", nullable=true)
     */
    private $total;

    /**
     * @var string
     *
     * @ORM\Column(name="datePaiement", type="string", length=255, nullable=true)
     */
    private $datePaiement;

    /**
     * @var string
     *
     * @ORM\Column(name="modePaiement", type="string", length=255, nullable=true)
     */
    private $modePaiement;

    /**
     * @var string
     *
     * @ORM\Column(name="villeEdition", type="string", length=255, nullable=true)
     */
    private $villeEdition;

    /**
     * @var string
     *
     * @ORM\Column(name="dateCreation", type="string", length=255, nullable=true)
     */
    private $dateCreation;


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
     * Set nomLocataire
     *
     * @param string $nomLocataire
     * @return Acquittance
     */
    public function setNomLocataire($nomLocataire)
    {
        $this->nomLocataire = $nomLocataire;

        return $this;
    }

    /**
     * Get nomLocataire
     *
     * @return string 
     */
    public function getNomLocataire()
    {
        return $this->nomLocataire;
    }

    /**
     * Set adresseLocataire
     *
     * @param string $adresseLocataire
     * @return Acquittance
     */
    public function setAdresseLocataire($adresseLocataire)
    {
        $this->adresseLocataire = $adresseLocataire;

        return $this;
    }

    /**
     * Get adresseLocataire
     *
     * @return string 
     */
    public function getAdresseLocataire()
    {
        return $this->adresseLocataire;
    }

    /**
     * Set nomProprietaire
     *
     * @param string $nomProprietaire
     * @return Acquittance
     */
    public function setNomProprietaire($nomProprietaire)
    {
        $this->nomProprietaire = $nomProprietaire;

        return $this;
    }

    /**
     * Get nomProprietaire
     *
     * @return string 
     */
    public function getNomProprietaire()
    {
        return $this->nomProprietaire;
    }

    /**
     * Set adresseProprietaire
     *
     * @param string $adresseProprietaire
     * @return Acquittance
     */
    public function setAdresseProprietaire($adresseProprietaire)
    {
        $this->adresseProprietaire = $adresseProprietaire;

        return $this;
    }

    /**
     * Get adresseProprietaire
     *
     * @return string 
     */
    public function getAdresseProprietaire()
    {
        return $this->adresseProprietaire;
    }

    /**
     * Set adresseBien
     *
     * @param string $adresseBien
     * @return Acquittance
     */
    public function setAdresseBien($adresseBien)
    {
        $this->adresseBien = $adresseBien;

        return $this;
    }

    /**
     * Get adresseBien
     *
     * @return string 
     */
    public function getAdresseBien()
    {
        return $this->adresseBien;
    }

    /**
     * Set debutPeriode
     *
     * @param string $debutPeriode
     * @return Acquittance
     */
    public function setDebutPeriode($debutPeriode)
    {
        $this->debutPeriode = $debutPeriode;

        return $this;
    }

    /**
     * Get debutPeriode
     *
     * @return string 
     */
    public function getDebutPeriode()
    {
        return $this->debutPeriode;
    }

    /**
     * Set finPeriode
     *
     * @param string $finPeriode
     * @return Acquittance
     */
    public function setFinPeriode($finPeriode)
    {
        $this->finPeriode = $finPeriode;

        return $this;
    }

    /**
     * Get finPeriode
     *
     * @return string 
     */
    public function getFinPeriode()
    {
        return $this->finPeriode;
    }

    /**
     * Set montantLoyer
     *
     * @param string $montantLoyer
     * @return Acquittance
     */
    public function setMontantLoyer($montantLoyer)
    {
        $this->montantLoyer = $montantLoyer;

        return $this;
    }

    /**
     * Get montantLoyer
     *
     * @return string 
     */
    public function getMontantLoyer()
    {
        return $this->montantLoyer;
    }

    /**
     * Set montantLoyerLettre
     *
     * @param string $montantLoyerLettre
     * @return Acquittance
     */
    public function setMontantLoyerLettre($montantLoyerLettre)
    {
        $this->montantLoyerLettre = $montantLoyerLettre;

        return $this;
    }

    /**
     * Get montantLoyerLettre
     *
     * @return string 
     */
    public function getMontantLoyerLettre()
    {
        return $this->montantLoyerLettre;
    }

    /**
     * Set montantHorsCharge
     *
     * @param integer $montantHorsCharge
     * @return Acquittance
     */
    public function setMontantHorsCharge($montantHorsCharge)
    {
        $this->montantHorsCharge = $montantHorsCharge;

        return $this;
    }

    /**
     * Get montantHorsCharge
     *
     * @return integer 
     */
    public function getMontantHorsCharge()
    {
        return $this->montantHorsCharge;
    }

    /**
     * Set montantCharges
     *
     * @param integer $montantCharges
     * @return Acquittance
     */
    public function setMontantCharges($montantCharges)
    {
        $this->montantCharges = $montantCharges;

        return $this;
    }

    /**
     * Get montantCharges
     *
     * @return integer 
     */
    public function getMontantCharges()
    {
        return $this->montantCharges;
    }

    /**
     * Set total
     *
     * @param integer $total
     * @return Acquittance
     */
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * Get total
     *
     * @return integer 
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Set datePaiement
     *
     * @param string $datePaiement
     * @return Acquittance
     */
    public function setDatePaiement($datePaiement)
    {
        $this->datePaiement = $datePaiement;

        return $this;
    }

    /**
     * Get datePaiement
     *
     * @return string 
     */
    public function getDatePaiement()
    {
        return $this->datePaiement;
    }

    /**
     * Set modePaiement
     *
     * @param string $modePaiement
     * @return Acquittance
     */
    public function setModePaiement($modePaiement)
    {
        $this->modePaiement = $modePaiement;

        return $this;
    }

    /**
     * Get modePaiement
     *
     * @return string 
     */
    public function getModePaiement()
    {
        return $this->modePaiement;
    }

    /**
     * Set villeEdition
     *
     * @param string $villeEdition
     * @return Acquittance
     */
    public function setVilleEdition($villeEdition)
    {
        $this->villeEdition = $villeEdition;

        return $this;
    }

    /**
     * Get villeEdition
     *
     * @return string 
     */
    public function getVilleEdition()
    {
        return $this->villeEdition;
    }

    /**
     * Set dateCreation
     *
     * @param string $dateCreation
     * @return Acquittance
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return string 
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }
}
