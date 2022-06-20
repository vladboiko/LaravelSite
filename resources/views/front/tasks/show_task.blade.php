@extends('layouts.app_dashboard')

@section('content')

<?php
print('Title: <p align = "center">'.$task->task_title.'</p>');

print('Text: <p align = "center">'.$task->task_text);
print('The ways to searching solution is here: solution ID '.$task->solution_id);
?>

@endsection