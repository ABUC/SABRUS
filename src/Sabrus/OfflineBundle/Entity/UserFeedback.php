<?php

namespace Sabrus\OfflineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserFeedback
 *
 * @ORM\Table(name="user_feedback", uniqueConstraints={@ORM\UniqueConstraint(name="id", columns={"id"})})
 * @ORM\Entity(repositoryClass="Sabrus\OfflineBundle\Entity\UserFeedBackRepository")
 */
class UserFeedback
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=50, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="user_from", type="string", length=50, nullable=true)
     */
    private $user_from;

    /**
     * @var string
     *
     * @ORM\Column(name="user_type", type="integer", nullable=true)
     */
    private $user_type = 0;

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
     * @return UserFeedback
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
     * Set email
     *
     * @param string $email
     * @return UserFeedback
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set user_from
     *
     * @param string $userFrom
     * @return UserFeedback
     */
    public function setUserFrom($userFrom)
    {
        $this->user_from = $userFrom;

        return $this;
    }

    /**
     * Get user_from
     *
     * @return string 
     */
    public function getUserFrom()
    {
        return $this->user_from;
    }

    /**
     * Set user_type
     *
     * @param integer $userType
     * @return UserFeedback
     */
    public function setUserType($userType)
    {
        $this->user_type = $userType;

        return $this;
    }

    /**
     * Get user_type
     *
     * @return integer 
     */
    public function getUserType()
    {
        return $this->user_type;
    }
}
