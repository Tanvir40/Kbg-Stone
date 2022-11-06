@extends('layouts.dashboard')

@section('content')

<div class="container">
    <div class="row mt-3">

        <div class="col-lg-9">
            <div class="card">
            <div class="card-header">
                <h2>Marbel Category List</h2>
            </div>

            <div class="card-body">
                
                <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Added By</th>
                            <th>Marbel Category Name</th>
                            <th>Created At</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $key=>$category)
                        <tr>
                            <td data-title="SL">{{$categories->firstitem()+$key}}</td>
                            <td data-title="Added By">
                            @php
                            if(App\Models\User::where('id', $category->user_id)->exists()){
                                echo $category->rel_to_user->name;
                            }
                            else{
                                echo 'N/A';
                            }
                            @endphp
                            </td>
                            <td data-title="Category Name">{{$category->category_name}}</td>
                            <td data-title="Created At">{{$category->created_at->format('d-m-Y H-i A')}}</td>
                            <td data-title="Action">
                                <button type="button" name="{{route('category.add.delete' , $category->id)}}" class="delete btn btn-danger shadow btn-xs sharp mr-1"><i class="fa fa-trash"></i></button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{$categories->links()}}
            </div>
            </div>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="card">
            <div class="card-header">
                <h2>Add Category</h2>
            </div>
            <div class="card-body">
                @if (session('success'))
                    <div class="alert alert-success"><strong>{{session('success')}}</strong></div>
                @endif
                <form action="{{route('save.marbel.cat')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label class="form-label">Marbel Category Name</label>
                        <input type="text" class="form-control" name="category_name">
                        @error('category_name')
                            <strong class="text-danger">{{$message}}</strong>
                        @enderror
                    </div>
                    <br>
                    <button type="submit" class="btn btn-info">Add new</button>
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