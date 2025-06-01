<?php

include_once "BlockTemplate.php";

class BlockGame2 extends BlockTemplate
{
    public function getTitle(): string
    {
        return "Block Game Ke-2";
    }
    public function getEndTitle(): string
    {
        return "Finish Block Game Ke-2";
    }
    public function getHeight(): int
    {
        return 3;
    }
    public function getwidth(): int
    {
        return 5;
    }
    public function getCharacter(): string
    {
        return "APA";
    }
}
