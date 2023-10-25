<?php

if(session_status() == PHP_SESSION_NONE){
    session_start();
  }
    include "../../helper/App.php";

    $app = new App();

    $customer_name = isset($_REQUEST['customer_name'])? $_REQUEST['customer_name']:null;
    $contact_name = isset($_REQUEST['contact_name'])? $_REQUEST['contact_name']:null;
    $address = isset($_REQUEST['address'])? $_REQUEST['address']:null;
    $city = isset($_REQUEST['city'])? $_REQUEST['city']:null;
    $postalCode = isset($_REQUEST['postal_code'])? $_REQUEST['postal_code']:null;
    $country = isset($_REQUEST['country'])? $_REQUEST['country']:null;

    $data = [];
    $data['customer_name'] = $customer_name;
    $data['contact_name'] = $contact_name;
    $data['address'] = $address;
    $data['city'] = $city;
    $data['postal_code'] = $postalCode ;
    $data['country'] = $country;

    $app->insert("customers",$data);
    $app->redirect("/index.php");
?>