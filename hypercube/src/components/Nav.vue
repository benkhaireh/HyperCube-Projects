<template>
  <!-- ====== Navbar Section Start -->
  <nav
    class="bg-white fixed w-full z-20 top-0 left-0 border-b border-gray-200 z-50 shadow"
  >
    <div
      class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4"
    >
      <a href="https://hypercube.dj" class="flex items-center">
        <img src="/brand.png" class="h-9 mr-3" alt="Hypercube Logo" />
      </a>
      <div class="flex md:order-2">
        <button
          type="button"
          class="text-white bg-pink-700 hover:bg-pink-800 focus:ring-4 focus:outline-none focus:ring-pink-300 font-medium rounded-lg text-sm px-4 py-2 text-center mr-3 md:mr-0"
        >
          Obtenir Un Devis
        </button>
        <button
          data-collapse-toggle="navbar-sticky"
          type="button"
          class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
          aria-controls="navbar-sticky"
          aria-expanded="false"
        >
          <span class="sr-only">Open main menu</span>
          <svg
            class="w-5 h-5"
            aria-hidden="true"
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 17 14"
          >
            <path
              stroke="currentColor"
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M1 1h15M1 7h15M1 13h15"
            />
          </svg>
        </button>
      </div>
      <div
        class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1"
        id="navbar-sticky"
      >
        <ul
          class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white"
        >
          <li>
            <router-link
              to="/home"
              class="block py-2 pl-3 pr-4 rounded md:bg-transparent md:p-0"
              :class="[
                $route.path == '/'
                  ? 'text-white bg-pink-700 md:text-pink-700'
                  : 'text-gray-900 md:hover:text-pink-700',
                $route.path == '/home'
                  ? 'text-white bg-pink-700 md:text-pink-700'
                  : 'text-gray-900 md:hover:text-pink-700',
              ]"
              aria-current="page"
              >Accueil</router-link
            >
          </li>
          <li>
            <router-link
              to="/services"
              class="block py-2 pl-3 pr-4 rounded md:bg-transparent md:p-0"
              :class="
                $route.path == '/services'
                  ? 'text-white bg-pink-700 md:text-pink-700'
                  : 'text-gray-900 md:hover:text-pink-700'"
              >Nos Services</router-link
            >
          </li>
          <li>
            <router-link
              to="/about"
              class="block py-2 pl-3 pr-4 rounded md:bg-transparent md:p-0"
              :class="
                $route.path == '/about'
                  ? 'text-white bg-pink-700 md:text-pink-700'
                  : 'text-gray-900 md:hover:text-pink-700'"
              >À Propos</router-link
            >
          </li>
          <li>
            <router-link
              to="/contact"
              class="block py-2 pl-3 pr-4 rounded md:bg-transparent md:p-0"
              :class="
                $route.path == '/contact'
                  ? 'text-white bg-pink-700 md:text-pink-700'
                  : 'text-gray-900 md:hover:text-pink-700'"
              >Nous Contacter</router-link
            >
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- ====== Navbar Section End -->
</template>
<script>
export default {
  name: "NavComp",
  data() {
    return {
      //
    };
  },
};
</script>
