<?php

namespace App\Http\Controllers\Backend\Crm;

use App\Http\Controllers\Controller;
use App\Http\Controllers\CrmController as CrmController;
use App\Sharpspring;

/**
 * Class DocumentationController.
 */
class EmailController extends Controller
{

    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {

    	//return $this->getAccounts();
    	
        return view('backend.pages.crm.email');
    }

    public function getEmails() {


		$method = "getEmailListing";
		$params = array('where' => array(), 'limit' => 500, 'offset' => 0);
	     

	    $sharpspring = new CrmController;

	    return $sharpspring->sharpspringCurl($method, $params);

                                                                    

    }
}
