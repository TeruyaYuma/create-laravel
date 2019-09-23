@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('booking.create') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="due_date" class="col-md-4 col-form-label text-md-right">{{ __('Due_date') }}</label>

                            <div class="col-md-6">
                               <input type="text"  value="{{$due_date}}" disabled="disabled">
                               <input type="hidden" name="due_date" id="due_date" value="{{$due_date}}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="time" class="col-md-4 col-form-label text-md-right">{{ __('Time') }}</label>

                            <div class="col-md-6">
                                <select name="time" id="time">
                                  @foreach($times as $time)
                                        <option value="{{ $time->id }}"
                                    @foreach($bookings as $booking)
                                            {{ $time->id === old('time',$booking->time_id)? 'disabled' : ''}}
                                    @endforeach
                                            class="d-block">{{ $time->time }}
                                        </option>
                                  @endforeach
                                </select>

                                @error('time')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="treatment" class="col-md-4 col-form-label text-md-right">{{ __('Type') }}</label>

                            <div class="col-md-6">
                                <select name="treatment" id="treatment">
                                  @foreach($treatments as $treatment)
                                  <option value="{{ $treatment->id }}">{{ $treatment->name }}</option>
                                  @endforeach
                                </select>

                                @error('time')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="pic" class="col-md-4 col-form-label text-md-right">{{ __('Pic') }}</label>

                            <div class="col-md-6">
                                <input type="file" name="pic" id="pic">

                                @error('pic')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="comment" class="col-md-4 col-form-label text-md-right">{{ __('Comment') }}</label>

                            <div class="col-md-6">
                                <textarea name="comment" id="comment" cols="30" rows="10"></textarea>

                                @error('comment')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
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