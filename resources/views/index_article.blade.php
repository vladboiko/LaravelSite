@extends('layouts.app_front')

@section('content')


<p align = "center">{{$article->article_title}}</p>

<p style="text-indent:40px">{{$article->article_full}}
<p style="text-indent:20px">Author {{$article->author_id}}
<p style="text-indent:20px">Theme {{$article->theme_id}}


@endsection