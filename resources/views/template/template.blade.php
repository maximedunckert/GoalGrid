<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    @vite("resources/css/app.css")
    <title>GoalGrid</title>
  </head>
  <body class="bg-gray-700">
    <nav
      class="bg-gray-900 fixed w-full z-20 top-0 start-0 border-b border-default"
    >
      <div
        class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4"
      >
        @auth
            <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
          <a href="#">
            <button
            type="button"
            class="text-white bg-brand hover:bg-brand-strong box-border border border-transparent focus:ring-4 focus:ring-brand-medium shadow-xs font-medium leading-5 rounded-base text-sm px-3 py-2 focus:outline-none"
          >
            <i class="fa-solid fa-user"></i>
          </button>
          </a>
        </div>
        @endauth
        @guest
            <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
          <a href="/login">
            <button
            type="button"
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
          >
            Login
          </button>
          </a>
        </div>
        @endguest
        <div
          class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1"
          id="navbar-sticky"
        >
          <ul
            class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-default rounded-base bg-neutral-secondary-soft md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-neutral-primary"
          >
            <li>
                @if (request()->path() == 'home' || request()->path() == '/')
                    <a
                href="#"
                class="block py-2 px-3 text-blue-300 bg-brand rounded-sm md:bg-transparent md:text-fg-brand md:p-0"
                aria-current="page"
                >Home</a
                >
                @else
                <a
                href="/"
                class="block py-2 px-3 text-white rounded hover:bg-neutral-tertiary md:hover:bg-transparent md:border-0 md:hover:text-fg-brand md:p-0 md:dark:hover:bg-transparent"
                >Home</a
              >
                @endif
            </li>
            <li>
                @if (request()->path() == 'games' || request()->path() == '/games')
              <a
                href="/games"
                class="block py-2 px-3 text-blue-300 rounded hover:bg-neutral-tertiary md:hover:bg-transparent md:border-0 md:hover:text-fg-brand md:p-0 md:dark:hover:bg-transparent"
                >Games</a
              >
              @else
              <a
                href="/games"
                class="block py-2 px-3 text-white rounded hover:bg-neutral-tertiary md:hover:bg-transparent md:border-0 md:hover:text-fg-brand md:p-0 md:dark:hover:bg-transparent"
                >Games</a
              >
              @endif
            </li>
            <li>
                @if (request()->path() == 'friends' || request()->path() == '/friends')
              <a
                href="/friends"
                class="block py-2 px-3 text-blue-300 rounded hover:bg-neutral-tertiary md:hover:bg-transparent md:border-0 md:hover:text-fg-brand md:p-0 md:dark:hover:bg-transparent"
                >Friends</a
              >
              @else
              <a
                href="/friends"
                class="block py-2 px-3 text-white rounded hover:bg-neutral-tertiary md:hover:bg-transparent md:border-0 md:hover:text-fg-brand md:p-0 md:dark:hover:bg-transparent"
                >Friends</a
              >
              @endif
            </li>
            <li>
                @if (request()->path() == 'contact' || request()->path() == '/contact')
              <a
                href="/contact"
                class="block py-2 px-3 text-blue-300 rounded hover:bg-neutral-tertiary md:hover:bg-transparent md:border-0 md:hover:text-fg-brand md:p-0 md:dark:hover:bg-transparent"
                >Contact</a
              >
              @else
              <a
                href="/contact"
                class="block py-2 px-3 text-white rounded hover:bg-neutral-tertiary md:hover:bg-transparent md:border-0 md:hover:text-fg-brand md:p-0 md:dark:hover:bg-transparent"
                >Contact</a
              >
              @endif
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <main class="pt-25 px-10">
        @yield('content')
    </main>
  </body>
</html>
