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

    public function welcome($name)
    {
        return $this->view('client/pages/home',['name'=>$name]);
    }

    public function home($name)
    {
        return $this->view('client/pages/home',['name'=>$name]);
    }

}