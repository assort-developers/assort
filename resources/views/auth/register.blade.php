@extends('layout.common')
@section('title', 'ユーザー登録画面')
@section('header_title', 'ユーザー登録画面')

@section('content')
<div class="content_wrapper">
    <form action="{{ route('register') }}" method='post'>
	<?= csrf_field()?>
        <table class="table-bordered">
            <tr>
                <th colspan="4" class="table-header">ユーザー登録情報</th>
            </tr>
            <tr>
                <th>ID</th>
                <td>
                    <input class="form-control" type="text" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                    @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </td>
                <th>email</th>
                <td>
                <input class="form-control" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </td>
            </tr>
            <tr>
                <th>パスワード</th>
                <td>
                <input  type="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </td>
                <th>確認パスワード</th>
                <td>
                <input  type="password" class="form-control" name="password_confirmation" required>
                </td>
            </tr>
            <tr>
                <th>権限</th>
                <td>
                    <select class="form-control" name="role">
                        <option value="0">--</option>
                        <option value="1">一般</option>
                        <option value="5">管理者</option>
                    </select>
                </td>
            </tr>
        </table>
        <div class="controll_buttons overflow_btn">
            <input class="btn btn-success" type="submit" value="ユーザー登録">
        </div>
    </form>
    
</div>
@endsection
