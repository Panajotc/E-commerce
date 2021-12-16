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

<div class="ml-96 mt-48  flex wrap-flex">
  <div>
  <img src="{{ URL::to('/images/clock.png') }}">
  </div>
  <div  class="flex flex-col items-center ml-40 mr-40 ">
    
       <img src="{{ URL::to('/images/vector.png') }}" class="block ml-auto mr-auto ">
     
        <h1  class="text-4xl  text-blue-900 font-bold mb-7 mt-11">Your Order Is Completed!</h1>
     
      
        <p class="text-gray-300 max-w-3xl flex flex-col items-center ">Thank you for your order! Your order is being processed and will be completed within 3-6
           hours. You will receive an email confirmation when your order is completed.
       </p>
      
     
      <button class="bg-pink-500 text-white mt-5 p-4">Continue Shopping</button>
     
  </div>
  <div class="mt-96">
  <img  src="{{ URL::to('/images/checklist.png') }}">
  </div>
</div>

<div class="mb-24 mt-24">
  <img src="{{ URL::to('/images/image7.png') }}" class="block ml-auto mr-auto w-6/12">
</div>

</body>
<livewire:footer/>


