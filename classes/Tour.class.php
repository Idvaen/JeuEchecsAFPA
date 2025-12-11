<?php

class Tour extends PieceEchecs
{
    public function peutAller(int $coordX, int $coordY)
    {
        $coord_origin_x = intval($this->getX());
        $coord_origin_y = intval($this->getY());


        $distX = abs($coordX - $coord_origin_x);
        $distY = abs($coordY - $coord_origin_y);

        if ($distX != $distY && $distY != 0) {
            if ($this->canBeOnBoard($coordX, $coordY))
                return true;
        }

        return false;

    }

    // function peutManger($piece)
    // {
    //     if ($piece->getColor() != $this->getColor() && $this->peutAller($piece->getX(), $piece->getY()))
    //         return true;
    //     return false;
    // }

}

?>