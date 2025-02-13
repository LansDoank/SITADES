<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-navbar></x-navbar>
    <div id="hero">
        <div class="container w-full flex justify-center items-center h-[700px] md:p-20">
            @if (Session::has('visitor_success'))
            <div
                class="max-w-sm  flex flex-col justify-center h-[400px] items-center bg-white shadow z-20 border rounded absolute mx-auto p-5 text-center" data-aos="fade-up" data-aos-duration="1500"> 
                <img class="w-32" src="/img/checked.png" alt="">
                <h2 class="text-2xl font-semibold my-5 text-">Success!</h2>
                <p>{{ session('visitor_success') }} Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis,
                    ullam!</p>
            </div>
            @endif
            <div class="w-1/2 flex flex-col justify-center">
                <h1 class="text-klipaa font-poppins text-5xl font-semibold md:my-5 leading-snug" data-aos="fade-right"
                    data-aos-duration="1500">SELAMAT DATANG
                    DI SITAMU !</h1>
                <p class="text-sm text-slate-500 font-medium" data-aos="fade-right" data-aos-duration="1500"
                    data-aos-delay="300">Mudah, Cepat, dan Efisien! Buku Tamu Digital membantu
                    mencatat kunjungan warga dengan
                    lebih praktis dan modern. Tinggalkan pesan Anda dengan mudah dan pastikan setiap kunjungan tercatat
                    dengan baik</p>
                <div class="flex gap-5">

                    <a class="bg-klipaa w-36 flex font-medium justify-center items-center md:my-5 hover:brightness-90 text-white rounded h-14"
                        href="/form/1" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="500">Isi
                        Formulir</a>
                    <a class="bg-white w-36 flex font-medium justify-center items-center md:my-5 hover:brightness-90 text-klipaa shadow shadow-klipaa rounded h-14"
                        href="/login" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="500">
                        Masuk</a>
                </div>
            </div>
            <div class="w-1/2 flex justify-end items-center">
                <img class="w-[80%]" src="/img/hero.png" alt="" data-aos="fade-up" data-aos-duration="1500"
                    data-aos-delay="500">
            </div>
        </div>
    </div>
    <div id="about" class="md:p-7">
        <div class="container bg-klipaa rounded-2xl flex justify-center flex-col items-center md:p-10">
            <div class="md:my-7" data-aos="fade-up" data-aos-duration="1500">
                <h1 class="text-white text-3xl font-semibold">APA ITU SITAMU?</h1>
            </div>
            <div class="flex">
                <figure class="w-1/2">
                    <img src="/img/pc.png" alt="" data-aos="fade-up" data-aos-delay="500"
                        data-aos-duration="1500">
                </figure>
                <div class="w-1/2 flex flex-col justify-center items-start md:p-5">
                    <p class="text-white" data-aos="fade-left" data-aos-delay="400" data-aos-duration="1500">SITAMU
                        adalah platform digital yang dirancang khusus untuk mendukung
                        pengelolaan administrasi dan dokumentasi di tingkat desa. SITADES digunakan oleh kantor desa
                        untuk mempermudah proses pencatatan, penyimpanan, dan pencarian berbagai data penting yang
                        berkaitan dengan kegiatan administratif desa
                    </p>
                    <br><br>
                    <p class="text-white" data-aos="fade-left" data-aos-delay="500" data-aos-duration="1500">SITAMU
                        menjadi alat yang sangat efektif untuk meningkatkan efisiensi, transparansi, dan
                        akuntabilitas dalam pengelolaan administrasi desa, serta mendukung kemajuan digitalisasi di
                        tingkat pemerintahan desa.</p>

                    <button class="w-36 bg-white h-14 text-klipaa md:my-5 rounded font-medium" data-aos="fade-up"
                        data-aos-delay="700" data-aos-duration="1500">Selengkapnya</button>
                </div>
            </div>
        </div>
    </div>
    <div id="why" class="flex flex-col items-center md:p-5">
        <div class="md:my-10">
            <h1 class="font-semibold text-klipaa text-3xl" data-aos="fade-up" data-aos-delay="200"
                data-aos-duration="1500">Mengapa memilih Sitamu?</h1>
        </div>
        <div class="container border p-10 border-klipaa rounded-2xl flex justify-center gap-10 rounded-lg">
            <div class="card bg-klipaa md:py-8 text-white text-center p-5 max-w-xs rounded flex flex-col items-center"
                data-aos="fade-up" data-aos-delay="300" data-aos-duration="1500">
                <div class="card-image md:mb-3 ">
                    <img src="/img/eficient.png" alt="">
                </div>
                <div class="card-body">
                    <h2 class="font-medium text-2xl mb-3">Efisiensi Waktu dan
                        Proses</h2>
                    <p class="text-sm font-normal">Dengan SITAMU, semua proses administrasi yang biasanya memakan waktu
                        dan tenaga, seperti
                        pengelolaan data tamu yang berkunjung,, bisa dilakukan dengan lebih cepat dan efektif.</p>
                </div>
            </div>
            <div class="card bg-klipaa md:py-8 text-white text-center p-5 max-w-xs rounded flex flex-col items-center"
                data-aos="fade-up" data-aos-delay="500" data-aos-duration="1500">
                <div class="card-image md:mb-5 ">
                    <img src="/img/security.png" alt="">
                </div>
                <div class="card-body">
                    <h2 class="font-medium text-2xl mb-3">Keamanan Data yang
                        Terjamin</h2>
                    <p class="text-sm font-normal">Keamanan data menjadi prioritas utama dalam SITAMU. Sistem ini
                        menggunakan enkripsi dan pengamanan yang canggih untuk memastikan bahwa semua data yang
                        tersimpan terlindungi dari akses yang tidak sah.</p>
                </div>
            </div>
            <div class="card bg-klipaa md:py-8 text-white text-center p-5 max-w-xs rounded flex flex-col items-center"
                data-aos="fade-up" data-aos-delay="700" data-aos-duration="1500">
                <div class="card-image md:mb-3 ">
                    <img src="/img/transplatation.png" alt="">
                </div>
                <div class="card-body">
                    <h2 class="font-medium text-2xl mb-3">Transparansi dan Akuntabilitas</h2>
                    <p class="text-sm font-normal">SITAMU menyediakan fitur yang memungkinkan semua data dan informasi
                        penting tercatat dengan rapi dan transparan.</p>
                </div>
            </div>
        </div>
    </div>
    <div id="preview" class="flex flex-col items-center md:p-5">
        <div class="text-center md:my-10">
            <h1 class="text-klipaa font-semibold text-3xl" data-aos="fade-up" data-aos-delay="200"
                data-aos-duration="1500">Pratinjau Aplikasi</h1>
        </div>
        <div class="container relative bg-klipaa p-10 rounded-2xl flex flex-col justify-center items-center">
            <div>
                <!-- Slider main container -->
                <div class="swiper relative">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <img class="w-full rounded-xl h-full object-cover object-center" src="/img/preview.png"
                                alt="">
                        </div>
                        <div class="swiper-slide">Slide 2</div>
                        <div class="swiper-slide">Slide 3</div>

                    </div>
                    <!-- If we need pagination -->
                    <div class="swiper-pagination"></div>

                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>

                    <!-- If we need scrollbar -->
                    <div class="swiper-scrollbar"></div>
                </div>
            </div>
        </div>
    </div>
    <div id="guide" class="flex flex-col items-center md:p-5 md:my-10">
        <div class="md:my-10">
            <h1 class="text-klipaa text-3xl font-semibold" data-aos="fade-up" data-aos-delay="200"
                data-aos-duration="1500">Panduan Penggunaan Sitamu</h1>
        </div>
        <div class="container flex border rounded-2xl justify-center p-10 gap-10 border-klipaa">
            <div class="card max-w-xs h-96 rounded-lg text-klipaa border border-klipaa text-center bg-white  md:p-5 h-80 flex flex-col items-center justify-center"
                data-aos="flip-up" data-aos-delay="300" data-aos-duration="1500">
                <figure class="card-header flex justify-center items-center md:my-7">
                    <img class="w-18" src="/img/one.png" alt="aa">
                </figure>
                <div class="card-body">
                    <p class="font-medium text-lg">Scan barcode
                        untuk menuju ke halaman utama.</p>
                </div>
            </div>
            <div class="card max-w-xs h-96 rounded-lg text-klipaa border border-klipaa text-center bg-white  md:p-5 h-80 flex flex-col items-center justify-center"
                data-aos="flip-up" data-aos-delay="500" data-aos-duration="1500">
                <figure class="card-header flex justify-center items-center md:my-7">
                    <img class="w-24" src="/img/two.png" alt="aa">
                </figure>
                <div class="card-body">
                    <p class="font-medium text-lg">Masuk ke halaman tamu untuk ke halaman formulir.</p>
                </div>
            </div>
            <div class="card max-w-xs h-96 rounded-lg text-klipaa border border-klipaa text-center bg-white  md:p-5 h-80 flex flex-col items-center justify-center"
                data-aos="flip-up" data-aos-delay="700" data-aos-duration="1500">
                <figure class="card-header flex justify-center items-center md:my-7">
                    <img class="w-24" src="/img/three.png" alt="aa">
                </figure>
                <div class="card-body">
                    <p class="font-medium text-lg">Isi formulir data
                        buku tamu dengan benar lalu tekan submit.</p>
                </div>
            </div>
        </div>
    </div>
    <footer id="footer" class="w-full text-white bg-klipaa md:px-10 md:pt-8">
        <div class="footer-body p-5 flex justify-between">
            <div class="logo w-2/3">
                <div class="flex items-center font-semibold text-3xl">
                    <img class="w-12" src="/img/sitamu.png" alt="Sitamu">
                    <h5>Sitamu</h5>
                </div>
                <p class="font-medium">Buku Tamu Digital</p>
            </div>
            <div class="w-1/3">
                <ul class="text-white font-medium text-2xl">
                    Kontak
                    <li class="my-5">
                        <div class="flex">
                            <img class="w-5 h-5 me-2" src="/img/telephone.png" alt="">
                            <p class="text-sm font-medium">+62 823-1168-2447</p>
                        </div>
                    </li>
                    <li class="my-5">
                        <div class="flex">
                            <img class="w-5 h-5 me-2" src="/img/mail.png" alt="">
                            <p class="text-sm font-medium">sitamu19@gmail.com</p>
                        </div>
                    </li>
                    <li class="my-5">
                        <div class="flex">
                            <img class="w-5 h-5 me-2" src="/img/location.png" alt="">
                            <p class="text-sm font-medium">Perum Rama Cipta Indah No.Blok A3, Jayawaras, Kec. Tarogong
                                Kidul, Kabupaten Garut, Jawa Barat 44151</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <hr>
        <div class="copyright flex justify-between p-5">
            <div class="">
                &copy; 2025 Sitamu
            </div>
            <div class="flex gap-5">
                <a href="#">
                    <img class="w-5" src="/img/whatsapp.png" alt="">
                </a>
                <a href="#">
                    <img class="w-5" src="/img/facebook.png" alt="">
                </a>
                <a href="#">
                    <img class="w-5" src="/img/instagram.png" alt="">
                </a>
            </div>
        </div>
    </footer>
    <script>
        const swiper = new Swiper('.swiper', {
            // Optional parameters
            direction: 'horizontal',
            loop: true,

            // If we need pagination
            pagination: {
                el: '.swiper-pagination',
            },

            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

            // And if we need scrollbar
            scrollbar: {
                el: '.swiper-scrollbar',
            },
        });
    </script>
</x-layout>
