@extends('layouts.admin_layout')
@section('title_page', 'Шапка сайта')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Редактировать шапку</h1>
                </div><!-- /.col -->

            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <form action="{{route('header_update')}}" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <strong>Логотип</strong>
                    <div class="custom-file mt-2">
                        <input type="file" name="logo">
                        <br>
                        Текущий:<br> <img src="{{$header->logo}}" width="100px" alt="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Надпись 1</label>
                    <input type="text" class="form-control" name="string1" id="exampleInputEmail1" placeholder="Мы дарим знаниния" value="{{$header->string1}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Надпись 2</label>
                    <input type="text" class="form-control" name="string2" id="exampleInputPassword1" placeholder="ОБРАЗОВАТЕЛЬНЫЙ ПРОЕКТ" value="{{$header->string2}}">
                </div>
                <div class="form-group">
                    <strong>Баннер</strong>
                    <div class="custom-file mt-2">
                        <input type="file" name="banner">
                        <br>
                        Текущий:<br> <img src="{{$header->banner}}" width="100px" alt="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Instagram</label>
                    <input type="text" class="form-control" name="soc1" id="exampleInputEmail1" placeholder="Ссылка" value="{{$header->soc1}}">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Facebook</label>
                    <input type="text" class="form-control" name="soc2" id="exampleInputEmail1" placeholder="Ссылка" value="{{$header->soc2}}">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Vk</label>
                    <input type="text" class="form-control" name="soc3" id="exampleInputEmail1" placeholder="Ссылка" value="{{$header->soc3}}">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">TikTok</label>
                    <input type="text" class="form-control" name="soc4" id="exampleInputEmail1" placeholder="Ссылка" value="{{$header->soc4}}">
                </div>

            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Сохранить</button>
            </div>
        </form>
    </section>
    <!-- /.content -->
@endsection
