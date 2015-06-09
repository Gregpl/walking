<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @ORM\Entity
 * @ORM\Table(name="visualization")
 */
class Visualization
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @Assert\NotBlank
     * @ORM\OneToOne(targetEntity="Offer")
     * @ORM\JoinColumn(name="offer_id", referencedColumnName="id")
     **/
    private $offer;

    /**
     * @var string
     *
     * @Assert\NotBlank
     * @ORM\Column(name="element", type="string", length=255)
     */
    private $element;

    /**
     * @var string
     *
     * @ORM\Column(name="element_size", type="string", nullable=true, length=255, options={"default":null}))
     */
    private $elementSize;

    /**
     * @var string
     *
     * @Assert\NotBlank
     * @ORM\Column(name="element_scale", type="string", length=255, options={"default":"1,1,1"}))
     */
    private $elementScale;

    /**
     * @var string
     *
     * @ORM\Column(name="element_code", type="text", nullable=true, options={"default":null}))
     */
    private $elementCode;

    /**
     * @var string
     *
     * @ORM\Column(name="element_file", type="string", nullable=true, length=255, options={"default":null}))
     */
    private $elementFile;

    /**
     * @var string
     *
     * @ORM\Column(name="color", type="string", length=40, nullable=true, options={"default":"#ffffff"}))
     */
    private $color;

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
