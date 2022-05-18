@extends('home.layouts.index')
@section('content')
    <div class="container">
        <main>
            <div class="py-5 text-center">
                <img class="d-block mx-auto mb-4" src="{{$detail->image}}" alt="" width="72"
                    height="57">
                <h2>Lamar Pekerjaan ini {{$detail->title}}</h2>
                <p class="lead">Isi form berikut dengan benar</p>
            </div>

            <div class="row justify-content-center">
                
                
                <div class="col-md-6 col-lg-6">
                    @if (session('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('error') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <h4 class="mb-3">Identitas</h4>
                    <form class="needs-validation" action="{{route('home-jobs.store')}}" method="POST" novalidate>
                        @csrf
                        <input type="hidden" name="vacancy_id" value="{{$detail->id}}">
                        <div class="row g-3">
                            <div class="col-sm-12">
                                <label for="firstName" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" name="name" id="firstName" placeholder="Nama Lengkap" value="" required>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="col-12">
                                <label for="email" class="form-label">No Telp</label>
                                <input type="text" class="form-control" name="no_telp" id="email" placeholder="0812xxxxxxx">
                                @error('no_telp')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>

                            <div class="col-12">
                                <label for="address" class="form-label">No Whatsapp</label>
                                <input type="text" class="form-control" name="no_wa" id="address" placeholder="+62812xxxxxx" required>
                                @error('no_wa')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>

                            <div class="col-12">
                                <label for="address2" class="form-label">Posisi yang dilamar</label>
                                <input type="text" class="form-control" name="position" id="address2" placeholder="Admin/Driver">
                                @error('position')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                        </div>

                        <hr class="my-4">

                        <button class="w-100 btn btn-primary btn-lg" type="submit">Simpan</button>
                    </form>
                    <br>
                </div>
            </div>
        </main>
    </div>
@endsection
