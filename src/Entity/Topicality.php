<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TopicalityRepository")
 */
class Topicality
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
    private $topicaltitle;

    /**
     * @ORM\Column(type="text")
     */
    private $topicaldescription;

    /**
     * @ORM\Column(type="string")
     */
    private $topicalimg;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return Topicality
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTopicaltitle()
    {
        return $this->topicaltitle;
    }

    /**
     * @param mixed $topicaltitle
     * @return Topicality
     */
    public function setTopicaltitle($topicaltitle)
    {
        $this->topicaltitle = $topicaltitle;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTopicaldescription()
    {
        return $this->topicaldescription;
    }

    /**
     * @param mixed $topicaldescription
     * @return Topicality
     */
    public function setTopicaldescription($topicaldescription)
    {
        $this->topicaldescription = $topicaldescription;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTopicalimg()
    {
        return $this->topicalimg;
    }

    /**
     * @param mixed $topicalimg
     * @return Topicality
     */
    public function setTopicalimg($topicalimg)
    {
        $this->topicalimg = $topicalimg;
        return $this;
    }
}
