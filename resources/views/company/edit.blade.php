
@extends('layouts.appAdmin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                            @endif
                        <h1> Company Details Update......................</h1>
                        </div>
                    </div>

                    <form action="{{ url('/company/' .$company->id) }}" method="post">
                        @csrf
                        @method("PATCH")
                        <div>
                            <div class="mb-3">
                                <input type="hidden" name="id"  class="form-control" id="id" value="{{ $company->id }}">
                                <label for="formGroupExampleInput" class="form-label">Company Name:</label>
                                <input type="text" name="comname"  class="form-control" id="comname" value="{{ $company->comname }}">
                              </div>
                              <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label">Email:</label>
                                <input type="text" name="email"  class="form-control" id="email" value="{{ $company->email }}">
                              </div>
                              <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label">Social meadia link:</label>
                                <input type="text" name="social"  class="form-control" id="social" value="{{ $company->social }}">
                              </div>
                              <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label">Telephone :</label>
                                <input type="text" name="telephone"  class="form-control" id="telephone" value="{{ $company->telephone }}"><br>
                                <input type="submit" value="update" class="btn btn-success">
                              </div>
                        </div>
                        </div>
                    </form>


                @endsection




