<?php
session_start();
function checkLogin(){
    if(!isset($_SESSION["user"])) {
		header("Location: index.php");
	}
}
function logOut(){
    session_unset();
	session_destroy(); 
}
function getErrorMsg($id){
    $msg="";
    if($id==0){
            $msg="Nothing";
        }elseif($id==1){
            $msg="Success";
        }elseif($id==2){
            $msg="Failed";
        }else{
            $msg="Unknows Error";
        }
    return $msg;
}
function getTableHead($type){
    $content ="<tr>
        <th>Project Name</th>
        <th>Location</th>
        <th>Details</th>
        <th>Project Status</th>";

    if($type==1 || $type==2){
        $content .="<th>Action</th>";
    }elseif($type==3){
    }
    else{
        return '';
    }
     $content .="</tr>";
    return $content;
}
function getContent($row,$type){
    $content ='<tr >
            <td>'.$row["projectName"].'</td>
            <td>'.$row["location"].'</td>
            <td>'.$row["details"].'</td>';
        
    if($type==1){
        $content .='<td>Upcomming Project</td>
            <td>Project Ongoing? <a href="submitStatusChange.php?id='.$row["id"].'&type=1" class="btn btn-default">Yes</a></td>';
    }elseif($type==2){
        $content .='<td>Ongoing Project</td>
            <td>Project Completed? <a href="submitStatusChange.php?id='.$row["id"].'&type=2" class="btn btn-default">Yes</a></td>';
    }
    elseif($type==3){
        $content .='<td>Completed Project</td>';
    }
    else{
        return '';
    }
     $content .="</tr>";
    return $content;
}
function getTable($result,$type){
    $content ='<table class="project-table">';
    $content .=getTableHead($type);
    while($row = $result->fetch_assoc()) {
         $content .=getContent($row,$type);
    }
    $content .= '</table>';

    return $content;
}
?>