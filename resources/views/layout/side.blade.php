<div class="side_menu">
    <div class="menu_item">
        <a class="menu_block_name has_submenu">発注管理</a>
        <div class="menu_block_hiden">
            <a href="/order_search" class="menu_block_subitem">発注検索</a>
            <a href="/order/create" class="menu_block_subitem">発注登録</a>
        </div>
    </div>
    <div class="menu_item">
        <a href="/arrival_search" class="menu_block_name">入庫管理</a>
    </div>
    <div class="menu_item">
        <a class="menu_block_name has_submenu">商品管理</a>
        <div class="menu_block_hiden">
            <a href="/product" class="menu_block_subitem">商品リスト</a>
            <!-- <a href="/inventory" class="menu_block_subitem">棚卸し</a>
            <a href="/waste" class="menu_block_subitem">不良品登録</a> -->
            <!-- <a href="/stock_shelf_change" class="menu_block_subitem">棚配置変更</a> -->
        </div>
    </div>
    <div class="menu_item">
        <a href="/recieved_search" class="menu_block_name">受注管理</a>
    </div>
    <div class="menu_item">
        <a href="/spending" class="menu_block_name">入金管理</a>
    </div>
    <div class="menu_item">
        <a href="/payment" class="menu_block_name">出金管理</a>
    </div>
    <div class="menu_item">
        <a href="/sales" class="menu_block_name">売上管理</a>
    </div>
    <div class="menu_item">
        <a href="/category_search" class="menu_block_name">カテゴリ管理</a>
    </div>
    <div class="menu_item">
        <a class="menu_block_name has_submenu">マスター管理</a>
        <div class="menu_block_hiden">
            <a href="/brand_search" class="menu_block_subitem">ブランド管理</a>
            <a href="/customer_search" class="menu_block_subitem">顧客管理</a>
            <a href="/staff_search" class="menu_block_subitem">従業員管理</a>
            <a href="/color_search" class="menu_block_subitem">色管理</a>
            <a href="/size_search" class="menu_block_subitem">サイズ管理</a>
            <!-- <a href="/stock_shelf_search" class="menu_block_subitem">棚番号管理</a> -->
        </div>
    </div>
    <div class="menu_item">
        @guest
            <a class="menu_block_name" href="{{ route('login') }}">{{ __('ログイン') }}</a>
        @else
            <a class="menu_block_name has_submenu">{{ Auth::user()->name }}</a>
            <div class="menu_block_hiden">
                <a class="menu_block_subitem" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('ログアウト') }}</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        @endguest
    </div>
    <div class="menu_item">
        <a href="/register" class="menu_block_name">ユーザー登録</a>
    </div>
</div>