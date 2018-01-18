<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProjectRepository")
 */
class Project
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $projecttitle;

    /**
     * @ORM\Column(type="text")
     */
    private $projectdescription;

    /**
     * @ORM\Column(type="string")
     */
    private $projectimg;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return Project
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getProjecttitle()
    {
        return $this->projecttitle;
    }

    /**
     * @param mixed $projecttitle
     * @return Project
     */
    public function setProjecttitle($projecttitle)
    {
        $this->projecttitle = $projecttitle;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getProjectdescription()
    {
        return $this->projectdescription;
    }

    /**
     * @param mixed $projectdescription
     * @return Project
     */
    public function setProjectdescription($projectdescription)
    {
        $this->projectdescription = $projectdescription;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getProjectimg()
    {
        return $this->projectimg;
    }

    /**
     * @param mixed $projectimg
     * @return Project
     */
    public function setProjectimg($projectimg)
    {
        $this->projectimg = $projectimg;
        return $this;
    }
}
