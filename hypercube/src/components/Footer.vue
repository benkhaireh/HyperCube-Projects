<template>
      <!-- ====== Footer Section Start -->
  <footer class="bg-white rounded-lg shadow m-4 mt-[120px] lg:mt-[150px]">
    <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
      <div class="sm:flex sm:items-center sm:justify-between">
        <a
          href="https://flowbite.com/"
          class="flex flex-col items-center mb-4 sm:mb-0"
        >
          <img src="/brand.png" class="h-12 mr-3" alt="HyperCube Logo" />
        </a>
        <ul
          class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0"
        >
          <li>
            <a href="#" class="mr-4 hover:underline md:mr-6">À Propos</a>
          </li>
          <li>
            <a href="#" class="mr-4 hover:underline md:mr-6">Nos Services</a>
          </li>
          <li>
            <a href="#" class="hover:underline">Nous Contacter</a>
          </li>
        </ul>
      </div>
      <hr
        class="my-6 border-gray-200 sm:mx-auto lg:my-8"
      />
      <span
        class="block text-sm text-gray-500 sm:text-center"
        >© {{ copyDate }}
        <a href="https://hypercube.dj/" class="hover:underline">HyperCube</a>.
        Tous droits réservés.</span
      >
    </div>
  </footer>
  <!-- ====== Footer Section End -->
</template>
<script>
export default {
    name: "FooterComp",
    data() {
        return {
          copyDate: new Date().getFullYear(),
        }
    }
}
</script>