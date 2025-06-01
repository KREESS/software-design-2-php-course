<?php

abstract class KokiTemplate
{
    public final function menyajikanMieInstan(): void
    {
        $this->beliMie();
        $this->masakMie();
        $this->sajikanMie();

        echo $this->getEndTitle() . "<br>";
    }

    protected abstract function beliMie();
    protected abstract function masakMie();
    protected abstract function sajikanMie();
    protected abstract function getEndTitle();
}
