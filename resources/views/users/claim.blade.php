@extends('layouts.app')

@section('content')

<div class="w-full flex items-center min-h-screen">
<div class="w-1/6 min-h-screen dark:bg-gray-900 text-white font-semibold text-xl p-4">
      <ul class="space-y-2">
         <li>
            <a href="{{ route('claim') }}" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
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
<div class="w-5/6 min-h-screen">
<h3 class="text-sky-400 text-2xl font-semibold px-12 py-4">Dashboard</h3>

 <div class="w-11/12 mx-auto">
    <a href="{{ route('order') }}" class="text-gray-900 bg-gradient-to-r from-teal-200 to-lime-200 hover:bg-gradient-to-l hover:from-teal-200 hover:to-lime-200 focus:ring-4 focus:outline-none focus:ring-lime-200 dark:focus:ring-teal-700 font-medium rounded-lg text-sm px-5 py-1 text-center mr-2 mb-4 float-right"><i class="fa fa-plus p-2"></i>File Request</a>
     <table class="display" id="claims">
                  <thead>
                    <tr>
                     <th class="uppercase text-stone-400 text-xs font-semibold opacity-70">Beneficiary name</th>
                      <th class="uppercase text-stone-400 text-xs font-semibold opacity-70">Amount</th>
                      <th class="uppercase text-stone-400 text-xs font-semibold opacity-70">Purpose</th>
                      <th class="uppercase text-stone-400 text-xs font-semibold opacity-70">Status</th>                  
                      <th class="uppercase text-stone-400 text-xs font-semibold opacity-70">Date</th>
                    </tr>
                  </thead>
                  <tbody>
                         
                    <tr>
                     <td>
                         <p class="text-gray-500 text-sm font-semibold mb-0">Joseph mwenda</p>
                      </td>
                      <td>
                         <p class="text-gray-500 text-sm font-semibold mb-0">Ksh.4000</p>
                      </td>
                      <td>
                         <p class="text-gray-500 text-sm font-semibold mb-0">Hackathon event</p>
                      </td>
                         <td class="text-gray-500 text-sm font-bold"> 
                          <span class="bg-red-500 text-white border rounded-md outline-none border-0 py-1 px-2 drop-shadow-md">
											<i class="fa fa-warning"></i>&ensp;Declined
									</span>
                        </td>

                      <td>
                          <span class="text-gray-500 text-sm font-semibold">20/12/2020</span>
                      </td>
                    </tr>

                         
                    <tr>
                     <td>
                         <p class="text-gray-500 text-sm font-semibold mb-0">George Kimani</p>
                      </td>
                      <td>
                         <p class="text-gray-500 text-sm font-semibold mb-0">Ksh.10000</p>
                      </td>
                      <td>
                         <p class="text-gray-500 text-sm font-semibold mb-0">Charity foundation donation </p>
                      </td>
                         <td class="text-gray-500 text-sm font-bold"> 
                          <span class="bg-teal-500 text-white border rounded-md outline-none border-0 py-1 px-2 drop-shadow-md">
											<i class="fa fa-check"></i>&ensp;Approved
									</span>
                        </td>

                      <td>
                          <span class="text-gray-500 text-sm font-semibold">20/12/2020</span>
                      </td>
                    </tr>
                          
                  </tbody>
                </table> 


</div>   




</div>
</div>

@endsection