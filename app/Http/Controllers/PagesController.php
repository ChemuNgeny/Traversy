<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $title = 'Welcome to Laravel';
//        return view('pages.index', compact('title'));//passing single values
        return view('pages.index')->with('title', $title);//passing multiple values
    }

    public function about()
    {
        $title = 'About Us';
        return view ('pages.about')->with('title',$title);
    }

    public function services()
    {
        $data = array(
            'title' => 'Services',
            'services'=> ['Web Design', 'Database', 'Mobile Applications Development']
        );

        return view('pages.services')->with($data);
    }
}
//npm install - used to install node modules for styling
//    npm run dev - used to compile/build css when loaded in the web
//F5 - clear cache
//npm run watch - watch the files and changes faster