<?php

function Solution($X, $Y){
    $vector = [intval($X), intval($Y)];
    $result = 0;
    while (!($vector[0] == 0&&$vector[1]==0)){
        $vector = array_map("abs", $vector);
        sort($vector);
        if ($vector[0] <= 1 && $vector[1] <= 1)
            return -1;
        $vector[1] -= 2;
        $vector[0] --;
        $result++;
        if ($result > 100000000)
            return -2;
    }
    return $result;
}
try {
    if ($argc < 3)
        throw new Exception("Provide target X and Y like \"knight-chess.php X Y\"");
    $X = $argv[1];
    if (!is_numeric($X)||!is_int(intval($X)))
        throw new Exception("X must be and integer value");
    $Y = $argv[2];
    if (!is_numeric($Y)||!is_int(intval($Y)))
        throw new Exception("Y must be and integer value");
    echo "X: ".$X.", Y: $Y". PHP_EOL;
    $s = Solution($X, $Y);
    echo "Solution: $s";
}
catch (Exception $exp) {
    echo "Exception: ".$exp->getMessage();
}