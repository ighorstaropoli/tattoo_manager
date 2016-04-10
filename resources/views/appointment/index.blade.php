 @extends('layouts.app')

@section('content')

    @if (count($appointments) > 0)
    <div class="col-sm-offset-3 col-sm-6">   
            <div class="panel-heading">
             Appointment List
            </div>
            <div class="panel-body">
                <table class="table">                  
                   
                        @foreach ($appointments as $appoint)
                            <tr>
                                <td class="table-text"><div>{{ $appoint->date->format('d/m/Y') }}</div></td>
                                <td class="table-text"><div>{{ $appoint->hour }}</div></td>
                                 <td>
                                    <form action="/appointment/{{ $appoint->id }}" method="GET">

                                        <button type="submit" >
                                            <i class="fa fa-btn fa-eye"></i>Show
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                </table>
            </div>
    </div>      
    @endif
   
@endsection