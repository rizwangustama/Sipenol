@extends('default.app')
@section('contents')
    <main>
        <section id="register" class="my-5">
            <div class="container container-md p-4">

                <div class="header my-5">
                    <h1 class="text-center">Registrasi</h1>
                    <p class="text-center">Sistem Informasi Pendaftaran Online</p>
                </div>

                <form action="">
                    <div class="mb-3">
                        <label for="inputNama" class="form-label">Nama Pengguna</label>
                        <input type="text" class="form-control" id="inputNama" placeholder="Masukan Nama Pengguna">
                    </div>
                    <div class="mb-3">
                        <label for="inputEmail" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="inputEmail" placeholder="Masukan Email Address">
                    </div>
                    <div class="mb-3">
                        <label for="inputPassword" class="form-label">Password</label>
                        <input type="email" class="form-control" id="inputPassord" placeholder="Masukan Password">
                    </div>
                    <div class="mb-3">
                        <label for="inputNomer" class="form-label">Nomor Telepon</label>
                        <input type="number" class="form-control" id="inputNomor" placeholder="Masukan Nomor Telepon">
                    </div>
                    <div class="mb-3">
                        <label for="jenisKelamin" class="form-label">Jenis Kelamin</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected disabled>Masukan Jenis Kelamin</option>
                            <option value="1">Laki-laki</option>
                            <option value="2">Perempuan</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="textArea" class="form-label">Alamat</label>
                        <textarea class="form-control" id="textArea" rows="3"></textarea>
                    </div>

                    <button type="button" class="w-100 btn btn-primary">Register</button>
                </form>

            </div>
        </section>
    </main>
@endsection
