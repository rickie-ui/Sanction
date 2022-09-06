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
        <h1 class="text-xl font-semibold">Create an account</h1>
        <small class="text-gray-400">Please enter your details</small>

        <!-- Form -->
        <form class="mt-4" action="{{ route('register')}}" method="POST">

            @csrf

            <div class="mb-3">
            <label for="name" class="mb-2 block text-xs font-semibold">Name</label>
            <input type="text" name="name" placeholder="Enter your name" class="block w-full rounded-md border border-gray-300 focus:border-purple-700 focus:outline-none focus:ring-1 focus:ring-purple-700 py-1 px-1.5 text-gray-500 @error('name') border-red-500 @enderror" value="{{ old('name') }}" />
             @error('name')
                 <div class="text-red-500 mt2 text-sm">
                    {{ $message }}
                 </div>
             @enderror
          </div>
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

          <div class="mb-3">
            <label for="password_confirmation" class="mb-2 block text-xs font-semibold">Password again</label>
            <input type="password" name="password_confirmation" placeholder="Repeat your password" class="block w-full rounded-md border border-gray-300 focus:border-purple-700 focus:outline-none focus:ring-1 focus:ring-purple-700 py-1 px-1.5 text-gray-500 @error('password_confirmation') border-red-500 @enderror" />
            @error('password_confirmation')
                 <div class="text-red-500 mt2 text-sm">
                    {{ $message }}
                 </div>
             @enderror
          </div>

          {{-- <div class="mb-3 flex flex-wrap content-center">
            <input id="remember" type="checkbox" class="mr-1 checked:bg-purple-700 sr-only" /> <label for="remember" class="mr-auto text-xs font-semibold">Remember for 30 days</label>
            <a href="#" class="text-xs font-semibold text-purple-700">Forgot password?</a>
          </div> --}}

          <div class="mb-3">
            <button type="submit" class="mb-1.5 block w-full text-center text-white bg-purple-700 hover:bg-purple-900 px-2 py-1.5 rounded-md">Sign up</button>
            <button class="flex flex-wrap justify-center w-full border border-gray-300 hover:border-gray-500 px-2 py-1.5 rounded-md">
              <img class="w-5 mr-2" src="https://lh3.googleusercontent.com/COxitqgJr1sJnIDe8-jiKhxDx1FrYbtRHKJ9z_hELisAlapwE9LUPh6fcXIfb5vwpbMl4xl9H9TRFPc5NOO8Sb3VSgIBrfRYvW6cUA">
              Sign in with Google
            </button>
          </div>
        </form>

        <!-- Footer -->
        <div class="text-center">
          <span class="text-xs text-gray-400 font-semibold">Have an account?</span>
          <a href="{{ route('login') }}" class="text-xs font-semibold text-purple-700">Sign in</a>
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