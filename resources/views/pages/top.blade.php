@extends('layouts.mainLayout')

@section('title')
メインメニュー
@endsection

@section('pageCss')
<link rel="stylesheet" href="{{asset('/css/top.css')}}">
@endsection

@section('content')
<div class="user_info">
    <label>{{$userData->sei}} {{$userData->mei}}さんこんにちは</label><br>
    @if($rirekiData === null)
	<label>受験履歴はありません。</label><br>
	@else
	<!-- 受験履歴があった時の処理 -->
	@endif
</div>

<div class="manage_info">

</div>
@endsection

@section('pageScript')
@endsection
