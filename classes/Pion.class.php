<?php

class Pion extends PieceEchecs
{
    public function peutAller(int $coordX, int $coordY)
    {
        if ($coordX < 0 || $coordX > 8 || $coordY < 0 || $coordY > 8)
            return false;

        $coord_origin_x = intval($this->getX());
        $coord_origin_y = intval($this->getY());

        if ($this->getColor() == 1) {
            if ($coord_origin_y !== 2) {
                if ($coordX == $coord_origin_x && $coordY == $coord_origin_y + 1)
                    return true;
            } elseif ($coord_origin_y == 2) {
                if ($coordX == $coord_origin_x && ($coordY == $coord_origin_y + 1 || $coordY == $coord_origin_y + 2))
                    return true;
            }
            return false;
        } elseif ($this->getColor() == 2) {
            if ($coord_origin_y !== 7) {
                if ($coordX == $coord_origin_x && $coordY == $coord_origin_y - 1)
                    return true;
            } elseif ($coord_origin_y == 7) {
                if ($coordX == $coord_origin_x && ($coordY == $coord_origin_y - 1 || $coordY == $coord_origin_y - 2))
                    return true;
            }
            return false;
        }

        return false;
    }
}
?>