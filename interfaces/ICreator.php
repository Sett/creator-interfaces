<?php
namespace funcraft\creator\interfaces;

/**
 * Interface ICreator
 * @package funcraft\creator\interfaces
 * @author Funcraft <what4me@yandex.ru>
 */
interface ICreator
{
    const TABLE_NAME = 'funcraft__creator';

    const FIELD_ID = 'id';

    /**
     * @return int
     */
    public function getId():int;

    /**
     * @return string
     */
    public function getName():string;
}
