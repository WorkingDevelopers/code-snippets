<?php
/**
 * Created by Christoph Graupner <ch.graupner@workingdeveloper.net>.
 *
 * Copyright (c) 2015 WorkingDevelopers.NET
 */

namespace WorkingDevelopers\CodeSnippets\CsDomainBundle\Entity;

use WorkingDevelopers\CodeSnippets\CoreBundle\Entity\UpdateTraceableTrait;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class ProgrammingLanguage
 *
 * @ORM\Table(name="programming_language")
 * @ORM\Entity()
 * @ORM\HasLifecycleCallbacks
 *
 * @package WorkingDevelopers\CodeSnippets\CsDomainBundle\Entity
 * @author Christoph Graupner <ch.graupner@workingdeveloper.net>
 */
class ProgrammingLanguage
{

    use UpdateTraceableTrait;

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(name="name", type="string", length=100)
     * @var string
     */
    protected $name;

    /**
     * @ORM\Column(name="name_canonical", type="string", length=100)
     * @var string
     */
    protected $nameCanonical;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return ProgrammingLanguage
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return ProgrammingLanguage
     */
    public function setName($name)
    {
        $this->name = trim($name);
        $this->nameCanonical = strtolower($this->name);
        return $this;
    }

    /**
     * @return string
     */
    public function getNameCanonical()
    {
        return $this->nameCanonical;
    }

}