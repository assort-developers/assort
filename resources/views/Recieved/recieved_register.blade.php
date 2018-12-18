@extends('layout.common')
@section('title', '受注登録画面')
@section('header_title', '受注登録画面')

@section('content')
    <div class="content_wrapper">
        <form action="/recieved_store">
        <table class="table-bordered">
            <tbody>
            <tr>
                <th colspan='4'>受注情報</th>
            </tr>
            <tr>
                <th>受注コード</th>
                <td>
                    <input class="form-control" type="text" name="recieved_code">
                </td>
                <th class="left">受注者</th>
                <td><input class="form-control" type="text" name="staff_name" size="40" maxlength="40" value=""></td>
            </tr>

            <tr>
                <th class="left">注文日</th>
                <td><input class="form-control" type="date" name="order_date" value="2018-01-01"></td>
                <th class="left">発送日</th>
                <td><input class="form-control" type="date" name="shipment_date" value="2018-01-01"></td>
            </tr>
            <tr>
                <th class="left">郵便番号</th>
                <td class="row">
                    <div class="col-xs-2">
                        <input class="form-control" type="tel" name="address_code1" size="3" maxlength="3" value="">
                    </div>
                    <div class="hyphen">-</div>
                    <div class="col-xs-2">
                        <input class="form-control" type="tel" name="address_code2" size="4" maxlength="4"value="">
                    </div>
                </td>
            </tr>
            <tr>
                <th class="left">メールアドレス</th>
                <td><input class="form-control" type="email" name="mail" size="20" maxlength="40" value="" required></td>
                <th class="left">電話番号</th>
                <td class="row">
                    <div class="col-xs-3"><input class="form-control" type="tel1" name="" size="4" maxlength="4" value=""></div><div class="hyphen">-</div>
                    <div class="col-xs-3"><input class="form-control" type="tel2" name="" size="4" maxlength="4" value=""></div><div class="hyphen">-</div>
                    <div class="col-xs-3"><input class="form-control" type="tel3" name="" size="4" maxlength="4" value=""></div>
                </td>
            </tr>
            <tr>
                <th class="left">都道府県</th>
                <td>
                    <select class="form-control" name="ken">
                        <option value="">北海道</option>
                        <option value="">東京</option>
                        <option value="">大阪</option>
                        <option value="">沖縄</option>
                    </select>
                <th class="left">市区町村</th>
                <td><input class="form-control" type="text" name="town" value=""></td>
            </tr>
            <tr>
                <th class="left">番地</th>
                <td><input class="form-control" type="text" name="number" value=""></td>
                <th class="left">建物名</th>
                <td><input class="form-control" type="text" name="builld" value=""></td>
            </tr>
            <tr>
            <th class="left">支払い金額</th>
            <td><input class="form-control" type="number" name="price" value=""></td>
                <th class="left">支払い方法</th>
                <td>
                    <select class="form-control" name="pay">
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
                <th class="left">更新者</th>
                <td>取得したみ</td>
                <th class="left">更新日</th>
                <td>取得したいなぁ</td>
            </tr>
            </tbody>
        </table>
            <div class="controll_buttons overflow_btn">
                <a class="btn btn-dark" href="/recieved_search">戻る</a>
                <input class="btn btn-success" type="submit" value="受注登録">
            </div>
        </form>
        </div>
    </div>
@endsection