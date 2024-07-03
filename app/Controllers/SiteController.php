<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\StudentModel;
use App\Libraries\MyLibrary;

class SiteController extends BaseController
{
    public function index()
    {
    	// library example
    	$library = new MyLibrary();
    	// print_r($library->accessAllStudents());
    	// print_r($library->getSingleStudentData(5));
    	print_r($library->convertToSlug("SoHaM BaNiK"));

    	// helper example 1
    	$exampleString = "Soham Banik";
    	$length = get_string_length($exampleString);
    	echo "<br><br>Using Helper functions to get string length : " . $length;

    	// helper example 2
    	$exampleNumber = 5;
    	$square = get_square($exampleNumber);
    	echo "<br>Using Helper functions to get square of number : " . $square;

        return view("index", [
        	"name" => "Soham Banik",
        	"company" => "Onlighten Media",
        	"course" => "CodeIgniter 4 HMVC Beginners To Advance Tutorial"
        ]);
    }

    public function listStudents() // read
    {
    	$student_obj = new StudentModel();

    	// listing all students
    	$students = $student_obj->findAll();
    	echo "<pre>";
    	print_r($students);
    }

    public function readSpecificStudent() // read specific 
    {
    	$student_obj = new StudentModel();

    	$student_id = 10;

    	// reading specific student
    	$specificStudent = $student_obj->where("id", $student_id)->first();
    	echo "<pre>";
    	print_r($specificStudent);
    }

    public function insertStudent() // create
    {
    	$student_obj = new StudentModel();

    	// inserting a student
    	$student = $student_obj->insert([
    		"name" => "Dummy1",
    		"email" => "dummy@gmail.com",
    		"mobile" => "1234567890"
    	]);
    	echo "<pre>";
    	print_r($student); // id of the inserted student
    }

    public function updateStudent() // update
    {
    	$student_obj = new StudentModel();

    	// updating a student
    	$updatedData = [
    		"name" => "Dummy1",
    		"email" => "dummy1@gmail.com",
    		"mobile" => "1234567890"
    	];

    	$student_id = 11;

    	$updatedStudent = $student_obj->update($student_id, $updatedData);

    	echo "<pre>";
    	print_r($updatedStudent); // no.of affected rows
    }

    public function deleteStudent() // delete
    {
    	$student_obj = new StudentModel();

    	$student_id = 11;

    	$deletedStudent = $student_obj->delete($student_id);

    	echo "<pre>";
    	print_r($deletedStudent); // no.of affected rows
    }
}
