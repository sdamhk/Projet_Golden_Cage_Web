<?php

namespace Proxies\__CG__\MyApp\ProjetFinalBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class client extends \MyApp\ProjetFinalBundle\Entity\client implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function setCin($cin)
    {
        $this->__load();
        return parent::setCin($cin);
    }

    public function getCin()
    {
        $this->__load();
        return parent::getCin();
    }

    public function setNom($nom)
    {
        $this->__load();
        return parent::setNom($nom);
    }

    public function getNom()
    {
        $this->__load();
        return parent::getNom();
    }

    public function setPrenom($prenom)
    {
        $this->__load();
        return parent::setPrenom($prenom);
    }

    public function getPrenom()
    {
        $this->__load();
        return parent::getPrenom();
    }

    public function setGouvernorat($gouvernorat)
    {
        $this->__load();
        return parent::setGouvernorat($gouvernorat);
    }

    public function getGouvernorat()
    {
        $this->__load();
        return parent::getGouvernorat();
    }

    public function setDelegation($delegation)
    {
        $this->__load();
        return parent::setDelegation($delegation);
    }

    public function getDelegation()
    {
        $this->__load();
        return parent::getDelegation();
    }

    public function setTel($tel)
    {
        $this->__load();
        return parent::setTel($tel);
    }

    public function getTel()
    {
        $this->__load();
        return parent::getTel();
    }

    public function setAdresse($adresse)
    {
        $this->__load();
        return parent::setAdresse($adresse);
    }

    public function getAdresse()
    {
        $this->__load();
        return parent::getAdresse();
    }

    public function setPassword($password)
    {
        $this->__load();
        return parent::setPassword($password);
    }

    public function getPassword()
    {
        $this->__load();
        return parent::getPassword();
    }

    public function setEmail($email)
    {
        $this->__load();
        return parent::setEmail($email);
    }

    public function getEmail()
    {
        $this->__load();
        return parent::getEmail();
    }

    public function setLogin($login)
    {
        $this->__load();
        return parent::setLogin($login);
    }

    public function getLogin()
    {
        $this->__load();
        return parent::getLogin();
    }

    public function setDateNaissance($dateNaissance)
    {
        $this->__load();
        return parent::setDateNaissance($dateNaissance);
    }

    public function getDateNaissance()
    {
        $this->__load();
        return parent::getDateNaissance();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'cin', 'nom', 'prenom', 'gouvernorat', 'delegation', 'tel', 'adresse', 'password', 'email', 'login', 'dateNaissance');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields as $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}