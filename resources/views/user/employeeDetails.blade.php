
@extends('layouts.appuser')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">


                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Id.</th>
                            <th scope="col">Employee name</th>
                            <th scope="col">Email</th>
                            <th scope="col">telephone</th>
                            <th scope="col">Position</th>
                            <th scope="col">Company</th>
                          
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

                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
