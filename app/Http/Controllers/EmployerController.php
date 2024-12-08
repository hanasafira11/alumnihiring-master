<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployerController extends Controller
{
    public function about() {
        $data = array('title' => 'About');
        return view('employer.about', $data);
    }

    public function candidatelist() {
        $data = array('title' => 'Daftar Kandidat');
        return view('employer.candidatelist', $data);
    }

    public function profile() {
        $data = array('title' => 'Company Profile');
        return view('employer.profile', $data);
    }
}
