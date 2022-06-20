@extends('layouts.app_dashboard')

@section('content')


<p align = "center">{{$solution->solution_title}}</p>

<p style="text-indent:20px">
<?php
		print ("Description"."<br>");
	print ($solution['solution_description']."<br>");
	print ("During work"."<br>");
	print ($solution['solution_during']."<br>");
	print ("Examples"."<br>");
	print ($solution['solution_example']."<br>");
?>


@endsection