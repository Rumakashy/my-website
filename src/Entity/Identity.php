<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * @ORM\Entity(repositoryClass="App\Repository\IndentityRepository")
 * @Vich\Uploadable
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
     * @Vich\UploadableField(mapping="identity", fileNameProperty="backgroundimg")
     * @var File
     */
    private $backgroundimgFile;

    /**
     * @ORM\Column(type="string")
     */
    private $backgroundimg;

    /**
     * @Vich\UploadableField(mapping="identity", fileNameProperty="profileimg")
     * @var File
     */
    private $profileimgFile;

    /**
     * @ORM\Column(type="string")
     */
    private $profileimg;

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
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $backgroundimg
     * @return Identity
     */
    public function setBackgroundimgFile(File $backgroundimg = null)
    {
        $this->backgroundimgFile = $backgroundimg;

        if($backgroundimg) {
            $this->updatedAt = new \DateTime('now');
        }
    }

    /**
     * @return mixed
     */
    public function getBackgroundimgFile()
    {
        return $this->backgroundimgFile;
    }

    /**
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $profileimg
     * @return Identity
     */
    public function setProfileimgFile(File $profileimg = null)
    {
        $this->profileimgFile = $profileimg;

        if($profileimg) {
            $this->updatedAt = new \DateTime('now');
        }
    }

    /**
     * @return mixed
     */
    public function getProfileimgFile()
    {
        return $this->profileimgFile;
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
