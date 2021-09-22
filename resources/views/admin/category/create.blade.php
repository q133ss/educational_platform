@extends('layouts.admin_layout')
@section('title_page', 'Добавить предмет')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Добавить предмет</h1>
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
                   <form action="{{route('category.store')}}" method="POST" enctype="multipart/form-data">
                       @csrf
                       <div class="card-body">
                           <div class="form-group">
                               <label for="exampleInputEmail1">Название</label>
                               <input type="text" class="form-control" id="exampleInputEmail1" name="title" placeholder="Введите название предмета" required>
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
                               <!-- <label for="customFile">Custom File</label> -->
                               <strong>Изображение</strong>
                               <div class="custom-file mt-2">
                                   <input type="file" name="picture">
                               </div>
                           </div>

                           <div class="form-group">
                               <label>Код видео</label>
                               <textarea class="form-control" rows="3" name="video_code" placeholder='<iframe width="560" height="315" src="https://www.youtube.com/embed/FrjD5CZ4a88" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>' required></textarea>
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
