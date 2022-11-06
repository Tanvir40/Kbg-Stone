@extends('layouts.dashboard')

@section('content')
    

<div class="row full-width">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h2 class="m-auto">Marbel List</h2>
                 <a href="{{route('add.marbel')}}" class="btn btn-danger float-end btn-sm"><i class="mdi mdi-plus-circle "></i> Add Marbel</a>
                @if (session('success'))
                    <div class="alert alert-success"><strong>{{session('success')}}</strong></div>
                @endif
            </div>
            <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <td>SL</td>
                    <td>Marbel Image</td>
                    <td>Marbel Name</td>
                    <th>Marbel Category</th>
                    <td>Marbel Room Category</td>
                    <th>Added Date</th>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
                    @foreach($all_marbels as $key=>$marbel)
                    <tr>
                        <td data-title="SL">{{$all_marbels->firstitem()+$key}}</td>
                        <td data-title="Product Image">
                            <img src="{{asset('frontend/images/marble/pictures')}}/{{$marbel->marbel_photo}}" alt="contact-img" title="contact-img" class="rounded me-3" height="48">
                        </td>
                        <td data-title="Product Name">{{$marbel->marbel_name}}</td>
                        <td data-title="Category">{{$marbel->rel_to_cat->category_name}}</td>
                        <td data-title="Category">{{$marbel->rel_to_catroom->categoryroom_name}}</td>
                        <td data-title="Product Name">{{$marbel->created_at->format('d-m-Y H-i A')}}</td>
                        <td class="table-action" data-title="Action">
                            <button type="button" name="{{route('marbel.delete' , $marbel->id)}}" class="action-icon delete"> <i class="mdi mdi-delete"></i></button> 
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
        {{$all_marbels->links()}}
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