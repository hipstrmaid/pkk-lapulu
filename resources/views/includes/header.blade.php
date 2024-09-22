{{-- bg-blue-500 --}}
<div class="flex py-3 px-5 items-center bg-sky-800 text-white top-0 z-10">
    <div class="logo flex-1">
        <img src="{{ asset('assets/gambar/logo.png') }}" alt="Logo">
    </div>
    <div class="flex-none lg:hidden">
        <button id="nav-toggle"
            class="flex items-center px-3 py-2 border border-2 rounded text-gray-100 border-gray-300 hover:text-white hover:border-white">
            <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <title>Menu</title>
                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
            </svg>
        </button>
    </div>
    <div class="hidden lg:flex lg:items-center lg:w-auto">
        <ul class="menu menu-horizontal px-1">
            <li><a class="text-md font-bold text-yellow-200">Home</a></li>
            <li>
                <details onclick="toggleDetails(event)">
                    <summary class="text-md font-bold hover:text-yellow-200">Profile</summary>
                    <ul class="bg-gray-100 text-gray-900 rounded-none z-10">
                        <li class="w-full"><a>Sejarah PKK</a></li>
                        <li><a>10 Program Pokok PKK</a></li>
                        <li><a>Arti dan Logo PKK</a></li>
                        <li><a>Visi & Misi</a></li>
                        <li><a>Struktur Organisasi</a></li>
                        <li><a>Profil Pj.Pembina PKK</a></li>
                        <li><a>Mars PKK</a></li>
                    </ul>
                </details>
            </li>
            <li>
                <details onclick="toggleDetails(event)">
                    <summary class="text-md font-bold hover:text-yellow-200">POKJA & Sekretariat</summary>
                    <ul class="bg-gray-100 text-md text-gray-900 rounded-none z-10">
                        <li><a>Sekretariat</a></li>
                        <li><a>Pokja I</a></li>
                        <li><a>Pokja II</a></li>
                        <li><a>Pokja III</a></li>
                        <li><a>Pokja IV</a></li>
                    </ul>
                </details>
            </li>
            <li>
                <details onclick="toggleDetails(event)">
                    <summary class="text-md font-bold hover:text-yellow-200">Informasi</summary>
                    <ul class="bg-gray-100 text-md text-gray-900 rounded-none z-10">
                        <li><a>Agenda Kegiatan</a></li>
                        <li><a>Informasi Terbaru</a></li>
                        <li><a>Galeri</a></li>
                        <li><a>Kontak</a></li>
                    </ul>
                </details>
            </li>
            <li>
                <details onclick="toggleDetails(event)">
                    <summary class="text-md font-bold hover:text-yellow-200">Daerah</summary>
                    <ul class="bg-gray-100 text-md text-gray-900 rounded-none z-10">
                        <li><a>Link 1</a></li>
                        <li><a>Link 2</a></li>
                    </ul>
                </details>
            </li>
            <li>
                <details onclick="toggleDetails(event)">
                    <summary class="text-md font-bold hover:text-yellow-200">Data</summary>
                    <ul class="bg-gray-100 text-md text-gray-900 rounded-none z-10">
                        <li><a>Link 1</a></li>
                        <li><a>Link 2</a></li>
                    </ul>
                </details>
            </li>
        </ul>
    </div>
</div>

<div id="mobile-menu" class="hidden lg:hidden absolute bg-blue-500 z-50 w-full">
    <ul class="bg-blue-500 text-gray-100">
        <li><a class="block py-2 px-4 font-bold text-yellow-200 hover:bg-blue-600">Home</a></li>
        <li>
            <details onclick="toggleDetails(event)">
                <summary class="block py-2 px-4 font-bold hover:text-yellow-200 hover:bg-blue-600">Profile</summary>
                <ul class="bg-gray-100 text-gray-900 py-2 px-4 rounded-none">
                    <li class="p-1 hover:bg-gray-300"><a class="block">Sejarah PKK</a></li>
                    <li class="p-1 hover:bg-gray-300"><a class="block">10 Program Pokok PKK</a></li>
                    <li class="p-1 hover:bg-gray-300"><a class="block">Arti dan Logo PKK</a></li>
                    <li class="p-1 hover:bg-gray-300"><a class="block">Visi & Misi</a></li>
                    <li class="p-1 hover:bg-gray-300"><a class="block">Struktur Organisasi</a></li>
                    <li class="p-1 hover:bg-gray-300"><a class="block">Profil Pj.Pembina PKK</a></li>
                    <li class="p-1 hover:bg-gray-300"><a class="block">Mars PKK</a></li>
                </ul>
            </details>
        </li>
        <li>
            <details onclick="toggleDetails(event)">
                <summary class="block py-2 px-4 font-bold hover:text-yellow-200 hover:bg-blue-600">POKJA & Sekretariat
                </summary>
                <ul class="bg-gray-100 text-gray-900 py-2 px-4 rounded-none">
                    <li class="p-1 hover:bg-gray-300"><a class="block">Sekretariat</a></li>
                    <li class="p-1 hover:bg-gray-300"><a class="block">Pokja I</a></li>
                    <li class="p-1 hover:bg-gray-300"><a class="block">Pokja II</a></li>
                    <li class="p-1 hover:bg-gray-300"><a class="block">Pokja III</a></li>
                    <li class="p-1 hover:bg-gray-300"><a class="block">Pokja IV</a></li>
                </ul>
            </details>
        </li>
        <li>
            <details onclick="toggleDetails(event)">
                <summary class="block py-2 px-4 font-bold hover:text-yellow-200 hover:bg-blue-600">Informasi</summary>
                <ul class="bg-gray-100 text-gray-900 py-2 px-4 rounded-none">
                    <li class="p-1 hover:bg-gray-300"><a class="block">Agenda Kegiatan</a></li>
                    <li class="p-1 hover:bg-gray-300"><a class="block">Informasi Terbaru</a></li>
                    <li class="p-1 hover:bg-gray-300"><a class="block">Galeri</a></li>
                    <li class="p-1 hover:bg-gray-300"><a class="block">Kontak</a></li>
                </ul>
            </details>
        </li>
        <li>
            <details onclick="toggleDetails(event)">
                <summary class="block py-2 px-4 font-bold hover:text-yellow-200 hover:bg-blue-600">Daerah</summary>
                <ul class="bg-gray-100 text-gray-900 py-2 px-4 rounded-none">
                    <li class="p-1 hover:bg-gray-300"><a class="block">Link 1</a></li>
                    <li class="p-1 hover:bg-gray-300"><a class="block">Link 2</a></li>
                </ul>
            </details>
        </li>
        <li>
            <details onclick="toggleDetails(event)">
                <summary class="block py-2 px-4 font-bold hover:text-yellow-200 hover:bg-blue-600">Data</summary>
                <ul class="bg-gray-100 text-gray-900 py-2 px-4 rounded-none">
                    <li class="p-1 hover:bg-gray-300"><a class="block">Link 1</a></li>
                    <li class="p-1 hover:bg-gray-300"><a class="block">Link 2</a></li>
                </ul>
            </details>
        </li>
    </ul>
</div>
