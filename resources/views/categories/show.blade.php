@extends('layouts.admin')

@section('showcategories')
<div class="container-fluid">

    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="{{ url('/admin') }}">Dashboard</a>
      </li>
      <li class="breadcrumb-item">
          <a href="{{ route('categories.index') }}">Category</a>
      </li> 
      <li class="breadcrumb-item active">View Category</li>
    </ol>

    <!-- DataTables Example -->
    <div class="card mb-3">
      <div class="card-header">
        View Category
        </div>
      <div class="card-body">
            <div> 
                <p><h1>{{ $category->name }}</h1></p>
               
                @if($category->image!='')
                 <p>
                    <img src="{{ asset('img/portfolio/thumbnails') }}/{{ $category->image }}"/>
                </p>
                @endif 
                
                <a href="{{ url()->previous() }}" class="btn btn-primary">Back</a>
                <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-info" role="button">Edit</a>
            </div>
        </div>
        
    </div>
@endsection