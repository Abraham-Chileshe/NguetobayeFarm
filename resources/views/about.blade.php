@extends('include.layout')

@section('content')
<div class="pull-right toggle-right-sidebar">

        @include('include.topnav')

        <div class="inner-banner py-5">
            <section class="w3l-breadcrumb text-left py-sm-5 ">
                <div class="container">
                    <div class="w3breadcrumb-gids">
                        <div class="w3breadcrumb-left text-left">
                            <h2 class="inner-w3-title mt-lg-5 mt-4">
                                About Us </h2>
                        </div>
                        <div class="w3breadcrumb-right">
                            <ul class="breadcrumbs-custom-path">
                                <li><a href="{{ url('/')}}l">Home</a></li>
                                <li class="active"><span class="fas fa-arrow-right mx-2"></span> About Us</li>
                            </ul>
                        </div>
                    </div>
    
                </div>
            </section>
        </div>






</div>

@endsection