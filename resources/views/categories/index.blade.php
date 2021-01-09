@extends('layouts.admin')

@section('listcategories')
<div class="container-fluid">

  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="{{ url('/admin') }}">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Categories</li>
    <li style="padding:0px 0px 0px 73%">
      <a href="{{ route('categories.create') }}" class="btn btn-primary">Add Category</a>
    </li>
  </ol>
     
  <div class="card mb-3">
    <div class="card-header">
      <i class="fas fa-table"></i>
      Page {{ $categories->currentPage() }} of {{ $categories->lastPage() }}
    </div>

    <div class="card-body">
      <div class="table-responsive">
          @if(count($categories) > '0')
        <table class="table table-bordered" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Image</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>

          <tbody>
          @foreach ($categories as $key => $category)
            <tr>
              <td>{{ $key+1 }}</td>
              <td>{{ $category->name }}</td>
              <td style="text-align:center">
                <img src="{{ asset('img/portfolio/thumbnails/small/') }}/{{ $category->image }}"/>
              </td>
              <td>
                @if($category['status'] == '1')
                Active
                @elseif($category['status'] == '0') 
                Inactive
                @endif
              </td>
              <td>
                {!! Form::open(['method' => 'DELETE', 'route' => ['categories.destroy', $category->id] ]) !!}
                <a href="{{ route('categories.show', $category->id ) }}" class="btn btn-primary btn-sm">View</a>
                <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-info btn-sm">Edit</a>
                {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                {!! Form::close() !!} 
              </td> 
            </tr>
          @endforeach
          </tbody>
        </table>
        @else
          No record found
        @endif
        <ul class="pagination justify-content-end">
          {{  $categories->links('vendor.pagination.bootstrap-4')}}
        </ul>
      </div>
    </div>
  </div>

</div>

@endsection