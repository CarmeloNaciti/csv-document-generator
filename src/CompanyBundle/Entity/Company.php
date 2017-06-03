<?php

namespace CompanyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="company")
 */
class Company
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $registrationNumber;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $vatNumber;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $physicalAddress1;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $physicalAddress2;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $physicalAddress3;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $physicalSuburb;

    /**
     * @ORM\Column(type="integer", length=16)
     */
    private $streetCode;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $streetProvince;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $streetCountry;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $postalAddress1;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $postalAddress2;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $postalAddress3;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $postalSuburb;

    /**
     * @ORM\Column(type="integer", length=16)
     */
    private $postalCode;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $postalProvince;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $postalCountry;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $currency;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $email1;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $email2;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $email3;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $telephone1;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $telephone2;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $telephone3;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $fax1;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $fax2;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $fax3;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $logo;

    /**
     * @ORM\Column(type="datetime", length=100)
     */
    private $created;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $createdBy;

    /**
     * @ORM\Column(type="boolean", length=100)
     */
    private $active;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $template;

    /**
     * @ORM\Column(type="string", length=256)
     */
    private $flex1;

    /**
     * @ORM\Column(type="string", length=256)
     */
    private $flex2;

    /**
     * @ORM\Column(type="string", length=256)
     */
    private $flex3;

    /**
     * @ORM\Column(type="string", length=256)
     */
    private $flex4;

    /**
     * @ORM\Column(type="string", length=256)
     */
    private $flex5;


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
     * Set name
     *
     * @param string $name
     *
     * @return Company
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
     * Set registrationNumber
     *
     * @param string $registrationNumber
     *
     * @return Company
     */
    public function setRegistrationNumber($registrationNumber)
    {
        $this->registrationNumber = $registrationNumber;

        return $this;
    }

    /**
     * Get registrationNumber
     *
     * @return string
     */
    public function getRegistrationNumber()
    {
        return $this->registrationNumber;
    }

    /**
     * Set vatNumber
     *
     * @param string $vatNumber
     *
     * @return Company
     */
    public function setVatNumber($vatNumber)
    {
        $this->vatNumber = $vatNumber;

        return $this;
    }

    /**
     * Get vatNumber
     *
     * @return string
     */
    public function getVatNumber()
    {
        return $this->vatNumber;
    }

    /**
     * Set physicalAddress1
     *
     * @param string $physicalAddress1
     *
     * @return Company
     */
    public function setPhysicalAddress1($physicalAddress1)
    {
        $this->physicalAddress1 = $physicalAddress1;

        return $this;
    }

    /**
     * Get physicalAddress1
     *
     * @return string
     */
    public function getPhysicalAddress1()
    {
        return $this->physicalAddress1;
    }

    /**
     * Set physicalAddress2
     *
     * @param string $physicalAddress2
     *
     * @return Company
     */
    public function setPhysicalAddress2($physicalAddress2)
    {
        $this->physicalAddress2 = $physicalAddress2;

        return $this;
    }

    /**
     * Get physicalAddress2
     *
     * @return string
     */
    public function getPhysicalAddress2()
    {
        return $this->physicalAddress2;
    }

    /**
     * Set physicalAddress3
     *
     * @param string $physicalAddress3
     *
     * @return Company
     */
    public function setPhysicalAddress3($physicalAddress3)
    {
        $this->physicalAddress3 = $physicalAddress3;

        return $this;
    }

    /**
     * Get physicalAddress3
     *
     * @return string
     */
    public function getPhysicalAddress3()
    {
        return $this->physicalAddress3;
    }

    /**
     * Set physicalSuburb
     *
     * @param string $physicalSuburb
     *
     * @return Company
     */
    public function setPhysicalSuburb($physicalSuburb)
    {
        $this->physicalSuburb = $physicalSuburb;

        return $this;
    }

    /**
     * Get physicalSuburb
     *
     * @return string
     */
    public function getPhysicalSuburb()
    {
        return $this->physicalSuburb;
    }

    /**
     * Set streetCode
     *
     * @param integer $streetCode
     *
     * @return Company
     */
    public function setStreetCode($streetCode)
    {
        $this->streetCode = $streetCode;

        return $this;
    }

    /**
     * Get streetCode
     *
     * @return integer
     */
    public function getStreetCode()
    {
        return $this->streetCode;
    }

    /**
     * Set streetProvince
     *
     * @param string $streetProvince
     *
     * @return Company
     */
    public function setStreetProvince($streetProvince)
    {
        $this->streetProvince = $streetProvince;

        return $this;
    }

    /**
     * Get streetProvince
     *
     * @return string
     */
    public function getStreetProvince()
    {
        return $this->streetProvince;
    }

    /**
     * Set streetCountry
     *
     * @param string $streetCountry
     *
     * @return Company
     */
    public function setStreetCountry($streetCountry)
    {
        $this->streetCountry = $streetCountry;

        return $this;
    }

    /**
     * Get streetCountry
     *
     * @return string
     */
    public function getStreetCountry()
    {
        return $this->streetCountry;
    }

    /**
     * Set postalAddress1
     *
     * @param string $postalAddress1
     *
     * @return Company
     */
    public function setPostalAddress1($postalAddress1)
    {
        $this->postalAddress1 = $postalAddress1;

        return $this;
    }

    /**
     * Get postalAddress1
     *
     * @return string
     */
    public function getPostalAddress1()
    {
        return $this->postalAddress1;
    }

    /**
     * Set postalAddress2
     *
     * @param string $postalAddress2
     *
     * @return Company
     */
    public function setPostalAddress2($postalAddress2)
    {
        $this->postalAddress2 = $postalAddress2;

        return $this;
    }

    /**
     * Get postalAddress2
     *
     * @return string
     */
    public function getPostalAddress2()
    {
        return $this->postalAddress2;
    }

    /**
     * Set postalAddress3
     *
     * @param string $postalAddress3
     *
     * @return Company
     */
    public function setPostalAddress3($postalAddress3)
    {
        $this->postalAddress3 = $postalAddress3;

        return $this;
    }

    /**
     * Get postalAddress3
     *
     * @return string
     */
    public function getPostalAddress3()
    {
        return $this->postalAddress3;
    }

    /**
     * Set postalSuburb
     *
     * @param string $postalSuburb
     *
     * @return Company
     */
    public function setPostalSuburb($postalSuburb)
    {
        $this->postalSuburb = $postalSuburb;

        return $this;
    }

    /**
     * Get postalSuburb
     *
     * @return string
     */
    public function getPostalSuburb()
    {
        return $this->postalSuburb;
    }

    /**
     * Set postalCode
     *
     * @param integer $postalCode
     *
     * @return Company
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;

        return $this;
    }

    /**
     * Get postalCode
     *
     * @return integer
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * Set postalProvince
     *
     * @param string $postalProvince
     *
     * @return Company
     */
    public function setPostalProvince($postalProvince)
    {
        $this->postalProvince = $postalProvince;

        return $this;
    }

    /**
     * Get postalProvince
     *
     * @return string
     */
    public function getPostalProvince()
    {
        return $this->postalProvince;
    }

    /**
     * Set postalCountry
     *
     * @param string $postalCountry
     *
     * @return Company
     */
    public function setPostalCountry($postalCountry)
    {
        $this->postalCountry = $postalCountry;

        return $this;
    }

    /**
     * Get postalCountry
     *
     * @return string
     */
    public function getPostalCountry()
    {
        return $this->postalCountry;
    }

    /**
     * Set currency
     *
     * @param string $currency
     *
     * @return Company
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * Get currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Set email1
     *
     * @param string $email1
     *
     * @return Company
     */
    public function setEmail1($email1)
    {
        $this->email1 = $email1;

        return $this;
    }

    /**
     * Get email1
     *
     * @return string
     */
    public function getEmail1()
    {
        return $this->email1;
    }

    /**
     * Set email2
     *
     * @param string $email2
     *
     * @return Company
     */
    public function setEmail2($email2)
    {
        $this->email2 = $email2;

        return $this;
    }

    /**
     * Get email2
     *
     * @return string
     */
    public function getEmail2()
    {
        return $this->email2;
    }

    /**
     * Set email3
     *
     * @param string $email3
     *
     * @return Company
     */
    public function setEmail3($email3)
    {
        $this->email3 = $email3;

        return $this;
    }

    /**
     * Get email3
     *
     * @return string
     */
    public function getEmail3()
    {
        return $this->email3;
    }

    /**
     * Set telephone1
     *
     * @param string $telephone1
     *
     * @return Company
     */
    public function setTelephone1($telephone1)
    {
        $this->telephone1 = $telephone1;

        return $this;
    }

    /**
     * Get telephone1
     *
     * @return string
     */
    public function getTelephone1()
    {
        return $this->telephone1;
    }

    /**
     * Set telephone2
     *
     * @param string $telephone2
     *
     * @return Company
     */
    public function setTelephone2($telephone2)
    {
        $this->telephone2 = $telephone2;

        return $this;
    }

    /**
     * Get telephone2
     *
     * @return string
     */
    public function getTelephone2()
    {
        return $this->telephone2;
    }

    /**
     * Set telephone3
     *
     * @param string $telephone3
     *
     * @return Company
     */
    public function setTelephone3($telephone3)
    {
        $this->telephone3 = $telephone3;

        return $this;
    }

    /**
     * Get telephone3
     *
     * @return string
     */
    public function getTelephone3()
    {
        return $this->telephone3;
    }

    /**
     * Set fax1
     *
     * @param string $fax1
     *
     * @return Company
     */
    public function setFax1($fax1)
    {
        $this->fax1 = $fax1;

        return $this;
    }

    /**
     * Get fax1
     *
     * @return string
     */
    public function getFax1()
    {
        return $this->fax1;
    }

    /**
     * Set fax2
     *
     * @param string $fax2
     *
     * @return Company
     */
    public function setFax2($fax2)
    {
        $this->fax2 = $fax2;

        return $this;
    }

    /**
     * Get fax2
     *
     * @return string
     */
    public function getFax2()
    {
        return $this->fax2;
    }

    /**
     * Set fax3
     *
     * @param string $fax3
     *
     * @return Company
     */
    public function setFax3($fax3)
    {
        $this->fax3 = $fax3;

        return $this;
    }

    /**
     * Get fax3
     *
     * @return string
     */
    public function getFax3()
    {
        return $this->fax3;
    }

    /**
     * Set logo
     *
     * @param string $logo
     *
     * @return Company
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;

        return $this;
    }

    /**
     * Get logo
     *
     * @return string
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return Company
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set createdBy
     *
     * @param string $createdBy
     *
     * @return Company
     */
    public function setCreatedBy($createdBy)
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * Get createdBy
     *
     * @return string
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * Set active
     *
     * @param boolean $active
     *
     * @return Company
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return boolean
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set template
     *
     * @param string $template
     *
     * @return Company
     */
    public function setTemplate($template)
    {
        $this->template = $template;

        return $this;
    }

    /**
     * Get template
     *
     * @return string
     */
    public function getTemplate()
    {
        return $this->template;
    }

    /**
     * Set flex1
     *
     * @param string $flex1
     *
     * @return Company
     */
    public function setFlex1($flex1)
    {
        $this->flex1 = $flex1;

        return $this;
    }

    /**
     * Get flex1
     *
     * @return string
     */
    public function getFlex1()
    {
        return $this->flex1;
    }

    /**
     * Set flex2
     *
     * @param string $flex2
     *
     * @return Company
     */
    public function setFlex2($flex2)
    {
        $this->flex2 = $flex2;

        return $this;
    }

    /**
     * Get flex2
     *
     * @return string
     */
    public function getFlex2()
    {
        return $this->flex2;
    }

    /**
     * Set flex3
     *
     * @param string $flex3
     *
     * @return Company
     */
    public function setFlex3($flex3)
    {
        $this->flex3 = $flex3;

        return $this;
    }

    /**
     * Get flex3
     *
     * @return string
     */
    public function getFlex3()
    {
        return $this->flex3;
    }

    /**
     * Set flex4
     *
     * @param string $flex4
     *
     * @return Company
     */
    public function setFlex4($flex4)
    {
        $this->flex4 = $flex4;

        return $this;
    }

    /**
     * Get flex4
     *
     * @return string
     */
    public function getFlex4()
    {
        return $this->flex4;
    }

    /**
     * Set flex5
     *
     * @param string $flex5
     *
     * @return Company
     */
    public function setFlex5($flex5)
    {
        $this->flex5 = $flex5;

        return $this;
    }

    /**
     * Get flex5
     *
     * @return string
     */
    public function getFlex5()
    {
        return $this->flex5;
    }
}
