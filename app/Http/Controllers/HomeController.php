<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
      $directory = file_get_contents("../directory.json");
      $directory = json_decode($directory, true);

      return view('app', compact('directory'));
    }
}
