<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sharpspring extends Model
{
    public $accountID = "3ACFE8DBD52C5D9F69A7E354DECE0305";
	public $secretKey = "8FE52D412500E4F6311BCBD005FDE0FD";
    
    public  function sharpspringConnect()
    {

		return 'Logic for Logging in Goes here';
    }

}
