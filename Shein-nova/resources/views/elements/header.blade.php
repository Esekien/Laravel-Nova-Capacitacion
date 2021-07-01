<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="{{URL::asset('/css/style.css')}}">
    <title>Shein Nova</title>
</head>
<body>
<!-- Image and text -->
<nav class="navbar shadow-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">
    <img src="{{URL::asset('/imagenes/logo.jpg')}}" width="30" height="30" class="d-inline-block align-top" alt="">
    Shein Nova
  </a>
</nav>
@yield('body')
@extends('elements.footer')
