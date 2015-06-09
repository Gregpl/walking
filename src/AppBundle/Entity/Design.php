<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @ORM\Entity
 * @ORM\Table(name="design")
 */
class Design
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
     * @ORM\Column(name="fog", type="string", length=255, nullable=true, options={"default":null})
     */
    private $fog;

    /**
     * @var string
     *
     * @Assert\NotBlank
     * @ORM\Column(name="lights", type="text")
     */
    private $lights;

    /**
     * @var string
     *
     * @Assert\NotBlank
     * @ORM\Column(name="plane", type="text")
     */
    private $plane;

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
