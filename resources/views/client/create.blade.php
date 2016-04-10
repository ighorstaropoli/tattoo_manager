@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Register Client</div>

                <div class="panel-body">
                    <!-- Display Validation Errors -->
                    @include('common.errors')

                      <form class="form-horizontal" role="form" method="POST" action="{{ url('/client') }}">
                        {!! csrf_field() !!}

                        <div class="panel-heading">Client Info</div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">E-Mail</label>

                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Date of Birth</label>

                            <div class="col-md-4">
                                <input type="text" class="form-control" id="dob" name="dob" value="{{ old('dob') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Gender</label>
                            <div class="col-md-3">
                                <select class="form-control" name="gender" value="{{ old('gender') }}">
                                    <option value="">--</option>
                                    <option value="F">Feminino</option>
                                    <option value="M">Masculino</option>                                    
                                  </select>                                
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">RG</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" id="rg" name="rg" value="{{ old('rg') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Phone</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Legal Age?</label>

                            <div class="col-md-1">
                                <input type="checkbox" class="form-control" name="legal_age" value="1">
                            </div>
                        </div>


                         <div class="panel-heading">Address</div>
                        <!-- Address -->

                        <div class="form-group">
                            <label class="col-md-4 control-label">CEP</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="address-cep" name="address[cep]" value="{{ old('address.cep') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Street</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="address[street]" value="{{ old('address.street') }}">
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-md-4 control-label">Nº</label>
                            <div class="col-md-3">
                                <input type="text" class="form-control" name="address[number]" value="{{ old('address.number') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Complement</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="address[complement]" value="{{ old('address.complement') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Neighborhood</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="address[neighborhood]" value="{{ old('address.neighborhood') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">City</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="address[city]" value="{{ old('address.city') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">State</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="address[state]" value="{{ old('address.state') }}">
                            </div>
                        </div>
                        


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user-plus"></i>Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
