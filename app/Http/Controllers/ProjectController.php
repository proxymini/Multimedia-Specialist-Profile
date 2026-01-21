<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project; // Penting: Panggil model Project

class ProjectController extends Controller
{
    public function index()
    {
        // Ambil semua data project
        $projects = Project::all();
        
        // Kirim data ke tampilan bernama 'home'
        return view('home', compact('projects'));
    }
}