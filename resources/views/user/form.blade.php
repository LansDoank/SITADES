<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="md:p-10 lg:p-0 lg:my-10">
        <form action="/form/create" method="POST" enctype="multipart/form-data"
            class="shadow lg:mx-auto w-full m-0 md:max-w-4xl p-6 md:p-8 border border-gray-200 rounded-lg">
            @csrf
            <div class="form-header">
                <div class="flex items-center md:my-3">
                    <img class="md:w-12 w-10 me-2" src="/img/sitamu.png" alt="">
                    <h5 class="text-klipaa font-semibold text-2xl  md:text-3xl">Sitamu</h5>
                </div>
                <p class="text-gray-500 font-medium my-3 text-xs md:text-sm md:m-0">Silakan isi data buku tamu dengan benar.</p>
            </div>
            <div class="form-body">
                <input type="hidden" name="province_code" value="{{ $visit->province_code }}">
                <input type="hidden" name="district_code" value="{{ $visit->district_code }}">
                <input type="hidden" name="sub_district_code" value="{{ $visit->subdistrict_code }}">
                <input type="hidden" name="village_code" value="{{ $visit->village_code }}">
                <input type="hidden" name="visit_type" value="{{ $visit->id }}">
                <ul class="md:my-5">
                    <li class="flex gap-3 md:gap-x-5  md:my-3 flex-wrap md:flex-nowrap">
                        <div class="flex flex-col items-start w-full md:w-1/2">
                            <label for="fullname" class="mb-2 text-sm md:text-base">Nama Lengkap</label>
                            <input type="text" name="fullname" id="fullname"
                                class="form-input border border-gray-200 rounded w-full h-10 px-3" required
                                placeholder="Masukkan nama anda">
                        </div>
                        <div class="flex flex-col items-start w-full md:w-1/2">
                            <label for="institution" class="mb-2 text-sm md:text-base">Instansi</label>
                            <select class="instance form-input text-gray-500 border border-gray-200 px-2 h-10 w-full md:w-1/2"
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
                    <li class="my-3">
                        <div class="flex flex-col items-start">
                            <label for="telephone" class="mb-2 text-sm md:text-base">No. Telepon</label>
                            <input type="text" name="telephone" id="telephone"
                                class="form-input border border-gray-200 rounded w-full h-10 px-3" required
                                placeholder="Masukkan telepon anda">
                        </div>
                    </li>
                    <li class="my-3">
                        <div class="flex flex-col items-start">
                            <label for="province" class="mb-2 text-sm md:text-base">Provinsi</label>
                            <select class="form-input text-gray-500 border border-gray-200 px-2 h-10 w-full" name="province"
                                id="province">
                                <option selected>Pilih Provinsi Anda</option>
                                @foreach ($provinces as $province)
                                    <option value="{{$province->code}}">{{$province->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </li>
                    <li class="my-3">
                        <div class="flex flex-col items-start">
                            <label for="district" class="mb-2 text-sm md:text-base">Kabupaten</label>
                            <select class="form-input text-gray-500 border border-gray-200 px-2 h-10 w-full" name="district"
                                id="district">
                                <option selected>Pilih Kabupaten Anda</option>
                                @foreach ($districts as $district)
                                    <option value="{{$district->code}}">{{$district->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </li>
                    <li class="my-3">
                        <div class="flex flex-col items-start">
                            <label for="sub_district" class="mb-2 text-sm md:text-base">Kecamatan</label>
                            <select class="form-input text-gray-500 border border-gray-200 px-2 h-10 w-full"
                                name="sub_district" id="sub_district">
                                <option selected>Pilih Kecamatan Anda</option>
                                @foreach ($sub_districts as $sub_district)
                                    <option value="{{$sub_district->code}}">{{$sub_district->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </li>
                    <li class="my-3">
                        <div class="flex flex-col items-start">
                            <label for="village" class="mb-2 text-sm md:text-base">Desa</label>
                            <select class="form-input text-gray-500 border border-gray-200 px-2 h-10 w-full" name="village"
                                id="village">
                                <option selected>Pilih Desa Anda</option>
                                @foreach ($villages as $village)
                                    <option value="{{$village->code}}">{{$village->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </li>
                    <li class="my-3">
                        <div class="flex w-full gap-3 md:gap-10 flex-wrap md:flex-nowrap">
                            <div class="flex flex-col items-start w-full md:w-1/2">
                                <label for="check_in" class="mb-2 text-sm md:text-base">Tanggal Datang</label>
                                <input type="date" name="check_in" id="check_in"
                                    class="form-input w-full text-gray-500 border border-gray-200 px-2 h-10 w-1/2">
                            </div>
                            <div class="flex flex-col items-start w-full md:w-1/2">
                                <label for="check_out" class="mb-2 text-sm md:text-base">Tanggal Pulang</label>
                                <input type="date" name="check_out" id="check_out"
                                    class="form-input w-full text-gray-500 border border-gray-200 px-2 h-10 w-1/2">
                            </div>
                        </div>
                    </li>
                    <li class="my-3">
                        <div class="flex flex-col items-start">
                            <label for="objective" class="mb-2 text-sm md:text-base">Tujuan</label>
                            <select class="form-input text-gray-500 border border-gray-200 px-2 h-10 w-full"
                                name="objective" id="objective">
                                {{-- @foreach ($visitTypes as $visitType)
                                    <option selected value="{{$visitType->id}}">{{$visitType->name}}</option>
                                @endforeach --}}
                                <option>Pilih Tujuan Anda</option>
                                <option value="Koordinasi">Koordinasi</option>
                                <option value="Cari Informasi">Cari Informasi</option>
                                <option value="Pembinaan">Pembinaan</option>
                                <option value="Studi Banding">Studi Banding</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                        </div>
                    </li>
                    <li class="my-3">
                        <textarea class="hidden w-full border border-gray-200 px-3 py-2" name="objective" id="objective_textarea"
                            placeholder="Sebutkan Tujuan Anda"></textarea>
                    </li>
                    <li class="my-3">
                        <div class="flex flex-col items-start">
                            <label for="i_n_i" class="mb-2 text-sm md:text-base">Keterangan</label>
                            <textarea class="form-input rounded text-gray-500 border border-gray-200 px-2 h-10 w-full py-2 min-h-[150px]"
                                name="i_n_i" id="i_n_i" placeholder="Masukan Keterangan Disini"></textarea>
                        </div>
                    </li>
                    <li class="my-3 ">
                        <div class="flex flex-col items-start w-full">
                            <label for="visitor_photo" id="photo" class="mb-2 w-full text-sm md:text-base">Foto
                                <div
                                    class="w-full my-2 min-h-[150px] border border-gray-200 rounded-lg flex justify-center items-center">
                                    <img src="/img/input_photo.png" alt="">
                                </div>
                            </label>
                            <input class="hidden" type="file" name="visitor_photo" id="visitor_photo">
                        </div>
                    </li>
                    <li class="my-3">
                        <button class="w-full bg-klipaa rounded text-white font-normal h-12"
                            type="submit">Kirim</button>
                    </li>
                </ul>
            </div>
        </form>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const inputPhoto = document.getElementById('photo');
            const photoInput = document.getElementById('visitor_photo');

            photoInput.addEventListener('change', () => {
                const file = photoInput.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
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

            institutionInput.addEventListener("change", function() {
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

            const objective = document.getElementById("objective");
            const objectiveArea = document.getElementById("objective_textarea");

            objective.addEventListener("change", function() {
                if (objective.value === "Lainnya") {
                    objective.removeAttribute("name");
                    objectiveArea.setAttribute("name", "objective");
                    objectiveArea.classList.remove("hidden");
                } else {
                    objectiveArea.removeAttribute("name");
                    objectiveArea.classList.add("hidden");
                    objective.setAttribute("name", "objective");
                }
            });
        });
    </script>

</x-layout>
