
@extends('admin.layout.master')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Dashboard v3</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Add Product</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->


<!-- Main content -->
<!-- Main content -->
<section class="content">
  <div class="container-fluid ">
    <div class="row d-flex justify-content-center">
      <!-- left column -->
      <div class="col-md-6 ">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Add product</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form action="{{ route('admin.product.update',['page' => $page]) }}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="page" value="{{ $page }}">

            <input type="hidden" name="product_id" value="{{  encrypt($product->id)}}">
            <div class="card-body ">
              <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="name" class="form-control" id="exampleInputEmail1" placeholder="Enter Name" name="name" value="{{ $product->name}}">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Price</label>
                <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Price" name="price" value="{{ $product->price  }}">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Category</label>
                <select class="form-control" name="category_id">
                  <option value="">Select an Option</option>
                  @foreach ($categories as $category)
                  <option value="{{ $category->id }}" @selected($category->id==$product->category_id)>{{ $category->name }}</option>
                      
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <label for="exampleInputFile">Image</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="exampleInputFile" name="image">
                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                  </div>
                  <div class="input-group-append">
                    <span class="input-group-text">Upload</span>
                  </div>
                </div>
                    <td width="100" class="mt-6"><img src="{{ asset('storage/images/'.$product->image) }}" width="200px" alt=""></td>

              </div>
              
              <div class="form-group">
                <label for="exampleInputPassword1">Status</label>
                <div class="form-check">
                  <input class="form-check-input" type="radio" @checked($product->status==1) name="status" id="flexRadioDefault1" value="1">
                  <label class="form-check-label" for="flexRadioDefault1">
                    Active
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" @checked($product->status==0 ) name="status" id="flexRadioDefault2" value="0">
                  <label class="form-check-label" for="flexRadioDefault2">
                    Inactive
                  </label>
                </div>
              </div>
              
              <div class="form-group">
                <label for="exampleInputPassword1">Is favorite</label>
                <div class="form-check">
                  <input class="form-check-input" type="radio" @checked($product->is_favorite==1) name="is_favorite" id="flexRadioDefault3" value="1">
                  <label class="form-check-label" for="flexRadioDefault3">
                    Yes
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" @checked($product->is_favorite==0) name="is_favorite" id="flexRadioDefault4" value="0">
                  <label class="form-check-label" for="flexRadioDefault4">
                    No
                  </label>
                </div>
              </div>
              
              
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
        <!-- /.card -->

       

      </div>
      <!--/.col (left) -->
      <!-- right column -->
      
      <!--/.col (right) -->
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</section>

<!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
