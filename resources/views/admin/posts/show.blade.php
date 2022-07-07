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
          <div class = "d-flex align-items-center">
     <h1 class = "ml-2 mr-3">{{$post->title}}</h1>
     <td ><a href="{{route('admin.post.edit', $post->id)}}" class="mr-2"><i class="fas fa-pen"></i></a></td>
     <td>  <form action="{{route('admin.post.delete', $post->id)}}" method="POST">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="border-0 bg-transparent">
                        <i class="fas fa-trash text-danger" role="button"></i>
                        </button>
                        </form></td>
     </div>
     <div class="col-12">
            <div class="card col-6">
                        <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
               
                  <tbody>
                    
                    <tr>
                      <td>ID</td>
                      <td>{{$post->id}}</td>
                     
                    </tr>
                    <tr>
                      <td>Название</td>
                      <td>{{$post->title}}</td>
                      
                    </tr>

                    <tr>
                      <td>Описание</td>
                      <td>{{$post->content}}</td>
                      
                    </tr>
                  </tbody>
                </table>
              </div>
              
              <!-- /.card-body -->
            </div>
            <div>
              <a href="{{route('admin.post.index')}}" class="btn btn-secondary">Назад</a> 
              </div>
            <!-- /.card -->
          </div>
        </div>
        
     
    </section>
    <!-- /.content -->
  </div>
  
  <!-- /.content-wrapper -->
  @endsection