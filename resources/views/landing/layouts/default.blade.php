<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @include('landing.layouts.assets.header')
    <div class="site-content">
    @include('landing.layouts.assets.nav')

    @yield('content')
    @include('landing.layouts.assets.footer')
    @include('landing.layouts.assets.closer')
