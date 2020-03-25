@extends('')
@section('content')

<div class="row">
    <div class="col-md-12">
        <a href="/users/create" class="btn btn-info"><i class="material-icons">add_circle</i>New User</a>
    </div>

    @if(Session::has('flash_message'))
        <div class="alert alert-success">
            {{Session::get("flash_message")}}
        </div>
    @endif


    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title">Users Table</h4>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>City</th>
                                <th>Country</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->city}}</td>
                                <td>{{$user->GetCountry->name}}</td>
                                <td>
                                    <a  class="btn btn-warning pull-left" href="{{ url('/users', [$user->id, 'edit']) }}">Edit</a>

                                    <form action="{{ url('/users', [$user->id]) }}" method="post">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}

                                        <button type="submit" class="btn btn-danger pull-left">Delete</button>
                                    </form>

                                </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>





</div>

@endsection
