<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
<script src="https://kit.fontawesome.com/0a55ccbade.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<script type="module">
  import Swiper from 'https://unpkg.com/swiper@7/swiper-bundle.esm.browser.min.js'

  const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,

    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
    },

    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },


  });
</script>



<livewire:header />

<body class="bg-gray-100">

  <div class="swiper">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
      <!-- Slides -->
      <div class="swiper-slide">
        <div class="inline-flex bg-purple-50">

          <div class=" ml-16 2xl:ml-56">
            <img src="{{ URL::to('/images/image32.png') }}">
          </div>
          <div class="relative -ml-14 w-1/3">
            <div class="mt-48  text-pink-500">
              <p>Best Furniture For Your Castle....</p>
            </div>
            <div class="text-5xl my-3 font-bold">
              <p>New Furniture Collection
                Trends in 2020</p>
            </div>
            <div class="mb-7">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Magna in est adipiscing
                in phasellus non in justo.</p>
            </div>
            <div>
              <button class="bg-pink-500 text-white p-4">Shop Now</button>
            </div>
          </div>
          <div class="bg-purple-100 rounded-full">
            <img class="bg-purple-200 ml-16 mt-10  rounded-full" src="{{ URL::to('/images/shell.png') }}">
            <div>
              <div class="absolute top-52 right-44 bg-blue-400 rounded-full p-5 text-white">50% off</div>
            </div>
          </div>

        </div>
      </div>
      <div class="swiper-slide">
        <div class="inline-flex bg-purple-50">

          <div class="ml-16">
            <img src="{{ URL::to('/images/image32.png') }}">
          </div>
          <div class="relative -ml-14 w-1/3">
            <div class="mt-48  text-pink-500">
              <p>Best Furniture For Your Castle....</p>
            </div>
            <div class="text-5xl my-3 font-bold">
              <p>New Furniture Collection
                Trends in 2020</p>
            </div>
            <div class="mb-7">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Magna in est adipiscing
                in phasellus non in justo.</p>
            </div>
            <div>
              <button class="bg-pink-500 text-white p-4">Shop Now</button>
            </div>
          </div>
          <div class="bg-purple-100 rounded-full">
            <img class="bg-purple-200 ml-16 mt-10  rounded-full" src="{{ URL::to('/images/shell.png') }}">
            <div>
              <div class="absolute top-52 right-44 bg-blue-400 rounded-full p-5 text-white">50% off</div>
            </div>
          </div>

        </div>
      </div>
      <div class="swiper-slide">
        <div class="inline-flex bg-purple-50">

          <div class="ml-16">
            <img src="{{ URL::to('/images/image32.png') }}">
          </div>
          <div class="relative -ml-14 w-1/3">
            <div class="mt-48  text-pink-500">
              <p>Best Furniture For Your Castle....</p>
            </div>
            <div class="text-5xl my-3 font-bold">
              <p>New Furniture Collection
                Trends in 2020</p>
            </div>
            <div class="mb-7">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Magna in est adipiscing
                in phasellus non in justo.</p>
            </div>
            <div>
              <button class="bg-pink-500 text-white p-4">Shop Now</button>
            </div>
          </div>
          <div class="bg-purple-100 rounded-full">
            <img class="bg-purple-200 ml-16 mt-10  rounded-full" src="{{ URL::to('/images/shell.png') }}">
            <div>
              <div class="absolute top-52 right-44 bg-blue-400 rounded-full p-5 text-white">50% off</div>
            </div>
          </div>

        </div>
      </div>
      ...
    </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>

    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
  </div>

  <div class="text-center text-4xl font-bold text-blue-900 mt-32 mb-12">
    <h1>Featured Products</h1>
  </div>
  <div id="items1" class="flex flex-wrap ml-96 ">
    @foreach($products as $product)
    <div class="ml-8 hover:bg-blue-200 hover:text-white">
      <livewire:item imag="{{$product->path_name}}" name="{{$product->name}}" code="Code - Y523201" pric="$42.00" />
    </div>
    @endforeach
    <div class="ml-8">
      <livewire:item imag="{{ URL::to('/images/image11.png') }}" name="Cantilever chair" code="Code - Y523201" pric="$42.00" />
    </div>
    <div class="ml-8">
      <livewire:item imag="{{ URL::to('/images/image11.png') }}" name="Cantilever chair" code="Code - Y523201" pric="$42.00" />
    </div>
    <div class="ml-8">
      <livewire:item imag="{{ URL::to('/images/image11.png') }}" name="Cantilever chair" code="Code - Y523201" pric="$42.00" />
    </div>
  </div>
  <div class="text-center">
    <div class="text-4xl font-bold text-blue-800 mt-32 mb-5">
      <h1>Featured Products</h1>
    </div>
    <div class="inline-flex gap-x-14 text-blue-800 text-lg mb-14">
      <a href="#" class="underline text-pink-500 ">New Arrival</a>
      <a href="#">Best Seller</a>
      <a href="#">Featured</a>
      <a href="#">Special Offer</a>
    </div>
  </div>


  <div id="items1" class="flex flex-wrap ml-96 ">
    <div class="ml-12">
      <livewire:itemstyle2 imag="{{ URL::to('/images/image12.png') }}" name="Comfort Handy Craft" discount="$42.00" pric="$$65.00" />
    </div>
    <div class="ml-16">
      <livewire:itemstyle2 imag="{{ URL::to('/images/image12.png') }}" name="Comfort Handy Craft" discount="$42.00" pric="$$65.00" />
    </div>
    <div class="ml-16">
      <livewire:itemstyle2 imag="{{ URL::to('/images/image12.png') }}" name="Comfort Handy Craft" discount="$42.00" pric="$$65.00" />
    </div>
  </div>
  <div id="items1" class="flex flex-wrap ml-96  pt-28">
    <div class="ml-12">
      <livewire:itemstyle2 imag="{{ URL::to('/images/image12.png') }}" name="Comfort Handy Craft" discount="$42.00" pric="$$65.00" />
    </div>
    <div class="ml-16">
      <livewire:itemstyle2 imag="{{ URL::to('/images/image12.png') }}" name="Comfort Handy Craft" discount="$42.00" pric="$$65.00" />
    </div>
    <div class="ml-16">
      <livewire:itemstyle2 imag="{{ URL::to('/images/image12.png') }}" name="Comfort Handy Craft" discount="$42.00" pric="$$65.00" />
    </div>
  </div>

  <div class="text-center text-4xl font-bold text-blue-800 mt-14 mb-14">
    <h1>What Shopex Offer!</h1>
  </div>
  <div id="items1" class="flex flex-wrap ml-96 ">
    <div class="ml-8">
      <livewire:support />
    </div>
    <div class="ml-8">
      <livewire:support />
    </div>
    <div class="ml-8">
      <livewire:support />
    </div>
    <div class="ml-8">
      <livewire:support />
    </div>
  </div>

  <div class="bg-indigo-100  mt-28">
    <div id="items2" class="ml-96 flex wrap-flex">
      <div class="ml-20">
        <img src="{{ URL::to('/images/chair.png') }}" class="bg-pink-100 rounded-full">
      </div>
      <div class="w-1/3">
        <div class="header text-4xl text-blue-800  ">
          <h1>Unique Features Of leatest &Trending Poducts</h1>
        </div>
        <div>
          <ul class="text-gray-400 list-disc ml-4 leading-10">
            <li>All frames constructed with hardwood solids and laminates</li>
            <li>Reinforced with double wood dowels, glue, screw - nails corner blocks and machine nails</li>
            <li>Arms, backs and seats are structurally reinforced</li>
          </ul>
        </div>
        <div class="flex wrap-flex ">
          <div>
            <button class="bg-pink-500  text-white mt-6 py-3.5 px-6">Add To Cart</button>
          </div>
          <div class="mt-6 ml-5 text-blue-800">
            <p>B&B Italian Sofa </p>
            <p>$32.00</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="text-center text-4xl font-bold text-blue-800 mt-32 mb-5">
    <h1>Featured Products</h1>
  </div>

  <div id="items1" class="flex flex-wrap  ml-96 ">
    <div class="ml-8">
      <livewire:itemstyle3 imag="{{ URL::to('/images/image10.png') }}" name="Cantilever chair" discount="$26.00" pric="$42.00" />
    </div>

    <div class="ml-10">
      <livewire:itemstyle3 imag="{{ URL::to('/images/image10.png') }}" name="Cantilever chair" discount="$26.00" pric="$42.00" />
    </div>
    <div class="ml-10">
      <livewire:itemstyle3 imag="{{ URL::to('/images/image10.png') }}" name="Cantilever chair" discount="$26.00" pric="$42.00" />
    </div>
    <div class="ml-10 mb-20">
      <livewire:itemstyle3 imag="{{ URL::to('/images/image10.png') }}" name="Cantilever chair" discount="$26.00" pric="$42.00" />
    </div>
  </div>
  <div id="items1" class="ml-96  mb-32 flex flex-wrap">

    <div class="ml-7">
      <livewire:itemstyle4 imag="{{ URL::to('/images/image13.png') }}" />
    </div>
    <div class="ml-12">
      <livewire:itemstyle4 imag="{{ URL::to('/images/image13.png') }}" />
    </div>
    <div class="ml-7">
      <livewire:itemstyle5 imag="{{ URL::to('/images/image30.png') }}" />
      <div class="mt-8">
        <livewire:itemstyle5 imag="{{ URL::to('/images/image30.png') }}" />
      </div>
      <div class="mt-8">
        <livewire:itemstyle5 imag="{{ URL::to('/images/image30.png') }}" />
      </div>
    </div>
  </div>


  <div class="text-center">
    <div class="text-4xl font-bold text-blue-800 mt-32 mb-6">
      <h1>Discount Item</h1>
    </div>
    <div class="inline-flex gap-x-14 text-blue-800 text-lg mb-14">
      <a href="#" class="underline text-pink-500 ">Wood Chair</a>
      <a href="#">Plastic Chair</a>
      <a href="#">Sofa Colletion</a>

    </div>
  </div>

  <div>
    <div id="items2" class="ml-96   flex flex-wrap">
      <div class="ml-11">
        <p class="mt-16 text-4xl mb-6 text-blue-800 ">20% Discount Of All Products</p>
        <p class="mb-5 text-2xl text-pink-500">Eams Sofa Compact</p>
        <p class="mb-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eu eget</p>
        <div class="flex wrap-flex mb-11">
          <div>
            <p class="mb-1 mr-4"><i class="fas fa-check"></i>Material expose like metals</p>
            <p><i class="fas fa-check"></i>Simple neutral colours.</p>
          </div>
          <div>
            <p class="mb-1 mr-4"><i class="fas fa-check"></i>Clear lines and geomatric figures</p>
            <p><i class="fas fa-check"></i>Material expose like metals</p>
          </div>
        </div>
        <div>
          <button class="bg-pink-500 text-white p-4">Shop Now</button>
        </div>
      </div>

      <div class="ml-11">
        <img class="bg-purple-200 rounded-full" src="{{ URL::to('/images/tortuga.png') }}">
      </div>

    </div>
  </div>
  <div class="text-center text-4xl font-bold text-blue-800 mb-10 ml-28 mt-32 ">
    <h1>Top Categories</h1>
  </div>
  <div id="items2" class="flex flex-wrap ml-96  ">
    <div>
      <livewire:itemstyle6 imag="{{ URL::to('/images/image20.jpg') }}" />
    </div>
    <div>
      <livewire:itemstyle6 imag="{{ URL::to('/images/image20.jpg') }}" />
    </div>
    <div>
      <livewire:itemstyle6 imag="{{ URL::to('/images/image20.jpg') }}" />
    </div>
    <div class="mb-44">
      <livewire:itemstyle6 imag="{{ URL::to('/images/image20.jpg') }}" />
    </div>
  </div>


  <div class="backimage ">
    <div class=" ">
      <div class="mt-32">
        <h1 class="flex items-center justify-center text-4xl font-bold pt-40 text-blue-800 ">
          Get Leatest Update By Subscribe 0ur Newslater</h1>
      </div>
      <div class="flex items-center justify-center">
        <button class="p-4 bg-pink-500 text-white mt-4">Shop Now</button>
      </div>
    </div>
  </div>


  <div class="text-center text-4xl font-bold text-blue-800 ml-9 mt-32 mb-16">
    <h1>Leatest Blog</h1>
  </div>
  <div id="items1" class="flex flex-wrap ml-96  ">
    <div class="">
      <livewire:itemstyle7 imag="{{ URL::to('/images/image1.png') }}" />
    </div>
    <div class="ml-11">
      <livewire:itemstyle7 imag="{{ URL::to('/images/image1.png') }}" />
    </div>
    <div class="ml-11 mb-28">
      <livewire:itemstyle7 imag="{{ URL::to('/images/image1.png') }}" />
    </div>
  </div>


  <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

</body>
<livewire:footer />