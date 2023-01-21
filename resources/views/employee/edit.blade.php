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
                        </div>
                    @endif
                    <form action="{{ url('/employee/' .$employee->id) }}" method="post">
                        @csrf
                        @method("PATCH")
                        <div>
                            <div class="mb-3">
                                <input type="hidden" name="id"  class="form-control" id="id" value="{{ $employee->id }}">
                                <label for="formGroupExampleInput" class="form-label">Company Name:</label>
                                <input type="text" name="name"  class="form-control" id="name" value="{{ $employee->name }}">
                              </div>
                              <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label">Email:</label>
                                <input type="text" name="email"  class="form-control" id="email" value="{{ $employee->email }}">
                              </div>
                              <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label">position:</label>
                                <input type="text" name="position"  class="form-control" id="position" value="{{ $employee->position }}">
                              </div>
                              <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label">Telephone :</label>
                                <input type="text" name="telephone"  class="form-control" id="telephone" value="{{ $employee->telephone }}"><br>
                                <input type="submit" value="update" class="btn btn-success">
                              </div>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

