@extends('layouts.app')

@section('content')

<!-- component -->
<!-- Container -->
<div class="flex flex-wrap min-h-screen w-full content-center justify-center bg-gray-200 py-10">
  
  <!-- Login component -->
  <div class="flex shadow-md">
    <!-- Login form -->
    <div class="flex flex-wrap content-center justify-center rounded-l-md bg-white p-4" style="width: 24rem; height: auto;">
      <div class="w-72">
        <!-- Heading -->
        <h1 class="text-xl font-semibold">Welcome back!</h1>
        <small class="text-gray-400">Welcome back, Please enter your details</small>


        @if(session('status'))
              <div class="bg-red-500 p-2 rounded-lg text-center text-white">
                {{ session('status')}}
              </div>
        @endif

        <!-- Form -->
        <form class="mt-4" action="{{ route('login')}}" method="POST">

            @csrf



          <div class="mb-3">
            <label for="email" class="mb-2 block text-xs font-semibold">Email</label>
            <input type="email" name="email" placeholder="Enter your email" class="block w-full rounded-md border border-gray-300 focus:border-purple-700 focus:outline-none focus:ring-1 focus:ring-purple-700 py-1 px-1.5 text-gray-500 @error('email') border-red-500 @enderror" value="{{ old('email') }}" />
             @error('email')
                 <div class="text-red-500 mt2 text-sm">
                    {{ $message }}
                 </div>
             @enderror
          </div>

          <div class="mb-3">
            <label  for="password" class="mb-2 block text-xs font-semibold">Password</label>
            <input type="password" name="password" placeholder="********" class="block w-full rounded-md border border-gray-300 focus:border-purple-700 focus:outline-none focus:ring-1 focus:ring-purple-700 py-1 px-1.5 text-gray-500 @error('password') border-red-500 @enderror" />
             @error('password')
                 <div class="text-red-500 mt2 text-sm">
                    {{ $message }}
                 </div>
             @enderror
          </div>


          <div class="mb-3 flex flex-wrap content-center">
            <input id="remember" type="checkbox"  name="remember" class="mr-1 checked:bg-purple-700" /> 
            <label for="remember" class="mr-auto text-xs font-semibold">Remember me</label>
            <a href="#" class="text-xs font-semibold text-purple-700">Forgot password?</a>
          </div>

          <div class="mb-3">
            <button type="submit" class="mb-1.5 block w-full text-center text-white bg-purple-700 hover:bg-purple-900 px-2 py-1.5 rounded-md">Sign in</button>
          </div>
        </form>

        <!-- Footer -->
        <div class="text-center">
          <span class="text-xs text-gray-400 font-semibold">Don't have account?</span>
          <a href="{{ route('register') }}" class="text-xs font-semibold text-purple-700">Sign up</a>
        </div>
      </div>
    </div>

    <!-- Login banner -->
    <div class="flex flex-wrap content-center justify-center rounded-r-md" style="width: 24rem; height: 32rem;">
      <img class="w-full h-full bg-center bg-no-repeat bg-cover object-cover rounded-r-md" src="https://images.unsplash.com/photo-1497215842964-222b430dc094?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NDJ8fHdvcmt8ZW58MHx8MHx8&auto=format">
    </div>

  </div>
</div>
    

@endsection