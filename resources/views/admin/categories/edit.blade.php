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
            <div class="col-6">
            <h2 class="ml-4 mt-3">Редактирование категорий</h2>
            <form action = "#" method = "post">
              @csrf
                <div class="card-body ">
                  <div class="form-group">
                    <label>Название</label>
                    <input type="text" class="form-control" name = "title" placeholder="Введите название"
                    value="{{$category->title}}">
                    @error('title')
                   <div class="text-danger">Это поле необходимо заполнить</div>
                    @enderror
                      </div>
                 
                  <button type="submit" class="btn btn-secondary">Редактировать</button>
                
                 
                </div>
            
              </form>
          </div>
     
        </div>
      
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @endsection