@extends('page.base')

@section('title')
    Accueil
@endsection

@section('contenu')
<div class="container">
    <div class="row">
         <div class="col-lg-6 mt-5 mt-lg-0 text-center fw-bold">
              <!--h6>form in ajax</h6-->
            <form id="formSendContact" action="{{ route('ct2') }}" method="POST" class="btM php-email-form">
              @csrf
              <div class="row">
                @if(session()->has('successSend'))
                    <div class="alert alert-success">
                        <h3>{{ session()->get('successSend') }}</h3>
                    </div>                    
                @endif 
                @if(session()->has('contact'))
                    <div class="alert alert-danger">
                        <h3>{{ session()->get('errorSend') }}kkkk</h3>
                    </div>                    
                @endif 
                <div class="col-md-12 form-group">
                  <span>{{ $errors->has('name') }} {{ $errors->first('name') }}</span>
                  <span class="text-danger error-text name_error"></span>
                  <input type="text" name="name" class="form-control" id="name" placeholder="Votre Nom" value="{{ old('name') }}" required>
                  @error('name')
                    <div class="validate text-danger">{{$message}}</div>
                  @enderror
                </div>
                <div class="col-md-12 form-group mt-3 mt-md-0">
                  <span>{{ $errors->has('email') }} {{ $errors->first('email') }}</span>
                  <span class="text-danger error-text email_error"></span>
                  <input type="email" class="form-control" name="email" id="email" placeholder="Votre Email" value="{{ old('email') }}" required>
                  @error('email')
                    <div class="validate text-danger">{{$message}}</div>
                  @enderror
                </div>
              </div>
              <div class="form-group mt-3">
                <span>{{ $errors->has('subject') }} {{ $errors->first('subject') }}</span>
                <span class="text-danger error-text subject_error"></span>
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Sujet" data-rule="minlen:4" value="{{ old('subject') }}" required>
                @error('subject')
                  <div class="validate text-danger">{{$message}}</div>
                @enderror
              </div>
              <div class="form-group mt-3">
                <span>{{ $errors->has('msg') }} {{ $errors->first('msg') }}</span>
                <span class="text-danger error-text msg_error"></span>
                <textarea class="form-control" name="msg" id="msg" rows="5" placeholder="Message" required>{{ old('msg') }}</textarea>
                @error('msg')
                  <div class="validate text-danger">{{$message}}</div>
                @enderror
              </div>             
              <div class="text-center"><button id="btnContactSend" type="submit">Envoyer Message</button></div>
            </form>
          </div>
    </div>
</div>
@endsection