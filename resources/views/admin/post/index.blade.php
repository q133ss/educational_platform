@extends('layouts.admin_layout')
@section('title_page', 'Все видео')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Все видео</h1>
                </div><!-- /.col -->

            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                @if(session('success'))
                    <div class="alert alert-success" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                        <h4><i class="icon fa fa-check"></i>{{session('success')}}</h4>
                    </div>
                @endif


                <div class="card-body p-0">
                    <table class="table table-striped projects">
                        <thead>
                        <tr>
                            <th style="width: 1%">
                                Id
                            </th>
                            <th style="width: 20%">
                                Название
                            </th>

                            <th>Категория</th>

                            <th>Дата добавления</th>

                            <th style="width: 20%">
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($posts as $post)
                            <tr>
                                <td>
                                    {{$post->id}}
                                </td>
                                <td>
                                    {{$post->title}}
                                </td>

                                <td>{{$post->category['title']}}</td>

                                <td>{{$post->created_at}}</td>

                                <td class="project-actions text-right">
                                    <a class="btn btn-info btn-sm" href="{{route('post.edit', $post->id)}}">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Изменить
                                    </a>
                                    <form action="{{route('post.destroy', $post->id) }}" class="btn" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <input type="hidden" name="_method" value="delete" />
                                        <button type="submit" class="btn btn-danger btn-sm delete-btn" href="#">
                                            <i class="fas fa-trash">
                                            </i>
                                            Удалить
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach

                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
