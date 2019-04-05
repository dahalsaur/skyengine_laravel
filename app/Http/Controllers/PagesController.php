<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
      // /
    public function index() {
      return view('pages.index');
    }

    // public function search_results() {
    //   return view('pages.search_results');
    // }

      // /recommend
    public function recommend() {
      return view('pages.recommend');
    }


      // /about
    public function about() {
      return view('pages.about');
    }

    // public function contact() {
    //   return view('pages.contact');
    // }

        // /impressum
    public function impressum() {
      return view('pages.impressum');
    }

      // /login
    public function login() {
      return view('pages.login');
    }
}
