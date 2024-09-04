
    <!-- ***** Header Area End ***** -->

      <!-- Custom styles for this template -->
<x-header>
 <!-- ***** Main Banner Area Start ***** -->
 <br>
 <div class="main pb-20" style="background-image: url(assets/kpd/back.jpeg);background-size: cover;">
    <div id="drag-container" class="py-20" >
       <div id="spin-container" class="py-10">

         <!-- Add your images (or video) here -->
         <img src="\assets\kpd\ctp2.jpg" class="">
         <img src="\assets\kpd\ctp3.jpg" class="">
         <img src="\assets\kpd\ctp4.jpeg" class="" >
         <img src="\assets\kpd\ctp5.jpg" class="" >
         <img src="\assets\kpd\ctp6.png" class="" >
         <img src="\assets\kpd\ctp7.jpeg" class="">
         <img src="\assets\kpd\ctp.jpeg" class="">

         <p class="font-bold text-4xl">Ctp-Platemaking</p>
         </div>
         <div id="ground"></div>
       </div>
   </div>

    <br>
    <div class="pb-20">
        <div class="py-20">
        <main class="container bg-black rounded-2xl px-10 py-10" style="background-image: url(assets/kpd/back.jpeg);background-size: cover;">
          <div class="pt-5 text-center">
            <h2 class="font-medium text-white p-5" style="border-bottom: 1px solid black; font-family: verdana;">UPLOAD DESIGN</h2>
          </div>

          <div class="row g-5 px-10">
            <div class="col-md-5 col-lg-4 order-md-last">
              <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-primary font-bold" style="font-family: cursive;">PRICE</span>
                <span class="badge bg-primary rounded-pill text-white">4</span>
              </h4>
              <ul class="list-group mb-3 py-8">
                <li class="list-group-item d-flex justify-content-between lh-sm">
                  <div>
                    <h6 class="my-0">KORD</h6>
                    <small class="text-muted"></small>
                  </div>
                    <span class="text-muted">#2000</span>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-sm">
                    <div>
                      <h6 class="my-0">201</h6>
                      <small class="text-muted"></small>
                    </div>
                      <span class="text-muted">#1000</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between lh-sm">
                    <div>
                      <h6 class="my-0">GTO</h6>
                      <small class="text-muted"></small>
                    </div>
                      <span class="text-muted">#2500</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between lh-sm">
                    <div>
                      <h6 class="my-0">SORD</h6>
                      <small class="text-muted"></small>
                    </div>
                      <span class="text-muted">#4000</span>
                  </li>
            </div>

            <div class="col-md-7 col-lg-8">
              <h4 class="mb-3 font-bold text-primary" style="font-family: cursive;">
                INPUT
              </h4>
              <form class="needs-validation" method="POST" action="/storectp" enctype="multipart/form-data">
                @csrf
                <div class="row g-3">
                  <div class="col-sm-6 pb-10">
                    <label for="firstName" class="form-label text-white">First name</label>
                    <input type="text" class="form-control border-dark" id="firstName" placeholder="First name" value="{{old('firstname')}}" required name="firstname">
                    <div class="invalid-feedback">
                      Valid first name is required.
                    </div>
                    @error('firstname')
                    <p class="text-red text-xl">{{$message}}</p>
                    @enderror
                  </div>

                  <div class="col-sm-6 pb-10">
                    <label for="lastName" class="form-label text-white">Last name</label>
                    <input type="text" class="form-control border-dark" id="lastName" placeholder="Last name" value="{{old('lastname')}}" required name="lastname">
                    <div class="invalid-feedback">
                      Valid last name is required.
                    </div>
                    @error('lastname')
                    <p class="text-red text-xl">{{$message}}</p>
                    @enderror
                  </div>


                  <div class="col-12 pb-10">
                    <label for="email" class="form-label text-white">Email <span class="text-muted text-white">(Optional)</span></label>
                    <input type="email" class="form-control border-dark" id="email" placeholder="Email" name="email" value="{{old('email')}}">
                    <div class="invalid-feedback">
                      Please enter a valid email address for delivery updates.
                    </div>
                    @error('email')
                    <p class="text-red text-xl">{{$message}}</p>
                    @enderror
                  </div>

                  <div class="col-12 pb-10">
                    <label for="address" class="form-label text-white">Phone</label>
                    <input type="text" class="form-control border-dark" id="address"  name="phone" value="{{old('phone')}}" placeholder="Number" required>
                    <div class="invalid-feedback">
                      Please enter your Phone number.
                    </div>
                    @error('phone')
                    <p class="text-red text-xl">{{$message}}</p>
                    @enderror
                  </div>


                  <div class="col-12 pb-10">
                    <label for="address2" class="form-label text-white">State</span></label>
                    <select class="form-control form-select-lg mb-3 name" onchange="toggleLGA(this);" id="state" name="state" value="state">
                        <option value="" selected="selected" style="color:grey;"> State </option>
                        <option value="Abia">Abia</option>
                        <option value="Adamawa">Adamawa</option>
                        <option value="AkwaIbom">AkwaIbom</option>
                        <option value="Anambra">Anambra</option>
                        <option value="Bauchi">Bauchi</option>
                        <option value="Bayelsa">Bayelsa</option>
                        <option value="Benue">Benue</option>
                        <option value="Borno">Borno</option>
                        <option value="Cross River">Cross River</option>
                        <option value="Delta">Delta</option>
                        <option value="Ebonyi">Ebonyi</option>
                        <option value="Edo">Edo</option>
                        <option value="Ekiti">Ekiti</option>
                        <option value="Enugu">Enugu</option>
                        <option value="FCT">FCT</option>
                        <option value="Gombe">Gombe</option>
                        <option value="Imo">Imo</option>
                        <option value="Jigawa">Jigawa</option>
                        <option value="Kaduna">Kaduna</option>
                        <option value="Kano">Kano</option>
                        <option value="Katsina">Katsina</option>
                        <option value="Kebbi">Kebbi</option>
                        <option value="Kogi">Kogi</option>
                        <option value="Kwara">Kwara</option>
                        <option value="Lagos">Lagos</option>
                        <option value="Nasarawa">Nasarawa</option>
                        <option value="Niger">Niger</option>
                        <option value="Ogun">Ogun</option>
                        <option value="Ondo">Ondo</option>
                        <option value="Osun">Osun</option>
                        <option value="Oyo">Oyo</option>
                        <option value="Plateau">Plateau</option>
                        <option value="Rivers">Rivers</option>
                        <option value="Sokoto">Sokoto</option>
                        <option value="Taraba">Taraba</option>
                        <option value="Yobe">Yobe</option>
                        <option value="Zamfara">Zamafara</option>
                    </select>
                </div>
        
                <div class="col-12 pb-10">
                  <label for="address2" class="form-label text-white">LGA</span></label>
                    <select style="color:navy;" name="city" class="form-control form-select-lg mb-3 name select-lga" aria-label=".form-select-lg example" id="lga" required>
                        <option value="" selected="selected"> Select LGA </option>
                    </select>
                </div>

                  <div class="col-12 pb-10">
                    <label for="address" class="form-label text-white">Delivery Address</label>
                    <input type="text" class="form-control border-dark" id="address" placeholder="1234 Main St" required name="address" value="{{old('delivery')}}">
                    <div class="invalid-feedback">
                      Please enter your address.
                    </div>
                    @error('address')
                    <p class="text-red text-xl">{{$message}}</p>
                    @enderror
                  </div>

                  <div class="col-12 pb-10">
                    <label for="address2" class="form-label text-white">Type of Plate</span></label>
                    <select class="form-control form-select-lg mb-3" aria-label=".form-select-lg example" name="plate">
                     @foreach ($product as $plate)
                     <option selected>{{$plate->KORD}}</option>
                      <option>{{$plate->GTO}}</option>
                      <option>{{$plate->SORD}}</option>
                      <option>{{$plate['201']}}</option>
                     @endforeach
                    </select>
                    @error('plate')
                    <p class="text-red text-xl">{{$message}}</p>
                    @enderror
                  </div>

                  <div class="col-12 pb-10">
                    <label for="address2" class="form-label text-white">Color</span></label>
                    <select class="form-control form-select-lg mb-3" aria-label=".form-select-lg example" name="color">
                     @foreach ($product as $color)
                     <option selected>{{$color['1-color']}}</option>
                      <option>{{$color['2-color']}}</option>
                      <option>{{$color['3-color']}}</option>
                      <option>{{$color['4-color']}}</option>
                     @endforeach
                    </select>
                    @error('plate')
                    <p class="text-red text-xl">{{$message}}</p>
                    @enderror
                  </div>

                  <div class="col-12 pb-10">
                    <label for="address2" class="form-label text-white"> Name of Plate</span></label>
                    <input type="text" class="form-control border-dark" id="address2" placeholder="Name" name="name">
                  </div>

                  <div class="col-12 pb-10">
                    <label for="address" class="form-label text-white">Quantity</label>
                    <input type="text" class="form-control border-dark" id="address" placeholder="Quantity of Plates" required name="quantity" value="{{old('quantity')}}">
                    <div class="invalid-feedback">
                      Quantity of Plate
                    </div>
                    @error('quantity')
                    <p class="text-red text-xl">{{$message}}</p>
                    @enderror
                  </div>

                  <div class="mb-3 pb-2 col-12">
                    <label for="address2" class="form-label text-white"> Upload Design </span></label>
                    <input type="file" class="form-control form-control-md" id="address2" name="logo3[]" multiple aria-label="Small file input example" required>
                  </div>

                  <div class="col-12 pb-10">
                    <label for="address2" class="form-label text-white">Description</span></label>
                    <div class="input-group">
                        <textarea class="form-control" aria-label="With textarea" rows="5%" name="description"></textarea>
                      </div>
                  </div>

                <hr class="my-4">



                <div class="form-check px-10 pb-5">
                  <input type="checkbox" class="form-check-input" id="save-info">
                  <label class="form-check-label text-white" for="save-info">Save this information for next time</label>
                </div>

                <button class="w-full bg-primary text-white btn-lg rounded-2xl" type="submit">Submit</button>

              </form>
              <br>
            </div>
            </div>
          </div>
        </div>
    </div>
        </main>



    <!-- ***** Product Area Ends ***** -->

    <!-- ***** Footer Start ***** -->

<div class="" style="position: relative; top: 45px;">
<x-footer />
</div>
</x-header>
