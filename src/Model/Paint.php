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
 * Class Paint
 *
 */
class Paint
{
    private $id;

    private $title;

    private $picture;

    private $content;

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
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     *
     * @return Item
     */
    public function setTitle($title):Item
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPicture(): string
    {
        return $this->picture;
    }

    /**
     * @param mixed $title
     *
     * @return Item
     */
    public function setPicture($picture):Item
    {
        $this->picture = $picture;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @param mixed $title
     *
     * @return Item
     */
    public function setContent($content):Item
    {
        $this->content = $content;

        return $this;
    }
}
