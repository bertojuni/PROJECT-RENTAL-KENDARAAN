@extends('layouts.account')

@section('title')
Reset Password | MANAGEMENT
@stop

<style>
  .password-input {
    position: relative;
  }

  .password-toggle {
    position: absolute;
    right: 10px;
    top: 50%;
    transform: translateY(-50%);
    cursor: pointer;
  }

  .password-toggle2 {
    position: absolute;
    right: 10px;
    top: 50%;
    transform: translateY(-50%);
    cursor: pointer;
  }
</style>

@section('content')
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>PASSWORD</h1>
    </div>



    <div class="section-body">

      <!--================== jika maintenace aktif ==================-->
      @if (!$maintenances->isEmpty())
      @foreach($maintenances as $maintenance)
      @if ($maintenance->status === 'aktif' || ($maintenance->end_date !== null && now() <= Carbon\Carbon::parse($maintenance->end_date)->endOfDay()))
        <div class="alert alert-danger" role="alert" style="text-align: center;">
          <b style="font-size: 25px; text-transform:uppercase">INFORMASI!</b><br>
          <!-- <img style="width: 100px; height:100px;" src="{{ asset('images/' . $maintenance->gambar) }}" alt="Gambar Presensi" class="img-thumbnail"> -->
          <p style="font-size: 20px;" class="mt-2">{{ $maintenance->note }}</p>
          <p style="font-size: 15px;">Dari Tanggal {{ \Carbon\Carbon::parse($maintenance->start_date)->isoFormat('D MMMM YYYY HH:mm') }} - {{ \Carbon\Carbon::parse($maintenance->end_date)->isoFormat('D MMMM YYYY HH:mm') }}</p>
        </div>
        @endif
        @endforeach
        @endif
        <!--================== end ==================-->

        <div class="card">
          <div class="card-header">
            <h4><i class="fas fa-unlock-alt"></i> RESET PASSWORD</h4>
          </div>

          <div class="card-body">

            <form action="{{ route('account.profil.resetpassword', $user->id) }}" method="POST">
              @csrf
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="full_name" class="form-control" value="{{ old('full_name', $user->full_name) }}" class="form-control currency" maxlength="30" minlength="5" onkeypress="return/[a-zA-Z ]/i.test(event.key)" readonly>

                    @error('full_name')
                    <div class="invalid-feedback" style="display: block">
                      {{ $message }}
                    </div>
                    @enderror
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" value="{{ old('email', $user->email) }}" maxlength="30" minlength="5" onkeypress="return/[a-zA-Z0-9@.]/i.test(event.key)" readonly>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Nama Perusahaan</label>
                    <input type="text" name="company" class="form-control" value="{{ old('company', $user->company) }}" maxlength="30" minlength="5" onkeypress="return/[A-Z]/i.test(event.key)" style="text-transform:uppercase" readonly>

                    @error('company')
                    <div class="invalid-feedback" style="display: block">
                      {{ $message }}
                    </div>
                    @enderror
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label>No Telp</label>
                    <input type="text" name="telp" class="form-control" value="{{ old('telp', $user->telp) }}" maxlength="14" minlength="8" onkeypress="return event.charCode >= 48 && event.charCode <=57" readonly>

                    @error('telp')
                    <div class="invalid-feedback" style="display: block">
                      {{ $message }}
                    </div>
                    @enderror
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" value="{{ old('username', $user->username) }}" maxlength="30" minlength="5" onkeypress="return/[a-zA-Z0-9 ]/i.test(event.key)" readonly>
                    @error('username')
                    <div class="invalid-feedback" style="display: block">
                      {{ $message }}
                    </div>
                    @enderror
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Password</label>
                    <div class="password-input">
                      <input type="password" id="password" class="form-control" name="password" data-indicator="pwindicator" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Harus berisi setidaknya satu angka dan satu huruf besar dan kecil, dan setidaknya 8 karakter atau lebih" required>
                      <i class="fas fa-eye password-toggle" id="password-toggle"></i>
                    </div>
                    @error('password')
                    <div class="invalid-feedback" style="display: block">
                      {{ $message }}
                    </div>
                    @enderror
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Konfirmasi Password</label>
                    <div class="password-input">
                      <input id="password2" type="password" class="form-control" name="password_confirmation" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Harus berisi setidaknya satu angka dan satu huruf besar dan kecil, dan setidaknya 8 karakter atau lebih" required>
                      <i class="fas fa-eye password-toggle2" id="password-toggle2"></i>
                    </div>
                  </div>
                </div>
              </div>

              <button class="btn btn-primary mr-1 btn-submit" type="submit"><i class="fa fa-paper-plane"></i> UPDATE</button>
              <button class="btn btn-warning btn-reset" type="reset"><i class="fa fa-redo"></i> RESET</button>

            </form>

          </div>
        </div>
    </div>
  </section>
</div>

<!-- show and hide password -->
<script>
  const passwordInput = document.getElementById('password');
  const passwordToggle = document.getElementById('password-toggle');

  passwordToggle.addEventListener('click', function() {
    if (passwordInput.type === 'password') {
      passwordInput.type = 'text';
      passwordToggle.classList.remove('fa-eye');
      passwordToggle.classList.add('fa-eye-slash');
    } else {
      passwordInput.type = 'password';
      passwordToggle.classList.remove('fa-eye-slash');
      passwordToggle.classList.add('fa-eye');
    }
  });
  const passwordInput2 = document.getElementById('password2');
  const passwordToggle2 = document.getElementById('password-toggle2');

  passwordToggle2.addEventListener('click', function() {
    if (passwordInput2.type === 'password') {
      passwordInput2.type = 'text';
      passwordToggle2.classList.remove('fa-eye');
      passwordToggle2.classList.add('fa-eye-slash');
    } else {
      passwordInput2.type = 'password';
      passwordToggle2.classList.remove('fa-eye-slash');
      passwordToggle2.classList.add('fa-eye');
    }
  });
</script>


<script>
  $(".btn-submit").click(function() {
    $(".btn-submit").addClass('btn-progress');
    if (timeoutHandler) clearTimeout(timeoutHandler);

    timeoutHandler = setTimeout(function() {
      $(".btn-submit").removeClass('btn-progress');

    }, 1000);
  });

  /**
   * btn reset loader
   */
  $(".btn-reset").click(function() {
    $(".btn-reset").addClass('btn-progress');
    if (timeoutHandler) clearTimeout(timeoutHandler);

    timeoutHandler = setTimeout(function() {
      $(".btn-reset").removeClass('btn-progress');

    }, 500);
  })
</script>
@stop