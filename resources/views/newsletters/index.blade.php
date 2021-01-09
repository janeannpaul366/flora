<div class="container-fluid">

    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="{{ url('/admin') }}">Dashboard</a>
      </li>
      <li class="breadcrumb-item active">Newsletters</li>
      <li style="padding:0px 0px 0px 72%">
        <a href="#modalForm" class="btn btn-primary" data-toggle="modal" data-href="{{  url('newsletter/create') }}">
            Add Newsletter
        </a>
      </li>
    </ol>

    <div class="card mb-3">
        <div class="card-header">
          <i class="fas fa-table"></i>
          Page {{ $newsletters->currentPage() }} of {{ $newsletters->lastPage() }}
        </div>
        <div class="card-body">
                <div class="table-responsive">
                        <table class="table table-bordered" width="100%" cellspacing="0">
                          <thead>
                            <tr>
                              <th>#</th>
                              <th>Email</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          
                          <tbody>
                          @foreach ($newsletters as $key => $newsletter)
                            <tr>
                              <td>{{ $key+1 }}</td>
                              <td>{{ $newsletter->email }}</td>
                              <td>
                                <a class="btn btn-primary btn-sm" title="Edit" href="#modalForm" data-toggle="modal"
                                data-href="{{url('newsletter/update/'.$newsletter->id)}}">
                                 Edit</a>
                             <input type="hidden" name="_method" value="delete"/>
                             <a class="btn btn-danger btn-sm" title="Delete" data-toggle="modal"
                                href="#modalDelete"
                                data-id="{{ $newsletter->id }}"
                                data-token="{{csrf_token()}}">
                                 Delete 
                             </a>
                              </td> 
                            </tr>
                          @endforeach
                          </tbody>
                        </table>
                        <ul class="pagination justify-content-end">
                          {{  $newsletters->links('vendor.pagination.bootstrap-4')}}
                      </ul>
                      </div>
        </div>
    </div>


</div>

