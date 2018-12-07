@extends('layout.common')
@section('title', '受注管理画面')
@section('header_title', '受注管理画面')

@section('content')
    <div class="content_wrapper">
        <form>
        <table class="table-bordered">
            <tbody>
            <tr>
                <th colspan="4">受注情報</th>
            </tr>
            <tr>
                <th>受注コード</th>
                <td>
                    <input class="form-control" type="text" name="recieved_code">
                </td>
                <th class="left">受注者</th>
                <td><input class="form-control" type="text" name="" size="40" maxlength="40" value=""></td>
            </tr>
            </tbody>
        </table>
        <div class="controll_buttons overflow_btn">
            <a class="btn btn-dark" href="/recived/create">受注登録</a>
            <input class="btn btn-success" type="submit" value="受注検索">
            </div>
        </form>
        <table class="table-bordered">
            <tbody>
            <tr>
                <th colspan="9">検索結果</th>
            </tr>
            <tr>
                <th>受注コード</th>
                <th>受注者</th>
                <th>都道府県</th>
                <th>電話番号</th>
                <th>最終更新者</th>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            </tbody>
        </table>
        </div>
    </div>
@endsection