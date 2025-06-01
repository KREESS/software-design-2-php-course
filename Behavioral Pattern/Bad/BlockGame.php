<?php

class BlockGame
{
    public function start(): void
    {
        echo "BLOCK GAME<br>";

        for ($i = 0; $i < 10; $i++) {
            for ($j = 0; $j < 10; $j++) {
                echo "O ";
            }
            echo "<br>";
        }

        echo "FINISH BLOCK GAME<br>";
    }
}
