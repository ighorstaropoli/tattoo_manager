 @extends('layouts.app')

@section('content')
    @if (!is_null($client))
    <div class="col-md-3 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading">
             Client
            </div>
            
            <div class="panel-body">
                
                    <h2>{{ $client->name }}</h2>
                    <p>
                        <strong>Email:</strong> {{ $client->email }}<br>
                        <strong>Date of Birth:</strong> {{ $client->dob->format('d/m/Y') }}<br>
                        <strong>Gender:</strong> {{ $client->gender }}<br>  
                        <strong>RG:</strong> {{ $client->rg }}<br>
                        <strong>Phone:</strong> {{ $client->phone }}<br>
                        
                    </p>
                    <h4>Address</h4>
                    <p>
                        <strong>Cep:</strong> {{ $client->cep }}<br>
                        <strong>Street:</strong> {{ $client->street }}<br>
                        <strong>Number:</strong> {{ $client->number }}<br>
                        @if($client->complement)
                         <strong>Complement:</strong> {{ $client->complement }}<br>
                        @endif
                        <strong>Neighborhood:</strong> {{ $client->neighborhood }}<br>
                        <strong>City:</strong> {{ $client->city }}<br>
                         <strong>State:</strong> {{ $client->state }}
                        
                    </p>
                </div>
            </div>
        </div>
        <!--  Appointment -->
         @include('appointment.create')
         @include('appointment.list')
    @else
        <div class="panel panel-default">
            <div class="panel-heading">
                Has Not Client Id
            </div>
        </div>
    @endif
@endsection