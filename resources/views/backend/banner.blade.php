@extends('layouts.dashboard')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <!-- /.content-header -->

    <!-- Main content -->
    <div class="container">
        <div >
            <div >
                <div class="table-title">
                    <div class="row">

                        <div class="col-sm-6 text-center">
                            <h2>All Banner List</h2>
                        </div>

                <div class="col-sm-12">
                    <div class="table-responsive">
                        <table class="table table-striped ">
                            <thead>
                                <tr>
                                    <td>SL</td>
                                    <td>Banner Image Name</td>
                                    <td>Carousel Image</td>
                                    <th>Status</th>
                                    <th>Active/Deactive</th>
                                    <th>Created At</th>
                                    <th>Updated At</th>
                                    <td>Action</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($banners as $key=>$banner)
                                <tr>
                                        <td data-title="SL">{{$key+1}}</td>
                                        <td data-title="Banner Image Name">{{$banner->bannername}}</td>
                                        <td data-title="Carousel Image">
                                            <img style="height:48px" src="{{asset('frontend/images/banners')}}/{{$banner->bannerimage}}" alt="">
                                        </td>
                                        <td data-title="Status">
                                            <div class="badge bg-{{$banner->status == 2?'warning':'success'}}">{{$banner->status == 2?'Deactive':'Active'}}</div>
                                        </td>
                                    @if ($banner->status == 1)
                                        <td  data-title="Active/Deactive"><a href="{{url('/deactive/banner/'.$banner->id)}}" class="btn-sm btn-warning">Deactive Banner</a>
                                        </td>
                                    @else
                                        <td data-title="Active/Deactive">
                                                <a href="{{url('/active/banner/'.$banner->id)}}" class="btn-sm btn-success">Active Banner</a>
                                        </td>
                                    @endif
                                    <td data-title="Created At">{{$banner->created_at->format('d-m-Y H-i A')}}</td>
                                    <td data-title="Updated At">{{$banner->updated_at->format('d-m-Y H-i A')}}</td>
                                    <td data-title="Action">
                                        <button type="button" name="{{route('banner.delete' , $banner->id)}}" class="delete btn btn-danger shadow btn-xs sharp mr-1"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-md-6 m-auto">
                    <h3>Add New Banner</h3>
                    <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Slider</h3>
                    </div>
                    <div class="col-12">
                                @if ($message = Session::get('success'))
                                    <div class="alert alert-success contact__msg"  role="alert">
                                        {{ $message }}
                                    </div>
                                    @endif
                                </div>
                    <form action="{{route('save.banner')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">

                        <div class="form-group">
                            <label for="exampleInputEmail1">Banner Name</label>
                            <input type="text" name="bannername" class="form-control" id="exampleInputEmail1" placeholder="Enter Banner Name">
                            @error('bannername')
                                <strong class="text-danger">{{$message}}</strong>
                            @enderror
                        </div>

                        <div class="form-group mt-2">
                            <label for="exampleInputEmail1">1st Heading</label>
                            <input type="text" name="heading_one" class="form-control" id="exampleInputEmail1" placeholder="Enter 1st Heading">
                        </div>
                        <div class="form-group mt-2">
                            <label for="exampleInputEmail1">2nd Heading</label>
                            <input type="text" name="heading_two" class="form-control" id="exampleInputEmail1" placeholder="Enter 2nd Heading">
                        </div>
                        <div class="form-group mt-2">
                            <label for="exampleInputEmail1">3rd Heading</label>
                            <input type="text" name="heading_three" class="form-control" id="exampleInputEmail1" placeholder="Enter 3rd Heading">
                        </div>

                        <div class="form-group mt-2">
                            <div class="input-group">
                            <div class="custom-file">
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                <input type="file" name="bannerimage" class="form-control" >
                                @error('bannerimage')
                                <strong class="text-danger">{{$message}}</strong>
                            @enderror
                            </div>
                            </div>
                        </div>
                        </div>

                    

                        <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
                </div>

            </div>
        </div>
    </div>
  </div>
<!-- /.content-wrapper -->

@endsection

@section('footer_script')
 {{-- delete banner success --}}
 <script>
    $('.delete').click(function(){
        Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
        if (result.isConfirmed) {
           var link = $(this).attr('name');
           window.location.href =link;
        }
        })
    })
</script>
@if(session('delete'))
<script>
    Swal.fire(
      'Deleted!',
      '{{session('delete')}}',
      'success'
    )
</script>
@endif

@endsection