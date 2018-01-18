<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\IndentityRepository")
 */
class Identity
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="string")
     */
    private $backgroundimg;

    /**
     * @ORM\Column(type="string")
     */
    private $profileimg;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return Identity
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     * @return Identity
     */
    public function setDesciption($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBackgroundimg()
    {
        return $this->backgroundimg;
    }

    /**
     * @param mixed $backgroundimg
     * @return Identity
     */
    public function setBackgroundimg($backgroundimg)
    {
        $this->backgroundimg = $backgroundimg;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getProfileimg()
    {
        return $this->profileimg;
    }

    /**
     * @param mixed $profileimg
     * @return Identity
     */
    public function setProfileimg($profileimg)
    {
        $this->profileimg = $profileimg;
        return $this;
    }
}
