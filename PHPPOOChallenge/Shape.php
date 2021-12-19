<?php

abstract class Shape
{
    /**
     * @var string
     */
    public $name;
    /**
     * @var int
     */
    protected $width;
    /**
     * @var int
     */
    protected $length;
    /**
     * @var string
     */
    private $id;
    
    const TYPE = 1;

    /**
     * @param int $width
     * @param int $length
     */
    public function __construct(int $width = null, int $length = null)
    {
        $this->generateId();
        $this->setWidth($width);
        $this->setLength($length);
    }

    /**
     * @return void
     */
    protected function generateId()
    {
        $this->setId(md5(uniqid(rand(), true)));
    }
    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @param string
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of length
     * @return int
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * Set the value of length
     *
     * @param int $length
     *
     * @return self
     */
    public function setLength($length)
    {
        $this->length = $length;

        return $this;
    }

    /**
     * Get the value of width
     *
     * @return int
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param int $width
     *
     * @return self
     */
    public function setWidth($width)
    {
        $this->width = $width;

        return $this;
    }

    /**
     * Get the value of name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return int
     */
    abstract public function getArea();

    public function duplicate()
    {
        $shape = $this;
        $clone =  clone $shape;
        return $clone;
    }
}
