@extends('backend.app')

@section('head')

    <head>
        <title>Form Basic | Flat Able Dashboard Template</title>
        <!-- [Meta] -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="description"
            content="Flat Able is trending dashboard template made using Bootstrap 5 design framework. Flat Able is available in Bootstrap, React, CodeIgniter, Angular,  and .net Technologies." />
        <meta name="keywords"
            content="Bootstrap admin template, Dashboard UI Kit, Dashboard Template, Backend Panel, react dashboard, angular dashboard" />
        <meta name="author" content="phoenixcoded" />

        <!-- [Favicon] icon -->
        <link rel="icon" href="{{url('')}}/assets/images/favicon.svg" type="image/x-icon" />
        <!-- [Google Font : Public Sans] icon -->
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&display=swap"
            rel="stylesheet" />

        <!-- [Tabler Icons] https://tablericons.com -->
        <link rel="stylesheet" href="{{url('')}}/assets/fonts/tabler-icons.min.css" />
        <!-- [Feather Icons] https://feathericons.com -->
        <link rel="stylesheet" href="{{url('')}}/assets/fonts/feather.css" />
        <!-- [Font Awesome Icons] https://fontawesome.com/icons -->
        <link rel="stylesheet" href="{{url('')}}/assets/fonts/fontawesome.css" />
        <!-- [Material Icons] https://fonts.google.com/icons -->
        <link rel="stylesheet" href="{{url('')}}/assets/fonts/material.css" />
        <!-- [Template CSS Files] -->
        <link rel="stylesheet" href="{{url('')}}/assets/css/style.css" id="main-style-link" />
        <link rel="stylesheet" href="{{url('')}}/assets/css/style-preset.css" />

    </head>
@endsection

@section('content')
    <section class="pc-container">
        <div class="pc-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-sm-auto">
                            <div class="page-header-title">
                                <h5 class="mb-0">Form Basic</h5>
                            </div>
                        </div>
                        <div class="col-sm-auto">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('')}}/navigation/index.html"><i
                                            class="ph-duotone ph-house"></i></a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0)">Forms</a></li>
                                <li class="breadcrumb-item" aria-current="page">Form Basic</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>Staffs</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <form action="{{ route('admin.staff.store') }}" method="post">

                                        @csrf
                                        <div class="mb-3">
                                            <label class="form-label">Staff Name</label>
                                            <input type="text" name="name"
                                                class="form-control @error('name') is-invalid @enderror"
                                                id="exampleInputEmail1" aria-describedby="emailHelp"
                                                placeholder="Enter Staff's Name" />

                                            @error('name')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Staff Email</label>
                                            <input type="email" name="email"
                                                class="form-control @error('email') is-invalid @enderror"
                                                id="exampleInputEmail1" aria-describedby="emailHelp"
                                                placeholder="Enter Staff's Email" value="{{ old('email') }}" />

                                            @error('email')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Password</label>
                                            <input type="password" name="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                id="exampleInputEmail1" aria-describedby="emailHelp"
                                                placeholder="Create Password" />

                                            @error('password')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>


                                        <button type="submit" class="btn btn-primary mb-4">Add</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('footer')
    <footer class="pc-footer">
        <div class="footer-wrapper container-fluid">
            <div class="row">
                <div class="col my-1">
                    <p class="m-0">Flat Able &#9829; crafted by Team <a href="https://themeforest.net/user/phoenixcoded"
                            target="_blank">Phoenixcoded</a></p>
                </div>
                <div class="col-auto my-1">
                    <ul class="list-inline footer-link mb-0">
                        <li class="list-inline-item"><a href="{{url('')}}/index.html">Home</a></li>
                        <!-- todo link update -->
                        <li class="list-inline-item"><a href="https://phoenixcoded.gitbook.io/flat-able-bootstrap/"
                                target="_blank">Documentation</a></li>
                        <li class="list-inline-item"><a href="https://phoenixcoded.authordesk.app/"
                                target="_blank">Support</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
@endsection

@section('scripts')
    <script src="{{url('')}}/assets/js/plugins/popper.min.js"></script>
    <script src="{{url('')}}/assets/js/plugins/simplebar.min.js"></script>
    <script src="{{url('')}}/assets/js/plugins/bootstrap.min.js"></script>
    <script src="{{url('')}}/assets/js/fonts/custom-font.js"></script>
    <script src="{{url('')}}/assets/js/pcoded.js"></script>
    <script src="{{url('')}}/assets/js/plugins/feather.min.js"></script>


    <script>
        layout_change('light');
    </script>

    <script>
        layout_sidebar_change('dark');
    </script>

    <script>
        layout_header_change('dark');
    </script>

    <script>
        change_box_container('false');
    </script>

    <script>
        layout_caption_change('true');
    </script>

    <script>
        layout_rtl_change('false');
    </script>

    <script>
        preset_change('preset-1');
    </script>
@endsection
