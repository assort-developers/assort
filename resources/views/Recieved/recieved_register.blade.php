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
                    <input class="form-control" type="text" name="code" required>
                </td>
                <th class="left">受注者</th>
                <td><input class="form-control" type="text" name="staff_name" size="40" maxlength="40" value required></td>
            </tr>

            <tr>
                <th class="left">注文日</th>
                <td><input class="form-control" type="date" name="order_day" value="2018-01-01" required></td>
                <th class="left">発送日</th>
                <td><input class="form-control" type="date" name="shipment_day" value="2018-01-01" required></td>
            </tr>
            <tr>
                <th class="left">郵便番号</th>
                <td class="row">
                    <div class="col-xs-2">
                        <input class="form-control" type="tel" name="address_code1" size="3" maxlength="3" value required>
                    </div>
                    <div class="hyphen">-</div>
                    <div class="col-xs-2">
                        <input class="form-control" type="tel" name="address_code2" size="4" maxlength="4"value required>
                    </div>
                </td>
                <th class="left">電話番号</th>
                <td class="row">
                    <div class="col-xs-3"><input class="form-control" type="tel" name="tel1" size="4" minlength="3" maxlength="3" value required></div><div class="hyphen">-</div>
                    <div class="col-xs-3"><input class="form-control" type="tel" name="tel2" size="4" minlength="3" maxlength="3" value required></div><div class="hyphen">-</div>
                    <div class="col-xs-3"><input class="form-control" type="tel" name="tel3" size="4" minlength="4" maxlength="4" value required></div>
                </td>
            </tr>
            <tr>
                <th class="left">メールアドレス</th>
                <td><input class="form-control" type="email" name="mail" size="20" maxlength="40" value="" required></td>
                <th class="left">都道府県</th>
                <td>
                    <select class="form-control" name="ken">
                        @foreach(config('pref') as $index => $name)
                            <option value="{{$name}}">{{$name}}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <th class="left">市区町村</th>
                <td><input class="form-control" type="text" name="town" value required></td>
                <th class="left">番地</th>
                <td><input class="form-control" type="text" name="number" value required></td>
            </tr>
            <tr>
                <th class="left">建物名</th>
                <td><input class="form-control" type="text" name="builld" value required></td>
                <th class="left">支払い金額</th>
                <td><input class="form-control" type="number" name="price" value required></td>
            </tr>
            <tr>
                <th class="left">支払い方法</th>
                <td>
                    <select class="form-control" name="pay">
                        <option value="1">クレジットカード</option>
                        <option value="2">口座</option>
                        <option value="3">後払い</option>
                        <option value="4">銀行振込</option>
                        <option value="5">新しい支払方法(ディビットカード等)</option>
                        <option value="6">後払い</option>
                    </select>
                </td>
                <th class="left">更新者</th>
                <td>取得したみ</td>
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