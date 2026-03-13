@extends('backend.app')

@section('head')

    <head>
        <title>Border Bootstrap Table | Flat Able Dashboard Template</title>
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
        <link rel="icon" href="{{ url('') }}/assets/images/favicon.svg" type="image/x-icon" />
        <!-- [Google Font : Public Sans] icon -->
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&display=swap"
            rel="stylesheet" />

        <!-- [Tabler Icons] https://tablericons.com -->
        <link rel="stylesheet" href="{{ url('') }}/assets/fonts/tabler-icons.min.css" />
        <!-- [Feather Icons] https://feathericons.com -->
        <link rel="stylesheet" href="{{ url('') }}/assets/fonts/feather.css" />
        <!-- [Font Awesome Icons] https://fontawesome.com/icons -->
        <link rel="stylesheet" href="{{ url('') }}/assets/fonts/fontawesome.css" />
        <!-- [Material Icons] https://fonts.google.com/icons -->
        <link rel="stylesheet" href="{{ url('') }}/assets/fonts/material.css" />
        <!-- [Template CSS Files] -->
        <link rel="stylesheet" href="{{ url('') }}/assets/css/style.css" id="main-style-link" />
        <link rel="stylesheet" href="{{ url('') }}/assets/css/style-preset.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

        <style>
            .switch {
                position: relative;
                display: inline-block;
                width: 34px;
                height: 18px;
            }

            .switch input {
                display: none;
            }

            .slider {
                position: absolute;
                cursor: pointer;
                background-color: #ccc;
                transition: .3s;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
            }

            .slider:before {
                position: absolute;
                content: "";
                height: 14px;
                width: 14px;
                left: 2px;
                bottom: 2px;
                background: white;
                transition: .3s;
            }

            input:checked+.slider {
                background: #0d6efd;
                /* Blue (Bootstrap primary) */
            }

            input:checked+.slider:before {
                transform: translateX(16px);
            }

            .slider.round {
                border-radius: 18px;
            }

            .slider.round:before {
                border-radius: 50%;
            }
        </style>

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
                                <h5 class="mb-0">Border Table</h5>
                            </div>
                        </div>
                        <div class="col-sm-auto">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('') }}/navigation/index.html"><i
                                            class="ph-duotone ph-house"></i></a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0)">Table</a></li>
                                <li class="breadcrumb-item" aria-current="page">Border Table</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Categories</h5>
                    <a href="{{ route('categories.create') }}"> <button class="btn btn-info">Add</button> </a>

                </div>
                <div class="card-body table-border-style">
                    <div class="table-responsive">
                        <table class="table table-borderless">
                            @if (session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                                </div>
                            @endif
                            <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th class="text-center">Product Name</th>
                                    <th class="text-center">Product Image</th>
                                    <th class="text-center">Category</th>
                                    <th class="text-center">SKU</th>
                                    <th class="text-center">Stock</th>
                                    <th class="text-center">Price</th>
                                    <th class="text-center">Discount Price</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Action</th>

                                </tr>
                            </thead>
                            @foreach ($data as $key => $d)
                                <tbody>
                                    <tr>
                                        <td class="text-center">{{ $key + 1 }}</td>
                                        <td class="text-center">{{ $d->name }}</td>
                                        <td class="text-center"><img src="{{ asset('storage/' . $d->image) }}"
                                                width="80"></td>
                                        <td class="text-center">{{ $d->category->name }}</td>
                                        <td class="text-center">{{ $d->sku }}</td>
                                        <td class="text-center">{{ $d->stock }}</td>
                                        <td class="text-center">{{ $d->price }}</td>
                                        <td class="text-center">{{ $d->discount_price }}</td>
                                        <td class="text-center">
                                            <label class="switch">
                                                <input type="checkbox" class="status-toggle" data-id="{{ $d->id }}"
                                                    {{ $d->status == 1 ? 'checked' : '' }}
                                                    {{ $d->stock == 0 ? 'disabled' : '' }}>
                                                <span class="slider round"></span>
                                            </label>
                                        </td>
                                        <td class="text-center">
                                            <a href="{{ route('products.edit', $d->id) }}"><i class="fa-solid fa-edit"></i></a> |
                                            <form action="{{ route('products.destroy', $d->id) }}" method="POST"
                                                style="display:inline;">
                                                @csrf
                                                @method('DELETE')

                                                <button style="border:none;background:none">
                                                    <i class="fa-solid fa-trash" style="color: rgb(119, 9, 9)"></i>
                                                </button>

                                            </form>
                                        </td>
                                    </tr>
                                </tbody>
                            @endforeach
                        </table>
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
                    <p class="m-0">Flat Able &#9829; crafted by Team <a
                            href="https://themeforest.net/user/phoenixcoded" target="_blank">Phoenixcoded</a></p>
                </div>
                <div class="col-auto my-1">
                    <ul class="list-inline footer-link mb-0">
                        <li class="list-inline-item"><a href="{{ url('') }}/index.html">Home</a></li>
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
    <script src="{{ url('') }}/assets/js/plugins/popper.min.js"></script>
    <script src="{{ url('') }}/assets/js/plugins/simplebar.min.js"></script>
    <script src="{{ url('') }}/assets/js/plugins/bootstrap.min.js"></script>
    <script src="{{ url('') }}/assets/js/fonts/custom-font.js"></script>
    <script src="{{ url('') }}/assets/js/pcoded.js"></script>
    <script src="{{ url('') }}/assets/js/plugins/feather.min.js"></script>


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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).on('change', '.status-toggle', function() {

            let product_id = $(this).data('id');
            let status = $(this).prop('checked') ? 1 : 0;

            $.ajax({
                url: "/product-status",
                type: "POST",
                data: {
                    _token: '{{ csrf_token() }}',
                    id: product_id,
                    status: status
                },
                success: function(response) {
                    console.log(response);
                }
            });

        });
    </script>
@endsection
