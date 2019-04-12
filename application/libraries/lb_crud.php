<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lb_crud
{
	protected $ci;

	public function __construct()
	{
		// header('Access-Control-Allow-Origin: *');
        header( "Access-Control-Allow-Origin: *" );
        header( "Access-Control-Allow-Credentials: true" );
        header( "Access-Control-Allow-Methods: POST, GET, PUT, DELETE, OPTIONS" );
        header( "Access-Control-Max-Age: 604800" );
        header( "Access-Control-Request-Headers: x-requested-with" );
        header( "Access-Control-Allow-Headers: content-type,x-requested-with, x-requested-by" );
        // header("Access-Control-Allow-Methods: GET, OPTIONS");
        // 
        $this->ci =& get_instance();
	}

	public function to_json($data)
    {
        return json_encode($data);  
    }

}

/* End of file lb_crud.php */
/* Location: ./application/libraries/lb_crud.php */
