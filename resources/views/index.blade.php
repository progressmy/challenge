@extends('layouts.default')
<style>
  .badge {
    color: red;
  }
</style>
@section('title', 'お問い合わせ')

@section('content')
<form action="/" method="post">
  @csrf
  <label for="name1">お名前<span class="badge bg-danger">※</span></label>
  <input type="text" name="family-name" size="25" autocomplete="family-name" />
  <input type="text" name="given-name" size="25" autocomplete="given-name" />
  <br>
  <p class="exam1">例）山田 例）太郎</p>
  <br>
  <label for="gender">性別<span class="badge bg-danger">※</span></label>
  <input type="radio" name="gender" value="male" checked>男性
  <input type="radio" name="gender" value="female">女性
  <br>
  <label for="email">メールアドレス<span class="badge bg-danger">※</span></label>
  <input type="text" name="mail" size="50">
  <br>
  <p class="exam2">test@example.com</p>
  <br>
  <label for="postcode">郵便番号<span class="badge bg-danger">※</span></label>
  〒<input type="text" name="postcode" pattern="\d{3}-?\d{4}" size="45">
  <br>
  <p class="exam3">例）123-4567</p>
  <br>
  <label for="address">住所<span class="badge bg-danger">※</span></label>
  <input type="text" name="address" size="50">
  <br>
  <p class="exam4">例）東京都渋谷区千駄ヶ谷1-2-3</p>
  <br>
  <label for="building_name">建物名</label>
  <input type="text" name="building_name" size="50">
  <br>
  <p class="exam5">例）千駄ヶ谷マンション101</p>
  <br>
  <label for="opinion">ご意見<span class="badge bg-danger">※</span></label>
  <textarea name="textarea" cols="50" rows="3"></textarea>
<br>
  <input type="submit" value="確認">
</form>
@endsection