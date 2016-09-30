<?php
/**
 * Created by PhpStorm.
 * User: itrascastro
 * Date: 23/9/16
 * Time: 17:35
 */

namespace Model;


class Punto
{
    private $x;
    private $y;

    public function __construct($x, $y)
    {
        $this->setX($x);
        $this->setY($y);
    }

    public function desplazar(Punto $destino)
    {
        $this->setX($destino->getX());
        $this->setY($destino->getY());
    }

    /**
     * @return mixed
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * @return mixed
     */
    public function getY()
    {
        return $this->y;
    }

    /**
     * @param mixed $x
     */
    public function setX($x)
    {
        $this->x = (int) $x;

        return $this;
    }

    /**
     * @param mixed $y
     */
    public function setY($y)
    {
        $this->y = (int) $y;

        return $this;
    }

    function __toString()
    {
        return 'Punto{' . $this->getX() . ', ' . $this->getY() . '}';
    }

    public function esIgual(Punto $p)
    {
        if ($this->getX() == $p->getX() &&
            $this->getY() == $p->getY()) {
            return true;
        }

        return false;
    }


}