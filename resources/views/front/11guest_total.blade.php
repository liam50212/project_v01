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

        li {
            margin: 2px;
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
        <div class="d-flex">
            <div class="name mb-2" style="width: 130px;height: 25px;border: 1px solid black;border-radius: 5px;font-size:20px;line-height: 25px;text-align: center;">
                <span>姓名排序
                    <i class="bi bi-arrow-down-up"></i>
                </span>
            </div>
            <div class="display-data d-flex mb-4" style="margin-left: 100px">
                <div class="dropdown d-flex align-items-center">
                    <select class="ml-2;" style="width: 120px;height:25px;border:1px solid black;position: relative;border-radius: 5px;background-color: white;">
                        <i class="bi bi-chevron-down ;" style="top:2px;right:10px;position: absolute;"></i>
                        <option selected>顯示100筆</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="section mb-2 px-2 d-flex justify-content-center align-items-center justify-content-between" style="width: 100%;height: 50px;background-color:#EAECEE ;border-radius: 5px;">
            <span>姓名 : 陳先生</span>
            <span>連絡電話 : 0912345678</span>
        </div>
        <div class="section mb-2 px-2 d-flex justify-content-center align-items-center justify-content-between" style="width: 100%;height: 50px;background-color:#EAECEE ;border-radius: 5px;">
            <span>姓名 : 陳先生</span>
            <span>連絡電話 : 0912345678</span>
        </div>
        <div class="section mb-2 px-2 d-flex justify-content-center align-items-center justify-content-between" style="width: 100%;height: 50px;background-color:#EAECEE ;border-radius: 5px;">
            <span>姓名 : 陳先生</span>
            <span>連絡電話 : 0912345678</span>
        </div>
        <div class="section mb-2 px-2 d-flex justify-content-center align-items-center justify-content-between" style="width: 100%;height: 50px;background-color:#EAECEE ;border-radius: 5px;">
            <span>姓名 : 陳先生</span>
            <span>連絡電話 : 0912345678</span>
        </div>
        <div class="section mb-2 px-2 d-flex justify-content-center align-items-center justify-content-between" style="width: 100%;height: 50px;background-color:#EAECEE ;border-radius: 5px;">
            <span>姓名 : 陳先生</span>
            <span>連絡電話 : 0912345678</span>
        </div>
        <div class="section mb-2 px-2 d-flex justify-content-center align-items-center justify-content-between" style="width: 100%;height: 50px;background-color:#EAECEE ;border-radius: 5px;">
            <span>姓名 : 陳先生</span>
            <span>連絡電話 : 0912345678</span>
        </div>
        <div class="section mb-2 px-2 d-flex justify-content-center align-items-center justify-content-between" style="width: 100%;height: 50px;background-color:#EAECEE ;border-radius: 5px;">
            <span>姓名 : 陳先生</span>
            <span>連絡電話 : 0912345678</span>
        </div>
        <div class="section mb-2 px-2 d-flex justify-content-center align-items-center justify-content-between" style="width: 100%;height: 50px;background-color:#EAECEE ;border-radius: 5px;">
            <span>姓名 : 陳先生</span>
            <span>連絡電話 : 0912345678</span>
        </div>
        <div class="section mb-2 px-2 d-flex justify-content-center align-items-center justify-content-between" style="width: 100%;height: 50px;background-color:#EAECEE ;border-radius: 5px;">
            <span>姓名 : 陳先生</span>
            <span>連絡電話 : 0912345678</span>
        </div>
        <div class="section mb-2 px-2 d-flex justify-content-center align-items-center justify-content-between" style="width: 100%;height: 50px;background-color:#EAECEE ;border-radius: 5px;">
            <span>姓名 : 陳先生</span>
            <span>連絡電話 : 0912345678</span>
        </div>
        <div class="section mb-2 px-2 d-flex justify-content-center align-items-center justify-content-between" style="width: 100%;height: 50px;background-color:#EAECEE ;border-radius: 5px;">
            <span>姓名 : 陳先生</span>
            <span>連絡電話 : 0912345678</span>
        </div>
        <div class="section mb-2 px-2 d-flex justify-content-center align-items-center justify-content-between" style="width: 100%;height: 50px;background-color:#EAECEE ;border-radius: 5px;">
            <span>姓名 : 陳先生</span>
            <span>連絡電話 : 0912345678</span>
        </div>
        
    </div>
    <div class="create-data">
        <a href="#">
            <button class="mr-3" style="width: 100%; height: 40px;border:0;line-height: 40px;position: absolute;bottom: 40px;">
                <span style="font-size:30px">+</span>
                <span style="font-size:20px">新增客戶資料</span>
            </button>
        </a>
    </div>
    <div class="page d-flex justify-content-between" style="width: 100%; height: 40px;position: absolute;bottom: 0;background-color: white;">
        <a href="#"><button class="" style="width: 100px; height: 30px;border-radius: 10px;margin:5px;">上一頁</button></a>
        <ul class="pagination" style="font-size: 20px;line-height: 40px;">
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#">6</a></li>...
            <li><a href="#">10</a></li>
        </ul>
        <a href="#"><button class="" style="width: 100px; height: 30px;border-radius: 10px;margin:5px;">下一頁</button></a>
    </div>
@endsection

@section('js')
    
@endsection