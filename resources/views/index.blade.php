@extends('layouts.default')

@section('title', 'お問い合わせ')

@section('content')
<p>{{$txt}}</p>
@if (count($errors) > 0)
<ul>
  @foreach ($errors->all() as $error)
  <li>{{$error}}</li>
  @endforeach
</ul>
@endif
<form action="/confirm" method="post">

@csrf
  <div class="contact_form">
    <label for="name1">お名前<span class="badge bg-danger">※</span></label>
    <input type="text1" name="family-name" autocomplete="family-name" />
    <input type="text2" name="given-name" autocomplete="given-name" />
    <br>
    <div class="exam_name">
      <p class="exam8">例) 山田</p>
      <p class="exam9">例) 太郎</p>
    </div>
    <label for="gender">性別<span class="badge bg-danger">※</span></label>
    <input type="radio" name="gender" value="男性" checked>男性
    <input type="radio" name="gender" value="女性">女性
    <br>
    <label for="email">メールアドレス<span class="badge bg-danger">※</span></label>
    <input type="text3" name="mail">
    <br>
    <p class="exam2">例) test@example.com</p>
    <br>
    <label for="postcode">郵便番号<span class="badge bg-danger">※</span></label>
    〒<input type="text4" name="postcode" max-length="8" onKeyUp="AjaxZip3.zip2addr(this,'','address','address');" pattern="\d{3}[-]\d{4}">
    <br>
    <p class="exam3">例）123-4567</p>
    <br>
    <label for="address">住所<span class="badge bg-danger">※</span></label>
    <input type="text5" name="address" size="50">
    <br>
    <p class="exam4">例）東京都渋谷区千駄ヶ谷1-2-3</p>
    <br>
    <label for="building_name">建物名</label>
    <input type="text6" name="building_name">
    <br>
    <p class="exam5">例）千駄ヶ谷マンション101</p>
    <br>
    <label for="opinion">ご意見<span class="badge bg-danger">※</span></label>
    <textarea name="textarea" cols="71" rows="5" maxlength="120"></textarea>
    <br>
    <input type="submit" value="確認" class="button">
  </div>
</form>
@endsection