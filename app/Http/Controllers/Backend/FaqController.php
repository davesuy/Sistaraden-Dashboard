<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

/**
 * Class FaqController.
 */
class FaqController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('backend.pages.faq');
    }

    public function privacy()
    {
        return view('backend.pages.faq-privacy');
    }
}
