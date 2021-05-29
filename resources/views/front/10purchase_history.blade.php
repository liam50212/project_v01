@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <style>
        input {
            width:200px;
            height: 25px;
            border: 1px solid black;
            border-radius: 5px;
            margin-left: 15px;
            position: relative;
        }

        .bi-search {
            width: 50px;
            height: 50px;
            top:85px;
            left: 170px;
            position: absolute;
            
        }
    </style>
@endsection

@section('main')
    <div class="container-lg">
        <div class="history d-flex justify-content-center align-items-center justify-content-between mb-2">
            <h2 style="margin:0">購買記錄</h2>
            <input type="search" placeholder="        Search">
            <i class="bi bi-search"></i>
        </div>
        <div class="date mb-2" style="width: 130px;height: 25px;border: 1px solid black;border-radius: 5px;font-size:20px;line-height: 25px;text-align: center;">
            <span>日期排序
                <i class="bi bi-arrow-down-up"></i>
            </span>
        </div>
        <div class="brand d-flex mb-2">
            <span style="font-size: 20px">品牌 :</span>
            <div class="dropdown d-flex align-items-center">
                <button class="btn ml-2 ;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="width: 286px;height:25px;background-color: #EAECEE ;position: relative;">
                    <i class="bi bi-chevron-down ;" style="top:2px;right:10px;position: absolute;"></i>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="width: 280px;height:auto;">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </div>
        </div>
        <div class="type d-flex mb-2">
            <span style="font-size: 20px">型號 :</span>
            <div class="dropdown d-flex align-items-center">
                <button class="btn ml-2 ;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="width: 286px;height:25px;background-color: #EAECEE ;position: relative;">
                    <i class="bi bi-chevron-down ;" style="top:2px;right:10px;position: absolute;"></i>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="width: 280px;height:auto;">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </div>
        </div>
        <div class="section py-2" style="width: 100%;height:150px;background-color:#D5D8DC;border-radius: 5px;">
            <div class="data d-flex justify-content-center align-items-center">
                <span style="font-size: 20px;line-height: 40px;">品牌 :</span>
                <div class="brand-data" style="width: 270px;height:25px;background-color: #EAECEE ;margin-left: 15px;border-radius: 5px;"></div>
            </div>
            <div class="data d-flex justify-content-center align-items-center">
                <span style="font-size: 20px;line-height: 40px;">型號 :</span>
                <div class="type-data" style="width: 270px;height:25px;background-color: #EAECEE ;margin-left: 15px;border-radius: 5px;"></div>
            </div>
            <div class="d-flex flex-wrap mt-2">
                <span class="ml-2 mr-5">購買日期 : 2021-05-13</span>
                <span class="mb-2">數量 : 1/台</span>
                <span class="ml-2">金額 : $99.999</span>
            </div>
        </div>
    </div>
    {{-- <footer>
        <div class="footer" style="width: 100%; height: 58px;background-color: #EAECEE ;"></div>
    </footer> --}}
@endsection

@section('js')
    
@endsection