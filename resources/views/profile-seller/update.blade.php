@extends('layouts.site')

@section('content')
<div class="py-6">
   <div class="max-w-7xl mx-auto sm:px-4 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
         <div class="p-6 text-gray-900">
            <h1 class="text-xl">Edit Profile</h1>
            <form action="{{ route('seller.update') }}" method="post">
               @csrf

               <div class="mt-5 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                  <div class="sm:col-span-2">
                     <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Name</label>
                     <div class="mt-2">
                        <input type="text" id="name" name="name" value="{{ $seller->name }}" autocomplete="given-name"
                           class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                     </div>
                  </div>
                  <div class="sm:col-span-2">
                     <label for="surname" class="block text-sm font-medium leading-6 text-gray-900">Surname</label>
                     <div class="mt-2">
                        <input type="text" id="surname" name="surname" value="{{ $seller->surname }}" autocomplete="given-name"
                           class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                     </div>
                  </div>
                  <div class="sm:col-span-2">
                     <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email</label>
                     <div class="mt-2">
                        <input type="text" id="email" name="email" value="{{ $seller->email }}" autocomplete="given-name"
                           class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                     </div>
                  </div>
                  <div class="sm:col-span-2">
                     <label for="tel" class="block text-sm font-medium leading-6 text-gray-900">Phone</label>
                     <div class="mt-2">
                        <input type="text" id="tel" name="tel" value="{{ $seller->phone }}" autocomplete="given-name"
                           class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                     </div>
                  </div>
                  <div class="sm:col-span-2">
                     <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                     <div class="mt-2">
                        <input type="password" id="password" name="password" value=""
                           class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                     </div>
                  </div>
                  <div class="sm:col-span-2">
                     <label for="marketplace" class="block text-sm font-medium leading-6 text-gray-900">Marketplace</label>
                     <div class="mt-2">
                        <select id="marketplace" name="id_marketplace"
                           class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                           @foreach ($marketplaces as $marketplace)
                           <option value="{{ $marketplace->id_marketplace }}" {{ $marketplace->id_marketplace !== $seller->id_marketplace ?: 'selected' }}>{{ $marketplace->country_code }} {{ $marketplace->country }}</option>
                           @endforeach
                        </select>
                     </div>
                  </div>
               </div>
               <button type="submit" name="id_seller" value="{{ $seller->id_seller }}"
                  class="rounded-md bg-indigo-600 my-3 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                  Update
               </button>
               <span class="inline-block my-3">
                  <a class="inline-block rounded-md bg-gray-600 m-3 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-gray-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-600"
                     href="{{ route('personal') }}">Cancel</a>
               </span>
            </form>
         </div>
      </div>
   </div>
</div>
@endsection