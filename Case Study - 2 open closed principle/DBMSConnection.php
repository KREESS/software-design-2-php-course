<?php

class DBMSConnection
{
    public function connectToDB(DBMS $dbms): void
    {
        $dbms->connect();
    }
}
