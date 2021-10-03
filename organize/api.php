<?php
	session_start();
	if (isset($_POST['app']) && isset($_POST['cmd'])) { $has_data = true; $app = $_POST['app']; $cmd = $_POST['cmd']; $attr = $_POST['attr']; }
	else if (isset($_GET['app']) && isset($_GET['cmd'])) { $has_data = true; $app = $_GET['app']; $cmd = $_GET['cmd']; $attr = $_GET['attr']; }
	else $has_data = false; if ($has_data) {
		require_once("../../../resource/php/core/config.php"); require_once("../../../resource/php/lib/TianTcl.php"); require("../../resource/db_connect.php");
		if ($app == "formReg") {
            if ($cmd == "new" || $cmd == "edit") {
                $data = json_decode(file_get_contents('php://input'), true);
                $data['time'] = date("Y-m-d H:i:s", strtotime($data['time']));
                if ($cmd == "new") {
                    $list = array( "col" => array(), "val" => array() );
                    foreach ($data as $k => $v) {
                        array_push($list['col'], $db -> real_escape_string(trim($k)));
                        array_push($list['val'], $db -> real_escape_string(nl2br(trim($v))));
                    } $sql = "INSERT INTO WayToDPST39_application (".implode(",", $list['col']).") VALUES('".implode("','", $list['val'])."')";
                } else if ($cmd == "edit") {
                    $sql = "UPDATE WayToDPST39_application SET ";
                    foreach ($data as $k => $v) {
                        if ($k <> "smsid")
                            $sql .= $db -> real_escape_string(trim($k))."='".($db -> real_escape_string(nl2br(trim($v))))."',";
                    } $sql = rtrim($sql, ",")." WHERE smsid='".$data['smsid']."'";
                } if (isset($sql)) {
                    $success = $db -> query($sql);
                    if ($success) { echo '{"success": true, "email": "'.$data['ctEmail'].'"}'; slog("WayToDPST39", "register", ($cmd??""), $data['ctEmail'], "pass", "", $data['smsid']); }
                    else { echo '{"success": false}'; slog("WayToDPST39", "register", ($cmd??""), $data['ctEmail'], "fail", "", $data['smsid']); }
                } else echo '{"success": false}';
            } else if ($cmd == "get") {
                $id = strval(intval($tcl -> decode(str_replace("-", "", $attr)."5d3"))/138-138);
                $data = $db -> query("SELECT namep,namef,namel,namen,grade,school,ctLine,ctPhone,ctEmail,ctIG,ctFB,ctTwitter,qa1,qa2,qa3,impression,status FROM WayToDPST39_application WHERE formid='$id'");
                if ($data) {
                    if ($data -> num_rows == 1) {
                        $info = $data -> fetch_array(MYSQLI_ASSOC); /* $send = array(
                            "name" => htmlspecialchars(prefixcode2text($info["namep"])['th'].$info["namef"]."  ".$info["namel"]." (".$info["namen"].")"),
                            "info" => array("school" => htmlspecialchars($info["school"]), "grade" => gradecode2text($info["grade"])),
                            "contact" => array(
                                "Line" => $info["ctLine"],
                                "Phone" => $info["ctPhone"],
                                "Email" => $info["ctEmail"],
                                "IG" => $info["ctIG"],
                                "FB" => $info["ctFB"],
                                "Twitter" => $info["ctTwitter"]
                            ), "answer" => array(
                                0 => intval($info["impression"]),
                                1 => nl2br(htmlspecialchars($info["qa1"])),
                                2 => nl2br(htmlspecialchars($info["qa2"])),
                                3 => nl2br(htmlspecialchars($info["qa3"]))
                            ), "status" => $info["status"]
                        ); */ $send = array(
                            "name" => htmlspecialchars(prefixcode2text($info["namep"])['th'].$info["namef"]."  ".$info["namel"]." (".$info["namen"].")"),
                            "school" => htmlspecialchars($info["school"]),
                            "grade" => gradecode2text($info["grade"]),
                            "Line" => $info["ctLine"],
                            "Phone" => "0".$info["ctPhone"],
                            "Email" => $info["ctEmail"],
                            "IG" => $info["ctIG"],
                            "FB" => $info["ctFB"],
                            "Twitter" => $info["ctTwitter"],
                            "qa0" => intval($info["impression"]),
                            "qa1" => nl2br(htmlspecialchars($info["qa1"])),
                            "qa2" => nl2br(htmlspecialchars($info["qa2"])),
                            "qa3" => nl2br(htmlspecialchars($info["qa3"])),
                            "status" => $info["status"]
                        ); echo '{"success": true, "info": '.json_encode($send).'}';
                    } else echo '{"success": false, "reason": [1, "There are no record of this application number"]}';
                } else echo '{"success": false, "reason": [3, "Unable to fetch data from database"]}';
            } else if ($cmd == "set") {
                $id = strval(intval($tcl -> decode(str_replace("-", "", $attr[0])."5d3"))/138-138);
                $decision = $db -> real_escape_string(trim($attr[1]));
                if ($decision == "A" || $decision == "D") {
                    $success = $db -> query("UPDATE WayToDPST39_application SET status='$decision' WHERE formid='$id'");
                    if ($success) { echo '{"success": true, "email": "'.$data['ctEmail'].'"}'; slog("WayToDPST39", "register", "set", $decision, "pass"); }
                    else { echo '{"success": false, "reason": [3, "Unable to fetch data from database"]}'; slog("WayToDPST39", "register", "set", $decision, "fail", "", "InvalidQuery"); }
                } else echo '{"success": false, "reason": [2, "Invalid response type"]}';
            }
		} /* else if ($app == "") {
			if ($cmd == "") {
				
			}
		} */
		$db -> close();
	}
    function gradecode2text($code) {
        switch ($code) {
            case "1": $text = "ม.1"; break;
            case "2": $text = "ม.2"; break;
            case "3": $text = "ม.3"; break;
            case "4": $text = "ป.4"; break;
            case "5": $text = "ป.5"; break;
            case "6": $text = "ป.6"; break;
            case "7": $text = "ผู้ปกครอง"; break;
            case "8": $text = "อื่นๆ"; break;
            default: $text = "-"; break;
        } return $text;
    }
?>