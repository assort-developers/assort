@extends('layout.common')
@section('title', '注文確認画面')
@section('header_title', '注文確認画面')

@section('content')
    <div class="content_wrapper">
        <table class="table-bordered">
            <tbody>
            <tr>
                <th colspan="4">注文情報</th>
            </tr>
            <tr>
                <th>注文コード</th>
                <td>
                    <div class="search_box"><input class="form-control" type="text" name="recieved_code"></div>
                    <div class="search_button"><button class="btn btn-dark">検索</button></div>
                </td>
            </tr>
            <tr>
                <th class="left">注文日</th>
                <td><input class="form-control" type="date" name="date" value="2018-01-01"></td>
            </tr>
            <tr>
                <th class="left">注文者</th>
                <td><input class="form-control" type="text" name="" size="40" maxlength="40" value="" placeholder="OIC 太郎"></td>
            </tr>
            <tr>
                <th class="left">発送日</th>
                <td><input class="form-control" type="date" name="date" value="2018-01-01"></td>
            </tr>
            <tr>
                <th class="left">お届け先</th>
                <td><input class="form-control" type="text" name="" size="40" maxlength="40" value=""placeholder="市区町村"><br>
                <input class="form-control " type="text" name="" size="40" maxlength="40" value=""placeholder="番地建物名"><br>
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
                    <select class="form-control" name="payment">
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
                <td>

                </td>
            </tr>
            <tr>
                <th class="left">更新者</th>
                <td><input type="text" name="" size="40" maxlength="40" value="" placeholder="OIC 太郎"></td>
            </tr>
            <tr>
                <th class="left">更新日</th>
                <td><input class="form-control" type="date" name="date" value="2018-01-01"></td>
            </tr>
            </tbody>
        </table>
        </div>
    </div>
@endsection