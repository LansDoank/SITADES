<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <form action="/form/datas" method="POST" enctype="multipart/form-data"
        class="shadow mx-auto my-10 max-w-4xl p-8 border border-gray-200 rounded-lg">
        @csrf
        <div class="form-header">
            <div class="flex items-center md:my-3">
                <img class="w-12 me-2" src="/img/sitamu.png" alt="">
                <h5 class="text-klipaa font-semibold text-3xl">Sitamu</h5>
            </div>
            <p class="text-gray-500 font-medium">Silakan isi data buku tamu dengan benar.</p>
        </div>
        <div class="form-body">
            <ul class="md:my-5">
                <li class="flex gap-10 md:my-3">
                    <div class="flex flex-col items-start md:w-1/2">
                        <label for="fullname" class="mb-2">Nama Lengkap</label>
                        <input type="text" name="fullname" id="fullname"
                            class="form-input border border-gray-200 rounded w-full h-10 px-3" required
                            placeholder="Masukkan nama anda">
                    </div>
                    <div class="flex flex-col items-start md:w-1/2">
                        <label for="institution" class="mb-2">Instansi</label>
                        <select class="instance form-input text-gray-400 border border-gray-200 px-2 h-10 w-1/2"
                            name="institution" id="institution">
                            <option selected>Pilih Instansi</option>
                            <option value="Supra Desa">Supra desa</option>
                            <option value="APH">APH</option>
                            <option value="Warga">Warga</option>
                            <option value="Media">Media</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                    </div>
                </li>
                <li class="md:my-3">
                    <textarea class="hidden w-full border border-gray-200 px-3 py-2" id="institution-textarea"
                        placeholder="Sebutkan Instansi Anda"></textarea>
                </li>
                <li class="md:my-3">
                    <div class="flex flex-col items-start">
                        <label for="telephone" class="mb-2">No. Telepon</label>
                        <input type="text" name="telephone" id="telephone"
                            class="form-input border border-gray-200 rounded w-full h-10 px-3" required
                            placeholder="Masukkan telepon anda">
                    </div>
                </li>
                <li class="md:my-3">
                    <div class="flex flex-col items-start">
                        <label for="province" class="mb-2">Provinsi</label>
                        <select class="form-input text-gray-600 border border-gray-200 px-2 h-10 w-full" name="province"
                            id="province">
                            <option selected>Pilih Provinsi Anda</option>
                            <option value="Aceh">Aceh</option>
                            <option value="Bali">Bali</option>
                            <option value="Banten">Banten</option>
                            <option value="Bengkulu">Bengkulu</option>
                            <option value="DI Yogyakarta">DI Yogyakarta</option>
                            <option value="DKI Jakarta">DKI Jakarta</option>
                            <option value="Gorontalo">Gorontalo</option>
                            <option value="Jambi">Jambi</option>
                            <option value="Jawa Barat">Jawa Barat</option>
                            <option value="Jawa Tengah">Jawa Tengah</option>
                            <option value="Jawa Timur">Jawa Timur</option>
                            <option value="Kalimantan Barat">Kalimantan Barat</option>
                            <option value="Kalimantan Selatan">Kalimantan Selatan</option>
                            <option value="Kalimantan Tengah">Kalimantan Tengah</option>
                            <option value="Kalimantan Timur">Kalimantan Timur</option>
                            <option value="Kalimantan Utara">Kalimantan Utara</option>
                            <option value="Kepulauan Bangka Belitung">Kepulauan Bangka Belitung</option>
                            <option value="Kepulauan Riau">Kepulauan Riau</option>
                            <option value="Lampung">Lampung</option>
                            <option value="Maluku">Maluku</option>
                            <option value="Maluku Utara">Maluku Utara</option>
                            <option value="Nusa Tenggara Barat">Nusa Tenggara Barat</option>
                            <option value="Nusa Tenggara Timur">Nusa Tenggara Timur</option>
                            <option value="Papua">Papua</option>
                            <option value="Papua Barat">Papua Barat</option>
                            <option value="Riau">Riau</option>
                            <option value="Sulawesi Barat">Sulawesi Barat</option>
                            <option value="Sulawesi Selatan">Sulawesi Selatan</option>
                            <option value="Sulawesi Tengah">Sulawesi Tengah</option>
                            <option value="Sulawesi Tenggara">Sulawesi Tenggara</option>
                            <option value="Sulawesi Utara">Sulawesi Utara</option>
                            <option value="Sumatera Barat">Sumatera Barat</option>
                            <option value="Sumatera Selatan">Sumatera Selatan</option>
                            <option value="Sumatera Utara">Sumatera Utara</option>
                            <option value="Papua Selatan">Papua Selatan</option>
                            <option value="Papua Tengah">Papua Tengah</option>
                            <option value="Papua Pegunungan">Papua Pegunungan</option>
                            <option value="Papua Barat Daya">Papua Barat Daya</option>
                        </select>
                    </div>
                </li>
                <li class="md:my-3">
                    <div class="flex flex-col items-start">
                        <label for="district" class="mb-2">Kabupaten</label>
                        <select class="form-input text-gray-400 border border-gray-200 px-2 h-10 w-full" name="district"
                            id="district">
                            <option selected>Pilih Kabupaten Anda</option>
                        </select>
                    </div>
                </li>
                <li class="md:my-3">
                    <div class="flex flex-col items-start">
                        <label for="sub_district" class="mb-2">Kecamatan</label>
                        <select class="form-input text-gray-400 border border-gray-200 px-2 h-10 w-full"
                            name="sub_district" id="sub_district">
                            <option selected>Pilih Kecamatan Anda</option>
                            <option value="Samarang">Samarang</option>
                        </select>
                    </div>
                </li>
                <li class="md:my-3">
                    <div class="flex flex-col items-start">
                        <label for="village" class="mb-2">Desa</label>
                        <select class="form-input text-gray-400 border border-gray-200 px-2 h-10 w-full"
                            name="village" id="village">
                            <option selected>Pilih Desa Anda</option>
                            <option value="Sukarasa">Sukarasa</option>
                        </select>
                    </div>
                </li>
                <li class="md:my-3">
                    <div class="flex w-full gap-10">
                        <div class="flex flex-col items-start md:w-1/2">
                            <label for="check_in" class="mb-2">Tanggal Datang</label>
                            <input type="date" name="check_in" id="check_in"
                                class="form-input text-gray-400 border border-gray-200 px-2 h-10 w-1/2">
                        </div>
                        <div class="flex flex-col items-start md:w-1/2">
                            <label for="check_out" class="mb-2">Tanggal Pulang</label>
                            <input type="date" name="check_out" id="check_out"
                                class="form-input text-gray-400 border border-gray-200 px-2 h-10 w-1/2">
                        </div>
                    </div>
                </li>
                <li class="md:my-3">
                    <div class="flex flex-col items-start">
                        <label for="visit_type" class="mb-2">Tujuan</label>
                        <select class="form-input text-gray-400 border border-gray-200 px-2 h-10 w-full"
                            name="visit_type" id="visit_type">
                            <option selected>Pilih Tujuan Anda</option>
                            @foreach ($visitTypes as $visitType)
                                <option value="{{$visitType->id}}">{{$visitType->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </li>
                <li class="md:my-3">
                    <textarea class="hidden w-full border border-gray-200 px-3 py-2" name="visit_type" id="visit_type_textarea"
                        placeholder="Sebutkan Tujuan Anda"></textarea>
                </li>
                <li class="md:my-3">
                    <div class="flex flex-col items-start">
                        <label for="objective" class="mb-2">Keterangan</label>
                        <textarea class="form-input rounded text-gray-400 border border-gray-200 px-2 h-10 w-full py-2 min-h-[150px]"
                            name="objective" id="objective" placeholder="Masukan Keterangan Disini"></textarea>
                    </div>
                </li>
                <li class="md:my-3 ">
                    <div class="flex flex-col items-start w-full">
                        <label for="visitor_photo" id="photo" class="mb-2 w-full">Foto
                            <div
                                class="w-full my-2 min-h-[150px] border border-gray-200 rounded-lg flex justify-center items-center">
                                <img src="/img/input_photo.png" alt="">
                            </div>
                        </label>
                        <input class="hidden" type="file" name="visitor_photo" id="visitor_photo">
                    </div>
                </li>
                <li class="md:my-3">
                    <button class="w-full bg-klipaa rounded text-white font-normal h-12"
                        type="submit">Submit</button>
                </li>
            </ul>
        </div>
    </form>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const inputPhoto = document.getElementById('photo');
            const photoInput = document.getElementById('visitor_photo');
            
            photoInput.addEventListener('change', () => {
                const file = photoInput.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function (e) {
                        inputPhoto.innerHTML = `
                            Foto
                            <div class="w-full my-2 min-h-[150px] border border-gray-200 rounded-lg flex justify-center items-center">
                                <img class="max-w-[400px] max-h-[200px] object-cover" src="${e.target.result}" alt="">
                            </div>`;
                    };
                    reader.readAsDataURL(file);
                }
            });
            
            const institutionInput = document.getElementById("institution");
            const institutionTextArea = document.getElementById("institution-textarea");
    
            institutionInput.addEventListener("change", function () {
                if (institutionInput.value === "Lainnya") {
                    institutionInput.removeAttribute("name");
                    institutionTextArea.setAttribute("name", "institution");
                    institutionTextArea.classList.remove("hidden");
                } else {
                    institutionTextArea.removeAttribute("name");
                    institutionTextArea.classList.add("hidden");
                    institutionInput.setAttribute("name", "institution");
                }
            });
    
            const visitInput = document.getElementById("visit_type");
            const visitTextArea = document.getElementById("visit_type_textarea");
    
            visitInput.addEventListener("change", function () {
                if (visitInput.value === "5") {
                    visitInput.removeAttribute("name");
                    visitTextArea.setAttribute("name", "visit_type");
                    visitTextArea.classList.remove("hidden");
                } else {
                    visitTextArea.removeAttribute("name");
                    visitTextArea.classList.add("hidden");
                    visitInput.setAttribute("name", "visit_type");
                }
            });
        });
    </script>
    
</x-layout>
