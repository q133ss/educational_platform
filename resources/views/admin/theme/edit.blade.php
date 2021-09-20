@extends('layouts.admin_layout')
@section('title_page', 'Редактировать тему')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Редактировать тему: {{$theme->title}}</h1>
                </div><!-- /.col -->

            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary">

                @if(session('success'))
                    <div class="alert alert-success" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                        <h4><i class="icon fa fa-check"></i>{{session('success')}}</h4>
                    </div>
            @endif

            <!-- /.card-header -->
                <!-- form start -->
                <form action="{{route('theme.update', $theme->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Название</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" value="{{$theme->title}}" name="title" placeholder="Введите название" required>
                        </div>

                        <div class="form-group">
                            <label>Изменить предмет</label>
                            <select class="form-control" name="cat_id">
                                @foreach($categories as $cat)
                                    <option value="{{$cat->id}}" @if($cat->id == $theme->id) selected @endif>{{$cat->title}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Изменить класс</label>
                            <select class="form-control" name="class_id">
                                @foreach($classes as $class)
                                    <option value="{{$class->id}}" @if($class->id == $theme->id) selected @endif>{{$class->number}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Добавить</button>
                        </div>
                </form>
            </div>
        </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
