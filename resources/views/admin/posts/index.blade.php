@extends('admin.layouts.main')
  @section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
  

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
     <h1 class = "ml-2">Посты</h1>
     <div class="col-12">
            <div class="card col-6">
                        <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>User</th>
                      <th>Content</th>
                      <th colspan = "3" class = "text-center">Действия</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($posts as $post)
                    <tr>
                      <td>{{$post->id}}</td>
                      <td>{{$post->title}}</td>
                      <td>{{$post->content}}</td>
                      <td><a href="{{route('admin.post.show', $post->id)}}"><i class="far fa-eye"></i></a></td>
                      <td><a href="{{route('admin.post.edit', $post->id)}}"><i class="fas fa-pen"></i></a></td>
                      <td>
                        <form action="{{route('admin.post.delete', $post->id)}}" method="POST">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="border-0 bg-transparent">
                        <i class="fas fa-trash text-danger" role="button"></i>
                        </button>
                        </form>
                      </td>
                    </tr>
                   @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        
        <div >
        <a href="{{route('admin.index')}}" class="btn btn-secondary">Назад</a>  
        <a href="{{route('admin.post.create')}}" class="btn btn-secondary">Добавить пост</a>  
</div>
    </section>
    <!-- /.content -->
  </div>
  
  <!-- /.content-wrapper -->
  @endsection