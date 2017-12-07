<?php

Route::set('', NULL ,function(){
    pages_controller::view('client/index',['name' => 'optimus']);
});

Route::set('welcome_page/jk/{argument}/{names}', 'pages_controller@welcome');

Route::set('contact_us/{argument}' , NULL ,function()
{
    pages_controller::view('contact_us/');

});
/*
get the url eg contact_us/12
the first part of the url or route is the controller
check the valid routes to get those that match the controller from the url
-the second part of the url may be an argument or action
-once a matches from the url controller and the routes controller have been found, put the routes in an array,
-from the array, get the second part of the routes,
-if the second part is in {} ,treate it as an argument, if its not in {}, treate it as an action,

/
/*
get routes from routes.php and put them in an array
split the url into 2 parts
get a controller action from the route
match the url to the correct route


*/