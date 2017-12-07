<?php
/**
 * @author pickman murimi.
 * User: pick
 * Date: 7/25/2017
 * Time: 11:41 PM
 * this will control what page to be displayed
 */

class pagesController extends Controller
{
	public function index(){

		echo "index";
	}

    public function welcome()
    {
        self::view('client/index',['name' => 'method 1 to set variables',]);
    }

    public function home($name)
    {
    	echo $name . " you are at the home page";
    }

}