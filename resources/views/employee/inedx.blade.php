@extends('layouts.appAdmin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                 <div><a class="btn btn-primary" href="{{ url('/employee/create') }}">create</a></div>
                    <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                </div>

                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Id.</th>
                        <th scope="col">Employee name</th>
                        <th scope="col">Email</th>
                        <th scope="col">telephone</th>
                        <th scope="col">Position</th>
                        <th scope="col">Company</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($employees as $item )

                        <tr>
                        <th>{{ $loop->iteration }}</th>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->telephone }}</td>
                        <td>{{ $item->position }}</td>
                        <td>{{ $item->company->comname }}</td>
                        <td>
                            <form action="{{ url('/employee' .'/'. $item->id) }}" method="post">
                                {{ method_field('DELETE') }}
                                @csrf
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('confirm delete?')">delete</button>

                            <a href="{{ url('employee/' . $item->id . '/edit') }}" class="btn btn-success btn-sm">edit</a>

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
@endsection
