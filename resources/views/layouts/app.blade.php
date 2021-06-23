<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">

    <title>SiPenol</title>
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-xl">
            <div class="container-fluid navbar-light">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <svg width="138" height="33" viewBox="0 0 138 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="16.5" cy="16.5" r="16.5" fill="#FFF500" />
                        <path
                            d="M59.2354 22.1504C59.2354 21.431 58.9814 20.8809 58.4736 20.5C57.9658 20.1107 57.0518 19.7044 55.7314 19.2812C54.4111 18.8496 53.3659 18.4264 52.5957 18.0117C50.4967 16.8776 49.4473 15.3499 49.4473 13.4287C49.4473 12.43 49.7266 11.5413 50.2852 10.7627C50.8522 9.97559 51.6605 9.36198 52.71 8.92188C53.7679 8.48177 54.9528 8.26172 56.2646 8.26172C57.585 8.26172 58.7614 8.50293 59.7939 8.98535C60.8265 9.45931 61.6263 10.1322 62.1934 11.0039C62.7689 11.8757 63.0566 12.8659 63.0566 13.9746H59.248C59.248 13.1283 58.9814 12.4723 58.4482 12.0068C57.915 11.5329 57.166 11.2959 56.2012 11.2959C55.2702 11.2959 54.5465 11.4948 54.0303 11.8926C53.514 12.2819 53.2559 12.7982 53.2559 13.4414C53.2559 14.0423 53.5563 14.5459 54.1572 14.9521C54.7666 15.3584 55.6595 15.7393 56.8359 16.0947C59.0026 16.7464 60.5811 17.5547 61.5713 18.5195C62.5615 19.4844 63.0566 20.6862 63.0566 22.125C63.0566 23.7246 62.4515 24.9814 61.2412 25.8955C60.0309 26.8011 58.4017 27.2539 56.3535 27.2539C54.9316 27.2539 53.6367 26.9958 52.4688 26.4795C51.3008 25.9548 50.4079 25.2396 49.79 24.334C49.1807 23.4284 48.876 22.3789 48.876 21.1855H52.6973C52.6973 23.2253 53.916 24.2451 56.3535 24.2451C57.2591 24.2451 57.9658 24.0632 58.4736 23.6992C58.9814 23.3268 59.2354 22.8105 59.2354 22.1504ZM69.2773 27H65.5957V13.2637H69.2773V27ZM65.3799 9.70898C65.3799 9.15885 65.5618 8.70605 65.9258 8.35059C66.2982 7.99512 66.8018 7.81738 67.4365 7.81738C68.0628 7.81738 68.5622 7.99512 68.9346 8.35059C69.307 8.70605 69.4932 9.15885 69.4932 9.70898C69.4932 10.2676 69.3027 10.7246 68.9219 11.0801C68.5495 11.4355 68.0544 11.6133 67.4365 11.6133C66.8187 11.6133 66.3193 11.4355 65.9385 11.0801C65.5661 10.7246 65.3799 10.2676 65.3799 9.70898ZM76.3613 20.4873V27H72.5527V8.51562H79.7637C81.1517 8.51562 82.3704 8.76953 83.4199 9.27734C84.4779 9.78516 85.2904 10.5088 85.8574 11.4482C86.4245 12.3792 86.708 13.4414 86.708 14.6348C86.708 16.446 86.0859 17.8763 84.8418 18.9258C83.6061 19.9668 81.8923 20.4873 79.7002 20.4873H76.3613ZM76.3613 17.4023H79.7637C80.7708 17.4023 81.5368 17.1654 82.0615 16.6914C82.5947 16.2174 82.8613 15.5404 82.8613 14.6602C82.8613 13.7546 82.5947 13.0225 82.0615 12.4639C81.5283 11.9053 80.792 11.6175 79.8525 11.6006H76.3613V17.4023ZM95.2393 27.2539C93.2249 27.2539 91.583 26.6361 90.3135 25.4004C89.0524 24.1647 88.4219 22.5186 88.4219 20.4619V20.1064C88.4219 18.7269 88.6885 17.4954 89.2217 16.4121C89.7549 15.3203 90.5081 14.4824 91.4814 13.8984C92.4632 13.306 93.5804 13.0098 94.833 13.0098C96.7119 13.0098 98.1888 13.6022 99.2637 14.7871C100.347 15.972 100.889 17.652 100.889 19.8271V21.3252H92.1416C92.2601 22.2223 92.6156 22.9417 93.208 23.4834C93.8089 24.0251 94.5664 24.2959 95.4805 24.2959C96.8939 24.2959 97.9984 23.7839 98.7939 22.7598L100.597 24.7783C100.047 25.557 99.3018 26.1663 98.3623 26.6064C97.4229 27.0381 96.3818 27.2539 95.2393 27.2539ZM94.8203 15.9805C94.0924 15.9805 93.5 16.2259 93.043 16.7168C92.5944 17.2077 92.3066 17.9102 92.1797 18.8242H97.2832V18.5322C97.2663 17.7197 97.0462 17.0934 96.623 16.6533C96.1999 16.2048 95.599 15.9805 94.8203 15.9805ZM106.36 13.2637L106.475 14.8506C107.456 13.6234 108.772 13.0098 110.423 13.0098C111.879 13.0098 112.962 13.4372 113.673 14.292C114.384 15.1468 114.748 16.4248 114.765 18.126V27H111.096V18.2148C111.096 17.4362 110.926 16.8734 110.588 16.5264C110.249 16.1709 109.687 15.9932 108.899 15.9932C107.867 15.9932 107.092 16.4333 106.576 17.3135V27H102.907V13.2637H106.36ZM116.986 20.0049C116.986 18.6423 117.249 17.4277 117.773 16.3613C118.298 15.2949 119.051 14.4697 120.033 13.8857C121.023 13.3018 122.17 13.0098 123.474 13.0098C125.327 13.0098 126.838 13.5768 128.006 14.7109C129.182 15.8451 129.838 17.3854 129.974 19.332L129.999 20.2715C129.999 22.3789 129.411 24.0716 128.234 25.3496C127.058 26.6191 125.479 27.2539 123.499 27.2539C121.519 27.2539 119.936 26.6191 118.751 25.3496C117.575 24.0801 116.986 22.3535 116.986 20.1699V20.0049ZM120.655 20.2715C120.655 21.5749 120.901 22.5736 121.392 23.2676C121.882 23.9531 122.585 24.2959 123.499 24.2959C124.388 24.2959 125.082 23.9574 125.581 23.2803C126.08 22.5947 126.33 21.5029 126.33 20.0049C126.33 18.7269 126.08 17.7367 125.581 17.0342C125.082 16.3317 124.379 15.9805 123.474 15.9805C122.576 15.9805 121.882 16.3317 121.392 17.0342C120.901 17.7282 120.655 18.8073 120.655 20.2715ZM136.131 27H132.449V7.5H136.131V27Z"
                            fill="#00A000" />
                    </svg>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Features</a>
                        </li>
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn login rounded-pill" data-bs-toggle="modal"
                                        data-bs-target="#login">
                                        Login
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="login" tabindex="-1" aria-labelledby="exampleModalLabel"
                                        aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>

                                                <div class="modal-body">
                                                    <div class="wrapp p-4">
                                                        <div class="logo d-flex justify-content-center mb-5">
                                                            <svg width="138" height="33" viewBox="0 0 138 33" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <circle cx="16.5" cy="16.5" r="16.5" fill="#FFF500" />
                                                                <path
                                                                    d="M59.2354 22.1504C59.2354 21.431 58.9814 20.8809 58.4736 20.5C57.9658 20.1107 57.0518 19.7044 55.7314 19.2812C54.4111 18.8496 53.3659 18.4264 52.5957 18.0117C50.4967 16.8776 49.4473 15.3499 49.4473 13.4287C49.4473 12.43 49.7266 11.5413 50.2852 10.7627C50.8522 9.97559 51.6605 9.36198 52.71 8.92188C53.7679 8.48177 54.9528 8.26172 56.2646 8.26172C57.585 8.26172 58.7614 8.50293 59.7939 8.98535C60.8265 9.45931 61.6263 10.1322 62.1934 11.0039C62.7689 11.8757 63.0566 12.8659 63.0566 13.9746H59.248C59.248 13.1283 58.9814 12.4723 58.4482 12.0068C57.915 11.5329 57.166 11.2959 56.2012 11.2959C55.2702 11.2959 54.5465 11.4948 54.0303 11.8926C53.514 12.2819 53.2559 12.7982 53.2559 13.4414C53.2559 14.0423 53.5563 14.5459 54.1572 14.9521C54.7666 15.3584 55.6595 15.7393 56.8359 16.0947C59.0026 16.7464 60.5811 17.5547 61.5713 18.5195C62.5615 19.4844 63.0566 20.6862 63.0566 22.125C63.0566 23.7246 62.4515 24.9814 61.2412 25.8955C60.0309 26.8011 58.4017 27.2539 56.3535 27.2539C54.9316 27.2539 53.6367 26.9958 52.4688 26.4795C51.3008 25.9548 50.4079 25.2396 49.79 24.334C49.1807 23.4284 48.876 22.3789 48.876 21.1855H52.6973C52.6973 23.2253 53.916 24.2451 56.3535 24.2451C57.2591 24.2451 57.9658 24.0632 58.4736 23.6992C58.9814 23.3268 59.2354 22.8105 59.2354 22.1504ZM69.2773 27H65.5957V13.2637H69.2773V27ZM65.3799 9.70898C65.3799 9.15885 65.5618 8.70605 65.9258 8.35059C66.2982 7.99512 66.8018 7.81738 67.4365 7.81738C68.0628 7.81738 68.5622 7.99512 68.9346 8.35059C69.307 8.70605 69.4932 9.15885 69.4932 9.70898C69.4932 10.2676 69.3027 10.7246 68.9219 11.0801C68.5495 11.4355 68.0544 11.6133 67.4365 11.6133C66.8187 11.6133 66.3193 11.4355 65.9385 11.0801C65.5661 10.7246 65.3799 10.2676 65.3799 9.70898ZM76.3613 20.4873V27H72.5527V8.51562H79.7637C81.1517 8.51562 82.3704 8.76953 83.4199 9.27734C84.4779 9.78516 85.2904 10.5088 85.8574 11.4482C86.4245 12.3792 86.708 13.4414 86.708 14.6348C86.708 16.446 86.0859 17.8763 84.8418 18.9258C83.6061 19.9668 81.8923 20.4873 79.7002 20.4873H76.3613ZM76.3613 17.4023H79.7637C80.7708 17.4023 81.5368 17.1654 82.0615 16.6914C82.5947 16.2174 82.8613 15.5404 82.8613 14.6602C82.8613 13.7546 82.5947 13.0225 82.0615 12.4639C81.5283 11.9053 80.792 11.6175 79.8525 11.6006H76.3613V17.4023ZM95.2393 27.2539C93.2249 27.2539 91.583 26.6361 90.3135 25.4004C89.0524 24.1647 88.4219 22.5186 88.4219 20.4619V20.1064C88.4219 18.7269 88.6885 17.4954 89.2217 16.4121C89.7549 15.3203 90.5081 14.4824 91.4814 13.8984C92.4632 13.306 93.5804 13.0098 94.833 13.0098C96.7119 13.0098 98.1888 13.6022 99.2637 14.7871C100.347 15.972 100.889 17.652 100.889 19.8271V21.3252H92.1416C92.2601 22.2223 92.6156 22.9417 93.208 23.4834C93.8089 24.0251 94.5664 24.2959 95.4805 24.2959C96.8939 24.2959 97.9984 23.7839 98.7939 22.7598L100.597 24.7783C100.047 25.557 99.3018 26.1663 98.3623 26.6064C97.4229 27.0381 96.3818 27.2539 95.2393 27.2539ZM94.8203 15.9805C94.0924 15.9805 93.5 16.2259 93.043 16.7168C92.5944 17.2077 92.3066 17.9102 92.1797 18.8242H97.2832V18.5322C97.2663 17.7197 97.0462 17.0934 96.623 16.6533C96.1999 16.2048 95.599 15.9805 94.8203 15.9805ZM106.36 13.2637L106.475 14.8506C107.456 13.6234 108.772 13.0098 110.423 13.0098C111.879 13.0098 112.962 13.4372 113.673 14.292C114.384 15.1468 114.748 16.4248 114.765 18.126V27H111.096V18.2148C111.096 17.4362 110.926 16.8734 110.588 16.5264C110.249 16.1709 109.687 15.9932 108.899 15.9932C107.867 15.9932 107.092 16.4333 106.576 17.3135V27H102.907V13.2637H106.36ZM116.986 20.0049C116.986 18.6423 117.249 17.4277 117.773 16.3613C118.298 15.2949 119.051 14.4697 120.033 13.8857C121.023 13.3018 122.17 13.0098 123.474 13.0098C125.327 13.0098 126.838 13.5768 128.006 14.7109C129.182 15.8451 129.838 17.3854 129.974 19.332L129.999 20.2715C129.999 22.3789 129.411 24.0716 128.234 25.3496C127.058 26.6191 125.479 27.2539 123.499 27.2539C121.519 27.2539 119.936 26.6191 118.751 25.3496C117.575 24.0801 116.986 22.3535 116.986 20.1699V20.0049ZM120.655 20.2715C120.655 21.5749 120.901 22.5736 121.392 23.2676C121.882 23.9531 122.585 24.2959 123.499 24.2959C124.388 24.2959 125.082 23.9574 125.581 23.2803C126.08 22.5947 126.33 21.5029 126.33 20.0049C126.33 18.7269 126.08 17.7367 125.581 17.0342C125.082 16.3317 124.379 15.9805 123.474 15.9805C122.576 15.9805 121.882 16.3317 121.392 17.0342C120.901 17.7282 120.655 18.8073 120.655 20.2715ZM136.131 27H132.449V7.5H136.131V27Z"
                                                                    fill="#00A000" />
                                                            </svg>
                                                        </div>
                                                        @if (session('errors'))
                                                            <div class="alert alert-danger alert-dismissible fade show"
                                                                role="alert">
                                                                Something it's wrong:
                                                                <button type="button" class="close" data-dismiss="alert"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">×</span>
                                                                </button>
                                                                <ul>
                                                                    @foreach ($errors->all() as $error)
                                                                        <li>{{ $error }}</li>
                                                                    @endforeach
                                                                </ul>
                                                            </div>
                                                        @endif
                                                        @if (Session::has('success'))
                                                            <div class="alert alert-success">
                                                                {{ Session::get('success') }}
                                                            </div>
                                                        @endif
                                                        @if (Session::has('error'))
                                                            <div class="alert alert-danger">
                                                                {{ Session::get('error') }}
                                                            </div>
                                                        @endif
                                                        <form action="{{ route('login') }}" method="post">
                                                            @csrf
                                                            <div class="mb-4">
                                                                <label for=email" class="form-label">Email Pengguna</label>
                                                                <input type="email" class="form-control" id="email"
                                                                    name="email" placeholder="Masukan Email Pengguna"
                                                                    value="{{ old('email') }}">
                                                            </div>
                                                            <div class="mb-4">
                                                                <label for="password" class="form-label">Kata Sandi</label>
                                                                <input type="password" class="form-control" id="password"
                                                                    name="password" placeholder="Masukan Kata Sandi">
                                                            </div>
                                                            <button type="submit"
                                                                class="mw-100 btn mt-3 mb-3">Login</button>
                                                        </form>
                                                        <p>Don't have an account? <a
                                                                href="{{ route('register') }}">Register here</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a class="btn rounded-pill dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    {{ Auth::user()->name }}
                                </a>

                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <li>
                                        <a class="dropdown-item" href="{{ route('logout') }}">Logout</a>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    </header>


    @yield('contents')


    <footer class="py-4">
        <p class="text-center mb-0 text-light">Copyright © 2021 | sipenol.com</p>
    </footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
        integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/js/bootstrap.min.js"
        integrity="sha512-EKWWs1ZcA2ZY9lbLISPz8aGR2+L7JVYqBAYTq5AXgBkSjRSuQEGqWx8R1zAX16KdXPaCjOCaKE8MCpU0wcHlHA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>

</html>
