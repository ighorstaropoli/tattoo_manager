 @extends('layouts.app')

@section('content')
    @if (!is_null($appointment))
    <div class="col-md-3 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading">
             Appointment
            </div>
            
                <div class="panel-body">                
                    <h2>{{ $client->name }}</h2>
                    <p>
                        <strong>Date:</strong> {{ $appointment->date->format('d/m/Y') }}<br>
                        <strong>Hour:</strong> {{ $appointment->hour }}<br>
                        <strong>Tattoo Artist:</strong> {{ $appointment->tattooist }}<br><br>
                        <strong>Body Space:</strong> {{ $appointment->bodyspace }}<br><br>
                        <strong>Datails:<br></strong> {{ $appointment->details }}<br><br>
                        <strong>Info Product:<br></strong> {{ $appointment->info_product }}<br><br>
                    </p>                

                    <form action="/client/{{ $client->id }}" method="GET">

                         <div class="col-md-offset-5">
                            <button type="submit" class="btn btn-primary">
                                <i class="fa fa-btn "></i>Back to Client
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @else
        <div class="panel panel-default">
            <div class="panel-heading">
                Has Not Appointment Id
            </div>
        </div>
    @endif
@endsection