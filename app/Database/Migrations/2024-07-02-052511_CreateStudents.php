<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateStudents extends Migration
{
    public function up()
    {
        // schema of the database table
        // $this->forge = instance, addField() method

        $this->forge->addField([
        	// add fields in array format
        	"id" => [
        		"type" => "INT",
        		"constraint" => 5, // length
        		"auto_increment" => true,
        		"unsigned" => true
    		],
        	"name" => [
        		"type" => "VARCHAR",
        		"constraint" => 50,
        		"null" => false // not null
        	],
        	"email" => [
        		"type" => "VARCHAR",
        		"constraint" => 50,
        		"null" => false,
        		"unique" => true // emails must be unique
        	],
        	"mobile" => [ // refresh = rollback + migrate
        		"type" => "VARCHAR",
        		"constraint" => 30,
        		"null" => true
        	]
        ]);

        $this->forge->addPrimaryKey("id");
        $this->forge->createTable("students");        
    }

    public function down()
    {
        // drop table - will be executed when we write php spark migrate rollback
        $this->forge->dropTable("students");   
    }
}
