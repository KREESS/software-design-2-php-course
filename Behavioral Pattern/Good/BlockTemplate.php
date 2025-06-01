<?php

abstract class BlockTemplate
{
    public final function start(): void
    {
        echo $this->getTitle() . "<br>";

        for ($i = 0; $i < $this->getHeight(); $i++) {
            for ($j = 0; $j < $this->getwidth(); $j++) {
                echo $this->getCharacter();
            }
            echo "<br>";
        }

        echo $this->getEndTitle() . "<br>";
    }

    public abstract function getTitle(): string;
    public abstract function getHeight(): int;
    public abstract function getwidth(): int;
    public abstract function getCharacter(): string;
    public abstract function getEndTitle(): string;
}
