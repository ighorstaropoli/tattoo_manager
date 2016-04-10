
 @if (count($appointments) > 0)
   <div class="panel-body">
        <table class="table">  
 			@foreach ($appointments as $appoint)
                <tr>
                    <td class="table-text"><div>{{ $appoint->date }}</div></td>
                    <td class="table-text"><div>{{ $appoint->hour }}</div></td>
                    <td>
                        <form action="/appointment/{{ $appoint->id }}" method="GET">

                            <button type="submit" >
                                <i class="fa fa-btn fa-eye"></i>Appointment
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
     	</table>
    </div>
 @endif