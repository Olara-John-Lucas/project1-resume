@extends('admin.main')
@section('title','Activies')
    @section('content')
<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"> <i class="icon_document_alt"></i> Activities</h3>
                <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
                    <li> <i class="icon_document_alt"></i></i>Activities</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">


                <!--tab nav start-->
                <section class="panel">
                    <header class="panel-heading tab-bg-primary ">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a data-toggle="tab" href="{{url('activities#home')}}">Home</a>
                            </li>
                            <li class="">
                                <a data-toggle="tab" href="{{url('#about')}}">services</a>
                            </li>
                            <li class="">
                                <a data-toggle="tab" href="{{url('#profile')}}">Prodects</a>
                            </li>
                            <li class="">
                                <a data-toggle="tab" href="{{url('activities#contact')}}">profile</a>
                            </li>
                        </ul>
                    </header>
                    <div class="panel-body">
                        <div class="tab-content">
                            <div id="home" class="tab-pane active">
                                <header class="panel-heading">
                                    Activities
                                </header>
                                <div class="panel-body">
                                    <div class="btn-group btn-group-justified">
                                        <a class="btn btn-primary" href="{{url('activities/create')}}">Create</a>
                                        <a class="btn btn-success" href="#">Update</a>
                                        <a class="btn btn-info" href="{{url('/')}}">Read</a>
                                        <a class="btn btn-danger" href="#">Delete</a>
                                    </div>

                            </div>

                        </div>
                    </div>
                </section>
                <!--tab nav start-->
                <!--tab nav start-->




    </section>
</section>
        @endsection