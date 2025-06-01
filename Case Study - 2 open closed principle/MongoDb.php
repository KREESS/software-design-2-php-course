<?php

class MongoDB implements DBMS
{
    public function connect(): void
    {
        echo "Connecting to MongoDB database...\n";
    }
}
