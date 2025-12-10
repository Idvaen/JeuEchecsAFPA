<?php
class Fou extends PieceEchecs
{

    public function peutAller(int $coordX, int $coordY)
    {
        $coord_origin_x = intval($this->getX());
        $coord_origin_y = intval($this->getY());

        // switch ([$coordX, $coordY]) {
        //     case [$coord_origin_x - 1, $coord_origin_y + 1]:
        //         if (in_array($coordX, range(1, 8)) && in_array($coordY, range(1, 8)))
        //             return true;
        //         return false;
        //     case [$coord_origin_x + 1, $coord_origin_y + 1]:
        //         if (in_array($coordX, range(1, 8)) && in_array($coordY, range(1, 8)))
        //             return true;
        //         return false;
        //     case [$coord_origin_x - 1, $coord_origin_y - 1]:
        //         if (in_array($coordX, range(1, 8)) && in_array($coordY, range(1, 8)))
        //             return true;
        //         return false;
        //     case [$coord_origin_x + 1, $coord_origin_y - 1]:
        //         if (in_array($coordX, range(1, 8)) && in_array($coordY, range(1, 8)))
        //             return true;
        //         return false;
        //     default:
        //         return false;
        // }

        //Version 1
        // $i = $coord_origin_x;
        // $j = $coord_origin_y;
        // while ($i > 0 && $j <= 8) {
        //     // echo " |$i , $j| ";
        //     $arr_temp_left_top[] = [$i, $j];
        //     $i--;
        //     $j++;
        // }
        // if (in_array([$coordX, $coordY], $arr_temp_left_top)) {
        //     return true;
        // }

        // $i = $coord_origin_x;
        // $j = $coord_origin_y;
        // while ($i <= 8 && $j <= 8) {
        //     // echo " |$i , $j| ";
        //     $arr_temp_right_top[] = [$i, $j];
        //     $i++;
        //     $j++;
        // }
        // if (in_array([$coordX, $coordY], $arr_temp_right_top)) {
        //     return true;
        // }


        // $i = $coord_origin_x;
        // $j = $coord_origin_y;
        // while ($i > 0 && $j > 0) {
        //     // echo " |$i , $j| ";
        //     $arr_temp_left_bottom[] = [$i, $j];
        //     $i--;
        //     $j--;
        // }
        // if (in_array([$coordX, $coordY], $arr_temp_left_bottom)) {
        //     return true;
        // }


        // $i = $coord_origin_x;
        // $j = $coord_origin_y;
        // while ($i <= 8 && $j > 0) {
        //     // echo " |$i , $j| ";
        //     $arr_temp_right_bottom[] = [$i, $j];
        //     $i++;
        //     $j--;
        // }
        // if (in_array([$coordX, $coordY], $arr_temp_right_bottom)) {
        //     return true;
        // }


        $distX = abs($coordX - $coord_origin_x);
        $distY = abs($coordY - $coord_origin_y);

        if ($distX == $distY && $distY != 0) {
            if (in_array($coordX, range(1, 8)) && in_array($coordY, range(1, 8)))
                return true;
        }

        return false;

    }

}
?>