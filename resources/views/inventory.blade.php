@extends('layout.common')
@section('title', '棚卸管理')

@section('content')
<div class="main_content">
        
        <h1 id="title">棚卸管理画面</h1>
        <table>
          <tbody>
          <tr>
            <th colspan="2">棚卸情報</th>
          </tr>
          <tr>
          <th class="left">商品コード</th>
          <td></td>
          </tr>
         <tr>
            <th class="left">商品名</th>
            <td><input type="text" name="" size="40" maxlength="40" value="" placeholder="OIC 太郎"></td>
          </tr>
         <tr>
            <th class="left">論理在庫数量</th>
            <td>X個</td>
          </tr>
         <tr>
            <th class="left">実棚卸数量</th>
            <td><input type="number" name="" size="3" maxlength="3" value=""></td>
          </tr>
         <tr>
            <th class="left">差異（出庫）数量</th>
            <td>X個</td>
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