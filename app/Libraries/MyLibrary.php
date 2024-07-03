<?php 

namespace App\Libraries;
use App\Models\StudentModel;

class MyLibrary{
	// listing all data
	public function accessAllStudents()
	{
		$student_obj = new StudentModel();
		return $student_obj->findAll();
	}

	// single student data
	public function getSingleStudentData($student_id)
	{
		$student_obj = new StudentModel();
		return $student_obj->where("id", $student_id)->first();
	}

	// convert to slug
	public function convertToSlug($string)
	{
		$student_obj = new StudentModel();

		$lower_string = strtolower($string);
		$slug_string = str_replace(" ", "-", $lower_string);
		return $slug_string;
	}
} 

?>