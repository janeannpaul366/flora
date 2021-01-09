@extends('layouts.admin')

@section('showevents')
<div class="container-fluid">

    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="{{ url('/admin') }}">Dashboard</a>
      </li>
      <li class="breadcrumb-item">
          <a href="{{ route('events.index') }}">Events</a>
      </li>
      <li class="breadcrumb-item active">View Event</li>
    </ol>

    <!-- DataTables Example -->
    <div class="card mb-3">
      <div class="card-header">
        View Event
        </div>
      <div class="card-body">
            <div> 
                <p><h1>{{ $event->name }}</h1></p>

                <p>{{ $event->category_name }}</p>

                <p>{{ \Carbon\Carbon::parse($event->date)->format('j F, Y')}}</p>

                <p>{{ $event->description }}</p>
               
                @if($event->image!='')
                 <p>
                    <img src="{{ asset('img/events/thumbnails') }}/{{ $event->image }}"/>
                </p>
                @endif 
                
                <a href="{{ url()->previous() }}" class="btn btn-primary">Back</a>
                <a href="{{ route('events.edit', $event->id) }}" class="btn btn-info" role="button">Edit</a>
            </div>
        </div>
        
    </div>
@endsection