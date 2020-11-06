<?php
 namespace App\Controllers;
 class People extends \CodeIgniter\Controller
 {
 public function index()
 {
 // connect to the model
 $People = new \App\Models\People();
 // retrieve all the records
 $records = $People->findAll();
 // JSON encode and return the result
 return json_encode($records);
 }
 }

