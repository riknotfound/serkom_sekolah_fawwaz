@extends('template')
@section('title', 'Login')
@section('content')

<div class="row justify-content-center">
    <div class="col-md-6">
        @if ($errors->any())
            <div class="alert alert-danger">
                {{ $errors->first() }}
            </div>
        @endif

        <div class="card shadow">
            <div class="card-body">
                <h3 class="text-center mb-4">Login</h3>

                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control"
                               value="{{ old('email') }}" required autofocus>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>

                    <button type="submit" class="btn btn-primary w-100">
                        Login
                    </button>
                </form>
            </div>
        </div>

        <div class="text-center mt-3">
            <a href="{{ route('beranda') }}" class="btn btn-link text-decoration-none">
                Kembali ke Beranda
            </a>
        </div>
    </div>
</div>

@endsection
