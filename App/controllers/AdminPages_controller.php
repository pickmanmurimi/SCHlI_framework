<?php
/**
 * @author pickman murimi.
 * User: pick
 * Date: 7/25/2017
 * Time: 11:41 PM
 * this will control what page to be displayed
 */

class AdminPagescontroller extends Controller
{

    public function index(){


        $this->View('admin/index.php',
   [
        'parameters' => $this->params,

    ]);

    }

    public function index2(){

        $this->View('admin/index2.php');
    }

    public function index3(){

        $this->View('admin/index3.php');
    }


//    the main page..what new users see when they login to OSPosts
    // public function home(){

    //     if (sessions::trackSession('loggedIn')){

    //     require_once (SCHlI_ADMIN_VIEWS . 'production\index.html');

    //     }else{
    //         /**
    //          * redirect to the sign up page on error
    //          * i.e if the logged in session is not set
    //          TODO: update this part to get rid of the html code here
    //          **/
    //         $message = '<span>You need to <b>login</b> first to view the home page<b>.</b></span><span> If you do not have an account, fill the form below to sign up. </span>';
    //         handler::sendToIndexpage($message);
    //     }
    // }
    // public function error(){

    //     require_once (SCHlI_CLIENT_VIEWS . 'pages/error.php');
    // }
}