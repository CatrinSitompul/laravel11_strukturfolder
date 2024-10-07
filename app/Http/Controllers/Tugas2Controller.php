<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Tugas2Controller extends Controller
{
    public function login()
    {
       // $men = 'tugas2/menuForm';
       // $content = 'tugas2/contact';
        $data = [
           // 'title' => 'Data Contact',
           // 'menu' => $men,
           // 'content' => $content,
             ];
        return view('tugas2/login', $data);
    }
    public function home()
    {
       // $men = 'tugas2/menuForm';
        $content = 'tugas2/content';
        $data = [
           // 'title' => 'Data Contact',
           // 'menu' => $men,
            'content' => $content,
             ];
        return view('tugas2/form', $data);
    }

    public function about()
    {
       // $men = 'tugas2/menuForm';
        $content = 'tugas2/contentAbout';
        $data = [
           // 'title' => 'Data Contact',
           // 'menu' => $men,
            'content' => $content,
             ];
        return view('tugas2/form', $data);
    }

    public function contact()
    {
       // $men = 'tugas2/menuForm';
        $content = 'tugas2/contact';
        $data = [
           // 'title' => 'Data Contact',
           // 'menu' => $men,
            'content' => $content,
             ];
        return view('tugas2/form', $data);
    }
}
