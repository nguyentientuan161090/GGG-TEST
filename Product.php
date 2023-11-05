<?php

class Product {

    /**
     * @var int
     */
    private $amazonPrice;
    
    /**
     * @var int
     */
    private $weight;

    /**
     * @var int
     */
    private $width;

    /**
     * @var int
     */
    private $height;

    /**
     * @var int
     */
    private $depth;

    /**
     * @var string
     */
    private $type;

    /**
     * @var int
     */
    private $qty = 1;


    /**
     * Get the value of amazonPrice
     *
     * @return  int
     */ 
    public function getAmazonPrice()
    {
        return $this->amazonPrice;
    }

    /**
     * Set the value of amazonPrice
     *
     * @param  int  $amazonPrice
     *
     * @return  self
     */ 
    public function setAmazonPrice(int $amazonPrice)
    {
        $this->amazonPrice = $amazonPrice;

        return $this;
    }

    /**
     * Get the value of weight
     *
     * @return  int
     */ 
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set the value of weight
     *
     * @param  int  $weight
     *
     * @return  self
     */ 
    public function setWeight(int $weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Get the value of width
     *
     * @return  int
     */ 
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Set the value of width
     *
     * @param  int  $width
     *
     * @return  self
     */ 
    public function setWidth(int $width)
    {
        $this->width = $width;

        return $this;
    }

    /**
     * Get the value of height
     *
     * @return  int
     */ 
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Set the value of height
     *
     * @param  int  $height
     *
     * @return  self
     */ 
    public function setHeight(int $height)
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Get the value of depth
     *
     * @return  int
     */ 
    public function getDepth()
    {
        return $this->depth;
    }

    /**
     * Set the value of depth
     *
     * @param  int  $depth
     *
     * @return  self
     */ 
    public function setDepth(int $depth)
    {
        $this->depth = $depth;

        return $this;
    }

    /**
     * Get the value of type
     *
     * @return  string
     */ 
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of type
     *
     * @param  string  $type
     *
     * @return  self
     */ 
    public function setType(string $type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get the value of qty
     *
     * @return  int
     */ 
    public function getQty()
    {
        return $this->qty;
    }

    /**
     * Set the value of qty
     *
     * @param  int  $qty
     *
     * @return  self
     */ 
    public function setQty(int $qty)
    {
        $this->qty = $qty;

        return $this;
    }

    /**
     * Get the value of Dimension
     */ 
    function getDimension() {
        $Dimension = $this->getWidth() * $this->getHeight() * $this->getDepth();
        return $Dimension;
    }
}