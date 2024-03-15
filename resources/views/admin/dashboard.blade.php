<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet'
        type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{ asset('assets/styles/dashboard.css') }}">
    <style>

    </style>
</head>

<body>
    <div class="container-fluid pt-5">
        <div class="row">
            <div class="col-2"> @include('admin.sidebar')</div>
            <div class="col-9">
                @include('admin.navbar')
                <div class="d-flex bg-white mt-5 flex-column" >
                    @include('admin.labels')
                    @include('admin.chartjs')
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
    </script>
    <script src="{{ asset('assets/js/dashboard.js') }}"></script>
        <script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
</body>
</html>
