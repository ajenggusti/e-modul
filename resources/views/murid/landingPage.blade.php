@extends('layout.mainMurid')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style/landingPage.css">
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
                                Cerdas bersama, sukses bersama SMK Negri 1 Labang...
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
        <!--  BRAND AREA -->
        <section class="about-info">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="about-info-image" data-aos="fade-right" data-aos-offset="400" data-aos-delay="500">
                            <img src="{{ asset('poco/assets/img/about/about_info.svg')}}" alt="Presenting A Project" class="img-fluid" />
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="about-info-text" data-aos="fade-up" data-aos-offset="400">
                            <h2>
                                Belajar Mudah, Masa Depan Cerah: Jadilah Versi Terbaik dari Dirimu
                            </h2>
                            <p>
                                Dengan belajar yang mudah, Kamu bisa meraih masa depan yang cerah. Pilih mata pelajar sesuai yang kamu inginkan dan kerjakan pretest serta post-tesnya. Gurumu akan dapat dengan mudah melacak pekerjaan yang sudah kamu selesaikan...
                            </p>
                            <div class="about-info-project d-flex justify-content-between flex-wrap">
                                <div class="project-information mb-20">
                                    <h3>7K+</h3>
                                    <p>Mata pelajaran</p>
                                </div>
                                <div class="project-information mb-20">
                                    <h3>17+</h3>
                                    <p>Nilai</p>
                                    <p>Yang terekam di dalam sistem</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mask-group">
                    <img class="mask1" src="{{ asset('poco/assets/img/mask/mask06.png')}}" alt="mask" />
                </div>
            </div>
        </section>
        <!--  CALL TO ACTION AREA -->
        <section class="callto-action">
            <div class="callto-action-mask" >
                <img data-aos="fade-down" data-aos-easing="linear" src="{{ asset('poco/assets/img/mask/leftMask.svg') }}" alt="Icon" class="img-fluid first-mask" />
            </div>
        </section>
    
        <!--  TESTIMONIAL AREA -->
        <section class="testimonial-area">
            <div class="container">
                <div class="section-title text-center mb-50">
                    <h2 class="mb-20" data-aos="fade-up">Mata Pelajaran</h2>
                    <p class="w-65">
                        Pilih mata pelajaran yang ingin kamu pelajari.
                    </p>
                </div>
                <div class="testimonial-wrapper">
                    <div class="testimonial-slider">
                        <div class="testimonial-item">
                            @foreach ($datas as $data)
                                
                                <div class="client-profile d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center mb-20">
                                        <div class="gambarMapel">
                                            <img src="{{ asset('img/tkj.jpg') }}" alt="client-image" />
                                        </div>
                                        <div class="client-name ml-2">
                                            <h6>{{ $data->mapel }}</h6>
                                            <span>{{ $data->user->nama }}</span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            
                        </div>
                     
                    </div>
                    <div class="slider-arrows">
                        <div class="prev-arrow">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25.364" height="14.091" viewBox="0 0 25.364 14.091">
                                <path
                                    d="M8.042,13.678a1.409,1.409,0,0,1-1.993,0L.414,8.043h0a1.408,1.408,0,0,1,0-1.993h0L6.049.413A1.409,1.409,0,0,1,8.042,2.405L4.811,5.636H23.955a1.409,1.409,0,1,1,0,2.818H4.811l3.231,3.231A1.409,1.409,0,0,1,8.042,13.678Z"
                                    fill="#fff"
                                />
                            </svg>
                        </div>
                        <div class="next-arrow">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25.364" height="14.091" viewBox="0 0 25.364 14.091">
                                <path
                                    d="M17.322,13.678a1.409,1.409,0,0,0,1.993,0L24.95,8.043h0a1.408,1.408,0,0,0,0-1.993h0L19.315.413a1.409,1.409,0,1,0-1.993,1.993l3.231,3.231H1.409a1.409,1.409,0,1,0,0,2.818H20.553l-3.231,3.231A1.409,1.409,0,0,0,17.322,13.678Z"
                                    fill="#fff"
                                />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="mask-group2">
                    <img class="mask1" src="{{ asset('poco/assets/img/mask/layerShape-01.png') }}" alt="mask" />
                    <img class="mask2" src="{{ asset('poco/assets/img/mask/layerShape-02.png') }}" alt="mask" />
                    <img class="mask5" src="{{ asset('poco/assets/img/mask/dotblue.svg') }}" alt="mask" />
                    <img data-aos="fade-right" data-aos-easing="linear" class="mask6" src="{{ asset('poco/assets/img/mask/circle-01.svg') }}" alt="mask" />
                    <img data-aos="fade-down" data-aos-easing="linear" class="mask7" src="{{ asset('poco/assets/img/mask/penta-02.svg') }}" alt="mask" />
                </div>
            </div>
        </section>
    
    </main>
</body>
</html>

@endsection