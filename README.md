<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>


#install 
1. composer require barryvdh/laravel-dompdf

#config  config/app.php
Barryvdh\DomPDF\ServiceProvider::class,
ลงไปในส่วนของ providers
และเพิ่ม
'PDF' => Barryvdh\DomPDF\Facade::class,
ลงในส่วนของ aliases

เพิ่ม Route 
Route::get('/', function () {
    $data = [
        'name'=>'Thumanoon J.'
    ];
    $pdf = PDF::loadView('invoice', $data);
    return @$pdf->stream();
});

สร้าง floder fonts ใน public และ Storage

#END
