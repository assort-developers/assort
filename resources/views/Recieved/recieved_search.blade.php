@extends('layout.common')
@section('title', '注文確認画面')

@section('content')
    <div class="main_content">
        <h1 id="title">注文確認画面</h1>

        <table>
            <tbody>
            <tr>
                <th colspan="2">注文内容</th>
                <td><input class="form-control" type="text" name="" size="50" maxlength="50" value="" placeholder="注文内容"></td>
            </tr>
            <tr>
                <th class="left">注文番号</th>
                <td></td>
            </tr>
            <tr>
                <th class="left">注文日</th>
                <td><input type="date" name="date" value="2018-01-01"></td>
            </tr>
            　<tr>
                <th class="left">注文者</th>
                <td><input class="form-control" type="text" name="" size="40" maxlength="40" value="" placeholder="OIC 太郎"></td>
            </tr>
            　<tr>
                <th class="left">発送日</th>
                <td><input type="date" name="date" value="2018-01-01"></td>
            </tr>
            　<tr>
                <th class="left">お届け先</th>
                <td><input type="text" name="" size="40" maxlength="40" value="市区町村"><br>
                <input type="text" name="" size="40" maxlength="40" value="番地建物名"><br>
                </td>

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
                <td>
                    <select name="payment">
                        <option value="">クレジットカード</option>
                        <option value="">口座</option>
                        <option value="">後払い</option>
                        <option value="">銀行振込</option>
                        <option value="">新しい支払方法(ディビットカード等)</option>
                        <option value="">後払い</option>
                    </select>
                </td>
            </tr>
            　<tr>
                <th class="left">支払い金額</th>
                <td><input type="text" name="name" size="11" maxlength="7"></td>
            </tr>
            <tr>
                <th class="left">更新者</th>
                <td><input type="text" name="" size="40" maxlength="40" value="" placeholder="OIC 太郎"></td>
            </tr>
            <tr>
                <th class="left">更新日</th>
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