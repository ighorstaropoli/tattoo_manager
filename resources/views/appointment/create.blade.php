 @section('head')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-datepicker3.min.css') }}">
    <script src="{{ asset('js/jquery.maskedinput.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/bootstrap-datepicker.min.js') }}" type="text/javascript"></script>

@endsection
 <div class="col-md-4">
            <div class="panel panel-default">
            <div class="panel-heading">
             New Appointment
            </div>
            
            <div class="panel-body">
                  <div class="panel-body">
                    <!-- Display Validation Errors -->
                    @include('common.errors')

                      <form class="form-horizontal" role="form" method="POST" action="{{ url('/appointment') }}">
                        {!! csrf_field() !!}

                         <input type="hidden" name="client" value="{{ $client->id }}">

                         <div class="form-group">
                            <label class="col-md-4 control-label">Date:</label>

                            <div class="col-md-4">
                                <input type="text" class="form-control datepicker"  name="date" value="{{ old('date') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Hour:</label>

                            <div class="col-md-5">
                                <input type="text" class="form-control" id="hour" name="hour" value="{{ old('hour') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Tattoo Artist:</label>

                            <div class="col-md-7">
                                <input type="text" class="form-control" name="tattooist" value="Marco Antonio de Lima Junior">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Body Space:</label>

                            <div class="col-md-7">
                                <input type="text" class="form-control" name="bodyspace" value="{{ old('bodyspace') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Datails:</label>

                            <div class="col-md-7">
                                <textarea name="details" class="form-control" >{{ old('details') }}</textarea>
                                <!-- <input type="text" class="form-control" name="details" value="{{ old('details') }}"> -->
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Info Product:</label>

                            <div class="col-md-7">
                                <textarea name="info_product" class="form-control" >{{ old('info_product') }}</textarea>
                                <!-- <input type="text" class="form-control" name="info_product" value="{{ old('info_product') }}"> -->
                            </div>
                        </div>
                    
                            <div class="col-md-offset-9">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user-plus"></i>Create
                                </button>
                            </div>
                 
                    </form>
                </div>

            </div>
        </div>
<script type="text/javascript">
    jQuery(function($){
       $("#hour").mask("99:99");
       $('.datepicker').datepicker({
            format: 'yyyy-m-d'
        });
    });    
</script>