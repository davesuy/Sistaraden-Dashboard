<?php

namespace App\Http\Controllers\Backend\Crm;

use App\Http\Controllers\Controller;

/**
 * Class DocumentationController.
 */
class AccountController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('backend.pages.crm.account');
    }
}
