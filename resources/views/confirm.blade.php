@extends('layouts.default')
<style>



</style>
@section('title','内容確認')

@section('content')
<form action="/" method="post">
  @csrf
  <label for="full-name">お名前</label>
  <p><?php echo $_POST["family-name"] . $_POST["given-name"]; ?></p>
  <br>

  <label for="gender">性別</label>
  <p><?php echo $_POST["gender"] ?></p>

  <br>
  <label for="email">メールアドレス</label>
  <p><?php echo $_POST["mail"] ?></p>

  <br>
  <label for="postcode">郵便番号</label>
  <p><?php echo $_POST["postcode"] ?></p>

  <br>
  <label for="address">住所</label>
  <p><?php echo $_POST["address"] ?></p>
  <br>


  <label for="building_name">建物名</label>
  <p><?php echo $_POST["building_name"] ?></p>
  <br>


  <label for="opinion">ご意見</label>
  <p><?php echo $_POST["textarea"] ?></p>

  <br>
  <input type="submit" value="送信">
    <br>

    <a href="/">修正する</a>
</form>


@endsection