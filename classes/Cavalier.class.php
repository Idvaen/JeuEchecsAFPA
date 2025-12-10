<?php
class Cavalier extends PieceEchecs
{
    private string $cavalier = 'C';
    public function __construct(string $cavalier = 'C', int $x = 1,int $y = 2,int $color = 1)
    {
        $this->cavalier = $cavalier;
        parent::__construct($x, $y, $color);
    }

    public function __toString() : string{
        return get_class($this) . " " . ($this->getColor() == self::BLANCHE ? "blanche" : "noire")
            . " en " . "(".$this->getX().",".$this->getY().")";
    }



    // public function peutAller(int $coordX, int $coordY){
    //     $this->setX($coordX) = $coordX;
    //     $this->setX($coordX) = $coordX;
    //     return $this;
    // }

}

?>