@extends('layouts.app')

@section('content')
    <div class="container">

        <h2>{{ __('Booking_List')}}</h2>

        <div class="low">
            <div class="topnav">
                <input type="text" class="js-search" placeholder="search">
            </div>
        </div>

        <div class="low mt-5">
            @foreach($bookings as $booking)
                <a href="{{ route('booking.detail', $booking->id )}}">
                    <div class="col-sm-6 js-booking_list" data-name="{{ $booking->user->name }}">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">{{ $booking->id }}</h3>
                                <div>
                                    {{ $booking->due_date }}
                                </div>
                                <div>
                                    {{ $booking->user->name}}
                                </div>
                                <div>
                                    {{ $booking->treatment->name}}
                                </div>

                                <form method="POST" action="{{ route('booking.delete',$booking->id)}}"
                                onclick="return confirm('削除しますか？');" >
                                    @csrf
                                    <button class="btn">delete</button>
                                </form>

                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
        
    </div>
@endsection

@section('scripts')
    <script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
    <script>
        $('.js-search').on('keyup',function(){
            var searchText = $(this).val();
            console.log(searchText);
            $('.js-booking_list').show().each(function (i,elm){
                var text = $(elm).data('name');
                var regexp = new RegExp('^' + searchText);

                if( text && text.match(regexp) ){
                    return true;
                }
                $(elm).hide();
            });
        });
    </script>
@endsection