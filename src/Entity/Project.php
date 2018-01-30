<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProjectRepository")
 * @Vich\Uploadable
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
     * @Vich\UploadableField(mapping="project", fileNameProperty="projectimg")
     * @var File
     */
    private $projectimgFile;

    /**
     * @ORM\Column(type="string")
     */
    private $projectimg;

    /**
     * @ORM\Column(type="datetime")
     * @var \DateTime
     */
    private $updatedAt;

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

    /**
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $projectimg
     * @return Project
     */
    public function setProjectimgFile(File $projectimg = null)
    {
        $this->projectimgFile = $projectimg;

        if($projectimg) {
            $this->updatedAt = new \DateTime('now');
        }
    }

    /**
     * @return mixed
     */
    public function getProjectimgFile()
    {
        return $this->projectimgFile;
    }
}
