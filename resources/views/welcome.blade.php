<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Documen Generator - Jasa Marga</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="assets/img/JM.png" rel="icon">
    <link href="assets/img/JM.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.12.0/dist/sweetalert2.min.css">

    <!-- Main CSS File -->
    <link href="{{ asset('public/assets/css/main.css')}}" rel="stylesheet">
    <style>
        /* From Uiverse.io by Yaya12085 */
        .container-ngasal {
            height: 300px;
            width: 300px;
            border-radius: 10px;
            box-shadow: 4px 4px 30px rgba(0, 0, 0, .2);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-between;
            padding: 10px;
            gap: 5px;
            background-color: rgba(0, 110, 255, 0.041);
        }

        .header-ngasal {
            position: relative;
            flex: 1;
            width: 100%;
            border: 2px dashed royalblue;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            overflow: hidden;
            height: 200px;
            padding: 0;
        }

        .preview-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            position: absolute;
            top: 0;
            left: 0;
            border-radius: 10px;
        }

        .upload-icon {
            text-align: center;
        }

        .header-ngasal svg {
            height: 100px;
        }

        .header-ngasal p {
            text-align: center;
            color: black;
        }

        .footer-ngasal {
            background-color: rgba(0, 110, 255, 0.075);
            width: 100%;
            height: 40px;
            padding: 8px;
            border-radius: 10px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: flex-end;
            color: black;
            border: none;
        }

        .footer-ngasal svg {
            height: 130%;
            fill: royalblue;
            background-color: rgba(70, 66, 66, 0.103);
            border-radius: 50%;
            padding: 2px;
            cursor: pointer;
            box-shadow: 0 2px 30px rgba(0, 0, 0, 0.205);
        }

        .footer-ngasal p {
            flex: 1;
            text-align: center;
        }

        .file-input {
            display: none;
        }

        /* From Uiverse.io by vinodjangid07 */
        .print-btn {
            width: 100px;
            height: 45px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: white;
            border: 1px solid rgb(213, 213, 213);
            border-radius: 10px;
            gap: 10px;
            font-size: 16px;
            cursor: pointer;
            overflow: hidden;
            font-weight: 500;
            box-shadow: 0px 10px 10px rgba(0, 0, 0, 0.065);
            transition: all 0.3s;

            /* Tambahan untuk beri jarak */
            margin-top: 20px;
            /* Atur jarak ke atas */
            margin-bottom: 10px;
            /* (Opsional) jarak ke bawah */
        }


        .printer-wrapper {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 20px;
            height: 100%;
        }

        .printer-container {
            height: 50%;
            width: 100%;
            display: flex;
            align-items: flex-end;
            justify-content: center;
        }

        .printer-container svg {
            width: 100%;
            height: auto;
            transform: translateY(4px);
        }

        .printer-page-wrapper {
            width: 100%;
            height: 50%;
            display: flex;
            align-items: flex-start;
            justify-content: center;
        }

        .printer-page {
            width: 70%;
            height: 10px;
            border: 1px solid black;
            background-color: white;
            transform: translateY(0px);
            transition: all 0.3s;
            transform-origin: top;
        }

        .print-btn:hover .printer-page {
            height: 16px;
            background-color: rgb(239, 239, 239);
        }

        .print-btn:hover {
            background-color: rgb(239, 239, 239);
        }

        .text-left {
            text-align: left;
        }
    </style>


</head>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center">

            <a class="logo d-flex align-items-center me-auto">
                <img src="assets/img/JM.png" alt="">
                <h1 class="sitename">Dokumen Generator Jasa Marga</h1>
            </a>

        </div>
    </header>

    <main class="main">


        <section id="hero" class="hero section">

            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                        <h1 data-aos="fade-up">Create documentation</h1>
                        <p data-aos="fade-up" data-aos-delay="100">Buat dokumentasi dengan cepat tanpa harus atur layout dan bisa tracking hystori dokumentasi</p>
                        <div class="d-flex flex-column flex-md-row" data-aos="fade-up" data-aos-delay="200">
                        </div>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out">
                        <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
                    </div>
                </div>
            </div>

        </section>

        <section id="recent-posts" class="recent-posts section">
            <div class="container">
                <form action="{{ route('dokumen.store') }}" method="POST" class="d-flex "
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row gy-5 d-flex justify-content-center">
                        <div class="alert alert-primary text-center mb-5">Tutorial cara menggunakan apk ini menggunakan
                            cara fajar
                            <ol>
                                <li class="text-left">Syahadat</li>
                                <li class="text-left">Sholat</li>
                                <li class="text-left">Zakat</li>
                                <li class="text-left">Puasa</li>
                                <li class="text-left">Haji bagi yang mampu</li>
                            </ol>
                        </div>

                        <div class="col-xl-4 col-md-6 d-flex justify-content-center">
                            <div class="container-ngasal">
                                <div class="header-ngasal">
                                    <img class="preview-image" src="" alt="Preview"
                                        style="display:none; max-width:100%; max-height:120px; object-fit: cover; position: absolute; top: 0; left: 0; width: 100%; height: 100%; border-radius: 10px;">
                                    <div class="upload-icon">
                                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7 10V9C7 6.23858 9.23858 4 12 4C14.7614 4 17 6.23858 17 9V10C19.2091 10 21 11.7909 21 14C21 15.4806 20.1956 16.8084 19 17.5M7 10C4.79086 10 3 11.7909 3 14C3 15.4806 3.8044 16.8084 5 17.5M12 12V21M12 12L15 15M12 12L9 15"
                                                stroke="#000000" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                        <p>Browse File to upload!</p>
                                    </div>
                                </div>

                                <label class="footer-ngasal" style="position: relative;">
                                    <svg fill="#000000" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15.331 6H8.5v20h15V14.154h-8.169z"></path>
                                        <path d="M18.153 6h-.009v5.342H23.5v-.002z"></path>
                                    </svg>
                                    <p class="file-name">Not selected file</p>

                                    <svg class="clear-file-btn" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M5.16565 10.1534C5.07629 8.99181 5.99473 8 7.15975 8H16.8402C18.0053 8 18.9237 8.9918 18.8344 10.1534L18.142 19.1534C18.0619 20.1954 17.193 21 16.1479 21H7.85206C6.80699 21 5.93811 20.1954 5.85795 19.1534L5.16565 10.1534Z"
                                            stroke="#000000" stroke-width="2" />
                                        <path d="M19.5 5H4.5" stroke="#000000" stroke-width="2"
                                            stroke-linecap="round" />
                                        <path d="M10 3C10 2.44772 10.4477 2 11 2H13C13.5523 2 14 2.44772 14 3V5H10V3Z"
                                            stroke="#000000" stroke-width="2" />
                                    </svg>

                                    <!-- Input file -->
                                    <input type="file" name="file_00" class="file-input" accept="image/*"
                                        style="opacity: 0; position: absolute; inset: 0; cursor: pointer;" required>
                                </label>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 d-flex justify-content-center">
                            <div class="container-ngasal">
                                <div class="header-ngasal">
                                    <img class="preview-image" src="" alt="Preview"
                                        style="display:none; max-width:100%; max-height:120px; object-fit: cover; position: absolute; top: 0; left: 0; width: 100%; height: 100%; border-radius: 10px;">
                                    <div class="upload-icon">
                                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7 10V9C7 6.23858 9.23858 4 12 4C14.7614 4 17 6.23858 17 9V10C19.2091 10 21 11.7909 21 14C21 15.4806 20.1956 16.8084 19 17.5M7 10C4.79086 10 3 11.7909 3 14C3 15.4806 3.8044 16.8084 5 17.5M12 12V21M12 12L15 15M12 12L9 15"
                                                stroke="#000000" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                        <p>Browse File to upload!</p>
                                    </div>
                                </div>

                                <label class="footer-ngasal" style="position: relative;">
                                    <!-- Ikon kiri -->
                                    <svg fill="#000000" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15.331 6H8.5v20h15V14.154h-8.169z"></path>
                                        <path d="M18.153 6h-.009v5.342H23.5v-.002z"></path>
                                    </svg>

                                    <!-- Nama file -->
                                    <p class="file-name">Not selected file</p>

                                    <!-- Ikon kanan (hapus) -->
                                    <svg class="clear-file-btn" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M5.16565 10.1534C5.07629 8.99181 5.99473 8 7.15975 8H16.8402C18.0053 8 18.9237 8.9918 18.8344 10.1534L18.142 19.1534C18.0619 20.1954 17.193 21 16.1479 21H7.85206C6.80699 21 5.93811 20.1954 5.85795 19.1534L5.16565 10.1534Z"
                                            stroke="#000000" stroke-width="2" />
                                        <path d="M19.5 5H4.5" stroke="#000000" stroke-width="2"
                                            stroke-linecap="round" />
                                        <path d="M10 3C10 2.44772 10.4477 2 11 2H13C13.5523 2 14 2.44772 14 3V5H10V3Z"
                                            stroke="#000000" stroke-width="2" />
                                    </svg>

                                    <!-- Input file -->
                                    <input type="file" name="file_50" class="file-input" accept="image/*"
                                        style="opacity: 0; position: absolute; inset: 0; cursor: pointer;" required>
                                </label>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 d-flex justify-content-center">
                            <div class="container-ngasal">
                                <div class="header-ngasal">
                                    <img class="preview-image" src="" alt="Preview"
                                        style="display:none; max-width:100%; max-height:120px; object-fit: cover; position: absolute; top: 0; left: 0; width: 100%; height: 100%; border-radius: 10px;">
                                    <div class="upload-icon">
                                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7 10V9C7 6.23858 9.23858 4 12 4C14.7614 4 17 6.23858 17 9V10C19.2091 10 21 11.7909 21 14C21 15.4806 20.1956 16.8084 19 17.5M7 10C4.79086 10 3 11.7909 3 14C3 15.4806 3.8044 16.8084 5 17.5M12 12V21M12 12L15 15M12 12L9 15"
                                                stroke="#000000" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                        <p>Browse File to upload!</p>
                                    </div>
                                </div>

                                <label class="footer-ngasal" style="position: relative;">

                                    <svg fill="#000000" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15.331 6H8.5v20h15V14.154h-8.169z"></path>
                                        <path d="M18.153 6h-.009v5.342H23.5v-.002z"></path>
                                    </svg>

                                    <!-- Nama file -->
                                    <p class="file-name">Not selected file</p>

                                    <!-- Ikon kanan (hapus) -->
                                    <svg class="clear-file-btn" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M5.16565 10.1534C5.07629 8.99181 5.99473 8 7.15975 8H16.8402C18.0053 8 18.9237 8.9918 18.8344 10.1534L18.142 19.1534C18.0619 20.1954 17.193 21 16.1479 21H7.85206C6.80699 21 5.93811 20.1954 5.85795 19.1534L5.16565 10.1534Z"
                                            stroke="#000000" stroke-width="2" />
                                        <path d="M19.5 5H4.5" stroke="#000000" stroke-width="2"
                                            stroke-linecap="round" />
                                        <path d="M10 3C10 2.44772 10.4477 2 11 2H13C13.5523 2 14 2.44772 14 3V5H10V3Z"
                                            stroke="#000000" stroke-width="2" />
                                    </svg>

                                    <!-- Input file -->
                                    <input type="file" name="file_100" class="file-input" accept="image/*"
                                        style="opacity: 0; position: absolute; inset: 0; cursor: pointer;" required>
                                </label>
                            </div>
                        </div>

                    </div>
            </div>


            <div class="p-4 m-5 border rounded shadow-sm bg-light">
                <div class="row g-3 align-items-center m-5">
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label class="form-label">Lokasi</label>
                            <input type="text" class="form-control" name="lokasi" required>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Uraian Kegiatan </label>
                            <input type="text" class="form-control" name="kegiatan" required>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Keterangan</label>
                            <input type="text" class="form-control" name="keterangan" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex align-items-center justify-content-center gap-2">
                <button type="submit" class="print-btn" style="margin-top: 10px;"><i
                        class="bi bi-save"></i>Simpan</button>
                <a href="{{ route('generate') }}" class="btn btn-primary bi bi-stars"> Generate</a>
            </div>
            </div>

            </form>

        </section><!-- /Recent Posts Section -->

        <!-- Contact Section -->
        <section id="contact" class="contact section">

            <div class="container">
                <div class="table-responsive">
                    <table class="table caption-top table-bordered table-striped">
                        <thead class="table-primary text-center">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Kode Unik</th>
                                <th scope="col">Lokasi</th>
                                <th scope="col">Uraian Kegiatan</th>
                                <th scope="col">0%</th>
                                <th scope="col">50%</th>
                                <th scope="col">100%</th>
                                <th scope="col">Keterangan</th>
                                <th scope="col" colspan="2">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @forelse ($dokumen as $dok)
                                <tr>
                                    <th scope="row" class="text-center">{{ $no++ }}</th>
                                    <td>{{ $dok->kode }}</td>
                                    <td>{{ $dok->lokasi }}</td>
                                    <td>{{ $dok->kegiatan }}</td>
                                    <td><img src="{{ asset('storage/' . $dok->file_00) }}" alt=""
                                            width="180" height="auto"></td>
                                    <td><img src="{{ asset('storage/' . $dok->file_50) }}" alt=""
                                            width="180" height="auto"></td>
                                    <td><img src="{{ asset('storage/' . $dok->file_100) }}" alt=""
                                            width="180" height="auto"></td>
                                    <td>{{ $dok->keterangan }}</td>
                                    <td class="text-center">
                                        <div class="d-flex flex-column align-items-center gap-2">
                                            <form class="delete-form"
                                                action="{{ route('dokumen.destroy', $dok->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger"><i
                                                        class="bi bi-trash"></i></button>
                                            </form>
                                        </div>
                                    </td>


                                </tr>
                            @empty
                                <tr>
                                    <td colspan="9" class="text-center">Tidak ada data.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    {{ $dokumen->links() }}
                </div>
            </div>

        </section><!-- /Contact Section -->

    </main>

    <footer id="footer" class="footer">


        <div class="container text-center mt-4">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">Symphony</strong> <span>2025. All Rights
                    Reserved</span></p>
        </div>

    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    <script>
        document.addEventListener('DOMContentLoaded', function() {

            const deleteForms = document.querySelectorAll('.delete-form');

            deleteForms.forEach(form => {
                form.addEventListener('submit', function(event) {
                    event.preventDefault();

                    Swal.fire({
                        title: "Are you sure?",
                        text: "You won't be able to revert this!!",
                        icon: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#3085d6",
                        cancelButtonColor: "#d33",
                        confirmButtonText: "Yes, delete it!"
                    }).then((result) => {
                        if (result.isConfirmed) {
                            this.submit();
                        }
                    });
                });
            });
        });
    </script>

    <!-- Vendor JS Files -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.12.0/dist/sweetalert2.all.min.js"></script>
    <script>
        $(document).ready(function() {
            // Cek apakah ada pesan 'success' dari session
            @if (session('success'))
                Swal.fire({
                    title: 'Berhasil!',
                    text: '{{ session('success') }}',
                    icon: 'success',
                    confirmButtonText: 'OK'
                });
            @endif

            @if ($errors->any())
                Swal.fire({
                    title: 'Kesalahan!',
                    html: '@foreach ($errors->all() as $error) {{ $error }}<br> @endforeach',
                    icon: 'error',
                    confirmButtonText: 'OK'
                });
            @endif
        });
    </script>
    <script>
        document.querySelectorAll('.container-ngasal').forEach(function(container) {
            const input = container.querySelector('.file-input');
            const header = container.querySelector('.header-ngasal');
            const fileNameText = container.querySelector('.footer-ngasal .file-name');

            function handleFileChange(e) {
                const file = e.target.files[0];
                if (!file) return;

                fileNameText.textContent = file.name;

                if (file.type.startsWith("image/")) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        header.innerHTML = '';
                        const img = document.createElement('img');
                        img.src = e.target.result;
                        img.className = 'preview-image';
                        header.appendChild(img);
                    };
                    reader.readAsDataURL(file);
                }
            }

            input.addEventListener('change', handleFileChange);

            container.querySelector('.clear-file-btn').addEventListener('click', function(e) {
                e.preventDefault();

                header.innerHTML = `
            <div class="upload-icon">
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7 10V9C7 6.23858 9.23858 4 12 4C14.7614 4 17 6.23858 17 9V10C19.2091 10 21 11.7909 21 14C21 15.4806 20.1956 16.8084 19 17.5M7 10C4.79086 10 3 11.7909 3 14C3 15.4806 3.8044 16.8084 5 17.5M12 12V21M12 12L15 15M12 12L9 15"
                        stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <p>Browse File to upload!</p>
            </div>
        `;

                fileNameText.textContent = "Not selected file";

                input.value = "";
            });
        });
    </script>






</body>

</html>
