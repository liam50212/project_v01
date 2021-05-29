@extends('layouts.app')

@section('css')
    <style>
        button {
            background-color: #EAECEE ;
            border: 0;
            border-radius: 10px;
        }

        span {
            text-align: center;
            line-height: 40px;
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
        <a href="/guest/07">
            <button class="mr-3" style="width: 100%; height: 40px;margin-top: 50%;">
                <span style="font-size:30px">+</span>
                <span style="font-size:20px">新增維修記錄</span>
            </button>
        </a>
    </div>
    <footer>
        <div class="footer" style="width: 100%; height: 58px;background-color: #EAECEE ;"></div>
    </footer>
@endsection

@section('js')
    
@endsection