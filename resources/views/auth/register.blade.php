<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新規登録</title>
    <link rel="stylesheet" href="css/register.css">
</head>
<body>
@extends('layouts.app')

@section('content')
<div class="sign-up-bg">
    <div class="container sign-up-container">
        <div class="row justify-content-center">
            <div class="#">
                <div class="card">
                    <div class="card-header sign-up-title">{{ __('新規登録') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="character-select_content">
                                <div class="form-group row" id="container-top-characters">
                                    <fieldset class="border-flame">
                                        <legend><label for="character" class="col-md-4 col-form-label text-md-right ">{{ __('キャラクターを選ぶ') }}</label></legend>
                                        <label for="character_A" class="js-panel-select">
                                            <input type="checkbox" name="ceo-select" value="0" id="character_A" class="disabled_checkbox">
                                            <img class="panel-thumbnail" src="images/character_A.png">
                                        </label>
                                        <label for="character_B" class="js-panel-select">
                                            <input type="checkbox" name="ceo-select" value="1" id="character_B" class="disabled_checkbox">
                                            <img class="panel-thumbnail" src="images/character_B.png">
                                        </label>
                                        <label for="character_C" class="js-panel-select">
                                            <input type="checkbox" name="ceo-select" value="3" id="character_C" class="disabled_checkbox">
                                            <img class="panel-thumbnail" src="images/character_C.png">
                                        </label>
                                        <label for="character_D" class="js-panel-select">
                                            <input type="checkbox" name="ceo-select" value="4" id="character_D" class="disabled_checkbox">
                                            <img class="panel-thumbnail" src="images/character_D.png">
                                        </label>
                                        <label for="character_E" class="js-panel-select">
                                            <input type="checkbox" name="ceo-select" value="5" id="character_E" class="disabled_checkbox">
                                            <img class="panel-thumbnail" src="images/character_E.png">
                                        </label>
                                        <label for="character_F" class="js-panel-select">
                                            <input type="checkbox" name="ceo-select" value="6" id="character_F" class="disabled_checkbox">
                                            <img class="panel-thumbnail" src="images/character_F.png">
                                        </label>
                                        <label for="character_G" class="js-panel-select">
                                            <input type="checkbox" name="ceo-select" value="7" id="character_G" class="disabled_checkbox">
                                            <img class="panel-thumbnail" src="images/character_G.png">
                                        </label>
                                        <label for="character_G" class="js-panel-select">
                                            <input type="checkbox" name="ceo-select" value="8" id="character_H" class="disabled_checkbox">
                                            <img class="panel-thumbnail" src="images/character_H.png">
                                        </label>

                                        </label>
                                    <!-- <div class="col-md-6">
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
            
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div> -->
                                </fieldset>
                                </div>
                            </div>
            
                            <div class="name_gender_flex">
                                <div class="form-group row name_wrapper">
                                    <fieldset class="border-flame">
                                        <legend><label for="name" class="# col-form-label text-md-right tx-s">{{ __('名前') }}</label></legend>
        
                                    <div class="col-md-6">
                                        <input id="name" type="text" class="w-100 form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
        
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </fieldset>
                                </div>
        
                                <div class="form-group row gender_wrapper">
                                    <fieldset class="border-flame">
                                        <legend><label for="sex" class="# col-form-label text-md-right">{{ __('性別') }}</label></legend>
                                        <div class="#">
                                            <select name="area" data-toggle="select" class="w-100 form-control select select-default" id="area1">
                                                <option>性別を選ぶ</option>
                                                <option>♂</option>
                                                <option>♀</option>
                                            </select>
                                        </div>
                                    </fieldset>
                                    <!--/form-group--></div>
                            </div>
    

                            <div class="form-group row">
                                <fieldset class="border-flame">
                                    <legend><label for="email" class="# col-form-label text-md-right">{{ __('メールアドレス') }}</label></legend>
        
                                    <div class="#">
                                        <input id="email" type="email" class="w-100 form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
        
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </fieldset>
                            </div>

                            <div class="form-group row">
                                <fieldset class="border-flame">
                                    <legend><label for="password" class="# col-form-label text-md-right">{{ __('パスワード') }}</label></legend>

                                <div class="#">
                                    <input id="password" type="password" class="w-100 form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <fieldset class="border-flame">
                                    <legend><label for="password-confirm" class="# col-form-label text-md-right">{{ __('パスワードの確認') }}</label></legend>

                                <div class="#">
                                    <input id="password-confirm" type="password" class="w-100 form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <fieldset class="border-flame">
                                    <legend><label for="job" class="# col-form-label text-md-right">{{ __('職業') }}</label></legend>

                                <div class="#">
                                    <input id="job" type="text" class="w-100 form-control @error('job') is-invalid @enderror" name="job" value="{{ old('job') }}" required autocomplete="job" autofocus>

                                    @error('job')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </fieldset>
                            </div>
                            <div class="form-group row">
                                <fieldset class="border-flame">
                                    <legend><label for="weapon" class="# col-form-label text-md-right">{{ __('武器') }}</label></legend>

                                <div class="#">
                                    <input id="weapon" type="text" class="w-100 form-control @error('weapon') is-invalid @enderror" name="weapon" value="{{ old('weapon') }}" required autocomplete="weapon" autofocus>

                                    @error('weapon')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </fieldset>
                            </div>
                            <div class="form-group row">
                                <fieldset class="border-flame">
                                    <legend><label for="technique" class="# col-form-label text-md-right">{{ __('必殺技') }}</label></legend>

                                <div class="#">
                                    <input id="technique" type="text" class="w-100 form-control @error('technique') is-invalid @enderror" name="technique" value="{{ old('technique') }}" required autocomplete="technique" autofocus>

                                    @error('technique')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </fieldset>
                            </div>
                            <div class="form-group row">
                                <fieldset class="border-flame">
                                    <legend><label for="character" class="# col-form-label text-md-right">{{ __('キャラ紹介') }}</label></legend>

                                <div class="#">
                                    <input id="character" type="text" class="w-100 form-control @error('character') is-invalid @enderror" name="character" value="{{ old('character') }}" required autocomplete="character" autofocus>

                                    @error('character')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </fieldset>
                            </div>
                        
                            

                            <div class="form-group row mb-0">
                                <div class="# offset-md-4 sign-up-set">
                                    <button type="submit" class="btn btn-primary set-btn">
                                        {{ __('登録する') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>
