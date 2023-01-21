
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
                        <h1>Register Companies from here......................</h1>
                        </div>
                    </div>
                        <form action="{{ url('/company') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div>
                                <div class="mb-3">
                                    <label for="formGroupExampleInput" class="form-label">Company Name:</label>
                                    <input type="text" name="comname"  class="form-control" id="comname" placeholder="enter">
                                  </div>
                                  <div class="mb-3">
                                    <label for="formGroupExampleInput" class="form-label">Email:</label>
                                    <input type="text" name="email"  class="form-control" id="email" placeholder="enter">
                                  </div>
                                  <div class="mb-3">
                                    <label for="formGroupExampleInput" class="form-label">Telephone:</label>
                                    <input type="text" name="telephone"  class="form-control" id="telephone" placeholder="enter">
                                  </div>
                                  <div class="mb-3">
                                    <label for="formGroupExampleInput" class="form-label">photo</label>
                                    <input name="photo"  class="form-control" id="photo" type="file">
                                  </div>
                                  <div class="mb-3">
                                    <label for="formGroupExampleInput" class="form-label">Weblink:</label>
                                    <input type="url" name="social"  class="form-control" id="social" placeholder="enter"><br>
                                    <input type="submit" value="save" class="btn btn-success">
                                  </div>
                            </div>
                            </div>
                        </form>

                @endsection




