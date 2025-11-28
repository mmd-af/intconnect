<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <title>{{ config('app.name', 'Laravel') }} - Under Construction</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet"/>

    <!-- Styles / Scripts (Re-enabling Vite as per user's existing convention) -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.scss', 'resources/js/app.js'])
    @else
        <style>
            /* Minimal fallback styles if Vite assets are not built */
            body {
                font-family: 'instrument-sans', sans-serif;
            }
        </style>
    @endif
</head>
<body class="bg-light">
<div class="container full-height-center">
    <div class="row justify-content-center w-100">
        <div class="col-md-8 col-lg-6">
            <div class="card shadow-lg p-4 p-md-5">
                <div class="card-body text-center">
                    <h1 class="display-4 fw-bold text-primary mb-3">Site Under Construction</h1>
                    <p class="lead text-muted mb-4">
                        We're currently designing and building something amazing for you!
                        Please check back soon.
                    </p>
                    <p>
                    <h3 class="text-success">This is the Staging Branch</h3>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
