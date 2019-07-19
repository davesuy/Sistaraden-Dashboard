<?php

namespace App\Http\Controllers\Backend\Crm;

use App\Http\Controllers\Controller;
use App\Http\Controllers\CrmController as CrmController;
use App\Sharpspring;

/**
 * Class DocumentationController.
 */
class LeadController extends Controller
{

    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {

    	//return $this->getAccounts();
    	
        return view('backend.pages.crm.lead');
    }

    public function getLeads() {


		$method = "getLeads";
		$params = array('where' => array(), 'limit' => 500, 'offset' => 0);
	     

	    $sharpspring = new CrmController;

	    return $sharpspring->sharpspringCurl($method, $params);

                                                                    

    }
}
