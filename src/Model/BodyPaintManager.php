<?php
/**
 * Created by PhpStorm.
 * User: sylvain
 * Date: 07/03/18
 * Time: 18:20
 * PHP version 7
 */

namespace Model;

/**
 *
 */
class BodyPaintManager extends AbstractManager
{
    const TABLE = 'bodypaint';

    /**
     *  Initializes this class.
     */
    public function __construct()
    {
        parent::__construct(self::TABLE);
        $this->className =  __NAMESPACE__ . '\\' .'BodyPaint';
    }
}