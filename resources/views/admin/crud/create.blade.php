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
                        <li> <i class="icon_documents_alt"></i></i>Create</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Basic Forms
                        </header>
                        <div class="panel-body">
                            <form role="form">
                                <div class="form-group">
                                    <label>Image Title</label>
                                    <input type="text" class="form-control" id="title" placeholder="Image title">
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea class="form-control " id="ccomment" name="comment" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Upload Image</label>
                                    <input type="file" id="upload">
                                    <p class="help-block">Image</p>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>

                        </div>
                    </section>
                </div>

            </div>
</div>

        </section>
    </section>
@endsection