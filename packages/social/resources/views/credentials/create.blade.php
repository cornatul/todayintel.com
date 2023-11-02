@extends('marketing::layouts.app')

@section('title', __('Configuration Sharing'))

@section('heading')
    {{ __('Create Connection for account') }}
@endsection

@section('content')

    <!-- Cards !-->
    <div class="card">

        <div class="card-header">
            <h3 class="card-title">{{ __('Create Connection Credentials') }}</h3>
        </div>


        <div class="card-body">
            <form method="post" action="{{ route('social.credentials.save') }}">
                @csrf

                <input type="hidden" name="account" value="{{ $account }}">

                <div class="form-group">
                    <label for="exampleInputEmail1">
                        {{ __('Client id') }}
                    </label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="clientId"
                           placeholder=" {{ __('Client id') }}">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">
                        {{ __('Type') }}
                    </label>
                    <select class="form-control" id="exampleInputEmail1" name="type">
                        <option value="facebook">Facebook</option>
                        <option value="twitter">Twitter</option>
                        <option value="linkedin">Linkedin</option>
                        <option value="instagram">Instagram</option>
                    </select>
                </div>



                <div class="form-group">
                    <label for="exampleInputEmail1">
                        {{ __('Client Secret') }}
                    </label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="clientSecret"
                           placeholder="{{ __('Client Secret') }}">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">
                        {{ __('Redirect Uri') }}
                    </label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="redirectUri"
                           placeholder=" {{ __('Redirect Uri') }}">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">
                        {{ __('Scopes') }}
                    </label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="scopes"
                           placeholder=" {{ __('Scopes') }}">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
