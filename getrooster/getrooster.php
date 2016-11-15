<?php
/**
 * Created by Daen Rebel & Pim Immink
 * User: Daen & Pim
 * Date: 10/11/2016
 * Time: 14:19
 */

$getclass = $_GET['class'];
$getday = $_GET['day'];

require_once ('class/connect.php');

$conn = new connect;

$query = "SELECT * FROM `import` WHERE `class` = '".$getclass."' AND `weekday` = '".$getday."' ORDER BY  `import`.`hour` ASC";

$res = $conn->makeconn($query);

$structure = "";
$structure = $structure."<weekday>".$getday;

foreach($res as $row){
    $structure = $structure."<hour>".$row['hour'];
    // $structure = $structure."<class>".$row['class'];
    // $structure = $structure."</class>";
    $structure = $structure."</hour>";
}

$structure = $structure."</weekday>";

// print_r($res);
// echo $structure;

$dom = new DOMDocument;
$dom->preserveWhiteSpace = FALSE;
$dom->loadXML('<root>'.$structure.'</root>');
$dom->formatOutput = TRUE;
echo $dom->saveXml();

?>