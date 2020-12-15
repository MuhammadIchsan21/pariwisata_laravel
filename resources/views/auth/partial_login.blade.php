<form class="form-horizontal" method="POST" action="{{ route('login') }}">
    {{ csrf_field() }}

    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        <label for="email" class="col-md-4 control-label">Email Anda</label>

        <div class="col-md-6">
            <input id="email" type="email" class="form-control" name="email" required autofocus>

            @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
        <label for="password" class="col-md-4 control-label">Kata Sandi</label>

        <div class="col-md-6">
            <input id="password" type="password" class="form-control" name="password"  required>

            @if ($errors->has('password'))
            <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
            @endif
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-6 col-md-offset-4">
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Ingat Saya
                </label>
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    Lupa Kata Sandi?
                </a> 
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-12">
            <button type="submit" class="btn btn-block btn-primary">
                Masuk
            </button>

        </div>
    </div>
</form>