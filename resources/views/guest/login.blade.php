@extends('layout.template')
@section('title', 'Login Here')
@section('body')
    <div class="container mt-3 mb-3">
        @if ($errors)
            @foreach ($errors->all() as $error)
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>{{ $error }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            @endforeach
        @endif
        <form action="#" method="POST" autocomplete="off">
            {{ csrf_field() }}
        <div class="col-md-12">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <div class="form-group mt-2 mb-2">
                        <button type="submit" class="btn btn-primary form-control"> Login </button>
                    </div>
                </div>
            </div>
        </div>
        </form>
    </div>
@endsection
