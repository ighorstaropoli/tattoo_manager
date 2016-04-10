 @extends('layouts.app')

@section('content')
  <div class="col-sm-offset-8 col-sm-8">
        <form action="/client/create" method="GET">
            <button type="submit" class="btn btn-default">
                <i class="fa fa-btn fa-plus"></i>Add Client
            </button>
        </form>
    </div>
    <br>
    @if (count($clients) > 0)
    <div class="col-sm-offset-3 col-sm-6">   
            <div class="panel-heading">
             Clients List
            </div>
            <div class="panel-body">
                <table class="table">                  
                   
                        @foreach ($clients as $client)
                            <tr>
                                <td class="table-text"><div>{{ $client->name }}</div></td>
                                <td class="table-text"><div>{{ $client->email }}</div></td>
                                 <td>
                                    <form action="/client/{{ $client->id }}" method="GET">

                                        <button type="submit">
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