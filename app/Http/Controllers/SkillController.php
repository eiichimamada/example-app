<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class skillController extends Controller
{
    //
    public function index()
    {
        $skills = Skill::all();
        return view('skill.index', [
            'skills' => $skills
        ]);
    }
}
