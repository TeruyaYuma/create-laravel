@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">

                        <div class="form-group row">
                        <label for="age" class="col-md-4 col-form-label text-md-right">{{ __('Age') }}</label>

                            <div class="col-md-6">
                                {{ $infos->age }}
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="category" class="col-md-4 col-form-label text-md-right">{{ __('Category') }}</label>

                            <div class="col-md-6">
                                {{ $infos->category->name }}
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="comment" class="col-md-4 col-form-label text-md-right">{{ __('Comment') }}</label>

                            <div class="col-md-6">
                                {{ $infos->comment }}
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-4 offset-md-4">
                                <a href="{{ route('infos.edit', $infos->id)}}" class="btn btn-primary">
                                    {{ __('Edit') }}
                                </a>
                                <form method="POST" action="{{ route('infos.delete', Auth::user()->id )}}"
                                onclick="return confirm('削除しますか？');" class="d-inline">
                                    @csrf
                                    <button class="btn btn-primary">{{ __('Delete')}}</button>
                                </form>
                            </div>
                        </div> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
