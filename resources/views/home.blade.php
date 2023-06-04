<html class="h-full bg-white">
<head>
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css?family=Nunito:400,600,700" rel="stylesheet">

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment.min.js" integrity="sha512-rmZcZsyhe0/MAjquhTgiUcb4d9knaFc7b5xAfju483gbEXTkeJRUMIPk6s3ySZMYUHEcjKbjLjyddGWMrNEvZg==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.20/lodash.min.js" integrity="sha512-90vH1Z83AJY9DmlWa8WkjkV79yfS2n2Oxhsi2dZbIv0nC4E6m5AbH8Nh156kkM7JePmqD6tcZsfad1ueoaovww==" crossorigin="anonymous"></script>

    <style>
        {!! file_get_contents($cssPath) !!}
    </style>

    @livewireStyles()
</head>
<body>
<div>
    @include('collector::layouts.sidebar')
    <div class="lg:pl-72">
        <main class="py-10">
            <div class="px-4 sm:px-6 lg:px-8">
                <livewire:billing/>
            </div>
        </main>
    </div>
</div>
@livewireScripts()
</body>
</html>
