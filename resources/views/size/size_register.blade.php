@extends('layout.common')
@section('title', 'サイズマスター登録画面')
@section('header_title', 'サイズマスタ登録画面')

@section('content')
<div class="content_wrapper">
<form action='/size/store' method='post'>
	<?= csrf_field()?>
        <table class="table-bordered">
            <tr>
                <th colspan="4" class="table-header">サイズ情報</th>
            </tr>
            <tr>
                <th>性別</th>
                <td>
                    <select class="form-control select2" name="gender">
                        <option value="">--</option>
                        <option value="0">メンズ</option>
                        <option value="1">レディース</option>
                        <option value="2">ユニセックス</option>
                    </select>
                </td>
                <th>サイズ名</th>
                <td><input class="form-control" type="text" name="print_size" size="" maxlength="20" value="" placeholder="サイズ"></td>
            </tr>
            <!-- <tr>
                <th>最終更新者</th>
                <td><input class="form-control" type="text" name="" maxlength="40" value="1" placeholder="OIC 太郎" readonly="readonly"></td>
                <th>最終更新日</th>
                <td><input class="form-control" type="date" name="date" value="" readonly="readonly"></td>
            </tr> -->
        </table>
        <div class="controll_buttons overflow_btn">
            <a class="btn btn-dark" href="/size_search">戻る</a>
            <input class="btn btn-success" type="submit" value="サイズ登録">
        </div>
    </form>
</div>
@endsection