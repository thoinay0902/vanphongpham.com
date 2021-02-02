@extends('layout.layout')

@section('title', 'Đăng ký')

@section('content')

    <style>

        section {
        position: relative;
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 20px;
        }

        section .container {
        position: relative;
        width: 800px;
        height: 500px;
        background: #fff;
        box-shadow: 0 15px 50px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        }

        section .container .user {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: flex;
        }

        section .container .user .imgBx {
        position: relative;
        width: 50%;
        height: 100%;
        background: #ff0;
        transition: 0.5s;
        }

        section .container .user .imgBx img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        }

        section .container .user .formBx {
        position: relative;
        width: 50%;
        height: 100%;
        background: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 40px;
        transition: 0.5s;
        }

        section .container .user .formBx form h2 {
        font-size: 18px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 2px;
        text-align: center;
        width: 100%;
        margin-bottom: 10px;
        color: #555;
        }

        section .container .user .formBx form input {
        position: relative;
        width: 100%;
        padding: 10px;
        background: #f5f5f5;
        color: #333;
        border: none;
        outline: none;
        box-shadow: none;
        margin: 8px 0;
        font-size: 14px;
        letter-spacing: 1px;
        font-weight: 300;
        }

        section .container .user .formBx form input[type='submit'] {
        max-width: 100px;
        background: #677eff;
        color: #fff;
        cursor: pointer;
        font-size: 14px;
        font-weight: 500;
        letter-spacing: 1px;
        transition: 0.5s;
        }

        section .container .user .formBx form .signup {
        position: relative;
        margin-top: 20px;
        font-size: 12px;
        letter-spacing: 1px;
        color: #555;
        text-transform: uppercase;
        font-weight: 300;
        }

        section .container .user .formBx form .signup a {
        font-weight: 600;
        text-decoration: none;
        color: #677eff;
        }

        section .container .signupBx {
        pointer-events: none;
        }

        section .container.active .signupBx {
        pointer-events: initial;
        }

        section .container .signupBx .formBx {
            left: 100%;
        }

        section .container.active .signupBx .formBx {
            left: 0;
        }

        section .container .signupBx .imgBx {
            left: -100%;
        }

        section .container.active .signupBx .imgBx {
            left: 0%;
        }

        section .container .signinBx .formBx {
            left: 0%;
        }

        section .container.active .signinBx .formBx {
            left: 100%;
        }

        section .container .signinBx .imgBx {
            left: 0%;
        }

        section .container.active .signinBx .imgBx {
            left: -100%;
        }

        @media (max-width: 991px) {
            section .container {
                max-width: 400px;
            }

            section .container .imgBx {
                display: none;
            }

            section .container .user .formBx {
                width: 100%;
            }
        }

    </style>




    <section>
        <div class="container">
          <div class="user">
            <div class="formBx">
              <form action="" method="" >
                    <h2>Tạo một tài khoản</h2>
                    <input type="Họ và tên" name="inputFullname" placeholder="Họ và tên" />
                    <input type="email" name="inputEmail" placeholder="Địa chỉ email" />
                    <input type="Tên tài khoản" name="inputUsername" placeholder="Tên tài khoản" />
                    <input type="password" name="inputPassword" placeholder="Mật khẩu" />
                    <input type="password" name="inputRetypePassword" placeholder="Nhập lại mật khẩu" />
                    <input type="submit" name="" value="Đăng ký" />
                    <p class="signup">
                      Bạn đã có tài khoản ?
                      <a href="{{ url('page-login') }}">Đăng nhập.</a>
                    </p>
                  </form>
            </div>
            <div class="imgBx"><img src="{{url('public/home/img/categories/cat-2.jpg')}}" alt="" /></div>
          </div>
        </div>
    </section>

    <script>
        const toggleForm = () => {
            const container = document.querySelector('.container');
            container.classList.toggle('active');
          };
    </script>

@endsection
