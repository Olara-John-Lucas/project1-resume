@extends('admin.main')
@section('title','Users')
    @section('content')
<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <!--overview start-->
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><i class="fa fa-laptop"></i> Users</h3>
                <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
                    <li><i class="fa fa-laptop"></i>Users</li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        Advanced Table
                    </header>

                    <table class="table table-striped table-advance table-hover">
                        <tbody>
                        <tr>
                            <th><i class="icon_profile"></i> User Name</th>
                            <th><i class="icon_pin_alt"></i> Address</th>
                            <th><i class="icon_mobile"></i> Mobile</th>

                            <th><i class="icon_mail_alt"></i> Email</th>


                            <th><i class="icon_cogs"></i> Action</th>
                        </tr>
                        <tr>
                            <td>Mario Norris</td>
                            <td>Amarillo</td>


                            <td>945-547-5302</td>
                            <td>mildred@hour.info</td>
                            <td>
                                <div class="btn-group">
                                    <a class="btn btn-primary" href="{{url('users/addusers')}}"><i class="icon_plus_alt2"></i></a>
                                    <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
                                    <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </section>
            </div>
        </div>
    </section>
</section>
        @endsection