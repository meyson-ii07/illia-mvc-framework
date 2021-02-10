<?php

class m0001_initial
{
    public function up()
    {
        return "CREATE TABLE IF NOT EXISTS students (
        id INT AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(255) NOT NULL,
   		lastname VARCHAR(255) NOT NULL,
        email VARCHAR(255),
     	course VARCHAR(255) NOT NULL,
     	faculty VARCHAR(255) NOT NULL,
        created_at TIMESTAMP  DEFAULT CURRENT_TIMESTAMP 
        ) ENGINE=INNODB";
    }

    public function down()
    {
        return "DROP TABLE students";
    }
}