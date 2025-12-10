<?php
require_once "PieceEchecsException.class.php";

class PieceEchecs
{
    public const BLANCHE = 1;
    public const NOIRE = 2;
    private int $x;
    private int $y;
    private int $color;
    public function __construct(int $coordX, int $coordY, int $color)
    {
        $this->setX($coordX);
        $this->setY($coordY);
        $this->setColor($color);
    }

    public function __toString()
    {
        // return sprintf("%d %d", $this->getX(), $this->getY());
        return get_class($this) . " " . ($this->color == self::BLANCHE ? "blanche" : "noire")
            . " en " . "($this->x,$this->y)";
    }

    public function setColor(int $color)
    {
        if ($color == self::BLANCHE)
            $this->color = self::BLANCHE;
        elseif ($color == self::NOIRE)
            $this->color = self::NOIRE;
        else
            throw new PieceEchecsException("PB couleur incorrecte");
        return $this;

    }

    public function getColor()
    {
        return $this->color;
    }

    public function getColorCase()
    {
        return $this->color;
    }
    /**
     * Get the value of x
     */
    public function getX(): int
    {
        return $this->x;
    }

    /**
     * Set the value of x
     */
    public function setX(int $x)
    {
        if (in_array($x, range(1, 8))) {
            $this->x = $x;
            return $this;
        }
        throw new PieceEchecsException("Position x incorrecte");

    }
    /**
     * Get the value of y
     */
    public function getY(): int
    {
        return $this->y;
    }

    /**
     * Set the value of y
     */
    public function setY(int $y)
    {
        if (in_array($y, range(1, 8))) {
            $this->y = $y;
            return $this;
        }
        throw new PieceEchecsException("Position y incorrecte");

    }


}

?>