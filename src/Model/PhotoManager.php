<?php

namespace Model;

/**
 * Class PhotoManager
 * @package Model
 */
class PhotoManager extends AbstractManager
{
    const TABLE = 'photo';

    public function __construct()
    {
        parent::__construct(self::TABLE);
    }

}
