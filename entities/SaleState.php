<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * SaleState
 *
 * @ORM\Table(name="sale_state", indexes={@ORM\Index(name="fk_state_idx", columns={"id_state"}), @ORM\Index(name="fk_sale_idx", columns={"id_sale"})})
 * @ORM\Entity
 */
class SaleState
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    public $id;

    /**
     * @var boolean
     *
     * @ORM\Column(name="active", type="boolean", nullable=false)
     */
    public $active;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_update", type="datetime", nullable=false)
     */
    public $lastUpdate;

    /**
     * @var string
     *
     * @ORM\Column(name="motive", type="string", length=45, nullable=false)
     */
    public $motive;

    /**
     * @var \Sale
     *
     * @ORM\ManyToOne(targetEntity="Sale")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_sale", referencedColumnName="id")
     * })
     */
    public $idSale;

    /**
     * @var \State
     *
     * @ORM\ManyToOne(targetEntity="State")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_state", referencedColumnName="id")
     * })
     */
    public $idState;


}
