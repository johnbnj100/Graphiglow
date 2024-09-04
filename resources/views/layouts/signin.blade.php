<x-header/>

    <div class="pb-10">
    <div class="w-full px-4 lg:w-1/2 xl:w-5/12 mx-auto py-20">
        <div class="relative rounded-2xl bg-white p-8 shadow-md dark:bg-dark-2 sm:p-12" style="background-image: url(assets/kpd/nest.jpeg); background-size: cover; line-height: 30px;">
            <div class="flex justify-center items-center" style="font-family: cursive;">
                <i class="fa fa-lightbulb-o" style=" color: white;font-size: 28px;"></i><h1 class="text-white text-2xl font-bold">Graphi<element style="color: darkorange" >Glow </element></h1>
            </div>
         <h1 class="text-center text-2xl text-white mx-auto container py-10 font-bold">SIGN IN</h1>

          <form method="POST" action="/signin/authenticate" enctype="multipart/form-data">
            @csrf
            <div class="mb-6">
                <label for="firstName" class="form-label text-white">Email</label>
              <input
                type="email"
                name="email"
                value="{{old('email')}}"
                placeholder="Email"
                class=" w-full rounded border border-stroke px-[14px] py-2 text-base text-body-color outline-none focus:border-primary dark:border-dark-3 dark:bg-dark dark:text-dark-6"
              />
              @error('email')
              <p class="text-red text-xl">{{$message}}</p>
          @enderror
            </div>

              <div class="mb-6">
                <label for="firstName" class="form-label text-white">Password</label>
                <input
                  type="password"
                  name="password"
                  value="{{old('password')}}"
                  placeholder="Password"
                  class="w-full rounded border border-stroke px-[14px] py-2 text-base text-body-color outline-none focus:border-primary dark:border-dark-3 dark:bg-dark dark:text-dark-6"
                />
                @error('password')
                <p class="text-red text-xl">{{$message}}</p>
                @enderror
              </div>

            <div class="pb-2 mt-5">
              <button
                type="submit"
                name="submit"
                class="font-bold text-xl w-full rounded border border-primary bg-primary p-3 text-white transition hover:bg-opacity-90"
              >
                SUBMIT
              </button>

            </div>
            <br>
            <p class="text-xl text-center text-white py-3">New to KPDprints?</p>
            <p class="bg-white py-2 px-5 text-center rounded text-xl"><a href="/signup" class="text-dark"> Create an Account </a></p>

        </form>
        </div>
    </div>
    </div>


          <div style="position: relative; top: 45px;" >
            <x-footer />
          </div>



