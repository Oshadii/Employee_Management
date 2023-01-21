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

                    <form action="{{ url('/employee') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label">Employee Name:</label>
                                <input type="text" name="name"  class="form-control" id="name" placeholder="enter">
                              </div>
                              <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label">Nick Name:</label>
                                <input type="text" name="nick"  class="form-control" id="nick" placeholder="enter">
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
                                <label for="formGroupExampleInput" class="form-label">Company Assign:</label>
                                <select name="company_id" class="form-control" id="company_id">
                                    @foreach ($company as $item)
                                    <option value="{{ $item->id }}">{{ $item->comname }}</option>

                                    @endforeach
                                </select>
                              </div>
                              <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label">Position:</label>
                                <input type="text" name="position"  class="form-control" id="position" placeholder="enter"><br>
                                <input type="submit" value="save" class="btn btn-success">
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
