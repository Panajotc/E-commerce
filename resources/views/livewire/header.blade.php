<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
<script src="https://kit.fontawesome.com/0a55ccbade.js" crossorigin="anonymous"></script>

<div class="w-full bg-purple-800">
<div id="navbar" class="mx-96  flex justify-between py-3.5 text-white">

    <div class="inline-flex gap-x-4">
        <div><i class="far fa-envelope"></i>mhhasanul@gmail.com</div>
        <div>
            <p><i class="fas fa-phone-volume"></i>(12345)67890</p>
        </div>
    </div>

    <div class="inline-flex gap-x-4">
        <div>
            <select class="bg-purple-800">
                <option value="english">English</option>
                <option value="italiano">Italiano</option>
                <option value="spanish">Spanish</option>
            </select>
        </div>

        <div>
            <select class="bg-purple-800">
                <option value="usd">GBP</option>
                <option value="eur">EUR</option>
                <option value="gbp">USD</option>
            </select>
        </div>

        <div>
            <button>Login<i class="far fa-user"></i></button>
        </div>

        <div>
            <button>Wishlist<i class="far fa-heart"></i></button>
        </div>

        <div>
            <button><i class="fas fa-cart-arrow-down"></i></button>
        </div>
    </div>
</div>
</div>

<div id="menu" class="flex wrap-flex mx-96 ">
<p class="text-4xl pr-20 py-5">Hekto</p>
<div class="inline-flex gap-x-9 py-7">
    <div>
       <select class="bg-gray-100" >
         <option value="home">Home</option>
         <option value="contact">Contact</option>
        </select>
    </div>
    <div>
        <a href="#">Pages</a>
    </div>
    <div>
        <a href="#">Products</a>
    </div>
    <div>
        <a href="#">Blog</a>
    </div>
    <div>
        <a href="#">Shop</a>
    </div>
    <div>
        <a href="#">Contact</a>
    </div>
 </div>
 <div class="ml-64 my-5">
     <form class="border-gray-300  border-2">
         <input type="text" class="bg-gray-100">
         <button class="p-2.5 text-white bg-pink-500" type="submit"><i class="fa fa-search"></i></button>
     </form>
 </div>
</div>