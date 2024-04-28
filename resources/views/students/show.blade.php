@extends('students.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Students Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">First_Name : {{ $students->first_name}}</h5>
        <p class="card-text">Last_Name : {{ $students->last_name}}</p>
        <p class="card-text">Address : {{ $students->address}}</p>
  </div>
       
    </hr>
  
  </div>
</div>