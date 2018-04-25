@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Update Donor's List</div>

                <div class="card-body">
                  <form method="POST" action="{{ route('bdsub') }}">
                      @csrf

                      <div class="form-group row">
                          <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                          <div class="col-md-6">
                              <input id="name" type="text" placeholder="Enter the name" name="bdname" value="{{ old('name') }}" required autofocus>
                          </div>
                      </div>

                      <div class="form-group row">
                          <label for="email" class="col-md-4 col-form-label text-md-right">BloodGroup</label>

                          <div class="col-md-6">
                            <select name="bdbg" value="{{ old('bdbg') }}" class="form-control" required autofocus>
                              <!-- <option disabled="" selected=""></option> -->
                              <!-- <option value="...">Search All</option> -->
                              <option value="A+VE">A+</option>
                              <option value="A-VE">A-</option>
                              <option value="A1+">A1+</option>
                              <option value="A1-">A1-</option>
                              <option value="A1B+">A1B+</option>
                              <option value="A1B-">A1B-</option>
                              <option value="A2+">A2+</option>
                              <option value="A2-">A2-</option>
                              <option value="A2B+">A2B+</option>
                              <option value="A2B-">A2B-</option>
                              <option value="AB+">AB+</option>
                              <option value="AB-">AB-</option>
                              <option value="B+VE">B+</option>
                              <option value="B-VE">B-</option>
                              <option value="Bombay Blood Group">Bombay Blood Group</option>
                              <option value="INRA">INRA</option>
                              <option value="O+VE">O+</option>
                              <option value="O-VE">O-</option>
                            </select>
                          </div>
                      </div>

                      <div class="form-group row">
                          <label for="password" class="col-md-4 col-form-label text-md-right">Location</label>

                          <div class="col-md-6">
                            <select placeholder="District" name="bdplace" class="form-control" required>
                              <!-- <option disabled="" selected=""></option> -->
                              <!-- <option value="...">Search All</option> -->
                              <option value=AL>Alappuzha</option>
                              <option value=ER>Ernakulam</option>
                              <option value=ID>Idukki</option>
                              <option value=KN>Kannur</option>
                              <option value=KS>Kasaragod</option>
                              <option value=KL>Kollam</option>
                              <option value=KT>Kottayam</option>
                              <option value=KZ>Kozhikode</option>
                              <option value=MA>Malappuram</option>
                              <option value=PL>Palakkad</option>
                              <option value=PT>Pathanamthitta</option>
                              <option value=TV>Thiruvananthapuram</option>
                              <option value=TS>Thrissur</option>
                              <option value=WA>Wayanad</option>
                            </select>
                          </div>
                      </div>
                      <div class="form-group row">
                          <label for="name" class="col-md-4 col-form-label text-md-right">Phone Number</label>

                          <div class="col-md-6">
                              <input id="name" type="text" placeholder="Phone Number" name="bdphno" value="{{ old('bdphno') }}" required autofocus>
                          </div>
                      </div>
                      <div class="form-group row mb-0">
                          <div class="col-md-6 offset-md-4">
                              <button type="submit" class="btn btn-primary">
                                  Save Data
                              </button>
                              <a href='/donoradmin'><button type="button" class="btn btn-secondary">
                                  Show Donor's List
                              </button></a>
                          </div>

                      </div>
                  </form>
                </div>
                <div class="col-md-6 offset-md-3">
                    @include('flash::message')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
