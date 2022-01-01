@extends('doctors.layout')
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/locales-all.js"></script>
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/locales-all.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.css">
<script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js'></script>

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-center">
                <h2>Doctors</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('orders.create') }}"> Create New Order</a>
            </div>
            <select name="doctorNameSelected" id="doctor" class="form-control select2">
              -->
            </select>
        </div>
    </div>
    <br> 
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Order Services</th>
            <th>Total Price Order Services</th>

            <th width="280px">Action</th>
        </tr>
        @foreach ($orders as $order)
        <tr>
            <td>{{ ++$i }}</td>
            <td> <ul>
               
                                @foreach($order->services as $key => $item)
                                    <li>{{ $item->name }} => {{$item->pivot->quantity }}*{{$item->price }}</li>
                                @endforeach
                                </ul>
                            </td>

                            <td> 
                                {{$order->status}}
                            </td>
                            
                            <td> 
                                {{$order->status}}
                            </td>

            <td>
                <form action="{{ route('orders.destroy',$order->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('orders.show',$order->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('orders.edit',$order->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
<div id='calendar'></div> -->

<h3>Calendar</h3>

<!-- 
@endsection