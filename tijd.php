
<?php



foreach ($argv as $arg) {

    $letters = substr($arg, -1);
    $numbers = explode(" ", $arg, 0);

    foreach ($numbers as $nu) {
        $num = substr($nu, 0,  -1);
    }

    $GetValue[$letters] = $num;

    foreach ($GetValue as $key => $value) {

        for ($i = 0; $i < count($GetValue); $i++) {

            switch ($letters) {
                case "d":

                    $d = (int) $GetValue["d"];
                    break;

                case "u":

                    $h = (int) $GetValue["u"];
                    break;

                case "m":

                    $m = (int) $GetValue["m"];
                    break;

                case "s":

                    $s = (int) $GetValue["s"];
                    break;
            }
        }
    }
}


$calch = $h * 60 * 60;
$calcm = $m * 60;
$calcd = $d * 86400;
$total = $calch + $calcm + $s + $calcd;

echo $total . " Seconden";
