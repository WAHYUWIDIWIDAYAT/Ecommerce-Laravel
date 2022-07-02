@extends('layouts.ecommerce')

@section('title')
    <title>Chat</title>
@endsection

@section('content')
    <div class="container" style="margin-top:100px;">
        <div class="row justify-content-center mt-5row">
            <div class="col-md-6 col-md-offset-4">
                <h4><center>Sulit Menemukan obat yang cocok ? </center></h4>
                <br>
                <p><center>Silakan chat kami melalui email berikut , untuk konsultasi <strong>GRATIS!!!!!</strong></center></p>
                <br><br>
                @if(Session::has('status'))
                <div class="alert alert-success">{{ Session::get('status') }}</div>
                @endif
                <form action="" method="post">

                    {{ csrf_field() }}

                    <label for="name">Name</label>
                    <input class="form-control" type="text" name="name" placeholder="you name" />
                    
                    <label for="email">Email</label>
                    <input class="form-control" type="email" name="email" placeholder="you email address" />
                    
                    <label for="message">Message</label>
                    <textarea class="form-control" name="message" id="" placeholder="your message" cols="30" rows="10"></textarea>

                    <br><br>

                    <button class="btn btn-primary btn-block" style="margin-bottom:50px;">Send</button>
                <form>
            </div>
            <div class="col-md-6 col-md-offset-6">
                <h4><center>Ribet ??</center></h4>
                <br>
                <p><center>Anda bisa menggunakan salah satu opsi aplikasi chatting berikut  <strong>GRATIS!!!!!</strong></center></p>
                <br><br>
                <div class="row justify-content-center mt-5row">
                    <a href="https://wa.me/0895636461652"><img src="UserInterface/assets/img/wa.png" style="width:150px; height:150px;"/></a>
                    <a href="https://t.me/Widiw598"><img src="UserInterface/assets/img/tele.png" style="width:150px; height:150px;"/></a>
                </div>
            </div>
        </div>
    </div>
@endsection