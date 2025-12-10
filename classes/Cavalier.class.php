<?php
class Cavalier extends PieceEchecs
{
    public function peutAller(int $coordX, int $coordY)
    {

        if ($this->getX() && $this->getY()) {
            $coord_origin_x = intval($this->getX());
            $coord_origin_y = intval($this->getY());

            switch ([$coordX, $coordY]) {
                case [$coord_origin_x - 1, $coord_origin_y + 2]:
                    if ($coord_origin_x - 1 > 0 && $coord_origin_y + 2 < 9) {
                        $peut_aller[] = [$coord_origin_x - 1, $coord_origin_y + 2];
                        // return [1, $peut_aller, true];
                        return true;
                    }
                    return false;
                case [$coord_origin_x + 1, $coord_origin_y + 2];
                    if ($coord_origin_x + 1 < 9 && $coord_origin_y + 2 < 9) {
                        $peut_aller[] = [$coord_origin_x + 1, $coord_origin_y + 2];
                        // return [2, $peut_aller, true];
                        return true;
                    }
                    return false;
                case [$coord_origin_x + 2, $coord_origin_y + 1]:
                    if ($coord_origin_x + 2 < 9 && $coord_origin_y + 1 < 9) {
                        $peut_aller[] = [$coord_origin_x + 2, $coord_origin_y + 1];
                        // return [3, $peut_aller, true];
                        return true;
                    }
                    return false;
                case [$coord_origin_x + 2, $coord_origin_y - 1];
                    if ($coord_origin_x + 2 < 9 && $coord_origin_y - 1 > 0) {
                        $peut_aller[] = [$coord_origin_x + 2, $coord_origin_y - 1];
                        // return [4, $peut_aller, true];
                        return true;
                    }
                    return false;
                case [$coord_origin_x - 1, $coord_origin_y - 2]:
                    if ($coord_origin_x - 1 > 0 && $coord_origin_y - 2 > 0) {
                        $peut_aller[] = [$coord_origin_x - 1, $coord_origin_y - 2];
                        // return [5, $peut_aller, true];
                        return true;
                    }
                    return false;
                case [$coord_origin_x + 1, $coord_origin_y - 2];
                    if ($coord_origin_x + 1 < 9 && $coord_origin_y - 2 > 0) {
                        $peut_aller[] = [$coord_origin_x + 1, $coord_origin_y - 2];
                        // return [6, $peut_aller, true];
                        return true;
                    }
                    return false;
                case [$coord_origin_x - 2, $coord_origin_y + 1]:
                    if ($coord_origin_x - 2 > 0 && $coord_origin_y + 1 < 9) {
                        $peut_aller[] = [$coord_origin_x - 2, $coord_origin_y + 1];
                        // return [7, $peut_aller, true];
                        return true;
                    }
                    return false;
                case [$coord_origin_x - 2, $coord_origin_y - 1];
                    if ($coord_origin_x - 2 > 0 && $coord_origin_y - 1 > 0) {
                        $peut_aller[] = [$coord_origin_x - 2, $coord_origin_y - 1];
                        // return [8, $peut_aller, true];
                        return true;
                    }
                    return false;
                default:
                    return false;

            }
        } else
            throw new PieceEchecsException('Pas de coordones original');
    }

    // public function peutAller(int $coordX, int $coordY)
    // {
    //     $coord_origin_x = intval($this->getX());
    //     $coord_origin_y = intval($this->getY());
    //     $distX = abs($coordX - $coord_origin_x);
    //     $distY = abs($coordY - $coord_origin_y);
    //     if (in_array($coordX, range(1, 8)) && in_array($coordY, range(1, 8)))
    //         return pow($distX, 2) + pow($distY, 2) == 5 ? true : false;
    //     return false;
    // }


}

?>