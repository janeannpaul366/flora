@extends('layouts.admin')

@section('editevents')
<div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="{{ url('/admin') }}">Dashboard</a>
          </li>
          <li class="breadcrumb-item">
              <a href="{{ route('events.index') }}">Events</a>
          </li> 
          <li class="breadcrumb-item active">Edit Event</li>
        </ol>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            Edit Event
        </div>
          <div class="card-body">
            <div>
            
            {{ Form::model($event, array('route' => array('events.update', $event->id), 'method' => 'PUT','enctype' => 'multipart/form-data')) }}

            <div class="form-group">
            {{ Form::label('name', 'Name') }}
            {{ Form::text('name', null, array('class' => 'form-control')) }}
            <br>

            {{ Form::label('category', 'Category') }}  
            {{ Form::select('category_id', $categories, $event->pluck('category_id'), ['class' => 'form-control']) }}
            <br>

            {{ Form::label('description', 'Description') }}
            {{ Form::textarea('description', null, array('class' => 'form-control')) }}
            <br>

            {{ Form::label('date', 'Date') }}
            {{ Form::text('date', null, array('class' => 'form-control', 'id' => 'datepicker')) }}
            <br> 

            {{ Form::label('status', 'Status') }}  
            {{ Form::select('status', array('1' => 'Active', '0' => 'Inactive'), null, ['class' => 'form-control']) }}
            <br>
            
            {{ Form::label('image', 'Image') }}
            <br>
            {{ Form::hidden('image_old', $event->image) }}
            @if ($event->image) 
            <img src="{{ asset('img/events/thumbnails/small') }}/{{ $event->image }}"/><br>
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