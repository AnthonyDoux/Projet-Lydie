<?php

namespace Model;

/**
 * Class TextManager
 * @package Model
 */
class TextManager extends AbstractManager
{
    const TABLE = 'text';

    public function __construct()
    {
        parent::__construct(self::TABLE);
    }

}
