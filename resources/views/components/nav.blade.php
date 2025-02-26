<nav class="bg-white">
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
      <div class="relative flex h-16 items-center justify-center">
        <!-- Mobile menu button -->
        <button id="menu-button" type="button" class="absolute left-2 sm:hidden rounded-md p-2 text-blue-600 hover:bg-blue-100 hover:text-blue-800 focus:ring-2 focus:ring-blue-600 focus:outline-none" aria-controls="mobile-menu" aria-expanded="false">
          <svg id="menu-icon" class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>
          <svg id="close-icon" class="hidden size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
          </svg>
        </button>


        <!-- Centered Links -->
        <div class="hidden sm:block">
          <div class="flex space-x-4 justify-center">
            <a href="#" class="rounded-md bg-blue-600 px-3 py-2 text-sm font-medium text-white">Home</a>
            <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-blue-600 hover:bg-blue-100 hover:text-blue-800">Products</a>
            <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-blue-600 hover:bg-blue-100 hover:text-blue-800">Profile</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Mobile Menu -->
    <div class="hidden sm:hidden" id="mobile-menu">
      <div class="space-y-1 px-2 pt-2 pb-3">
        <a href="#" class="block rounded-md bg-blue-600 px-3 py-2 text-base font-medium text-white">Home</a>
        <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-blue-600 hover:bg-blue-100 hover:text-blue-800">Products</a>
        <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-blue-600 hover:bg-blue-100 hover:text-blue-800">Profile</a>
      </div>
    </div>
  </nav>

  <script>
    document.getElementById('menu-button').addEventListener('click', function () {
      const menu = document.getElementById('mobile-menu');
      const menuIcon = document.getElementById('menu-icon');
      const closeIcon = document.getElementById('close-icon');

      menu.classList.toggle('hidden');
      menuIcon.classList.toggle('hidden');
      closeIcon.classList.toggle('hidden');
    });
  </script>
