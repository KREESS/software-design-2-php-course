<?php

class MySQL implements DBMS
{
    public function connect(): void
    {
        echo "Connecting to MySQL database...\n";
    }
}
