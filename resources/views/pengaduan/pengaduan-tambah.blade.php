@extends('layouts.master')

@section('title', 'BNN Kota Cirebon')
@section('content')
<div class="section-body">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                {{-- <div class="card-header">
                  <h4>HTML5 Form Basic</h4>
                </div> --}}
                <div class="card-body">
                  {{-- <div class="alert alert-info">
                    <b>Note!</b> Not all browsers support HTML5 type input.
                  </div> --}}
                <form action="{{ route('pengaduan.s')}}" method="POST">
                  @csrf
                  <div class="row">

                    {{-- Identitas Pelapor --}}
                    <div class="col-md-6">
                      <div class="row">
                        <h5 class="my-3 mx-3">Identitas Pelapor</h5>
                        
                        <div class="col-md-12">
                          <div class="form-group my-0 py-0">
                            <label @error('nam_pelapor')
                                class="text-danger"
                            @enderror>Nama Pelapor
                              @error('nam_pelapor')
                                  | {{ $message}}
                              @enderror
                            </label>
                            <input type="text" name="nam_pelapor" value="{{ old('nam_pelapor')}}" class="form-control">
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group my-0 py-0">
                            <label @error('email_pelapor')
                                class="text-danger"
                            @enderror>Email Pelapor
                              @error('email_pelapor')
                                  | {{ $message}}
                              @enderror
                            </label>
                            <input type="text" name="email_pelapor" value="{{ old('email_pelapor')}}" class="form-control">
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group my-0 py-0">
                            <label @error('phone_pelapor')
                                class="text-danger"
                            @enderror>No Telpon Pelapor
                              @error('phone_pelapor')
                                  | {{ $message}}
                              @enderror
                            </label>
                            <input type="text" name="phone_pelapor" value="{{ old('phone_pelapor')}}" class="form-control">
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group my-0 py-0">
                            <label @error('alama_pelapor')
                                class="text-danger"
                            @enderror>Alamat Pelapor
                              @error('alama_pelapor')
                                  | {{ $message}}
                              @enderror
                            </label>
                            <div class="form-floating">
                              <textarea class="form-control" id="floatingTextarea" name="alama_pelapor" value="{{ old('alama_pelapor')}}" ></textarea>
                              <label for="floatingTextarea"></label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                     {{-- Identitas Terlapor --}}
                    <div class="col-md-6">
                      <hr class="row">
                        <h5 class=" mx-3 my-3">Identitas Terlapor</h5>
                        
                        <div class="col-md-12">
                          <div class="form-group my-0 py-0">
                            <label @error('name_pelaku')
                                class="text-danger"
                            @enderror>Nama Pelaku
                              @error('name_pelaku')
                                  | {{ $message}}
                              @enderror
                            </label>
                            <input type="text" name="name_pelaku" value="{{ old('name_pelaku')}}" class="form-control">
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group my-0 py-0">
                            <label @error('telp_pelaku')
                                class="text-danger"
                            @enderror>No Telpon Pelaku
                              @error('telp_pelaku')
                                  | {{ $message}}
                              @enderror
                            </label>
                            <input type="text" name="telp_pelaku" value="{{ old('telp_pelaku')}}" class="form-control">
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group my-0 py-0">
                            <label @error('alamat_pelaku')
                                class="text-danger"
                            @enderror>Alamat Pelaku
                              @error('alamat_pelaku')
                                  | {{ $message}}
                              @enderror
                            </label>
                            <div class="form-floating">
                              <textarea class="form-control" id="floatingTextarea" name="alamat_pelaku" value="{{ old('alamat_pelaku')}}" ></textarea>
                              <label for="floatingTextarea"></label>
                            </div>
                          </div>
                        </div>
                         <div class="col-md-12">
                          <div class="form-group my-0 py-0">
                            <label @error('peran_pelaku')
                                class="text-danger"
                            @enderror>Peran Pelaku
                              @error('peran_pelaku')
                                  | {{ $message}}
                              @enderror
                            </label>
                            <select class="form-control" name="peran_pelaku" value="{{ old('peran_pelaku')}}">
                              <option selected>Peran Pelaku</option>
                              <option value="pengguna">pengguna</option>
                              <option value="bandar">bandar</option>
                              <option value="pengedar">pengedar</option>
                              <option value="kurir">kurir</option>
                              <option value="lainnya">lainnya</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group my-0 py-0">
                            <label @error('profesi_pelaku')
                                class="text-danger"
                            @enderror>Propesi Pelaku
                              @error('profesi_pelaku')
                                  | {{ $message}}
                              @enderror
                            </label>
                            <input type="text" name="profesi_pelaku" value="{{ old('profesi_pelaku')}}" class="form-control">
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group my-0 py-0">
                            <label @error('jenis_narkoba')
                                class="text-danger"
                            @enderror>Jenis Narkoba
                              @error('jenis_narkoba')
                                  | {{ $message}}
                              @enderror
                            </label>
                            <select class="form-control" name="jenis_narkoba" value="{{ old('jenis_narkoba')}}">
                              <option selected>Jenis Narkoba</option>
                              <option value="sabu">sabu</option>
                              <option value="ganja">ganja</option>
                              <option value="ekstasi">ekstasi</option>
                              <option value="heroin">heroin</option>
                              <option value="obat-obatan">obat-obatan</option>
                              <option value="lainnya">lainnya</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group my-0 py-0">
                            <label @error('alamat_kejadian')
                                class="text-danger"
                            @enderror>Alamat Kejadian
                              @error('alamat_kejadian')
                                  | {{ $message}}
                              @enderror
                            </label>
                            <div class="form-floating">
                              <textarea class="form-control" id="floatingTextarea" name="alamat_kejadian" value="{{ old('alamat_kejadian')}}" ></textarea>
                              <label for="floatingTextarea"></label>
                            </div>
                          </div>
                        </div>
                         <div class="col-md-6">
                          <div class="form-group my-0 py-0">
                            <label @error('tanggal_kejadian')
                                class="text-danger"
                            @enderror>Tanggal Kejadian
                              @error('tanggal_kejadian')
                                  | {{ $message}}
                              @enderror
                            </label>
                            <input type="date" name="tanggal_kejadian" value="{{ old('tanggal_kejadian')}}" class="form-control">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group my-0 py-0">
                            <label @error('waktu_kejadian')
                                class="text-danger"
                            @enderror>Waktu Kejadian
                              @error('waktu_kejadian')
                                  | {{ $message}}
                              @enderror
                            </label>
                            <input type="time" name="waktu_kejadian" value="{{ old('waktu_kejadian')}}" class="form-control">
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group my-0 py-0">
                            <label @error('bukti')
                                class="text-danger"
                            @enderror>Bukti
                              @error('bukti')
                                  | {{ $message}}
                              @enderror
                            </label>
                            <input type="text" name="bukti" value="{{ old('bukti')}}" class="form-control">
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group my-0 py-0">
                            <label @error('isi_pengaduan')
                                class="text-danger"
                            @enderror>Isi Pengaduan
                              @error('isi_pengaduan')
                                  | {{ $message}}
                              @enderror
                            </label>
                            <div class="form-floating">
                              <textarea class="form-control" id="floatingTextarea2" style="height: 100px" name="isi_pengaduan" value="{{ old('isi_pengaduan')}}" ></textarea>
                              <label for="floatingTextarea2"></label>
                            </div>
                          </div>
                        </div>
                    </div>

                  </div>

                  <div class="card-footer text-right">
                    <button class="btn btn-primary mr-1" type="submit">Submit</button>
                    <button class="btn btn-secondary" type="reset">Reset</button>
                  </div>
                </form>
                </div>
            </div>
          </div>
    </div>
</div>
@endsection

@push('page-scripts')
    
@endpush