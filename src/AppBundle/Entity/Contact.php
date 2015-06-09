<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @ORM\Entity
 * @ORM\Table(name="contact")
 */
class Contact
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @Assert\NotBlank
     * @ORM\Column(name="fog", type="string", length=100)
     */
    private $name;

    /**
     * @var string
     *
     * @Assert\NotBlank
     * @Assert\Email
     * @ORM\Column(name="email", type="string", length=100)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="subject", type="string", length=100, nullable=true, options={"default":null})
     */
    private $subject;

    /**
     * @var string
     *
     * @ORM\Column(name="position", type="string", length=100, nullable=true, options={"default":null})
     */
    private $position;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=100, nullable=true, options={"default":null})
     */
    private $phone;

    /**
     * @var string
     * 
     * @Assert\NotBlank
     * @ORM\Column(name="message", type="text")
     */
    private $message;

    /**
     * @var \DateTime $created
     *
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(type="datetime")
     */
    private $created;

    /**
     * @var \DateTime $updated
     *
     * @Gedmo\Timestampable(on="update")
     * @ORM\Column(type="datetime")
     */
    private $updated;
}
