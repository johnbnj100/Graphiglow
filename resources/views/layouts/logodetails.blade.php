<x-header>
    <div class="" style="margin-top: 15vh;" ><x-flash />
        <div class="container p-10">
        <div class="text-center p-10 border border-transparent rounded-2xl shadow-lg">
        <div class="text-center">
             <h2 href="#" class="text-3xl pb-3" style=" font-family: monospace;"> Engage Your Price with us </h2>
             <i class="text-green pb-5 fa fa-whatsapp w-8" style="font-size: 30px;"></i>
             <a href="https://wa.link/dh72c9" class="text-2xl text-white bg-dark p-2 rounded-2xl" style="border-bottom: 1px solid black; font-family: monospace; background-image: url(assets/kpd/nest.jpeg); background-size: cover; line-height: 30px;"> Chat Us</a>
        </div>
        <h2 class="font-bold "> PAYMENT </h2>
        <div class="flex justify-content-around items-center">
            <ul class="" style="line-height: 50px;">
            <li class="font-bold">Account Name </li>
            <li class="font-bold">Account Number </li>
            <li class="font-bold">Bank </li>
            </ul>

            <ul class="" style="line-height: 50px;">
                @foreach ( $bank as $banks )
                <li>{{$banks->name}}</li>
                <li>{{$banks->number}}</li>
                <li>{{$banks->account}}</li>
                @endforeach
            </ul>
            </div>
            <div class="py-4">
            <span href="#" data-target="#test" class=" morphbutton big-button text-white text-2xl font-bold border border-white py-2 px-3 rounded-full" style="font-family: monospace; cursor: pointer; background-image: url(assets/kpd/nest.jpeg); background-size: cover; line-height: 30px;"> Confirm </span>
            </div>
        </div>
        </div>


<div id="test" class="morphbutton-content rounded-2xl px-10" style="background-image: url(assets/kpd/nest.jpeg); background-size: cover; line-height: 30px;">
    <div class="box p-10 container">
    <div class="flex justify-between ">
      <h2 class="p-2 text-white font-bold" style="font-family: monospace;">PAYMENT VALIDATION</h2>
      <button type="button" class="fa fa-close" id="close" style="outline: none"></button>
    </div>
      <form class="form-horizontal morphbutton-cascade" method="POST" action="/payment" enctype="multipart/form-data">
        @csrf
         <label for="Name" class=" text-white">Name</label>
        <input type="text" placeholder="Name" name="name" class="px-2 w-100 h-10 border border-primary outline-none rounded-2xl" required>
        <br>
        <label for="bank" class="form-label text-white">Name of Bank</label>
        <input type="text" placeholder="Bank" name="bank" class="px-2 w-100 h-10 border border-primary outline-none rounded-2xl" required>
        <br>
        <label for="account" class="form-label text-white">Account Number</label>
        <input type="text" placeholder="Account" name="account" class="px-2 w-100 h-10 border border-primary outline-none rounded-2xl" required>
        <br>
        <label for="amount" class="form-label text-white">Amount</label>
        <input type="text" placeholder="Amount" name="amount" class="px-2 w-100 h-10 border border-primary outline-none rounded-2xl" required>

        <input type="submit" value="SUBMIT" class="mt-10 font-bold rounded-2xl border bg-white text-dark p-2">
      </form>
    </div>
  </div>
    </div>
    <div class="container">
        <div class="table-responsive">
            <table class="table table-bordered table-dark text-center" style="background-color: black">
              <thead class="text-white" style="background-image: url(assets/kpd/back.jpeg);background-size: cover;">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">DATA</th>
                  <th scope="col">INPUT</th>
                </tr>
              </thead>

              <tbody>
                @foreach ($layouts as $layout)
                <tr>
                  <td>1</td>
                  <td>First Name</td>
                  <td>{{$layout['firstname']}}</td>
                </tr>

                <tr>
                  <td>2</td>
                  <td>Last Name</td>
                  <td>{{$layout['lastname']}}</td>
                </tr>

                <tr>
                  <td>3</td>
                  <td>Email</td>
                  <td>{{$layout['email']}}</td>
                </tr>

                <tr>
                  <td>4</td>
                  <td>Phone</td>
                  <td>{{$layout['phone']}}</td>
                </tr>

                <tr>
                  <td>5</td>
                  <td>State</td>
                  <td>{{$layout['state']}}</td>

                </tr>

                <tr>
                  <td>6</td>
                  <td>City</td>
                  <td>{{$layout['city']}}</td>

                </tr>

                <tr>
                  <td>7</td>
                  <td>Address</td>
                  <td>{{$layout['address']}}</td>
                </tr>

                <tr>
                  <td>8</td>
                  <td>Design Name</td>
                  <td>{{$layout['name']}}</td>
                </tr>

                 <tr>
                    <td>9</td>
                    <td>Material</td>
                    <td>{{$layout['material']}}</td>
                  </tr>

                  <tr>
                    <td>10</td>
                    <td>Height</td>
                    <td>{{$layout['height']}}</td>
                  </tr>

                  <tr>
                    <td>11</td>
                    <td>Width</td>
                    <td>{{$layout['width']}}</td>
                  </tr>

                <tr>
                  <td>12</td>
                  <td>Description</td>
                  <td>{{$layout['description']}}</td>
                </tr>

                 <tr>
                    <td></td>
                    <td>Delivery</td>
                    <td>72 Hours</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </main>
        </div>
        </div>
    </div>

    <div class="pb-20">
        <div class="container p-10">
        <div class="text-center p-10">

        <h2 class="font-bold text-dark py-2" style="border-bottom: 2px solid black;"> DESIGN </h2>
            <div class="lg:flex justify-center  py-10 block ">

                 @php
                    $image = explode('|', $layout->logo2);
                    @endphp
                    @foreach ($image as $item)
                    <img class=" px-4 py-3 mx-auto" src="{{URL::to($item)}}" style="width: 25vh; height: 25vh;">
                @endforeach
            </div>
        </div>
        </div>
    </div>

<div style="position: relative; top: 45px;" >
<x-footer />
</div>
</x-header>

