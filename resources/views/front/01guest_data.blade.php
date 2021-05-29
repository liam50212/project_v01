@extends('layouts.app')

@section('css')
    <style>
        input {
            width:280px;
            height: 25px;
            background-color: #EAECEE ;
            border: 0;
            border-radius: 5px;
            margin-left: 15px;
        }

        span {
            font-size: 18px;
        }

        button {
            background-color: #EAECEE ;
            border: 0;
            border-radius: 10px;
        }

        .footer {
            position: absolute;
            bottom: 0px;
        }
    </style>
@endsection

@section('main')
    <div class="container-lg">
        <h2>客戶資料</h2>
        <div class="name d-flex mb-3">
            <span>姓名 :</span>
            <input type="text">
        </div>
        <div class="tel d-flex mb-3">
            <span>電話 :</span>
            <input type="text">
        </div>
        <div class="mail d-flex mb-3">
            <span>信箱 :</span>
            <input type="text">
        </div>
        <div class="line d-flex mb-3">
            <span>LINE :</span>
            <input type="text" style="width: 278px;">
        </div>
        <div class="add d-flex mb-3">
            <span>地址 :</span>
            <input type="text">
        </div>
        <input class="mb-3" type="text" style="width: 98.5%; margin:0px;">
        <div class="purchase d-flex mb-3">
            <span>購買數量 :</span>
            <input type="text" style="width: 71%;">
        </div>
        <div class="date d-flex mb-3">
            <span>提醒日期 :</span>
            <input type="text" style="width: 71%;">
        </div>
        <div class="remark d-flex mb-3">
            <span class="mr-5">備註 :</span>
            <input type="text" style="width: 72%; height: 70px; padding:0;margin:0px;">
        </div>
        <div>
            <a href="/guest/02"><button class="mr-3" style="width: 100px; height: 38px;">安裝記錄</button></a>
            <a href="/guest/06"><button class="mr-3" style="width: 100px; height: 38px;">維修紀錄</button></a>
            <a href="/guest/10"><button class="mb-3" style="width: 100px; height: 38px;">購買紀錄</button></a>
        </div>   
    </div>
    <footer>
        <div class="footer" style="width: 100%; height: 58px;background-color: #EAECEE ;"></div>
    </footer>

@endsection

@section('js')
    
@endsection