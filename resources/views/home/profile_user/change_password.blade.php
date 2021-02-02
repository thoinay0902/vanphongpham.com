@extends('home.profile_user.layout_profile_user')
@section('content-profile-col-9')

<style>

    .hidden_clip {
        clip: rect(1px 1px 1px 1px); // IE6, IE7
        clip: rect(1px, 1px, 1px, 1px);
        position: absolute;
      }
      .form__field__wrapper {
        position: relative;
      }
      .show-hide-password {
        background: 0;
        border: 0;
        cursor: pointer;
        min-height: 60px;
        min-width: 70px;
        padding: 18px;
        position: absolute;
        right: 0;
        top: 14px;
      }

</style>

<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">

    <fieldset class="required form__change-password">
      <legend class="form__legend">
        Đổi mật khẩu </legend>
      <div class="form__field__wrapper form-item">
        <label for="edit-old-pass" class="text-input__label--floated">Mật khẩu cũ <span class="form-required" aria-hidden="true" title="This field is required.">*</span><span class="hidden_clip">a required field.</span></label>
        <input class="form-control form-text password__field text-input__field--floated required" type="password" id="edit-old-pass" name="old_pass" size="60" maxlength="128" aria-required="true">
        <div class="show-hide-password js-showHidePassword" tabindex="0">
          <span class="hidden_clip">click this button to show or hide the password</span>
          <span aria-hidden="true">Hiện</span>
        </div>
  
      </div>
      <div class="form__field__wrapper form-item">
        <label for="edit-new-pass" class="text-input__label--floated">Mật khẩu mới <span class="form-required" aria-hidden="true" title="This field is required.">*</span><span class="hidden_clip">a required field.</span></label>
        <input class="form-control form-text password__field text-input__field--floated required" type="password" id="edit-new-pass" name="new_pass" size="60" maxlength="128" aria-required="true">
        <div class="show-hide-password js-showHidePassword" tabindex="0">
          <span class="hidden_clip">click this button to show or hide the password</span>
          <span aria-hidden="true">Hiện</span>
        </div>

        <input style = "margin-top: 10px" type="submit" name="" value="Đổi" />
  
      </div>
    </fieldset>
  
  </div>

  <script>

    function showHidePasswordfn() {
        // The last span inside the button
        var showHideBtn = $(this);
      
        var showHideSpan = showHideBtn.children().next();
        var $pwd = showHideBtn.prev('input');
      
        // Toggle a classe called toggleShowHide to thee button
        $(showHideBtn).toggleClass('toggleShowHide');
        // If the button has the class toggleShowHide change the text of the last span inside it
        showHideSpan.text(showHideBtn.is('.toggleShowHide') ? 'Hide' : 'Show');
      
        if ($pwd.attr('type') === 'password') {
          $pwd.attr('type', 'text');
        } else {
          $pwd.attr('type', 'password');
        }
      }
      
      // On Click
      $('.js-showHidePassword').on('click', showHidePasswordfn);
      
      // On Enter Key
      $('.js-showHidePassword').keypress(function(e) {
        // the enter key code
        if (e.which === keyCodes.enter) {
          showHidePasswordfn();
        }
      });

  </script>


@endsection