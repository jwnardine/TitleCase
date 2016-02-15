<?php

class Queen
{
    function canAttack($queen_x, $queen_y, $king_x, $king_y)
    {
        return (abs($queen_x - $king_x) === abs($queen_y - $king_y));

    }
}

?>
