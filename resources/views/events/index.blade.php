@extends('layouts.admin')

@section('listevents')

    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ url('/admin') }}">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Events</li>
            <li style="padding:0px 0px 0px 78%">
                <a href="{{ route('events.create') }}" class="btn btn-primary">Add Event</a>
            </li>
        </ol>

        <div class="card mb-3">
            <div class="card-header">
                <i class="fas fa-table"></i>
                Page {{ $events->currentPage() }} of {{ $events->lastPage() }}
            </div>

            <div class="card-body">
                <div class="table-responsive">
                @if(count($events) > '0')
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Description</th>
                                <th>Date</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($events as $key => $event)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $event->name }}</td>
                            <td>{{ $event->category_name }}</td>
                            <td>{{ str_limit($event->description,30) }}</td>
                            <td>{{ \Carbon\Carbon::parse($event->date)->format('j F, Y')}}</td>
                            <td style="text-align:center">
                                <img src="{{ asset('img/events/thumbnails/small/') }}/{{ $event->image }}"/>
                            </td>
                            <td>
                                @if($event['status'] == '1')
                                Active
                                @elseif($event['status'] == '0') 
                                Inactive
                                @endif
                            </td>
                            <td>
                                {!! Form::open(['method' => 'DELETE', 'route' => ['events.destroy', $event->id] ]) !!}
                                <a href="{{ route('events.show', $event->id ) }}" class="btn btn-primary btn-sm">View</a>
                                <a href="{{ route('events.edit', $event->id) }}" class="btn btn-info btn-sm">Edit</a>
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
                    {{  $events->links('vendor.pagination.bootstrap-4')}}
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection