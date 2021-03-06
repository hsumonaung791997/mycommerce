@extends('backend.layouts.master')
@section('content')
<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Ecommerce</h1>
          <p>Basic bootstrap tables</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active"><a href="#">Sub Category</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="clearfix"></div>
        <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">Add Category</h3>
             <form method="post" enctype="multipart/form-data" action="{{ route('subcategory.store') }}">
             @csrf
             <div class="form-group">
                 <label for="nameInput">Name:</label>
                 <input type="text" name="name" class="form-control" id="fileInput" class="@error('name') is-invalid @enderror" value="{{old('name')}}">
                 @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
             </div>
            
             <div class="form-group">
                 <label for="nameInput">Sub Category:</label>
                 <select class="js-example-basic-single form-control" name="category" id="category">
                   @foreach($categories as $value)
                    <option value="{{$value->id}}">{{ $value->name }}</option>
                    @endforeach
                 </select>
                  @error('category')
                <div class="alert alert-danger">{{ $message }}</div>
              ` @enderror
             </div>
             <input type="submit" name="save" value="Save" class="btn btn-sm btn-primary">

            </form>
            </div>
          </div>
        </div>
      </div>
    </main>
  @section('script')
  <script type="text/javascript">
  $(document).ready(function() {
    $('.js-example-basic-single').select2();
});
</script>
@endsection
 