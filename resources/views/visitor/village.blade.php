<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Form - Desa</title>
    <link rel="icon" href="/img/logo.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    </script>
    <style>
        .bg-daun {
        background-image: url(/img/bgnowb.jpg);
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
    }
    </style>
</head>
<body>
    <div class="w-full h-screen flex items-center bg-daun">
        <div class="container w-full flex items-center">
            <form class="bg-white rounded md:rounded-lg p-5 md:h-max m-5 md:my-0 md:p-10 m-5 md:mx-auto w-[500px] shadow" action="/form/desa/data" method="POST">
                @csrf
                <div class="header">
                    <div class="logo flex items-center">
                        <img class="w-12" src="/img/logo.png" alt="">
                        <h5 class="text-2xl ms-2 text-klipaa font-bold">Sitamu</h5>
                    </div>
                    <p class="my-3 text-sm text-gray-700">Silahkan pilih alamat kantor desa</p>
                </div>
                <h2 class="text-lg md:text-xl mb-3">Pilih lokasi tujuan desa anda</h2>
                <div class="flex flex-col">
                    <label class="mb-2" for="village">Desa</label>
                    <select class="border border-gray-500 p-3 rounded text-gray-700" name="village" id="village">
                        <option value="">Pilih Desa Tujuan</option>
                        @foreach ($villages as $village)
                            <option value="{{$village->village_code}}">{{$village->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mt-5">
                    <button class="w-full bg-klipaa py-3 rounded-lg text-white" type="submit">Kirim</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>