@extends('layouts.ecommerce')

@section('title')
    <title>E-Health</title>
@endsection

@section('content')
    <section class="cat_product_area section_gap">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-lg-9">
                    <div class="product_top_bar">
                        <div class="left_dorp" style="margin:50px 0px 0px 0px";>
                            <select class="sorting">
                                <option value="1">Default sorting</option>
                                <option value="2">Default sorting 1</option>
                                <option value="4">Default sorting 2</option>
                            </select>
                            <select class="show">
                                <option value="1">Show 12</option>
                                <option value="2">Show 14</option>
                                <option value="4">Show 16</option>
                            </select>
                        </div>
                        <div class="right_page ml-auto">
                            {{ $products->links() }}
                        </div>
                    </div>
                    <div class="latest_product_inner row">
                        @forelse($products as $row)
                        <div class="card" style="width: 200px; margin: 40px;">
                            <img src="{{ asset('storage/products/' . $row->image) }}" alt="{{ $row->name }}" class="card-img-top" alt="product1">
                            <div class="card-body">
                                <h5 class="card-title">{{ $row->name }}</h5>
                                <p class="card-text">Rp {{ number_format($row->price) }},-</p>
                                <a href="{{ url('/product/' . $row->slug) }}" class="btn btn-warning">Detail</a>
                                <a href="{{ url('/product/' . $row->slug) }}" class="btn btn-primary">Beli</a>
                            </div>
                        </div>
                        @empty
                        <div class="col-md-12">
                            <h3 class="text-center">Tidak ada produk</h3>
                        </div>
                        @endforelse
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="left_sidebar_area" style="margin-top:50px;">
                        <aside class="left_widgets cat_widgets">
                            <div class="l_w_title">
                                <h3>Kategori Produk</h3>
                            </div>
                            <div class="widgets_inner" style="margin-top:50px; color:white;">
                                <ul class="list" style="padding:10px;" >
                                    @foreach ($categories as $category)
                                    <li>
                                        <a href="{{ url('/category/' . $category->slug) }}" style="color:black;">{{ $category->name }}</a>
                                        @foreach ($category->child as $child)
                                        <ul class="list" style="display: block;">
                                            <a href="{{ url('/category/' . $child->slug) }}">{{ $child->name }}</a>
                                        </ul>
                                        @endforeach
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>

            <div class="row">
                {{ $products->links() }}
            </div>
        </div>
    </section>
@endsection