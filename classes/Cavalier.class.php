<?php
class Cavalier extends PieceEchecs
{
    private string $cavalier = 'C';
    public function __construct(string $cavalier = 'C', int $x = 2,int $y = 1,int $color = 1)
    {
        $this->cavalier = $cavalier;
        parent::__construct($x, $y, $color);
    }


    public function peutAller(int $coordX, int $coordY){
        $coord_origin_x = intval($this->getX());
        $coord_origin_y = intval($this->getY());

        if ($this->getX() && $this->getY()){
            $peut_aller = [];
            for ($x = 1; $x <= $coord_origin_x+2; $x++){
                for ($y = 1; $y <= $coord_origin_y+2; $y++){
                }
            }
        }
        return true;
    }

}

?>