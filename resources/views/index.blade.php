@extends('default.app')

@section('contents')

    <main>
        <section id="jumbotron">
            <div class="container">
                <div class="row">
                    <div class="col d-flex align-items-center">
                        <div class="wrapp">
                            <h1>SiPenol</h1>
                            <h2 class="text-light">
                                Sistem Informasi <br>
                                Pendaftaran Online
                            </h2>
                            <p class="text-light">
                                Sistem Informasi Bebasis Aplikasi Web yang berfungsi untuk
                                mendaftarkan diri secara online
                            </p>
                            <button class="btn rounded-pill mt-4">
                                ABOUT
                            </button>
                        </div>
                    </div>
                    <div class="col">
                        <div class="d-flex align-items-center justify-content-end">
                            <img src="./img/ilustrasi 1.svg" alt="">
                        </div>
                    </div>
                </div>


            </div>
        </section>
        <section id="about">
            <div class="container">
                <div class="row gap-5">
                    <div class="col">
                        <img src="{{ asset('img/about.svg')}}" alt="about">
                    </div>
                    <div class="col d-flex align-items-center">
                        <div class="wrapp">
                            <div class="d-flex justify-content-end">
                                <h1 class="mx-2">About</h1>
                                <span class="d-flex align-items-center">
                                    <svg width="39" height="2" viewBox="0 0 39 2" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <line y1="1" x2="39" y2="1" stroke="#00A000" stroke-width="2" />
                                    </svg>
                                </span>
                            </div>
                            <p class="text-end pt-4">
                                Sistem Informasi Pendaftaran Online (Sipenol) adalah
                                Aplikasi berbasis web yang berfungsi untuk medaftarkan
                                diri secara online
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="features">
            <div class="container">
                <h1 class="text-center mb-5">Features</h1>
                <div class="row gap-5">
                    <div class="col rounded-3">
                        <div class="wrapp d-flex justify-content-center align-items-center">
                            <img src="{{ asset('img/Daftar Online.svg') }}" alt="">
                        </div>
                        <h3 class="text-center py-2 mt-3">Daftar Online</h3>
                    </div>
                    <div class="col rounded-3">
                        <div class="wrapp d-flex justify-content-center align-items-center">
                            <img src="./img/time.svg" alt="">
                        </div>
                        <h3 class="text-center py-2 mt-3">Change Schedule</h3>
                    </div>
                    <div class="col rounded-3">
                        <div class="wrapp -flex justify-content-center align-items-center">
                            <img src="./img/wallet.svg" alt="">
                        </div>
                        <h3 class="text-center py-2 mt-3">Wallet</h3>
                    </div>
                </div>
            </div>
        </section>

    </main>

@endsection


