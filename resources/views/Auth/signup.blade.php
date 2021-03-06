<link href="{{ asset('css/app.css') }}" rel="stylesheet">

<div class="py-20 h-screen bg-gray-300 px-2">
    <div class="max-w-md mx-auto bg-white rounded-lg overflow-hidden md:max-w-md">
        <div class="md:flex">
            <div class="w-full p-3 px-6 py-10">
              <form action="{{ route('signup') }}" method="post">
                  @csrf
                <div class="text-center"> <span class="text-xl text-gray-700">Sign Up</span> </div>
                <div class="mt-3 relative"> <span class="absolute p-1 bottom-8 ml-2 bg-white text-gray-400 ">First name</span> <input type="text" name="first_name" class="h-12 px-2 w-full border-2 rounded focus:outline-none focus:border-red-600"> </div>
                <div class="mt-4 relative"> <span class="absolute p-1 bottom-8 ml-2 bg-white text-gray-400 ">Last name</span> <input type="text" name="last_name" class="h-12 px-2 w-full border-2 rounded focus:outline-none focus:border-red-600"> </div>
                <div class="mt-4 relative"> <span class="absolute p-1 bottom-8 ml-2 bg-white text-gray-400 ">Email</span> <input type="email" name="email" class="h-12 px-2 w-full border-2 rounded focus:outline-none focus:border-red-600"> </div>
                <div class="mt-4 relative"> <span class="absolute p-1 bottom-8 ml-2 bg-white text-gray-400 ">Password</span> <input type="password" name="password" class="h-12 px-2 w-full border-2 rounded focus:outline-none focus:border-red-600"> </div>
                <div class="mt-4"> <input type="submit" class="h-12 w-full bg-red-600 text-white rounded hover:bg-red-700" value="Continue" /> </div>
              </form>
            </div>
        </div>
    </div>
 </div>