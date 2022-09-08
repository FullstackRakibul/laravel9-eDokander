<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TermsAndConditionController extends Controller
{
    public function termsAndCondition(){

        return view('pages.terms-condition');
    }
}
