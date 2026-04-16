<nav class="bg-gray-800">
    <div class="mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl">
      <div class="flex justify-between items-center h-16">
        <div class="flex items-center">
          <div class="shrink-0">
            <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company" class="size-8" />
          </div>
          <div class="hidden md:block">
            <div class="flex items-baseline space-x-4 ml-10">
              <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-white/5 hover:text-white" -->
               <a href="/junaidphp/notes-app/" aria-current="page" class="<?= urlIs("/junaidphp/notes-app/") ? "bg-gray-900 text-white" : "text-gray-300"?> block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-white">Home</a>
               <a href="/junaidphp/notes-app/about" class="<?= urlIs("/junaidphp/notes-app/about") ? "bg-gray-900 text-white" : "text-gray-300"?> block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-white/5 hover:text-white">About</a>
               <a href="/junaidphp/notes-app/notes" class="<?= urlIs("/junaidphp/notes-app/notes") ? "bg-gray-900 text-white" : "text-gray-300"?> block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-white/5 hover:text-white">Notes</a>
               <a href="/junaidphp/notes-app/contact" class="<?= urlIs("/junaidphp/notes-app/contact") ? "bg-gray-900 text-white" : "text-gray-300"?> block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-white/5 hover:text-white">Contact</a>
            </div>
          </div>
        </div>
        <div class="hidden md:block">
          <div class="flex items-center ml-4 md:ml-6">
            <button type="button" class="relative p-1 rounded-full focus:outline-2 focus:outline-indigo-500 focus:outline-offset-2 text-gray-400 hover:text-white">
              <span class="absolute -inset-1.5"></span>
              <span class="sr-only">View notifications</span>
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6">
                <path d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </button>

            <!-- Profile dropdown -->
            <el-dropdown class="relative ml-3">
              <button class="relative flex items-center rounded-full focus-visible:outline-2 focus-visible:outline-indigo-500 focus-visible:outline-offset-2 max-w-xs">
                <span class="absolute -inset-1.5"></span>
                <span class="sr-only">Open user menu</span>
                <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" class="rounded-full outline outline-white/10 -outline-offset-1 size-8" />
              </button>

              <el-menu anchor="bottom end" popover class="bg-white data-closed:opacity-0 shadow-lg py-1 rounded-md outline-1 outline-black/5 w-48 data-closed:scale-95 origin-top-right transition transition-discrete data-enter:duration-100 data-leave:duration-75 data-leave:ease-in data-enter:ease-out [--anchor-gap:--spacing(2)] data-closed:transform">
                <a href="#" class="block focus:bg-gray-100 px-4 py-2 focus:outline-hidden text-gray-700 text-sm">Your profile</a>
                <a href="#" class="block focus:bg-gray-100 px-4 py-2 focus:outline-hidden text-gray-700 text-sm">Settings</a>
                <a href="#" class="block focus:bg-gray-100 px-4 py-2 focus:outline-hidden text-gray-700 text-sm">Sign out</a>
              </el-menu>
            </el-dropdown>
          </div>
        </div>
        <div class="md:hidden flex -mr-2">
          <!-- Mobile menu button -->
          <button type="button" command="--toggle" commandfor="mobile-menu" class="inline-flex relative justify-center items-center hover:bg-white/5 p-2 rounded-md focus:outline-2 focus:outline-indigo-500 focus:outline-offset-2 text-gray-400 hover:text-white">
            <span class="absolute -inset-0.5"></span>
            <span class="sr-only">Open main menu</span>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="in-aria-expanded:hidden size-6">
              <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="not-in-aria-expanded:hidden size-6">
              <path d="M6 18 18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </button>
        </div>
      </div>
    </div>

    <el-disclosure id="mobile-menu" hidden class="md:hidden block">
      <div class="space-y-1 px-2 sm:px-3 pt-2 pb-3">
        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-white/5 hover:text-white" -->
        <a href="/junaidphp/notes-app/" aria-current="page" class="block bg-gray-900 px-3 py-2 rounded-md font-medium text-white text-base">Home</a>
        <a href="/junaidphp/notes-app/about" class="block hover:bg-white/5 px-3 py-2 rounded-md font-medium text-gray-300 hover:text-white text-base">About</a>
        <a href="/junaidphp/notes-app/contact" class="block hover:bg-white/5 px-3 py-2 rounded-md font-medium text-gray-300 hover:text-white text-base">Contact</a>
      </div>
      <div class="pt-4 pb-3 border-white/10 border-t">
        <div class="flex items-center px-5">
          <div class="shrink-0">
            <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" class="rounded-full outline outline-white/10 -outline-offset-1 size-10" />
          </div>
          <div class="ml-3">
            <div class="font-medium text-white text-base/5">Tom Cook</div>
            <div class="font-medium text-gray-400 text-sm">tom@example.com</div>
          </div>
          <button type="button" class="relative ml-auto p-1 rounded-full focus:outline-2 focus:outline-indigo-500 focus:outline-offset-2 text-gray-400 hover:text-white shrink-0">
            <span class="absolute -inset-1.5"></span>
            <span class="sr-only">View notifications</span>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6">
              <path d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </button>
        </div>
        <div class="space-y-1 mt-3 px-2">
          <a href="#" class="block hover:bg-white/5 px-3 py-2 rounded-md font-medium text-gray-400 hover:text-white text-base">Your profile</a>
          <a href="#" class="block hover:bg-white/5 px-3 py-2 rounded-md font-medium text-gray-400 hover:text-white text-base">Settings</a>
          <a href="#" class="block hover:bg-white/5 px-3 py-2 rounded-md font-medium text-gray-400 hover:text-white text-base">Sign out</a>
        </div>
      </div>
    </el-disclosure>
  </nav>