@extends('layouts.admin')

@section('editcategories')
<div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="{{ url('/admin') }}">Dashboard</a>
          </li>
          <li class="breadcrumb-item">
              <a href="{{ route('categories.index') }}">Category</a>
          </li> 
          <li class="breadcrumb-item active">Edit Category</li>
        </ol>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            Edit Category
        </div>
          <div class="card-body">
            <div>
            
            {{ Form::model($category, array('route' => array('categories.update', $category->id), 'method' => 'PUT','enctype' => 'multipart/form-data')) }}

            <div class="form-group">
            {{ Form::label('name', 'Name') }}
            {{ Form::text('name', null, array('class' => 'form-control')) }}
            <br>

            {{ Form::label('status', 'Status') }}  
            {{ Form::select('status', array('1' => 'Active', '0' => 'Inactive'), null, ['class' => 'form-control']) }}
            <br>
            
            {{ Form::label('image', 'Image') }}
            <br>
            {{ Form::hidden('image_old', $category->image) }}
            @if ($category->image) 
            <img src="{{ asset('img/portfolio/thumbnails/small') }}/{{ $category->image }}"/><br>
            @endif

            <br> 
            {{Form::file('image')}}<br>
            <br>

            <a href="{{ url()->previous() }}" class="btn btn-primary">Back</a>
            {{ Form::submit('Save', array('class' => 'btn btn-primary')) }}

            {{ Form::close() }}
            </div>
          </div>
        </div>

      </div>
@endsection