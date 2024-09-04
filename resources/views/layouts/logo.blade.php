
    <!-- ***** Header Area End ***** -->

      <!-- Custom styles for this template -->
<x-header>
 <!-- ***** Main Banner Area Start ***** -->
     <br>
     <div class="main pb-20" style="background-image: url(assets/kpd/back.jpeg);background-size: cover;">
        <div id="drag-container" class="py-20" >
           <div id="spin-container" class="py-10">

             <!-- Add your images (or video) here -->
             <img src="\assets\kpd\embroidery.jpeg" class="">
             <img src="\assets\kpd\embroidery4.jpeg" class="">
             <img src="\assets\kpd\embroidery3.jpeg" class="" >
             <img src="\assets\kpd\embroidery5.jpeg" class="" >
             <img src="\assets\kpd\embroidery8.jpeg" class="" >
             <img src="\assets\kpd\embroidery7.jpeg" class="">
             <img src="\assets\kpd\embroidery8.jpeg" class="">

             <p class="font-bold text-4xl">Embroidery</p>
             </div>
             <div id="ground"></div>
           </div>
       </div>

    <br>
    <x-flash />
    <div class="pb-20">
        <div class="py-20">
        <main class="container rounded-2xl px-10 py-10" style="background-image: url(assets/kpd/back.jpeg);background-size: cover;">
          <div class="pt-5 text-center">
            <h2 class="font-medium text-white p-5" style="border-bottom: 1px solid black; font-family: verdana;">UPLOAD DESIGN</h2>
          </div>

          <div class="row g-5 px-10">
            <div class="col-md-5 col-lg-4 order-md-last">
              <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-primary font-bold" style="font-family: cursive;">PRICE</span>
                <span class="badge bg-primary rounded-pill text-white">3</span>
              </h4>
              <ul class="list-group mb-3 py-8">
                <li class="list-group-item d-flex justify-content-between lh-sm">
                  <div>
                    <h6 class="my-0">Embroidery</h6>
                    <small class="text-muted">Based on the Requested Size</small>
                  </div>
                  <span class="text-muted">#0</span>
                </li>
            </div>
            <div class="col-md-7 col-lg-8">
              <h4 class="mb-3 font-bold text-primary" style="font-family: cursive;">
                INPUT
              </h4>

              <form method="POST" action="/embroidery"  class="" enctype="multipart/form-data">
                @csrf
                <div class="row g-3">
                  <div class="col-sm-6 pb-10">
                    <label for="firstName" class="form-label text-white">First name</label>
                    <input type="text" class="form-control border-dark" id="firstName" placeholder="First name" name="firstname" required>
                    <div class="invalid-feedback">
                      Valid first name is required.
                    </div>
                    @error('firstname')
                    <p class="text-red text-xl">{{$message}}</p>
                     @enderror
                  </div>

                  <div class="col-sm-6 pb-10">
                    <label for="lastName" class="form-label text-white">Last name</label>
                    <input type="text" class="form-control border-dark" id="lastName" placeholder="Last name" value="" name="lastname" required>
                    <div class="invalid-feedback">
                      Valid last name is required.
                    </div>
                    @error('lastname')
                    <p class="text-red text-xl">{{$message}}</p>
                     @enderror
                  </div>


                  <div class="col-12 pb-10">
                    <label for="email" class="form-label text-white">Email <span class="text-muted text-white">(Optional)</span></label>
                    <input type="email" class="form-control border-dark" id="email" placeholder="Email" name="email">
                    <div class="invalid-feedback">
                      Please enter a valid email address
                    </div>
                    @error('email')
                    <p class="text-red text-xl">{{$message}}</p>
                     @enderror
                  </div>

                  <div class="col-12 pb-10">
                    <label for="address" class="form-label text-white">Phone</label>
                    <input type="text" class="form-control border-dark" id="phone" placeholder="Location" required name="phone">
                    <div class="invalid-feedback">
                      Please enter your number
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
                    <input type="text" class="form-control border-dark" id="address" placeholder="" name="address" required>
                    <div class="invalid-feedback">
                      Please enter your delivery address.
                    </div>
                    @error('address')
                    <p class="text-red text-xl">{{$message}}</p>
                     @enderror
                  </div>

                  <div class="col-12 pb-10">
                    <label for="address2" class="form-label text-white">Material <span class="text-muted text-white"></span></label>
                    <input type="text" class="form-control border-dark" id="address2" placeholder="Type of Material" name="material">
                    @error('material')
                    <p class="text-red text-xl">{{$message}}</p>
                     @enderror
                  </div>

                  <div class="col-12 pb-10">
                    <label for="address2" class="form-label text-white">Design Name</span></label>
                    <input type="text" class="form-control border-dark" id="address2" placeholder="Name" name="name">
                    @error('name')
                    <p class="text-red text-xl">{{$message}}</p>
                     @enderror
                  </div>

                  <div class="col-12 pb-10">
                    <label for="address2" class="form-label text-white">Height</span></label>
                    <input type="text" class="form-control border-dark" id="address2" placeholder="Material Height" name="height">
                    @error('height')
                    <p class="text-red text-xl">{{$message}}</p>
                     @enderror
                  </div>

                  <div class="col-12 pb-10">
                    <label for="address2" class="form-label text-white">Width</span></label>
                    <input type="text" class="form-control border-dark" id="address2" placeholder="Material Width" name="width">
                    @error('width')
                    <p class="text-red text-xl">{{$message}}</p>
                     @enderror
                  </div>

                  <div class="mb-3 pb-2 col-12">
                    <label for="address2" class="form-label text-white"> Upload all Designs  </span></label>
                    <input type="file" class="form-control form-control-md" id="address2" name="logo2[]" multiple aria-label="Small file input example">
                  </div>

                  <div class="col-12 pb-10">
                    <label for="address2" class="form-label text-white">Description</span></label>
                    <div class="input-group">
                        <textarea class="form-control" aria-label="With textarea" rows="5%" name="description"></textarea>
                      </div>
                      @error('description')
                    <p class="text-red text-xl">{{$message}}</p>
                     @enderror
                  </div>

                <hr class="my-4">



                <div class="form-check px-10 pb-5">
                  <input type="checkbox" class="form-check-input" id="save-info">
                  <label class="form-check-label text-white" for="save-info">Save this information for next time</label>
                </div>

                <button class="w-full bg-primary text-white btn-lg rounded-2xl" type="submit">SUBMIT</button>

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
