@extends('layout.common')
@section('title', '注文確認画面')

@section('content')
    <div class="main_content">
        <h1 id="title">注文確認画面</h1>

        <table>
            <tbody>
            <tr>
                <th colspan="2">注文内容</th>

            </tr>
            <tr>
                <th class="left">注文番号</th>


                <td></td>
            </tr>
            <tr>
                <th class="left">注文日</th>
                <td></td>
            </tr>
            <tr>
                <th class="left">注文者</th>
                <td><input class="form-control" type="text" name="" size="40" maxlength="40" value="" placeholder="OIC 太郎"></td>
            </tr>
            <tr>
                <th class="left">発送日</th>
                <td></td>
            </tr>
            <tr>
                <th class="left">お届け先</th>
                <td></td>
            </tr>
            <tr>
                <th class="left">電話番号</th>
                <td class="row">
                    <div class="col-xs-3"><input class="form-control" type="tel" name="" size="4" maxlength="4" value="" placeholder="0000"></div><div class="hyphen">-</div>
                    <div class="col-xs-3"><input class="form-control" type="tel" name="" size="4" maxlength="4" value="" placeholder="1111"></div><div class="hyphen">-</div>
                    <div class="col-xs-3"><input class="form-control" type="tel" name="" size="4" maxlength="4" value="" placeholder="2222"></div>
                </td>
            </tr>
            <tr>
                <th class="left">支払い方法</th>
                <td></td>
            </tr>
            <tr>
                <th class="left">支払い金額</th>
                <td></td>
            </tr>
            <tr>
                <th class="left">更新者</th>
                <td></td>
            </tr>
            <tr>
                <th class="left">更新日</th>
                <td></td>
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