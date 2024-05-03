{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
    <style>
        .btn:hover {
            background: linear-gradient(to right, #45a049, #1e87d6);
            /* Ubah warna gradasi saat hover */
        }
    </style>
    @vite('resources/sass/app.scss')
</head>

<body> --}}
@extends('layouts.app')

@section('content')

<style>
    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        background-color: black;
    }
</style>
        <!-- Jumbotron -->
        <section class="jumbotron text-center" style="background-color: #292929">
            <img
            src="{{ Vite::asset('resources/images/foto.jpg') }}"
              alt="Dirga Eka Prasetya"
              width="250"
              class="img-thumbnail rounded-circle"
            />
            <h1 class="display-4" style="color: white">Dirga Eka Prasetya</h1>
            <p class="lead" style="color: white">Student | Gamer</p>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
              <path
                fill="#4e4e4e"
                fill-opacity="1"
                d="M0,192L20,181.3C40,171,80,149,120,128C160,107,200,85,240,64C280,43,320,21,360,42.7C400,64,440,128,480,144C520,160,560,128,600,117.3C640,107,680,117,720,149.3C760,181,800,235,840,229.3C880,224,920,160,960,144C1000,128,1040,160,1080,170.7C1120,181,1160,171,1200,181.3C1240,192,1280,224,1320,202.7C1360,181,1400,107,1420,69.3L1440,32L1440,320L1420,320C1400,320,1360,320,1320,320C1280,320,1240,320,1200,320C1160,320,1120,320,1080,320C1040,320,1000,320,960,320C920,320,880,320,840,320C800,320,760,320,720,320C680,320,640,320,600,320C560,320,520,320,480,320C440,320,400,320,360,320C320,320,280,320,240,320C200,320,160,320,120,320C80,320,40,320,20,320L0,320Z"
              ></path>
            </svg>
          </section>
          <!-- End Jumbotron -->
      
          <!-- About me! -->
          <section id="about" style="background-color: #4e4e4e">
            <div class="container">
              <div class="row text-center mb-5">
                <div class="col">
                  <h2 style="color: #292929">About me</h2>
                </div>
              </div>
              <div class="row justify-content-center">
                <div class="col-7 text-center fs-5">
                  <p style="color: white">
                    Saya memiliki minat yang tinggi dalam bidang coding. Saya senang belajar tentang bahasa pemrograman dan bagaimana menggunakannya untuk membuat berbagai macam hal. Saya suka menggunakan coding untuk menyelesaikan masalah dan menciptakan sesuatu yang baru. Saya yakin bahwa coding adalah keterampilan yang sangat penting di dunia saat ini dan saya ingin terus mengembangkan kemampuan saya di bidang ini.
                  </p>
                </div>
              </div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
              <path
                fill="#777777"
                fill-opacity="1"
                d="M0,160L18.5,154.7C36.9,149,74,139,111,117.3C147.7,96,185,64,222,80C258.5,96,295,160,332,181.3C369.2,203,406,181,443,176C480,171,517,181,554,186.7C590.8,192,628,192,665,192C701.5,192,738,192,775,208C812.3,224,849,256,886,240C923.1,224,960,160,997,128C1033.8,96,1071,96,1108,90.7C1144.6,85,1182,75,1218,96C1255.4,117,1292,171,1329,197.3C1366.2,224,1403,224,1422,224L1440,224L1440,320L1421.5,320C1403.1,320,1366,320,1329,320C1292.3,320,1255,320,1218,320C1181.5,320,1145,320,1108,320C1070.8,320,1034,320,997,320C960,320,923,320,886,320C849.2,320,812,320,775,320C738.5,320,702,320,665,320C627.7,320,591,320,554,320C516.9,320,480,320,443,320C406.2,320,369,320,332,320C295.4,320,258,320,222,320C184.6,320,148,320,111,320C73.8,320,37,320,18,320L0,320Z"
              ></path>
            </svg>
          </section>
          <!-- End About me! -->
@endsection

{{-- @vite('resources/js/app.js')
</body>

</html> --}}
