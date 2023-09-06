<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Vote RBG</title>

  @vite('resources/css/app.css')
</head>
<body>
    <div>
        <x-admin-navbar></x-admin-navbar>  
        <div class="p-4 sm:ml-64">
            <div class="mt-14">
                {{$slot}}
            </div>
        </div>
        <x-admin-sidebar></x-admin-sidebar>
    </div>

    @vite('resources/js/app.js')
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
</body>
</html>