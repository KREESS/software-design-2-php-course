<?php

abstract class MieInstan
{
    // Metode template
    public final function siapkanMie()
    {
        $this->beliMie();
        $this->masakMie();
        $this->sajikanMie();
    }

    protected abstract function beliMie();
    protected abstract function masakMie();
    protected abstract function sajikanMie();
}
