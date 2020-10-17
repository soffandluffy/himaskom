<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
    	return view('frontend.himaskom.home');
    }

    public function ph() {
    	return view('frontend.himaskom.profile.ph');
    }

    public function bpo() {
    	return view('frontend.himaskom.profile.bpo');
    }

    public function infokom() {
    	return view('frontend.himaskom.profile.infokom');
    }

    public function ekobis() {
    	return view('frontend.himaskom.profile.ekobis');
    }

    public function ristek() {
    	return view('frontend.himaskom.profile.ristek');
    }

    public function sosial() {
    	return view('frontend.himaskom.profile.sosial');
    }

    public function mikatan() {
    	return view('frontend.himaskom.profile.mikatan');
    }

    public function psdm() {
    	return view('frontend.himaskom.profile.psdm');
    }

    public function kesma() {
    	return view('frontend.himaskom.profile.kesma');
    }

}
