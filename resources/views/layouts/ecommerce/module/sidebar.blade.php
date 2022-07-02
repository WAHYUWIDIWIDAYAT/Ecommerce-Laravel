<div class="card" style="width:auto; margin: auto;">
    <image src="{{asset('UserInterface/assets/img/dashboard.jpg')}}"/>
        <div class="card-body">
            <h5 class="card-title">Dashboard</h5>
        </div>
        <div class="table-responsive" style="margin: 40px 0px 0px 0px;">
    <table class="table">
    <tbody>
        <tr>
        <td>
            <h8><i class="fa fa-tachometer fa-2x" style="color:#467fd0"></i></h8>
        </td>
        <td>
            <h8><a href="{{ route('customer.dashboard') }}" style="color:grey; text-decoration:none;">Dashboard</a></h8>
        </td>
        </tr>
        <tr>
        <td>
            <h8><i class="fa fa-dropbox fa-2x"></i><i></h8>
        </td>
        <td>
            <h8><a href="{{ route('customer.orders') }}" style="color:grey; text-decoration:none;">Pesanan</a></h8>
        </td>
        </tr>
        <tr>
        <td>
            <h8><i class="fa fa-user fa-2x" style="color:#42ba96"></i></h8>
        </td>
        <td>
            <h8><a href="{{ route('customer.settingForm') }}" style="color:grey; text-decoration:none;">Pengaturan</a></h8>
        </td>
        </tr>
    </tbody>
    </table>
</div>
</div>