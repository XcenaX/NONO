<?php

class Solver
{
      public static function RemoveZero($arr,  $val=0){
        $return = array();
        foreach($arr as $k => $v) {
            if(is_array($v)) {
                $return[$k] = self::RemoveZero($v, $val); //recursion
                continue;
            }
            if($v == $val) continue;
            $return[$k] = $v;
        }
        return $return;
    }

    public function ReturnHorArr($gridJson)
    {
        $grid = json_decode($gridJson, true);

        $hor = [];
        $colCount = count($grid[0]);
        $rowCount = count($grid);


        for ($i = 0; $i < $rowCount; $i++) {
            $hor[] = [0];
            for ($k = 0; $k < $colCount; $k++) {
                if ($grid[$i][$k]==1) {
                    $hor[$i][count($hor[$i]) - 1]++;
                } else {
                    array_push($hor[$i], 0);
                }
            }
        }


        $hor=self::RemoveZero($hor,0);

        return $hor;
    }

    public function ReturnVerArr($gridJson)
    {
        $grid = json_decode($gridJson, true);
        $ver = [];
        $colCount = count($grid[0]);
        $rowCount = count($grid);

        for ($x = 0; $x< $colCount;$x++){
            $ver[]=[0];
            for ($y = 0; $y< $rowCount;$y++){
                if($grid[$y][$x]==1){
                    $ver[$x][count($ver[$x]) - 1]++;
                }else{
                    array_push($ver[$x],0);
                }

            }
        }

        $ver=self::RemoveZero($ver,0);

        return $ver;
    }
}
//
// $a = new Solver();
// $a->ReturnDoubleArr();
