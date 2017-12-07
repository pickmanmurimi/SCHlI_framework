<?php
/**
 *@author pick
 * Date: 9/30/2017
 * Time: 10:53 PM
 */
#error page

echo $_SERVER['REQUEST_URI'] . "--->" . strstr($_SERVER['REQUEST_URI'] . '/','/', true);

$url = preg_split('~[\\\\/]~', $_SERVER['REQUEST_URI']);
$acco = array_slice($url, 2);

	$action		= (array_key_exists(1, $acco)) ? $acco[1] : 'index';
	$controller = ($acco[0] != NULL) ? $acco[0] : 'pages';

	$chop = -strlen(basename($_SERVER['SCRIPT_NAME']));
define('URL_ROOT_TEST',substr($_SERVER['SCRIPT_NAME'],0,$chop));
	echo URL_ROOT_TEST;
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta charset="UTF-8">
    <!--    bootsrap-->
    <link rel="stylesheet" href="/shule_i/resources/assets/style/css/bootstrap.min.css">
    <!--     JQUERY-->
    <script type="text/javascript" src="/shule_i/resources/assets/style/js/jquery.js"></script>
    <!--     BOOTSRAP JS-->
    <script type="text/javascript" src="/shule_i/resources/assets/style/js/bootstrap.min.js"></script>
    <!--     jQuery form plugin-->
    <script type="text/javascript" src="/shule_i/resources/assets/style/plugins/jquery.form.js"></script>
    <!--     jQuery tooltip plugin-->
    <script type="text/javascript" src="/shule_i/resources/assets/style/plugins/tooltip.js"></script>

</head>

<body>

<p>Error : <b>Controller </b> {{ parameters }} page not found </p>
{% if action != null %}
	<p> Error : <b>Action </b> <?php echo $action ." --> controller --->" . $controller; ?> </p>
{% endif %}

</body>
</html>