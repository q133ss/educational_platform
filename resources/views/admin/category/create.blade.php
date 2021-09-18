@extends('layouts.admin_layout')
@section('title_page', 'Добавить категорию')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Добавить категорию</h1>
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
                   <form action="{{route('category.store')}}" method="POST">
                       @csrf
                       <div class="card-body">
                           <div class="form-group">
                               <label for="exampleInputEmail1">Имя</label>
                               <input type="text" class="form-control" id="exampleInputEmail1" name="title" placeholder="Введите имя категории" required>
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
