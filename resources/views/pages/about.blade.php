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

<div class="ml-96 mt-28 mb-40 flex wrap-flex">

  <div>
    <img class="shadow-2xl" src="{{ URL::to('/images/rectangle3.png') }}"/>
  </div>
  <div class="ml-7 w-4/12">
    <h1  class="text-4xl mt-10 mb-3.5 text-blue-900">Know About Our Ecomerce Business, History</h1>
    <p class="text-gray-300  ">Thank you for your order! Your order is being processed and will be completed within 3-6
           hours. You will receive an email confirmation when your order is completed.
       </p>
       <button class="bg-pink-500 text-white mt-24 px-7 py-3">Contact us</button>
  </div>
</div>

<div class="text-center text-4xl font-bold mb-16">
        <h1>Our Features</h1>
      </div>
    <div class="flex wrap-flex flex wrap-flex ml-96 mb-32">
      <div class="ml-8">
        <livewire:support/>
      </div>
      <div class="ml-8">
        <livewire:support/>
      </div>
      <div class="ml-8">
        <livewire:support/>
      </div>
      <div class="ml-8">
        <livewire:support/>
      </div>
    </div>

<div class="flex flex-col items-center pb-24 pt-16 mb-72 bg-blue-50">
<h1 class="text-center text-4xl font-bold mb-16">Our Client Say!</h1>
 <div class="flex wrap-flex items-center gap-x-3.5">
   <div>
   <img src="{{ URL::to('/images/person1.png') }}" >
   </div>
   <div class="mb-6">
   <img src="{{ URL::to('/images/person2.png') }}" >
   </div>
   <div>
   <img src="{{ URL::to('/images/person3.png') }}" >
   </div>
 </div>
<p class="font-bold text-2xl mt-6">Selina Gomez</p>
<p class="text-gray-300 text-xs ">Ceo At Webecy Digital</p>
<p class="text-gray-300 max-w-2xl text-center mt-3.5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
  Non duis ultrices quam vel dui sollicitudin aliquet id arcu.
   Nam vitae a enim nunc, sed sapien egestas ac nam.
   Tristique ultrices dolor aliquam lacus volutpat praesent.
  </p>
</div>

</body>
<livewire:footer/>