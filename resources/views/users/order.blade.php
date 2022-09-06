@extends('layouts.app')

@section('content')

<div class="w-full flex items-center max-h-screen">
<div class="w-1/6  h-screen dark:bg-gray-900 text-white font-semibold text-xl">
      <ul class="space-y-2">
         <li>
            <a href="{{ route('claim')}}" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
               <svg aria-hidden="true" class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path></svg>
               <span class="ml-3">Dashboard</span>
            </a>
         </li>
         
           <li>
            <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
               <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M8.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l2-2a1 1 0 00-1.414-1.414L11 7.586V3a1 1 0 10-2 0v4.586l-.293-.293z"></path><path d="M3 5a2 2 0 012-2h1a1 1 0 010 2H5v7h2l1 2h4l1-2h2V5h-1a1 1 0 110-2h1a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5z"></path></svg>
               <span class="flex-1 ml-3 whitespace-nowrap">Profile</span>
            </a>
         </li>
      </ul>



</div>
<div class="w-5/6">
   <h2 class="text-gray-500 font-bold text-center m-2">Requisition form</h2>

    <div class="w-2/5 shadow mx-auto p-4 mt-4">
      
 <form  action="{{ route('order' )}}" method="POST" >
   @csrf
      <div class=" w-full mb-5">
        <input
          type="text"
          name="name"
          placeholder="Enter the beneficiary name"
          class="pt-3 py-1 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200 @error('name') border-red-500 @enderror" value="{{ old('name') }}"
        />
         @error('name')
                 <div class="text-red-500 mt2 text-sm">
                    {{ $message }}
                 </div>
          @enderror
      </div>

      <div class="w-full mb-5">
        <input
          type="number"
          name="account"
          placeholder="Enter account number"
          class="pt-3 py-1  block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200 @error('account') border-red-500 @enderror" value="{{ old('account') }}"
        />
         @error('account')
                 <div class="text-red-500 mt2 text-sm">
                    {{ $message }}
                 </div>
          @enderror
      </div>

       <div class="flex flex-row space-x-4">
        <div class="w-full mb-5">
          <input
            type="text"
            name="bank"
            placeholder="Enter bank name"
            class="pt-3 py-1 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200 @error('bank') border-red-500 @enderror" value="{{ old('bank') }}"
        />
         @error('bank')
                 <div class="text-red-500 mt2 text-sm">
                    {{ $message }}
                 </div>
          @enderror

        </div>
        <div class="w-full">
          <input
            type="text"
            name="branch"
            placeholder="Enter branch name"
            class="pt-3 py-1 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200 @error('branch') border-red-500 @enderror" value="{{ old('branch') }}"
        />
         @error('branch')
                 <div class="text-red-500 mt2 text-sm">
                    {{ $message }}
                 </div>
          @enderror
        </div>
      </div>
      <div class=" w-full mb-5">
        <input
          type="text"
          name="place"
          placeholder="Enter city/town"
          class="pt-3 py-1 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200 @error('place') border-red-500 @enderror" value="{{ old('place') }}"
        />
         @error('place')
                 <div class="text-red-500 mt2 text-sm">
                    {{ $message }}
                 </div>
          @enderror
      </div>

      <div class=" w-full mb-5">
         <label for="select" class=" duration-300 text-gray-500">Select the department</label>
        <select
          name="select"
          class="pt-3 py-1 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none z-1 focus:outline-none focus:ring-0 focus:border-black border-gray-200 @error('select') border-red-500 @enderror" value="{{ old('select') }}"
        >
          <option value="" selected disabled hidden>Enter the department</option>
          <option value="1">Option 1</option>
          <option value="2">Option 2</option>
          <option value="3">Option 3</option>
          <option value="4">Option 4</option>
          <option value="5">Option 5</option>
        </select>

        @error('select')
                 <div class="text-red-500 mt2 text-sm">
                    {{ $message }}
                 </div>
          @enderror
        
      </div>

      <div class="flex flex-row space-x-4">
        <div class="w-full mb-5">
         <label for="select" class=" duration-300 text-gray-500">Select the duration</label>
          <input
            type="text"
            name="duration"
            placeholder="Enter date"
            id="range"
            class="pt-3 py-1 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200 @error('duration') border-red-500 @enderror" value="{{ old('duration') }}"
        />
         @error('duration')
                 <div class="text-red-500 mt2 text-sm">
                    {{ $message }}
                 </div>
          @enderror

        </div>
        <div class="w-full">
         <label for="program" class=" duration-300 text-gray-500">Enter program name</label>
          <input
            type="text"
            name="program"
            placeholder="Program..."
            class="pt-3  py-1 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200 @error('program') border-red-500 @enderror" value="{{ old('program') }}"
        />
         @error('program')
                 <div class="text-red-500 mt2 text-sm">
                    {{ $message }}
                 </div>
          @enderror
        </div>
      </div>

      <div class="w-full mb-5">
        <input
          type="number"
          name="amount"
          min="0"
          placeholder="Enter amount"
          class="pt-3 py-1 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200 @error('amount') border-red-500 @enderror" value="{{ old('amount') }}"
        />
         @error('amount')
                 <div class="text-red-500 mt2 text-sm">
                    {{ $message }}
                 </div>
          @enderror
      </div>
       <div class="w-full mb-5">
        <textarea placeholder="Write the purpose here..."
          name="description"
          class="w-full bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200 resize-none @error('description') border-red-500 @enderror" value="{{ old('description') }}"></textarea>
           
         @error('description')
                 <div class="text-red-500 mt2 text-sm">
                    {{ $message }}
                 </div>
          @enderror
      </div>

      <button
        id="button"
        type="submit"
        class="w-full px-6 py-3 mt-3 text-lg text-white transition-all duration-150 ease-linear rounded-lg shadow outline-none bg-pink-500 hover:bg-pink-600 hover:shadow-lg focus:outline-none"
      >
        Submit
      </button>
    </form>

    </div>


</div>   




</div>
</div>

@endsection