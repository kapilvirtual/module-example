<?php
namespace ModuleExample\HelloWorld\Controller;

use Illuminate\Routing\Controller;

class HelloWorldController extends Controller
{
    public function index()
    {
        return view('hello.world');
    }
}
