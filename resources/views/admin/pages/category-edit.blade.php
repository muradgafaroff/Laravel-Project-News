@extends('admin.layout.master')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">News Category Edit</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin')}}">Home</a></li>
                            <li class="breadcrumb-item active">Category</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
                <form method="post" action="{{route('category.update',$category->id)}}">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Category</h3>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Category Name</label>
                                        <input  name="name" type="text" class="form-control" placeholder="Name" value="{{$category->name}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Category Status</label>
                                        <select  class="form-control select2" style="width: 100%;" name="is_home">

                                            <option {{old('is_home',$category->is_home)=="1"? 'selected':''}}  value="1">1</option>
                                            <option {{old('is_home',$category->is_home)=="0"? 'selected':''}} value="0">0</option>
                                        </select>
                                    </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>

    <aside class="control-sidebar control-sidebar-dark">
    </aside>

@endsection
