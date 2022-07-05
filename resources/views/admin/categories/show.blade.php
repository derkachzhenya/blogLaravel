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
     <h1 class = "ml-2">{{$category->title}}</h1>
     <div class="col-12">
            <div class="card col-6">
                        <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
               
                  <tbody>
                    
                    <tr>
                      <td>ID</td>
                      <td>{{$category->id}}</td>
                     
                    </tr>
                    <tr>
                      <td>Название</td>
                      <td>{{$category->title}}</td>
                      
                    </tr>
                  </tbody>
                </table>
              </div>
              
              <!-- /.card-body -->
            </div>
            <div>
              <a href="{{route('admin.category.index')}}" class="btn btn-secondary">Назад</a> 
              </div>
            <!-- /.card -->
          </div>
        </div>
        
     
    </section>
    <!-- /.content -->
  </div>
  
  <!-- /.content-wrapper -->
  @endsection