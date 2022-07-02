<nav class="sidebar-nav">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('home') }}">
                <i class="nav-icon icon-speedometer"></i> Dashboard
            </a>
        </li>

        <li class="nav-title">MANAJEMEN PRODUK</li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('category.index') }}">
                <i class="fa fa-tags"></i>  Kategori
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('product.index') }}">
                <i class="fa fa-shopping-bag"></i>  Produk
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('orders.index') }}">
                <i class="fa fa-dropbox"></i>  Pesanan
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('posts.index') }}">
            <i class="fa fa-newspaper-o"></i>  Artikel
            </a>
        </li>
    </ul>
</nav>