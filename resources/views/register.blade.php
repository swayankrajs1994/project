<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
    .gradient-custom {
/* fallback for old browsers */
background: #f093fb;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to bottom right, rgba(240, 147, 251, 1), rgba(245, 87, 108, 1));

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to bottom right, rgba(240, 147, 251, 1), rgba(245, 87, 108, 1))
}

.card-registration .select-input.form-control[readonly]:not([disabled]) {
font-size: 1rem;
line-height: 2.15;
padding-left: .75em;
padding-right: .75em;
}
.card-registration .select-arrow {
top: 13px;
}
</style>

<section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
      <div class="row justify-content-center align-items-center h-100">
        <div class="col-12 col-lg-9 col-xl-7">
          <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
            <div class="card-body p-4 p-md-5">
              <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h3>
              @if ($errors->any())
            <div class="alert alert-danger">
            <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach

            @if(session('message'))

            <p class ="alert alert-success">
                {{session('message')}}
            </p>

           @endif
               </ul>
            </div>
          @endif
              <form action="{{url('/store')}}" method="post">
                @csrf
                <div class="row">
                  <div class="col-md-12 mb-4">

                    <div class="form-outline">
                      <input type="text" name="name" id="firstName" class="form-control form-control-lg" />
                      <label class="form-label" for="name">Name</label>
                    </div>

                  </div>

                  <div class="row">
                    <div class="col-md-12 mb-4">

                      <div class="form-outline">
                        <input type="email" id="firstName" name="email" class="form-control form-control-lg" />
                        <label class="form-label" for="name">Email</label>
                      </div>

                    </div>

                    <div class="row">
                        <div class="col-md-12 mb-4">

                          <div class="form-outline">
                            <input type="password" name="password" id="firstName" class="form-control form-control-lg" />
                            <label class="form-label" for="name">Password</label>
                          </div>

                        </div>

                <div class="mt-4 pt-2">
                  <input class="btn btn-primary btn-lg" type="submit" value="Submit" />
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
