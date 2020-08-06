@extends('layouts.mainLayout')

@section('title')
メインメニュー
@endsection

@section('content')
コンテンツ表示テスト<br>
ID:{{$testData[0]->id}}<br>
name:{{$testData[0]->name}}<br>
data:{{$testData[0]->data}}<br>
@endsection

@section('pageScript')
@endsection
