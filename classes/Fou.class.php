<?php
class Fou_class extends PieceEchecs
{

    public function peutAller(int $coordX, int $coordY)
    {
        $coord_origin_x = intval($this->getX());
        $coord_origin_y = intval($this->getY());
    }

}
?>