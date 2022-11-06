@extends('layouts.dashboard')

@section('content')

<div class="container">
    <div class="row mt-3">

        <div class="col-lg-9">
            <div class="card">
            <div class="card-header">
                <h2>Clint Reivew List</h2>
            </div>

            <div class="card-body">
                
                <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Clint Image</th>
                            <th>Clint Review</th>
                            <th>Review Star</th>
                            <th>Reviewed At</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($reviews as $key=>$review)
                        <tr>
                            <td>{{$reviews->firstitem()+$key}}</td>
                            </td>
                            <td><img width="50px" src="{{asset('frontend/images/review/')}}/{{$review->photo}}" alt=""></td>
                            <td >{{$review->review}}</td>
                            <td >{{$review->star}}</td>
                            <td >{{$review->created_at->format('d-m-Y H-i A')}}</td>
                            <td>
                                <button type="button" name="{{route('clint.review.delete' , $review->id)}}" class="delete btn btn-danger shadow btn-xs sharp mr-1"><i class="fa fa-trash"></i></button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{$reviews->links()}}
            </div>
            </div>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="card">
            <div class="card-header">
                <h2>Add Clint Review</h2>
            </div>
            <div class="card-body">
                @if (session('success'))
                    <div class="alert alert-success"><strong>{{session('success')}}</strong></div>
                @endif
                <form action="{{route('save.clint.review')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="form-group">
                        <label class="form-label">Clint Image</label>
                        <input type="file" class="form-control" name="photo">
                        @error('photo')
                            <strong class="text-danger">{{$message}}</strong>
                        @enderror
                    </div>

                    <div class="form-group mt-2">
                        <label class="form-label">Review Star</label>
                        <input type="number" class="form-control" name="star">
                        @error('star')
                            <strong class="text-danger">{{$message}}</strong>
                        @enderror
                    </div>

                    <div class="form-group mt-2">
                        <label class="form-label">Clint Review</label>
                        <textarea name="review" id="exampleInputEmail1" class="form-control" cols="20" rows="5"></textarea>
                        @error('review')
                            <strong class="text-danger">{{$message}}</strong>
                        @enderror
                    </div>

                    <br>
                    <button type="submit" class="btn btn-info">Add Review</button>
                </form>
            </div>
            </div>
        </div>

    </div>
</div>

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
