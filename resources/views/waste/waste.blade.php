@extends('layout.common')
@section('title', '不良品登録画面')

@section('content')
<div class="main_content">
        
        <h1 id="title">不良品登録画面</h1>
        <table>
            <tbody>
                <tr>
                    <th colspan="2">不良品情報</th>
                </tr>
                <tr>
                <th class="left">商品コード</th>
                <td></td>
                </tr>
                　<tr>
                    <th class="left">商品名</th>
                    <td><input type="text" name="" size="40" maxlength="40" value="" placeholder="商品名"></td>
                </tr>
                　<tr>
                    <th class="left">数量</th>
                    <td><input type="number" name="" size="3" maxlength="3" value=""></td>
                </tr>
                　<tr>
                    <th class="left">廃棄予定日</th>
                    <td><input type="date" name="date" value="2018-01-01"></td>
                </tr>
                　<tr>
                    <th class="left">廃棄理由</th>
                    <td><input type="text" name="" size="40" maxlength="40" value="" placeholder="廃棄理由"></td>
                </tr>
                　<tr>
                    <th class="left">廃棄理由詳細</th>
                    <td><input type="text" name="" size="40" maxlength="200" value="" placeholder="廃棄理由詳細"></td>
                </tr>
                <tr>
                    <th class="left">最終更新者</th>
                    <td><input type="text" name="" size="40" maxlength="40" value="" placeholder="OIC 太郎"></td>
                </tr>
                <tr>
                    <th class="left">最終更新日</th>
                    <td><input type="date" name="date" value="2018-01-01"></td>
                </tr>
            </tbody>
        </table>
        <div align="right">
        <a href="#" class="square_btn">
          <i class="fa fa-caret-right"></i>登録</a>
        <a href="#" class="reseto_btn">
          <i class="fa fa-caret-right"></i>リセット</a> 
        <a href="#" class="update_btn">
          <i class="fa fa-caret-right"></i>更新</a>
        <a href="#" class="delete_btn">
          <i class="fa fa-caret-right"></i>削除</a>
        </div>
    </div>
@endsection