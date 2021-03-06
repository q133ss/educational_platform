@extends('layouts.admin_layout')
@section('title_page', 'Редактировать урок')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Редактировать урок {{$post->title}}</h1>
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
                <form action="{{route('post.update', $post->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Название</label>
                            <input type="text" class="form-control" value="{{$post->title}}" id="exampleInputEmail1" name="title" placeholder="Введите имя предмета" required>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Название на английском <small>(Можно оставить пустым)</small></label>
                            <input type="text" class="form-control" value="{{$post->title_en}}" id="exampleInputEmail1" name="title_en" placeholder="Введите название урока">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Название на казахском <small>(Можно оставить пустым)</small></label>
                            <input type="text" class="form-control" value="{{$post->title_kz}}" id="exampleInputEmail1" name="title_kz" placeholder="Введите название урока">
                        </div>

                        <div class="form-group">
                            <label>Предмет</label>
                            <select class="form-control" name="cat_id">
                                @foreach($categories as $cat)
                                    <option value="{{$cat['id']}}" @if($cat['id'] == $post['cat_id']) selected @endif >{{$cat['title']}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Тема</label>
                            <select class="form-control" name="theme_id">
                                @foreach($themes as $theme)
                                    <option value="{{$theme->id}}" @if($theme['id'] == $post['theme_id']) selected @endif>{{$theme->title}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Класс</label>
                            <select class="form-control" name="class_id">
                                @foreach($groups as $group)
                                    <option value="{{$group->id}}"  @if($group['id'] == $post['class_id']) selected @endif>{{$group->number}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Код видео</label>
                            <textarea class="form-control" rows="3" name="video_code" placeholder='<iframe width="560" height="315" src="https://www.youtube.com/embed/FrjD5CZ4a88" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>' required>{{$post->video_frame}}</textarea>
                        </div>


                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Обновить</button>
                        </div>
                </form>
            </div>
        </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
