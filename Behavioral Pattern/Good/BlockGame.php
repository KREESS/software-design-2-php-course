<?php

include_once "BlockTemplate.php";

class BlockGame extends BlockTemplate
{
    public function getTitle(): string
    {
        return "Block Game";
    }
    public function getEndTitle(): string
    {
        return "Finish Block Game";
    }
    public function getHeight(): int
    {
        return 5;
    }
    public function getwidth(): int
    {
        return 8;
    }
    public function getCharacter(): string
    {
        return "HA";
    }
}
