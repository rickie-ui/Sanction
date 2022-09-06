@extends('layouts.app')

@section('content')

<div class="w-full flex items-center min-h-screen">
<div class="w-1/6 min-h-screen dark:bg-gray-900 text-white font-semibold text-xl p-4" style="position: fixed;top:50px;bottom:0;">
      <ul class="space-y-2">
         <li>
            <a href="{{ route('dashboard') }}" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
               <svg aria-hidden="true" class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path></svg>
               <span class="ml-3">Dashboard</span>
            </a>
         </li>
         <li>
            <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
               <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
               <span class="flex-1 ml-3 whitespace-nowrap">Programs</span>
            </a>
         </li>
       
         <li>
            <a href="{{ route('manage') }}" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
               <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>
               <span class="flex-1 ml-3 whitespace-nowrap">Employees</span>
            </a>
         </li>
         <li>
            <a href="{{ route('report')}}" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
               <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"></path></svg>
               <span class="flex-1 ml-3 whitespace-nowrap">Finances</span>
            </a>
         </li>
           <li>
            <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
               <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M8.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l2-2a1 1 0 00-1.414-1.414L11 7.586V3a1 1 0 10-2 0v4.586l-.293-.293z"></path><path d="M3 5a2 2 0 012-2h1a1 1 0 010 2H5v7h2l1 2h4l1-2h2V5h-1a1 1 0 110-2h1a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5z"></path></svg>
               <span class="flex-1 ml-3 whitespace-nowrap">Profile</span>
               {{-- <span class="inline-flex justify-center items-center p-3 ml-3 w-3 h-3 text-sm font-medium text-blue-600 bg-blue-200 rounded-full dark:bg-blue-900 dark:text-blue-200">3</span> --}}
            </a>
         </li>
      </ul>



</div>
<div class="w-5/6 h-auto ">

 <div class="w-11/12" style="margin-left:25%;">
    
    <div class="w-2/5 mx-auto border  text-white rounded-lg" style='padding: 14px;margin-top: 40px; box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;'>

        <h2 class="font-bold text-rose-700 py-1 px-2" style="color: rgb(84, 98, 98); margin-top:5px;">Employee details</h2>

        <p class="text-xs font-semibold py-1 px-2" style="color: rgb(84, 98, 98); margin-top:5px;">Enter the personal details below</p>

        <form action="{{ route('employee') }}" method="POST" >
            @csrf

        <label for="fname" class="mb-2 block text-sm font-bold" style="color: rgb(84, 98, 98); margin-top:5px;">First Name</label>
        <input type="text" class="block w-full rounded-md border border-gray-300 focus:border-purple-700 focus:outline-none focus:ring-1 focus:ring-purple-700 py-2 px-1.5 text-gray-500 @error('fname') border-red-500 @enderror" placeholder="Enter first name" name="fname" value="{{ old('fname') }}">
        @error('fname')
            <div class="text-red-500  text-sm">
                    {{ $message }}
            </div>
        @enderror
        <label for="lname" class="mb-2 block text-sm font-bold" style="color: rgb(84, 98, 98); margin-top:5px;">Last Name</label>
        <input type="text" class="block w-full rounded-md border border-gray-300 focus:border-purple-700 focus:outline-none focus:ring-1 focus:ring-purple-700 py-2 px-1.5 text-gray-500 @error('lname') border-red-500 @enderror" placeholder="Enter last name" name="lname" value="{{ old('lname') }}">
        @error('lname')
            <div class="text-red-500  text-sm">
                    {{ $message }}
            </div>
        @enderror
        <label for="email" class="mb-2 block text-sm font-bold" style="color: rgb(84, 98, 98); margin-top:5px;">Email</label>
        <input type="text" class="block w-full rounded-md border border-gray-300 focus:border-purple-700 focus:outline-none focus:ring-1 focus:ring-purple-700 py-2 px-1.5 text-gray-500 @error('email') border-red-500 @enderror" placeholder="Enter email" name="email" value="{{ old('email') }}">
        @error('email')
            <div class="text-red-500  text-sm">
                    {{ $message }}
            </div>
        @enderror
        <label for="phone" class="mb-2 block text-sm font-bold " style="color: rgb(84, 98, 98); margin-top:5px;">Mobile</label>
        <input type="text" class="block w-full rounded-md border border-gray-300 focus:border-purple-700 focus:outline-none focus:ring-1 focus:ring-purple-700 py-2 px-1.5 text-gray-500 @error('phone') border-red-500 @enderror" placeholder="Enter mobile number" name="phone" value="{{ old('phone') }}">
        @error('phone')
            <div class="text-red-500  text-sm">
                    {{ $message }}
            </div>
        @enderror
        <label for="idnumber" class="mb-2 block text-sm font-bold " style="color: rgb(84, 98, 98); margin-top:5px;">Identification Number</label>
        <input type="text" class="block w-full rounded-md border border-gray-300 focus:border-purple-700 focus:outline-none focus:ring-1 focus:ring-purple-700 py-2 px-1.5 text-gray-500 @error('idnumber') border-red-500 @enderror" placeholder="Enter identification number" name="idnumber" value="{{ old('idnumber') }}">
        @error('idnumber')
            <div class="text-red-500 text-sm">
                    {{ $message }}
            </div>
        @enderror
        <label for="department" class="mb-2 block text-sm font-bold" style="color: rgb(84, 98, 98); margin-top:5px;">Department</label>
        <input type="text" class="block w-full rounded-md border border-gray-300 focus:border-purple-700 focus:outline-none focus:ring-1 focus:ring-purple-700 py-2 px-1.5 text-gray-500 mb-4 @error('department') border-red-500 @enderror" placeholder="Enter department" name="department" value="{{ old('department') }}">
        @error('department')
            <div class="text-red-500 mb-2 text-sm">
                    {{ $message }}
            </div>
        @enderror

        <button type="submit" class="mb-1.5 block w-full text-center text-white bg-purple-700 hover:bg-purple-900 px-2 py-1.5 rounded-md font-bold">Create Account</button>
          </div>

        </form>

    </div>


</div>   




</div>
</div>

@endsection