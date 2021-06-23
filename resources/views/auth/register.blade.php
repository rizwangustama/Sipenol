@extends('layouts.app')

@section('contents')
    <main>
        <section id="register" class="my-5">
            <div class="container container-md p-4">

                <div class="header my-5">
                    <h1 class="text-center">Registrasi</h1>
                    <p class="text-center">Sistem Informasi Pendaftaran Online</p>
                </div>
                @if(session('errors'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                <form action="{{ route('submitRegister') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Masukan Nama Pengguna" value="{{ old('name') }}">
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Alamat</label>
                        <textarea class="form-control" id="address" name="address" rows="3">{{ old('address') }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="contact" class="form-label">Nomor Telepon</label>
                        <input type="text" class="form-control" id="contact" name="contact" placeholder="Masukan Nomor Telepon" value="{{ old('contact') }}">
                    </div>
                    <div class="mb-3">
                        <label for="gender" class="form-label">Jenis Kelamin</label>
                        <select class="form-select" aria-label="Default select example" id="gender" name="gender">
                            <option selected disabled>Masukan Jenis Kelamin</option>
                            <option value="1">Laki-laki</option>
                            <option value="2">Perempuan</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Masukan Email Address" value="{{ old('email') }}">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Masukan Password">
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Masukkan Konfirmasi Password">
                    </div>                    

                    <button type="submit" class="w-100 btn btn-primary">Register</button>
                </form>

            </div>
        </section>
    </main>
@endsection
