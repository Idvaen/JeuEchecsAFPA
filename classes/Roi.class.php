<?php

class Roi extends PieceEchecs
{

    public function peutAller(int $coordX, int $coordY)
    {
        $coord_origin_x = intval($this->getX());
        $coord_origin_y = intval($this->getY());
        if ($this->canBeOnBoard($coordX, $coordY)) {
            // switch ([$coordX, $coordY]) {
            //     case [$coord_origin_x - 1, $coord_origin_y + 1]:
            //         return true;
            //     case [$coord_origin_x + 1, $coord_origin_y + 1]:
            //         return true;
            //     case [$coord_origin_x - 1, $coord_origin_y - 1]:
            //         return true;
            //     case [$coord_origin_x + 1, $coord_origin_y - 1]:
            //         return true;
            //     case [$coord_origin_x - 1, $coord_origin_y + 1]:
            //         return true;
            //     case [$coord_origin_x + 1, $coord_origin_y + 1]:
            //         return true;
            //     case [$coord_origin_x - 1, $coord_origin_y - 1]:
            //         return true;
            //     case [$coord_origin_x + 1, $coord_origin_y - 1]:
            //         return true;
            //     default:
            //         return false;
            // }

            $distX = abs($coordX - $coord_origin_x);
            $distY = abs($coordY - $coord_origin_y);
            if ($distX > 1 || $distY > 1)
                return false;

            if ($distX == 0 && $distY == 0)
                return false;

            return true;


        }

        return false;
    }
}

?>