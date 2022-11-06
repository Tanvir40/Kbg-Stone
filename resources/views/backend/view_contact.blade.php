@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="text-center">Customer Form Submit</h3>
                <div id="no-more-tables">
                    <table class="table table-striped ">
                        <thead>
                            <tr>
                                <td>SL</td>
                                <td>Name</td>
                                <td>Marbel Name</td>
                                <td>Email</td>
                                <th>Phone</th>
                                <th>Requirement</th>
                                <th>Submited At</th>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($contacts as $key=>$contact)
                            <tr>
                                <td data-title="SL">{{$contacts->firstitem()+$key}}</td>
                                <td data-title="Name">{{$contact->name}}</td>
                                <td data-title="Name">{{$contact->marbel_name}}</td>
                                <td data-title="Email">{{$contact->email}}</td>
                                <td data-title="Phone">{{$contact->phone}}</td>
                                <td data-title="Requirement">{{$contact->requirement}}</td>
                                <td data-title="Submited At">{{$contact->created_at->format('d-m-Y H-i A')}}</td>
                                <td data-title="Action">
                                    <button type="button" name="{{route('contact.delete' , $contact->id)}}" class="delete btn btn-danger shadow btn-xs sharp mr-1"><i class="fa fa-trash"></i></button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {{$contacts->links()}}

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