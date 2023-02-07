<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>SDIS | Bienvenue</title>

  <link rel="shortcut icon" href="/images/favicon.png">
  @vite(['resources/js/app.js'])
</head>
<body>
  <header>
    <div x-data="{ isOpen: false, dropdownIsOpen: false }" class="relative bg-black text-white">
      <!-- ----------- -->
      <!-- desktop nav -->
      <!-- ----------- -->
      <div class="mx-auto max-w-7xl px-6">
        <div class="flex items-center justify-between py-6 md:space-x-10">
          <div class="flex justify-start lg:w-0 lg:flex-1">
            <a href="#">
              <span class="sr-only">Your Company</span>
              <img src="../images/sdis-logo.svg" class="h-10 md:h-12 lg:h-16 w-auto" alt="">
            </a>
          </div>
          <div class="-my-2 -mr-2 lg:hidden">
            <button
              @click="isOpen = !isOpen"
              type="button"
              class="inline-flex items-center justify-center rounded-sm text-white hover:bg-opacity-75 p-2" aria-expanded="false">
              <span class="sr-only">Open menu</span>
              <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
              </svg>
            </button>
          </div>
          <nav class="hidden space-x-10 lg:flex">
            <div class="relative">
              <button
                type="button"
                @click="dropdownIsOpen = !dropdownIsOpen"
                class="group inline-flex items-center font-bold hover:text-gray-300" aria-expanded="false">
                <span>Le SDIS</span>
                <svg class="ml-2 h-5 w-5 group-hover:text-gray-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                </svg>
              </button>
              <div
                x-show="dropdownIsOpen"
                x-transition:enter="transition ease-out duration-100"
                x-transition:enter-start="transform opacity-0 scale-95"
                x-transition:enter-end="transform opacity-100 scale-100"
                x-transition:leave="transition ease-in duration-75"
                x-transition:leave-start="transform opacity-100 scale-100"
                x-transition:leave-end="transform opacity-0 scale-95"
                class="absolute right-0 z-10 mt-2 w-56 origin-top-right rounded-md bg-gray-700 border-2 border-gray-600" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                <div class="py-1" role="none">
                  <a href="#" class="font-bold hover:bg-gray-500 block px-4 py-2" role="menuitem" tabindex="-1" id="menu-item-0">Link</a>
                  <a href="#" class="font-bold hover:bg-gray-500 block px-4 py-2" role="menuitem" tabindex="-1" id="menu-item-1">Link</a>
                  <a href="#" class="font-bold hover:bg-gray-500 block px-4 py-2" role="menuitem" tabindex="-1" id="menu-item-2">Link</a>
                </div>
              </div>
            </div>
            <a href="#" class="font-bold hover:text-gray-300">Prestations</a>
            <a href="#" class="font-bold hover:text-gray-300">Documents</a>
            <a href="#" class="font-bold hover:text-gray-300">Devenir Sapeur Pompier</a>
            <a href="#" class="font-bold hover:text-gray-300">Contact</a>
          </nav>
        </div>
      </div>
      <!-- ----------- -->
      <!-- mobile nav -->
      <!-- ----------- -->
      <div
        x-show="isOpen"
        x-transition:enter="duration-200 ease-out"
        x-transition:enter-start="opacity-0 scale-95"
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="duration-100 ease-in"
        x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-95"
        class="absolute inset-x-0 top-0 origin-top-right transform p-1 transition lg:hidden">
        <div class="divide-y-2 rounded-sm bg-black">
          <div class="px-5 pt-5 pb-6">
            <div class="flex items-center justify-between">
              <div>
                <img class="h-10 md:h-12 w-auto" src="../images/sdis-logo.svg" alt="Your Company">
              </div>
              <div>
                <button
                  @click="isOpen = !isOpen"
                  type="button"
                  class="inline-flex items-center justify-center rounded-sm text-white hover:bg-opacity-75 p-2">
                  <span class="sr-only">Close menu</span>
                  <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                  </svg>
                </button>
              </div>
            </div>
            <div class="mt-6">
              <nav class="flex flex-col">
                <div class="relative">
                  <button
                    type="button"
                    @click="dropdownIsOpen = !dropdownIsOpen"
                    class="group inline-flex items-center font-bold hover:text-gray-300 p-3" aria-expanded="false">
                    <span>Le SDIS</span>
                    <svg class="ml-2 h-5 w-5 group-hover:text-gray-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                      <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                    </svg>
                  </button>
                  <div
                    x-show="dropdownIsOpen"
                    x-transition:enter="transition ease-out duration-100"
                    x-transition:enter-start="transform opacity-0 scale-95"
                    x-transition:enter-end="transform opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-75"
                    x-transition:leave-start="transform opacity-100 scale-100"
                    x-transition:leave-end="transform opacity-0 scale-95"
                    class="absolute left-0 z-10 mt-2 w-56 origin-top-right rounded-md bg-gray-700 border-2 border-gray-600" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                    <div class="py-1" role="none">
                      <a href="#" class="font-bold hover:bg-gray-500 block px-4 py-2" role="menuitem" tabindex="-1" id="menu-item-0">Link</a>
                      <a href="#" class="font-bold hover:bg-gray-500 block px-4 py-2" role="menuitem" tabindex="-1" id="menu-item-1">Link</a>
                      <a href="#" class="font-bold hover:bg-gray-500 block px-4 py-2" role="menuitem" tabindex="-1" id="menu-item-2">Link</a>
                    </div>
                  </div>
                </div>
                <a href="#" class="p-3 hover:bg-gray-800 font-bold">Prestations</a>
                <a href="#" class="p-3 hover:bg-gray-800 font-bold">Documents</a>
                <a href="#" class="p-3 hover:bg-gray-800 font-bold">Devenir Sapeur Pompier</a>
                <a href="#" class="p-3 hover:bg-gray-800 font-bold">Contact</a>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <main>
    @yield('content')
  </main>

</body>
</html>