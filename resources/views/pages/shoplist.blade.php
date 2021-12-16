<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<script src="https://kit.fontawesome.com/0a55ccbade.js" crossorigin="anonymous"></script>

<livewire:header/>
<body>
<div class="bg-pink-100">
 <div class="ml-96">
  <h1 class="text-5xl text-blue-900 font-bold mb-5 pt-24">Shop List</h1>
  <div class="flex wrap-flex gap-x-3.5 pb-24">
    <a href="#">Home</a>
    <a href="#">Pages</a>
    <a href="#" class="text-pink-500">Shop List</a>
  </div>
 </div>
</div> 

<div class="flex wrap-flex ml-96 mt-32">
  <div>
    <h1 class="text-xl text-blue-800">Ecommerce Acceories & Fashion item </h1>
    <p class="text-xs text-gray-300">About 9,620 results (0.62 seconds)</p>
  </div>
  <div class="flex wrap-flex gap-x-7 ml-60 pt-2 mb-36">
    <div>
      <label>Per Page:</label>
      <input type="text" class="w-14 bg-gray-50 border-solid border-2">
    </div>
    <div>
      <label for="">Sort By:</label>
      <input type="text" class="w-24 bg-gray-50 border-solid border-2">
    </div>
    <div>
      <label for="">View:</label>
      <input type="text" class="w-40 bg-gray-50 border-solid border-2">
    </div>
  </div>
</div>
<div class="ml-96 w-7/12">

  <div class="mb-16">
    <livewire:itemstyle9 imag="{{ URL::to('/images/rectangle2.png') }}" name="Vel sem" discount="$26.00 " pric="$52.00" details="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Magna in est adipiscing in phasellus non in justo." />
  </div>
  <div class="mb-16">
    <livewire:itemstyle9 imag="{{ URL::to('/images/rectangle2.png') }}" name="Vel sem" discount="$26.00 " pric="$52.00" details="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Magna in est adipiscing in phasellus non in justo." />
  </div>
  <div class="mb-16">
    <livewire:itemstyle9 imag="{{ URL::to('/images/rectangle2.png') }}" name="Vel sem" discount="$26.00 " pric="$52.00" details="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Magna in est adipiscing in phasellus non in justo." />
  </div>
  <div class="mb-16">
    <livewire:itemstyle9 imag="{{ URL::to('/images/rectangle2.png') }}" name="Vel sem" discount="$26.00 " pric="$52.00" details="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Magna in est adipiscing in phasellus non in justo." />
  </div>
  <div class="mb-16">
    <livewire:itemstyle9 imag="{{ URL::to('/images/rectangle2.png') }}" name="Vel sem" discount="$26.00 " pric="$52.00" details="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Magna in est adipiscing in phasellus non in justo." />
  </div>
  <div class="mb-16">
    <livewire:itemstyle9 imag="{{ URL::to('/images/rectangle2.png') }}" name="Vel sem" discount="$26.00 " pric="$52.00" details="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Magna in est adipiscing in phasellus non in justo." />
  </div>
  <div class="mb-64">
    <livewire:itemstyle9 imag="{{ URL::to('/images/rectangle2.png') }}" name="Vel sem" discount="$26.00 " pric="$52.00" details="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Magna in est adipiscing in phasellus non in justo." />
  </div>

</div>

<div class="mb-24 mt-60">
  <img src="{{ URL::to('/images/image7.png') }}" class="block ml-auto mr-auto w-6/12">
</div>

</body>
<livewire:footer/>