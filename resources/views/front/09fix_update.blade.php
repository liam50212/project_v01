@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" integrity="sha512-ZKX+BvQihRJPA8CROKBhDNvoc2aDMOdAlcm7TUQY+35XYtrd3yh95QOOhsPDQY9QnKE0Wqag9y38OIgEvb88cA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- <link href="path/to/lightbox.css" rel="stylesheet" /> --}}
    <style>
        input {
            width:250px;
            height: 25px;
            background-color: #EAECEE ;
            border: 0;
            border-radius: 5px;
            margin-left: 10px;
        }

        span {
            font-size: 18px;
        }

        .button {
            background-color: #D0D3D4;
            border: 0;
            border-radius: 5px;
            box-shadow: 0 0 10px 0px #707B7C;
        }

        img {
            width: 100px;
            height: 80px;
            margin: 5px 0;
        }

        .footer {
            position: absolute;
            bottom: 0px;
        }
    </style>
@endsection

@section('main')
    <div class="container-lg">
        <h2>維修記錄</h2>
        <div class="name d-flex mb-3">
            <span>維修人員 :</span>
            <input type="text">
        </div>
        <div class="type d-flex mb-3">
            <span>維修項目 :</span>
            <input type="text">
        </div>
        <div class="type d-flex mb-3">
            <span>維修前的照片 :</span>
            <button class="button ml-3" style="width: 205px; height:30px;">
                <i class="bi bi-upload"></i>上傳照片
            </button>
        </div>
        <div class="img-section1 d-flex flex-wrap justify-content-between">
            <a href="{{asset('images/image-1.jpg')}}" data-lightbox="roadtrip" data-title="">
                <img src="{{asset('images/image-1.jpg')}}" alt="">        
            </a>
            <a href="{{asset('images/image-1.jpg')}}" data-lightbox="roadtrip" data-title="">
                <img src="{{asset('images/image-1.jpg')}}" alt="">        
            </a>
            <a href="{{asset('images/image-1.jpg')}}" data-lightbox="roadtrip" data-title="">
                <img src="{{asset('images/image-1.jpg')}}" alt="">        
            </a>
            <a href="{{asset('images/image-1.jpg')}}" data-lightbox="roadtrip" data-title="">
                <img src="{{asset('images/image-1.jpg')}}" alt="">        
            </a>
            <a href="{{asset('images/image-1.jpg')}}" data-lightbox="roadtrip" data-title="">
                <img src="{{asset('images/image-1.jpg')}}" alt="">        
            </a>
            <a href="{{asset('images/image-1.jpg')}}" data-lightbox="roadtrip" data-title="">
                <img src="{{asset('images/image-1.jpg')}}" alt="">        
            </a>
        </div>
        <div class="type d-flex mb-3 mt-3">
            <span>維修後的照片 :</span>
            <button class="button ml-3" style="width: 205px; height:30px;">
                <i class="bi bi-upload"></i>上傳照片
            </button>
        </div>
        <div class="img-section2 d-flex flex-wrap justify-content-between">
            <a href="{{asset('images/image-1.jpg')}}" data-lightbox="roadtrip2" data-title="">
                <img src="{{asset('images/image-1.jpg')}}" alt="">        
            </a>
            <a href="{{asset('images/image-1.jpg')}}" data-lightbox="roadtrip2" data-title="">
                <img src="{{asset('images/image-1.jpg')}}" alt="">        
            </a>
            <a href="{{asset('images/image-1.jpg')}}" data-lightbox="roadtrip2" data-title="">
                <img src="{{asset('images/image-1.jpg')}}" alt="">        
            </a>
            <a href="{{asset('images/image-1.jpg')}}" data-lightbox="roadtrip2" data-title="">
                <img src="{{asset('images/image-1.jpg')}}" alt="">        
            </a>
            <a href="{{asset('images/image-1.jpg')}}" data-lightbox="roadtrip2" data-title="">
                <img src="{{asset('images/image-1.jpg')}}" alt="">        
            </a>
            <a href="{{asset('images/image-1.jpg')}}" data-lightbox="roadtrip2" data-title="">
                <img src="{{asset('images/image-1.jpg')}}" alt="">        
            </a>
        </div>
        <div class="d-flex justify-content-between">
            <div class="store d-flex justify-content-between" style="width: 150px;height: 30px;background-color: #EAECEE;border-radius: 5px;">
                <span style="line-height: 30px">刪除</span>
                <a href="#"><i class="bi bi-x" style="font-size:20px"></i></a>
            </div>
            <div class="store d-flex justify-content-between" style="width: 150px;height: 30px;background-color: #EAECEE;border-radius: 5px;">
                <span style="line-height: 30px">儲存</span>
                <a href="#"><i class="bi bi-file-earmark-plus" style="font-size:20px"></i></a>
            </div>
        </div>
    </div>
    <footer>
        <div class="footer" style="width: 100%; height: 58px;background-color: #EAECEE ;"></div>
    </footer>
@endsection

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js" integrity="sha512-k2GFCTbp9rQU412BStrcD/rlwv1PYec9SNrkbQlo6RZCf75l6KcC3UwDY8H5n5hl4v77IDtIPwOk9Dqjs/mMBQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    {{-- <script src="path/to/lightbox.js"></script> --}}
    <script>
        lightbox.option({
            'resizeDuration': 200,
            'wrapAround': true
        })
    </script>
@endsection