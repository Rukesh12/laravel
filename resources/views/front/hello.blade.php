@extends('master')
@section('content')
    <h1 class="btn btn-primary">I am hello blade</h1>
    @for($i=1;$i<=10;$i++)
    <br>{{$i}}
    @endfor

    <?php
    //palin PHP
    echo "<br>";
    echo date('y-m-d h:i:s');
    ?>
    @endsection
    @section('title')
    this is  title.
    @endsection