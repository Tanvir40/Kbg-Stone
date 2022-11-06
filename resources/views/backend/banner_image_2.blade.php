@extends('layouts.dashboard')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <!-- /.content-header -->

    <!-- Main content -->
    <div class="container-xl">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">


                    </div>
                </div>


                <div class="col-md-6 m-auto">
                    <h3>Update 2nd Banner</h3>
                    <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Image Update</h3>
                    </div>
                    <div class="col-12">
                                @if ($message = Session::get('success'))
                                    <div class="alert alert-success contact__msg"  role="alert">
                                        {{ $message }}
                                    </div>
                                    @endif
                    </div>
                    <form action="{{route('save.2nd.banner')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <input type="hidden" name="id" class="form-control" value="{{$banners2->first()->id}}">
                        <div class="form-group mt-2">
                            <div class="input-group">
                                <div class="custom-file">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        <input type="file" name="bannerimage" class="form-control" >
                                        <img class="mt-2" width="100px" src="{{asset('frontend/images/2nd')}}/{{$banners2->first()->bannerimage}}" alt="">
                                    @error('bannerimage')
                                        <strong class="text-danger">{{$message}}</strong>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-group mt-2">
                            <label for="exampleInputEmail1">Banner Name</label>
                            <textarea name="bannername" class="form-control" id="exampleInputEmail1" cols="30" rows="10">{{$banners2->first()->bannername}}</textarea>
                            @error('bannername')
                                <strong class="text-danger">{{$message}}</strong>
                            @enderror
                        </div>
                    </div>


                        <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                    </div>

                </div>

            </div>
        </div>
    </div>
  </div>
<!-- /.content-wrapper -->
@endsection