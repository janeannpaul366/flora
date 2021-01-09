@extends('layouts.admin')

@section('addcategories')
<div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="{{ url('/admin') }}">Dashboard</a>
          </li>
          <li class="breadcrumb-item">
              <a href="{{ route('categories.index') }}">Category</a>
          </li>  
          <li class="breadcrumb-item active">Add Category</li>
        </ol>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            Add Category
        </div>
          <div class="card-body">
            <div>
            {{-- Using the Laravel HTML Form Collective to create our form --}}
            {{ Form::open(array('route' => 'categories.store', 'enctype' => 'multipart/form-data')) }}

            <div class="form-group">
            {{ Form::label('name', 'Name') }}
            {{ Form::text('name', null, array('class' => 'form-control')) }}
            <br>

            {{Form::file('image')}}
            <br> 
            <br>

            {{ Form::submit('Save', array('class' => 'btn btn-primary')) }} 
            {{ Form::close() }}
            </div>
          </div>
        </div>

      </div>
@endsection