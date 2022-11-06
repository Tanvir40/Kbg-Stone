@extends('layouts.dashboard')

@section('content')


<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h2>Add Marbel</h2>
            </div>
            <div class="card-body">
                @if (session('success'))
                    <div class="alert alert-success"><strong>{{session('success')}}</strong></div>
                @endif
                <form action="{{route('save.marbel')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group mb-2">
                                <label for="" class="form-label">Select Marbel Category</label>
                                <select class="form-control" name="category_id">
                                    <option value="">-- select --</option>
                                    @foreach ($categories as $mcat)
                                    <option value="{{$mcat->id}}">{{$mcat->category_name}}</option>
                                    @endforeach
                                </select>
                                @error('mcat_id')
                                <strong class="text-danger mt-2">{{$message}}</strong>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group mb-2">
                                <label for="" class="form-label">Select Marbel Room Category</label>
                                <select class="form-control" name="mcat_room_id" id="mcat_room_id">
                                    <option value="">-- select --</option>
                                    @foreach ($categoriesRoom as $room)
                                    <option value="{{$room->id}}">{{$room->categoryroom_name}}</option>
                                    @endforeach
                                </select>
                                @error('mcat_room_id')
                                <strong class="text-danger mt-2">{{$message}}</strong>
                                @enderror
                            </div>
                        </div>


                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="" class="form-label">Marbel Name</label>
                                <input type="text" class="form-control" name="marbel_name">
                                @error('marbel_name')
                                <strong class="text-danger mt-2">{{$message}}</strong>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="" class="form-label">Marbel Title</label>
                                <input type="text" class="form-control" name="marbel_title">
                                @error('marbel_title')
                                <strong class="text-danger mt-2">{{$message}}</strong>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group mt-2">
                                <label for="" class="form-label">Long Description</label>
                                <textarea cols="30" rows="10" id="summernote" class="form-control" name="long_desp"></textarea>
                                @error('long_desp')
                                <strong class="text-danger mt-2">{{$message}}</strong>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group mt-2">
                                <label for="" class="form-label">Marbel Photo</label>
                                <input type="file" class="form-control" name="marbel_photo">
                                @error('marbel_photo')
                                <strong class="text-danger mt-2">{{$message}}</strong>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-6 mb-2">
                            <div class="form-group mt-2">
                                <label for="" class="form-label">Marbel Thumbnail Images</label>
                                <input type="file" class="form-control" name="thumbnail">
                                @error('thumbnail')
                                <strong class="text-danger mt-2">{{$message}}</strong>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Add Marbel</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@section('footer_script')
    {{-- summernote activation --}}
<script>
    $(document).ready(function() {
  $('#summernote').summernote();
});
</script>
<script>
    $(document).ready(function() {
  $('#summernote2').summernote();
});
</script>
@endsection