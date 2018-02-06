<?php
/**
 * @Entity(readOnly=true) @Table(name="products")
 * @Cache(usage="READ_ONLY", region="product_region")
 */
class Product
{
    /** @Id @Column(type="integer") @GeneratedValue */
    protected $id;
    /** @Column(type="string") */
    protected $name;

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
}
