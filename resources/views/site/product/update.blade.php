@extends('layouts.site')

@section('content')
<div class="py-6">
   <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
         <div class="p-6 text-gray-900">
            <h1>Update Product</h1>
            <form action="{{ route('product.update') }}" method="post">
               @csrf

               <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-8">
                  <div class="sm:col-span-2">
                     <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Name</label>
                     <div class="mt-2">
                        <input type="text" name="name" value="{{ $product->name }}"
                           id="name" autocomplete="given-name"
                           class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                     </div>
                  </div>
                  <div class="sm:col-span-6">
                     <label for="description"
                        class="block text-sm font-medium leading-6 text-gray-900">Description</label>
                     <div class="mt-2">
                        <input type="text" name="description" value="{{ $product->description }}" id="description"
                           autocomplete="given-name"
                           class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                     </div>
                  </div>
                  <div class="sm:col-span-1">
                     <label for="price"
                        class="block text-sm font-medium leading-6 text-gray-900">Price</label>
                     <div class="mt-2">
                        <input type="number" name="price" value="{{ $product->price }}" id="price" autocomplete="given-name"
                           class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                     </div>
                  </div>
                  <div class="sm:col-span-1">
                     <label for="amount"
                        class="block text-sm font-medium leading-6 text-gray-900">Amount</label>
                     <div class="mt-2">
                        <input type="number" name="amount" value="{{ $product->amount }}" id="amount" autocomplete="given-name"
                           class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                     </div>
                  </div>
                  
                  <div class="sm:col-span-2">
                     <label for="producer" class="block text-sm font-medium leading-6 text-gray-900">Producer</label>
                     <div class="mt-2">
                        <select name="id_producer" id="producer"
                           class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                           @foreach ($producers as $producer)
                           <option value="{{ $producer->id_producer }}" {{ $producer->id_producer !== $product->id_producer ?: 'selected' }}>{{ $producer->name }}</option>
                           @endforeach
                        </select>
                     </div>
                  </div>
                  <div class="sm:col-span-2">
                     <label for="category" class="block text-sm font-medium leading-6 text-gray-900">Category</label>
                     <div class="mt-2">
                        <select name="id_category" id="category"
                           class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                           @foreach ($categories as $category)
                           <option value="{{ $category->id_category }}" {{ $category->id_category !== $product->id_category ?: 'selected' }}>{{ $category->name }}</option>
                           @endforeach
                        </select>
                     </div>
                  </div>
                  <div class="sm:col-span-2">
                     <label for="subcategory" class="block text-sm font-medium leading-6 text-gray-900">Subcategory</label>
                     <div class="mt-2">
                        <select name="id_subcategory" id="subcategory"
                           class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                           @foreach ($subcategories as $subcategory)
                           <option value="{{ $subcategory->id_subcategory }}" {{ $subcategory->id_subcategory !== $product->id_subcategory ?: 'selected' }}>{{ $subcategory->name }}</option>
                           @endforeach
                        </select>
                     </div>
                  </div>
               </div>
               <button type="submit" name="id_product" value="{{ $product->id_product }}"
                  class="rounded-md bg-indigo-600 my-3 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                  Update
               </button>
               <span class="inline-block my-3">
                  <a class="inline-block rounded-md bg-gray-600 m-3 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-gray-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-600"
                     href="{{ route('my_products') }}">Cancel</a>
               </span>
            </form>

         </div>
      </div>
   </div>
</div>
@endsection
