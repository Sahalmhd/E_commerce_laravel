@extends('admin.layout.master')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Products({{ $products->total() }})</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Products</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            @if (session()->has('message'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ session('message') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                            <div class=" d-flex flex-row-reverse bd-highlight">
                                <a class="btn btn-primary mr-2" href="{{ route('admin.product.create') }}">Add product</a>

                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>image</th>
                                        <th>Name</th>
                                        <th>Category</th>

                                        <th>Price</th>
                                        <th>Favourite</th>
                                        <th>Status</th>
                                        <th style="width: 14%">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $product)
                                        <tr>
                                            <td>{{ $products->firstItem()+$loop->index}}
                                            </td>
                                            <td width="100"><img src="{{ asset('storage/images/'.$product->image) }}" width="100" alt=""></td>
                                            <td>{{ $product->name }}</td>
                                            <td>{{ $product->catogary->name }}</td>
                                            <td>{{ number_format($product->price) }}</td>
                                            <td>{{ $product->isfavorite_text }}</td>
                                            <td>{{ $product->status_text }}</td>
                                            <td><a href="{{ route('admin.product.edit',['id' => encrypt($product->id), 'page' => request()->page]) }}"
                                                    class="btn btn-primary bbtn-sm mr-2">Edit</a>

                                                <a href="{{ route('admin.product.delete', ['id' => encrypt($product->id), 'page' => request()->page])}}"
                                                    class="btn btn-danger bbtn-sm">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>

                            </table>
                        </div>
                        <!-- /.card-body -->
                        <!-- /.card-body -->
                        <div class="card-footer clearfix">
                            <ul class="pagination pagination-sm m-0 float-right">
                                {{ $products->links() }}

                            </ul>
                        </div>

                    </div>
                    <!-- /.card -->


                </div><!-- /.container-fluid -->
    </section>


    <!-- Main content -->

    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
