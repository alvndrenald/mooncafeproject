<x-app-layout title="Login">
    <div class="d-flex justify-content-center align-items-center">
        <div class="my-5">
            <div class="fw-bold d-flex justify-content-center bg-light align-items-center" style="height:60px;">
                Login
            </div>
            <div class="bg-white p-5">
                <form class="" style="width:400px;" action="{{ route('login.validate') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label fw-normal">Email address</label>
                        <input type="email" id="email" class="form-control @error('email')is-invalid @enderror" name="email" placeholder="Enter Your Email" required>
                        @error('email')
                            <p class="mt-2 text-danger"><span class="fw-medium"></span>{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label fw-normal">Password</label>
                        <input type="password" id="password"class="form-control @error('password')is-invalid @enderror" name="password" placeholder="Enter Your Password" required>
                        @error('password')
                            <p class="mt-2 text-danger"><span class="fw-medium"></span>{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" id="remember" class="form-check-input" name="remember">
                        <label class="form-check-label" for="remember">Remember Me</label>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-outline-secondary" style="width:160px;">Login</button>
                    </div>
                    <div class="d-flex py-3">
                        <hr class="my-auto flex-grow-1">
                        <span class="px-4">OR</span>
                        <hr class="my-auto flex-grow-1">
                    </div>
                    <div class="social-auth-links text-center mt-2 mb-3">
                        <a href='{{route('login.google')}}' class="btn border border-primary"><img width="20px"
                            style="margin-bottom:3px; margin-right:5px" alt="Google sign-in"
                            src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Google_%22G%22_Logo.svg/512px-Google_%22G%22_Logo.svg.png" />
                        Login With Google Account
                        </a>
                    </div>
                </form>
                <div class="mt-3">
                    Don't have an account? <a href="{{ route('register.show') }}"><u>Register Here</u></a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
