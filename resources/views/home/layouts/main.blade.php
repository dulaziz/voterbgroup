<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Vote RBG | {{$title}}</title>

  @vite('resources/css/app.css')
</head>
<body>
    <x-navbar></x-navbar>
    <div class="max-w-4xl p-3 mx-auto my-3">  
        {{$slot}}
    </div>
    <x-footer></x-footer>

    @vite('resources/js/app.js')
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
</body>
</html>