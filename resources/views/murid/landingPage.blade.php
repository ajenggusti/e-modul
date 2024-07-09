@extends('layout.mainMurid')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('style/landingPage.css') }}">
    <style>
        .mapel-item {
            display: flex;
            align-items: center;
            border: 1px solid #ccc;
            margin-bottom: 10px;
            padding: 10px;
            border-radius: 10px; /* Mengatur sudut kotak yang tumpul */
            transition: transform 0.3s ease; /* Efek animasi ketika digeser */
        }
        .mapel-item:hover {
            transform: scale(1.02); /* Memperbesar elemen saat dihover */
        }
        .gambarMapel img {
            width: 80px; /* Ukuran gambar disesuaikan */
            height: auto;
            border-radius: 8px; /* Mengatur sudut gambar */
            margin-right: 20px;
        }
        @media (max-width: 768px) {
            .mapel-item {
                flex-direction: column; /* Tata letak diubah menjadi vertikal pada layar kecil */
                align-items: flex-start;
            }
            .gambarMapel {
                margin-bottom: 10px;
            }
        }
    </style>
</head>
<body>
    <main>
        <!--  BANNER AREA -->
        <section class="bannerArea">
            <div class="container custom-container">
                <div class="row d-flex align-items-center">
                    <div class="col-xl-6 order-2 order-xl-0">
                        <div class="bannerArea__wrapper" data-aos="fade-up">
                            <h1 class="bannerArea__title">
                                E-Modul
                            </h1>
                            <p class="bannerArea__brief">
                                Cerdas bersama, sukses bersama SMK Negeri 1 Labang...
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-6 order-1 order-xl-0">
                        <div class="bannerArea__image" data-aos="fade-left" data-aos-delay="500">
                            <img src="{{ asset('img/belajar.png')}}" alt="banner-image" />
                        </div>
                    </div>
                </div>
                <div class="mask-group">
                    <img class="mask1" src="{{ asset('poco/assets/img/mask/layerShape-01.png')}}" alt="mask" />
                    <img class="mask2" src="{{ asset('poco/assets/img/mask/layerShape-02.png')}}" alt="mask" />
                    <img class="mask3" src="{{ asset('poco/assets/img/mask/downShape.png')}}" alt="mask" />
                    <img class="mask4" src="{{ asset('poco/assets/img/mask/layers-dot.png')}}" alt="mask" />
                </div>
            </div>
        </section>

        <!--  CALL TO ACTION AREA -->
        <section class="callto-action">
            <div class="callto-action-mask" >
                <img data-aos="fade-down" data-aos-easing="linear" src="{{ asset('poco/assets/img/mask/leftMask.svg') }}" alt="Icon" class="img-fluid first-mask" />
            </div>
        </section>

    </main>
</body>
</html>

@endsection
