<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<script src="https://kit.fontawesome.com/0a55ccbade.js" crossorigin="anonymous"></script>

<livewire:header/>
<body>
<div class="bg-pink-100">
 <div class="ml-96">
  <h1 class="text-5xl text-blue-900 font-bold mb-5 pt-24">Contact Us</h1>
  <div class="flex wrap-flex gap-x-3.5 pb-24">
    <a href="#">Home</a>
    <a href="#">Pages</a>
    <a href="#" class="text-pink-500">Contact Us</a>
  </div>
 </div>
</div> 

<div class="mt-28 ml-96 flex wrap-flex">

  <div class="w-2/5 mr-28">
    <h1  class="text-4xl mb-3.5 text-blue-900 font-bold	">Information About us</h1>
    <p class="text-gray-300  ">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
       Mattis neque ultrices mattis aliquam, malesuada diam est.
      Malesuada sem tristique amet erat vitae eget dolor lobortis. 
      Accumsan faucibus vitae lobortis quis bibendum quam.
    </p>
    <div class="flex wrap-flex gap-x-3.5 mt-14">
    <img src="{{ URL::to('/images/ellipse1.png') }}" >
    <img src="{{ URL::to('/images/ellipse2.png') }}" >
    <img src="{{ URL::to('/images/ellipse3.png') }}" >
    </div>
  </div>

  <div>
  <h1  class="text-4xl  mb-6 text-blue-900 font-bold">Contact Way</h1>
  <div class="flex wrap-flex gap-x-24">
    <div>
       <p class="text-gray-300">Tel: 877-67-88-99</p>
       <p class="text-gray-300">E-Mail: shop@store.com</p>
       <p class="mt-12 text-gray-300">20 Margaret st, London</p>
       <p class="text-gray-300">Great britain, 3NM98-LK</p>
    </div>
    <div>
    <p class="text-gray-300">Support Forum</p>
    <p class="text-gray-300">For over 24hr</p>
    <p class="mt-12 text-gray-300">Free standard shipping</p>
    <p class="text-gray-300">on all orders.</p>

    </div>
  </div>
  </div>
</div>

<div class="flex wrap-flex mt-28 ml-96 mb-52">

  <div class="w-2/5">
    <h1  class="text-4xl  mb-6 text-blue-900 font-bold	">Get In Touch</h1> 
    <p class="text-gray-300  ">Lorem ipsum dolor sit amet, consectetur 
       adipiscing elit. Mattis neque ultrices  tristique amet erat vitae eget 
       dolor los vitae lobortis quis bibendum quam.
    </p>
    <div class="flex wrap-flex gap-x-6 mt-8 ">
       <input type="text" placeholder="Your Name*" class="border-2 w-1/2 h-12">
        <input type="email" placeholder="Your E-mail" class="border-2 w-1/2 h-12">
    </div>
    <input type="text" placeholder="Subject*" class="mt-8 border-2 w-full h-12"> <br>
    <input type="text" placeholder="Type Your Messege*" class="mt-12 h-40 w-full border-2">
    <button class="bg-pink-500 text-white mt-12 px-7 py-3">Send Email</button>
  </div>

  <div>
     <img src="{{ URL::to('/images/group.png') }}" >
  </div>
</div>

</body>
<livewire:footer/>