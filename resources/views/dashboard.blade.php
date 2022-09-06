@extends('layouts.app')

@section('content')

<div class="w-full flex items-center min-h-screen">
<div class="w-1/6 min-h-screen dark:bg-gray-900 text-white font-semibold text-xl p-4">
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
<div class="w-5/6 min-h-screen">
<h3 class="text-sky-400 text-2xl font-semibold px-12 pt-2">Dashboard</h3>

<h4 class="px-12 py-4 text-slate-400">Sanction &ensp;/&ensp;Dashboard</h4>

 <div class="w-11/12 mx-auto">

   <a href="{{ route('employee') }}" class="text-gray-900 bg-gradient-to-r from-teal-200 to-lime-200 hover:bg-gradient-to-l hover:from-teal-200 hover:to-lime-200 focus:ring-4 focus:outline-none focus:ring-lime-200 dark:focus:ring-teal-700 font-medium rounded-lg text-sm px-5 py-1 text-center mr-2 mb-4 float-right"><i class="fa fa-plus p-2"></i>Add Employee</a>
    
     <table class="display" id="claims">
                  <thead>
                    <tr>
                      <th class="uppercase text-stone-400 text-xs font-semibold opacity-70">Employee</th>
                      <th class="uppercase text-stone-400 text-xs font-semibold opacity-70">Mobile</th>
                      <th class="uppercase text-stone-400 text-xs font-semibold opacity-70">Amount</th>
                      <th class="uppercase text-stone-400 text-xs font-semibold opacity-70">Reason</th>
                      <th class="uppercase text-stone-400 text-xs font-semibold opacity-70">Department</th>                  
                      <th class="uppercase text-stone-400 text-xs font-semibold opacity-70">Date</th>
                     <th class="uppercase text-stone-400 text-xs font-semibold opacity-70"></th>
                    </tr>
                  </thead>
                  <tbody>
                         
                    <tr>
                       <td>
                        <a href="#" class="text-gray-500 font-semibold text-sm">Lance Stroll</a>                   
                      </td>
                      <td>
                        <p class="text-gray-500 text-sm font-semibold mb-0">0712345678</p>
                      </td>

                      <td>
                         <p class="text-gray-500 text-sm font-semibold mb-0">Ksh.4000</p>
                      </td>
                      <td>
                         <p class="text-gray-500 text-sm font-semibold mb-0">Hackathon event</p>
                      </td>
                     
                      <td>
                        <p class="text-gray-500 text-sm font-semibold mb-0">Department of Finance</p>
                      </td>

                      <td>
                          <span class="text-gray-500 text-sm font-semibold">20/12/2020</span>
                      </td>
                       <td class="text-gray-500 text-xl font-semibold flex justify-between items-center">
	                    <a href="#" class="text-green-500 text-sm" title="Approve"></i>
                          Approve
                        </a>
						<a href="#" class="text-rose-500 text-sm" title="Decline"></i>
                          Delcine
                        </a> 
						</td>
                    </tr>
                          
                  </tbody>
                </table> 


</div>   




</div>
</div>

@endsection