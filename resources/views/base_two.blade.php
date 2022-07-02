<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    @livewireStyles
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"></script>

    <!-- begin:: css local -->
    @yield('css')
    <!-- end:: css local -->
</head>

<body>
    <div class="container pt-5">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Belajar Livewire</h5>
                    </div>
                    <div class="card-body">
                        <!-- begin:: content -->
                        @yield('content')
                        <!-- end:: content -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- begin:: js local -->
    @yield('js')
    <!-- end:: js local -->
    @livewireScripts
</body>

</html>