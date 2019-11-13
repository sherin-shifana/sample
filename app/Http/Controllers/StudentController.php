<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    //
    public function create() {
      $student = new Student();
      $student->name = request('name');
      $student->date = request('date');
      $student->save();
      return redirect('/home');
    }
}
