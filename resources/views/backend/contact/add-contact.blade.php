@extends('backend.layouts.master')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Manage Contact</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Contact </li>
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
              <h3>Add Contact
                <a href="{{route('contact.view')}}" class="btn btn-sm btn-info float-right">
                  <i class="fa fa-list"></i> Contact List </a>
              </h3>
            </div><!-- /.card-header -->
            <div class="card-body">

              <form method="post" action="{{route('contact.store')}}" enctype="multipart/form-data">
                  @csrf
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="address">Phone</label>
                      <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" placeholder="Phone">
                      <span class="text-danger">{{($errors->has('phone'))?($errors->first('phone')):''}}</span>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="address">Email</label>
                      <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email">
                      <span class="text-danger">{{($errors->has('email'))?($errors->first('email')):''}}</span>
                    </div>
                    <div class="form-group col-md-12">
                      <label for="address">Address</label>
                      <textarea name="address" class="form-control @error('address') is-invalid @enderror" placeholder="Address"></textarea>
                      <span class="text-danger">{{($errors->has('address'))?($errors->first('address')):''}}</span>
                    </div>
                    <div class="form-group col-md-3">
                      <label for="address">Facebook</label>
                      <input type="text" class="form-control @error('facebook') is-invalid @enderror" name="facebook" placeholder="Feacbook">
                      <span class="text-danger">{{($errors->has('facebook'))?($errors->first('facebook')):''}}</span>
                    </div>
                    <div class="form-group col-md-3">
                      <label for="address">Twitter</label>
                      <input type="text" class="form-control @error('twitter') is-invalid @enderror" name="twitter" placeholder="Twitter">
                      <span class="text-danger">{{($errors->has('twitter'))?($errors->first('twitter')):''}}</span>
                    </div>
                    <div class="form-group col-md-3">
                      <label for="address">Instagram</label>
                      <input type="text" class="form-control @error('instagram') is-invalid @enderror" name="instagram" placeholder="Instagram">
                      <span class="text-danger">{{($errors->has('instagram'))?($errors->first('instagram')):''}}</span>
                    </div>
                    <div class="form-group col-md-3">
                      <label for="address">Youtube</label>
                      <input type="text" class="form-control @error('youtube') is-invalid @enderror" name="youtube" placeholder="Youtube">
                      <span class="text-danger">{{($errors->has('youtube'))?($errors->first('youtube')):''}}</span>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <input type="submit" class="btn btn-info" value="Submit">
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
