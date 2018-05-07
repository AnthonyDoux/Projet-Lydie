<?php
/**
 * Created by PhpStorm.
 * User: wcs
 * Date: 23/10/17
 * Time: 10:57
 * PHP version 7
 */

namespace Model;

/**
 * Class Item
 *
 */
class Home
{
    private $id;

    private $picture1;

    private $picture2;

    private $picture3;

    private $picture4;

    private $picture5;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     *
     * @return Item
     */
    public function setId($id): Item
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPicture1(): string
    {
        return $this->picture1;
    }

    /**
     * @param mixed $title
     *
     * @return Item
     */
    public function setPicture1($title):Item
    {
        $this->picture1 = $picture1;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPicture2(): string
    {
        return $this->picture2;
    }

    /**
     * @param mixed $title
     *
     * @return Item
     */
    public function setPicture2($title):Item
    {
        $this->picture2 = $picture2;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPicture3(): string
    {
        return $this->picture3;
    }

    /**
     * @param mixed $title
     *
     * @return Item
     */
    public function setPicture3($title):Item
    {
        $this->picture3 = $picture3;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPicture4(): string
    {
        return $this->picture4;
    }

    /**
     * @param mixed $title
     *
     * @return Item
     */
    public function setPicture4($title):Item
    {
        $this->picture4 = $picture4;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPicture5(): string
    {
        return $this->picture5;
    }

    /**
     * @param mixed $title
     *
     * @return Item
     */
    public function setPicture5($title):Item
    {
        $this->picture5 = $picture5;

        return $this;
    }
}
