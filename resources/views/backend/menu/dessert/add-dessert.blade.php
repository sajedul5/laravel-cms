@extends('backend.layouts.master')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Manage Menu</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Menu </li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-md-12">
          <!-- Custom tabs (Charts with tabs)-->
          <div class="card">
            <div class="card-header">
              <h3>Add Dessert
                <a href="{{route('dessert.view')}}" class="btn btn-sm btn-info float-right">
                  <i class="fa fa-list"></i> Dessert List </a>
              </h3>
            </div><!-- /.card-header -->
            <div class="card-body">

              <form method="post" action="{{route('dessert.store')}}" enctype="multipart/form-data">
                  @csrf
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="address">Title</label>
                      <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" placeholder="Title">
                      <span class="text-danger">{{($errors->has('title'))?($errors->first('title')):''}}</span>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="address">Price</label>
                      <input type="text" class="form-control @error('price') is-invalid @enderror" name="price" placeholder="Price">
                      <span class="text-danger">{{($errors->has('price'))?($errors->first('price')):''}}</span>
                    </div>
                    <div class="form-group col-md-12">
                      <label for="address">Description</label>
                      <textarea name="description" class="form-control @error('description') is-invalid @enderror" placeholder="Description"></textarea>
                      <span class="text-danger">{{($errors->has('description'))?($errors->first('description')):''}}</span>
                    </div>
                    <div class="col-md-8">
                      <div class="row">
                        <div class="form-group col-md-4">
                          <label for="address">Image</label>
                          <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" id="image">
                          <span class="text-danger">{{($errors->has('image'))?($errors->first('image')):''}}</span>
                        </div>
                        <div class="form-group col-md-4">
                          <img src="{{url('public/upload/no-image.png')}}"
                          style="width:150px; height:150px; border:1px solid #000;" id="showImage">
                        </div>
                        <div class="col-md-4">
                          <div class="form-group" style="padding: 30px;">
                            <input type="submit" class="btn btn-info" value="submit">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
              </form>

            </div><!-- /.card-body -->
          </div>
          <!-- /.card -->
        </section>
        <!-- /.Left col -->

      </div>
      <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
