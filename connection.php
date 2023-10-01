<?php
$con  = mysqli_connect('localhost','root','Alphaomega1','datatable_db');
if(mysqli_connect_errno())
{
    echo 'Database Connection Error';
    exit;
}