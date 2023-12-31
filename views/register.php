

    <div class="row py-5 mt-4 align-items-center">
        <!-- For Demo Purpose -->
        <div class="col-md-5 pr-lg-5 mb-5 mb-md-0">
            <img src="https://bootstrapious.com/i/snippets/sn-registeration/illustration.svg" alt="" class="img-fluid mb-3 d-none d-md-block">
            <h1>Create an Account</h1>
        </div>

        <!-- Registeration Form -->

        <div class="col-md-7 col-lg-6 ml-auto">



            <form method="post" action="" >
                <div class="row">

                    <input type="hidden" name="type" value="register">
                    <div class="input-group col-lg-6 mb-4">
                        <div class="input-group-prepend">

                        </div>
                        <input type="text" name="fullname" placeholder="Full Name" class="form-control bg-white border-left-0 border-md">
                    </div>

                    <!-- Email Address -->
                    <div class="input-group col-lg-12 mb-4">
                        <div class="input-group-prepend">

                        </div>
                        <input id="email" type="email" name="email" placeholder="Email Address" class="form-control bg-white border-left-0 border-md">
                        <input  type="tel" name="phone" placeholder="phone number" class="form-control bg-white border-left-0 border-md">
                    </div>

                    <div class="input-group col-lg-6 mb-4">
                        <div class="input-group-prepend">

                        </div>
                        <input id="password" type="password" name="password" placeholder="Password" class="form-control bg-white border-left-0 border-md">
                    </div>

                    <!-- Password Confirmation -->
                    <div class="input-group col-lg-6 mb-4">
                        <div class="input-group-prepend">

                        </div>
                        <input id="passwordConfirmation" type="password" name="passwordConfirmation" placeholder="Confirm Password" class="form-control bg-white border-left-0 border-md">
                    </div>

                    <!-- Submit Button -->
                    <div class="form-group col-lg-12 mx-auto mb-0">
                        <button name="submit" type="submit" value="regersterUser" class="btn btn-primary btn-block py-2">Create An Account</button>
                    </div>

                    <!-- Divider Text -->
                    <div class="form-group col-lg-12 mx-auto d-flex align-items-center my-4">
                        <div class="border-bottom w-100 ml-5"></div>
                        <span class="px-2 small text-muted font-weight-bold text-muted">OR</span>
                        <div class="border-bottom w-100 mr-5"></div>
                    </div>

                    <!-- Social Login -->
                    <div class="form-group col-lg-12 mx-auto">
                        <a href="#" class="btn btn-primary btn-block py-2 btn-facebook">
                            <i class="fab fa-facebook-f mr-2"></i>
                            <span class="font-weight-bold">Continue with Facebook</span>
                        </a>
                        <a href="#" class="btn btn-primary btn-block py-2 btn-twitter">
                            <i class="fab fa-twitter mr-2"></i>
                            <span class="font-weight-bold">Continue with Twitter</span>
                        </a>
                    </div>

                    <!-- Already Registered -->
                    <div class="text-center w-100">
                        <p class="text-muted font-weight-bold">Already Registered? <a href="/login" class="text-primary ml-2">Login</a></p>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>


