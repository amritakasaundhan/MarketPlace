<?php

function redirect($url, $value, $key) {
  $html = "<html><body><form id='form' action='$url' method='post'>";
    $html .= "<input type='hidden' name='status' value=$value>";
    $html .= "<input type='hidden' name='marketuser' value=$key>";
  $html .= "</form><script>document.getElementById('form').submit();</script>";
  $html .= "</body></html>";
  print($html);
}


	$site = $_GET['site'];
	if($site==="makeup")
	{
	    $key = $_GET['key'];
	    $dbcheck = true;
	    if($dbcheck)
	    {
	        $cookie_name = "marketuser";
            $cookie_value = $key;
            setcookie($cookie_name, $cookie_value, time() + (86400 * 30), '/'); // 86400 = 1 day
            $userkey = base64_decode($key);
	        $userinfo = explode(";", $userkey);
	        $user = $userinfo[0];
            setcookie("username", $user, time() + (86400 * 30), '/'); // 86400 = 1 day
            redirect("http://janakidwadasi.xyz/goGirls/index.php", "success", $key);	        
	    }
	    else
	    {
	        redirect("http://janakidwadasi.xyz/goGirls/index.php", "failure", "");	 
	    }
	    

	}
	else if($site==="market")
	{
	    $key = $_GET['key'];
	    $dbcheck = true;
	    if($dbcheck)
	    {
	        $cookie_name = "marketuser";
            $cookie_value = $key;
            setcookie($cookie_name, $cookie_value, time() + (86400 * 30), '/'); // 86400 = 1 day
            $userkey = base64_decode($key);
	        $userinfo = explode(";", $userkey);
	        $user = $userinfo[0];
            setcookie("username", $user, time() + (86400 * 30), '/'); // 86400 = 1 day
	    }
        header("Location: index.php");	    
	}

?>