<?php

namespace App\Repository;

use http\Env\Request;

interface StudentRepositoryInterface{


    //  Get_Student
    public function Get_Student();

    //  Get_Student
    public function index();

    // Edit_Student
    public function Edit_Student($request );

    // Show_Student
    public function Show_Student($id);

    //Update_Student
    public function Update_Student($request);

    //Delete_Student
    public function Delete_Student($request);

    // Get Add Form Student
    public function Create_Student();

    // Get classrooms
    public function Get_classrooms($id);

    //Get Sections
    public function Get_Sections($id);

    //Store_Student
    public function Store_Student($request);

    //Upload_attachment
    public function Upload_attachment($request);

    //Download_attachment
    public function Download_attachment($studentsname,$filename);

    //Delete_attachment
    public function Delete_attachment($request);

}


