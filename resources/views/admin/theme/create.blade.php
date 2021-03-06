@extends('layouts.admin_layout')
@section('title_page', 'Добавить тему')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Добавить тему</h1>
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
                <form action="{{route('theme.store')}}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Название на русском</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="title" placeholder="Введите название темы" required>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Название на английском <small>(Можно оставить пустым)</small></label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="title_en" placeholder="Введите название урока">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Название на казахском <small>(Можно оставить пустым)</small></label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="title_kz" placeholder="Введите название урока">
                        </div>

                        <div class="form-group">
                            <label>Для какого предмета</label>
                            <select class="form-control" name="cat_id">
                                @foreach($categories as $cat)
                                    <option value="{{$cat->id}}">{{$cat->title}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Для какого класса</label>
                            <select class="form-control" name="class_id">
                                @foreach($classes as $class)
                                    <option value="{{$class->id}}">{{$class->number}}</option>
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
