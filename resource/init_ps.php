<?php
    session_start();
    $my_url = ($_SERVER['REQUEST_URI']=="/")?"":"?return_url=".urlencode(ltrim($_SERVER['REQUEST_URI'], "/")); // str_replace("#", "%23", "");
    if (preg_match("/^\?return_url=(s|t)%2F$/", $my_url)) $my_url = "";
    $require_sso = false; # (!isset($_SESSION['auth']) && isset($_COOKIE['bdSSOv1a']) && $_COOKIE['bdSSOv1a']<>"");

    $navtabpath = "../../e/WayToDPST39/resource/aside-navigator.php";
    $has_perm = (($_SESSION['auth']['type']=="s" && $_SESSION['auth']['info']['gen']=="52" && $_SESSION['auth']['info']['room']=="17")
        || in_array($_SESSION['auth']['user'], array("TianTcl", "test02")));
?>