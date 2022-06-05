@extends('layouts.default')

@section('title', '内容確認')

@section('content')


<form action="/thanks" method="post">
  @csrf
  <div class="contact_form">
    <label for="name1">お名前</label><?php echo $_POST["family-name"] . $_POST["given-name"]; ?>
    <br>
    <label for="gender">性別</label><?php echo $_POST["gender"] ?>
    <br>
    <label for="email">メールアドレス</label><?php echo $_POST["mail"] ?>
    <br>
    <label for="postcode">郵便番号</label>〒<?php echo $_POST["postcode"] ?>
    <br>
    <label for="address">住所</label><?php echo $_POST["address"] ?>
    <br>
    <label for="building_name">建物名</label><?php echo $_POST["building_name"] ?>
    <br>
    <label for="opinion">ご意見</label><?php echo $_POST["textarea"] ?>
    <br>
    <input type="submit" value="送信" class="button"></a>
    <br>

    <a href=" /">修正する</a>
</form>
@endsection