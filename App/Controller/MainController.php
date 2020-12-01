<?php


namespace App\Controller;


class MainController extends BaseController
{

    /**
     * MainController constructor.
     */
    public function __construct()
    {
    	parent::__construct();
    }

	public function run()
	{
		echo "Main Page";
	}
}
