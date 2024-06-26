<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">

</head>
<body>
    

<nav class="bg-white border-gray-200 dark:bg-gray-900">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
    <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
        <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo" />
        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
    </a>
    <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
    </button>
    <div class="hidden w-full md:block md:w-auto" id="navbar-default">
      <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
        <li>
          <a href="/" class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white md:dark:text-blue-500" aria-current="page">Home</a>
        </li>
        <li>
          <a href="form" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">form</a>
        </li>
       
      </ul>
    </div>
  </div>
</nav>

    <h1>All Products</h1>
    @foreach ($products as $product)
        <div class="product p-4">
            <h2>{{ $product['mark'] }}</h2>
            <p>{{ $product['description'] }}</p>
            <p>Price: {{ $product['price'] }}</p>
            <p>Quantity: {{ $product['quantity'] }}</p>
            <h2 class="text-xl font-bold mb-2">Photos</h2>

        @foreach($product['photo'] as $photo)
            <img src="{{ $photo['photo'] }}" alt="Product Photo" class="mb-2">
        @endforeach

            <h3>Categories</h3>
            <div class="">
            @foreach ($product['product_category'] as $category)
                <div>{{ $category['categorie'] }}</div>
            @endforeach
            </div>
           

            <h3>Features</h3>
            @foreach ($product['product_feature'] as $feature)
                <p>{{ $feature['parameter'] }}</p>
                <ul>{{ $feature['description'] }}</ul>
            @endforeach
        </div>
        <div> <a href="{{ route('xml.show', ['id' => $product['id']]) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                XML Details
            </a></div>
        <div><hr class="m-5" style="border: 1px solid blue;"></div>
    @endforeach

</body>
</html>