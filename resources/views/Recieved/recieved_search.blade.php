@extends('layout.common')
@section('title', '受注管理画面')
@section('header_title', '受注管理画面')

@section('content')
    <div class="content_wrapper">
        <form action="/recieved_search">
        <table class="table-bordered">
            <tbody>
            <tr>
                <th colspan="4">受注情報</th>
            </tr>
            <tr>
                <th>受注コード</th>
                <td>
                    <input class="form-control" type="text" name="recieved_code" autofocus>
                </td>
                <th class="left">受注者</th>
                <td><input class="form-control" type="text" name="staff_name" size="40" maxlength="40"></td>
            </tr>
            </tbody>
        </table>
        <div class="controll_buttons overflow_btn">
            <a class="btn btn-dark" href="/recieved/create">受注登録</a>
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
                <th>電話番号</th>
                <th>最終更新者</th>
                <th>最終更新日</th>
                <th colspan="3">詳細</th>
            </tr>
            <?php foreach($recieved as $recieved):?>
            <tr>
                <td>{{$recieved->code}}</td>
                <td>{{$recieved->staff_name}}</td>
                <td>{{$recieved->tel}}</td>
                <td>{{$recieved->update_day}}</td>
                <td>最終更新者</td>
                <td colspan="3"><a class="btn btn-success" href="/recieved/show/{{$recieved->id}}">詳細</a></td>
            </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        </div>
    </div>
@endsection