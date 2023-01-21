
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
                            <th scope="col">Company name</th>
                            <th scope="col">Email</th>
                            <th scope="col">telephone</th>
                            <th scope="col">Image</th>
                            <th scope="col">Weblink</th>

                          </tr>
                        </thead>
                        <tbody>
                        @foreach ($companies as $item )

                            <tr>
                              <th>{{ $loop->iteration }}</th>
                              <td>{{ $item->comname }}</td>
                              <td>{{ $item->email }}</td>
                              <td>{{ $item->telephone }}</td>
                              <td><img src="{{ asset($item->photo) }}" width="50" height="50" class="img img-responsive" /></td>
                              <td>{{ $item->social }}</td>

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
