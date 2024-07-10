@extends('pelanggan.layout.index')

@section('content')
<div class="row mt-4 align-items-center">
    <div class="col-md-6">
        <div class="content-text">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique voluptate eos dolorum a. Voluptatum perspiciatis asperiores nemo ex, illo ipsa aliquid quos unde, expedita quia dignissimos a ratione fuga, temporibus minima rem! Nostrum ex doloremque culpa sunt, necessitatibus tempore voluptate, aliquam praesentium modi nihil officiis exercitationem! Ex placeat, quisquam eius consectetur earum culpa laudantium. Ex praesentium iste unde dignissimos tenetur odio voluptas maxime suscipit eum deserunt dolore blanditiis perferendis aperiam at inventore sequi ea, odit ratione alias sed dolor! Voluptas dolorum maxime id, blanditiis porro, accusantium eos velit sapiente alias consequuntur excepturi deserunt! Id sint reprehenderit, deleniti temporibus sunt nisi.
        </div>
    </div>
    <div class="col-md-6">
        <img src="{{asset('assets/images/logo.png')}}" style="width: 100%" alt="">
    </div>
</div>

<h4 class="text-center mt-5 mb-md-5 mb-md-2">Contact Us</h4>
<hr class="mb-5">
<div class="row mb-md-5">
    <div class="col-md-5">
        <div class="bg-secondary" style="width: 100%; height:50vh; border-radius:10px;"></div>
    </div>
    <div class="col-md-7">
        <div class="card">
            <div class="card-header text-center">
                <h4>Kritik dan Saran</h4>
            </div>
            <div class="card-body">
                <p class="p-0 mb-5 text-lg-center">Masukan Kritik dan saran anda pada layanan kami agar kami dapat memberikan apa yang menjadi kebutuhan anda.</p>
            <div class="mb-3 row">
    <label for="email" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="email" value="" placeholder="Masukan email anda">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="pesan" class="col-sm-2 col-form-label">Pesan</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="pesan" placeholder="Masukan Pesan Anda">
    </div>
  </div>
    <button class="btn btn-primary mt-4 w-100"> Kirim pesan anda</button>
            </div>
        </div>
    </div>
</div>
@endsection