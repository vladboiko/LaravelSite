@extends('layouts.app_dashboard')

@section('content')


<p align = "center">{{$theme->theme_title}}</p>

<p style="text-indent:20px">
<?php
	print ($theme['theme_description']);
?>


@endsection