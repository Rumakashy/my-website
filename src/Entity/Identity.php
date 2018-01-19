<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\HttpFoundation\File\File;

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
     * @Vich\UploadableField(mapping="images", fileNameProperty="backgroundimg")
     *
     * @var File
     *
     */
    private $backgroundimgFile;

    /**
     * @ORM\Column(type="string")
     */
    private $backgroundimg;

    /**
     * @Vich\UploadableField(mapping="images", fileNameProperty="profileimg")
     *
     * @var File
     *
     */
    private $profileimgFile;

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

    /**
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $backgroundimg
     *
     * @return Identity
     */
    public function setBackgroundimgFile(File $backgroundimg = null)
    {
        $this->backgroundimgFile = $backgroundimg;

        // VERY IMPORTANT:
        // It is required that at least one field changes if you are using Doctrine,
        // otherwise the event listeners won't be called and the file is lost
        if ($backgroundimg) {
            // if 'updatedAt' is not defined in your entity, use another property
            $this->updatedAt = new \DateTime('now');
        }

        return $this;
    }

    /**
     * @return File|null
     */
    public function getBackgroundimgFile()
    {
        return $this->backgroundimgFile;
    }

    /**
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $backgroundimg
     *
     * @return Identity
     */
    public function setProfileimgFile(File $profileimg = null)
    {
        $this->profileimgFile = $profileimg;

        // VERY IMPORTANT:
        // It is required that at least one field changes if you are using Doctrine,
        // otherwise the event listeners won't be called and the file is lost
        if ($profileimg) {
            // if 'updatedAt' is not defined in your entity, use another property
            $this->updatedAt = new \DateTime('now');
        }

        return $this;
    }

    /**
     * @return File|null
     */
    public function getProfileimgFile()
    {
        return $this->profileimgFile;
    }
}
