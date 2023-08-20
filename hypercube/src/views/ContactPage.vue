<template>
  <section class="min-h-screen mt-32 bg-white lg:flex">
    <div
      class="flex flex-col justify-center w-full p-8 lg:bg-gray-100 lg:px-12 xl:px-32 lg:w-1/2"
    >
      <h1 class="text-2xl font-semibold text-gray-800 capitalize lg:text-3xl">
        Contactez-nous
      </h1>

      <p class="mt-4 text-gray-500">
        Chez Hypercube, nous croyons en la puissance de la technologie pour
        transformer les entreprises. Notre équipe passionnée de
        technointégrateurs est prête à transformer vos idées en réalité. Que
        vous cherchiez à optimiser vos opérations, à développer des solutions
        novatrices ou à repousser les limites de la performance, nous sommes là
        pour vous. Complétez le formulaire ci-dessous pour commencer cette
        aventure. Ensemble, nous créerons un avenir où les possibilités
        technologiques sont infinies. Ne laissez pas vos ambitions attendre,
        contactez-nous aujourd'hui !
      </p>

      <div class="mt-6 md:mt-8">
        <h3 class="font-medium text-gray-600">Nous suivre</h3>

        <div class="flex mt-4 -mx-1.5">
          <a
            class="mx-1.5 text-gray-400 transition-colors duration-300 transform hover:text-blue-500"
            href="#"
          >
            <svg
              class="w-10 h-10 fill-current"
              viewBox="0 0 24 24"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M18.6668 6.67334C18.0002 7.00001 17.3468 7.13268 16.6668 7.33334C15.9195 6.49001 14.8115 6.44334 13.7468 6.84201C12.6822 7.24068 11.9848 8.21534 12.0002 9.33334V10C9.83683 10.0553 7.91016 9.07001 6.66683 7.33334C6.66683 7.33334 3.87883 12.2887 9.3335 14.6667C8.0855 15.498 6.84083 16.0587 5.3335 16C7.53883 17.202 9.94216 17.6153 12.0228 17.0113C14.4095 16.318 16.3708 14.5293 17.1235 11.85C17.348 11.0351 17.4595 10.1932 17.4548 9.34801C17.4535 9.18201 18.4615 7.50001 18.6668 6.67268V6.67334Z"
              />
            </svg>
          </a>

          <a
            class="mx-1.5 text-gray-400 transition-colors duration-300 transform hover:text-blue-500"
            href="#"
          >
            <svg
              class="w-8 h-8"
              viewBox="0 0 24 24"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M15.2 8.80005C16.4731 8.80005 17.694 9.30576 18.5941 10.2059C19.4943 11.1061 20 12.327 20 13.6V19.2H16.8V13.6C16.8 13.1757 16.6315 12.7687 16.3314 12.4687C16.0313 12.1686 15.6244 12 15.2 12C14.7757 12 14.3687 12.1686 14.0687 12.4687C13.7686 12.7687 13.6 13.1757 13.6 13.6V19.2H10.4V13.6C10.4 12.327 10.9057 11.1061 11.8059 10.2059C12.7061 9.30576 13.927 8.80005 15.2 8.80005Z"
                fill="currentColor"
              />
              <path d="M7.2 9.6001H4V19.2001H7.2V9.6001Z" fill="currentColor" />
              <path
                d="M5.6 7.2C6.48366 7.2 7.2 6.48366 7.2 5.6C7.2 4.71634 6.48366 4 5.6 4C4.71634 4 4 4.71634 4 5.6C4 6.48366 4.71634 7.2 5.6 7.2Z"
                fill="currentColor"
              />
            </svg>
          </a>

          <a
            class="mx-1.5 text-gray-400 transition-colors duration-300 transform hover:text-blue-500"
            href="#"
          >
            <svg
              class="w-8 h-8"
              viewBox="0 0 24 24"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M7 10.2222V13.7778H9.66667V20H13.2222V13.7778H15.8889L16.7778 10.2222H13.2222V8.44444C13.2222 8.2087 13.3159 7.9826 13.4826 7.81591C13.6493 7.64921 13.8754 7.55556 14.1111 7.55556H16.7778V4H14.1111C12.9324 4 11.8019 4.46825 10.9684 5.30175C10.1349 6.13524 9.66667 7.2657 9.66667 8.44444V10.2222H7Z"
                fill="currentColor"
              />
            </svg>
          </a>
        </div>
      </div>
    </div>

    <div
      class="flex flex-col justify-center w-full p-8 pt-0 lg:w-1/2 lg:px-12 xl:px-24"
    >
      <form>
        <div class="-mx-2 md:items-center md:flex">
          <div class="flex-1 px-2">
            <label class="block mb-2 text-sm text-gray-600"
              >Nom et Prénom</label
            >
            <input
              type="text"
              placeholder="John Doe"
              class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40"
            />
          </div>

          <div class="flex-1 px-2 mt-4 md:mt-0">
            <label class="block mb-2 text-sm text-gray-600"
              >Adresse E-mail</label
            >
            <input
              type="email"
              placeholder="johndoe@exemple.com"
              class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40"
            />
          </div>
        </div>

        <div class="w-full mt-4">
          <label class="block mb-2 text-sm text-gray-600">Votre Message</label>
          <textarea
            class="block w-full h-32 px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md md:h-56 focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40"
            placeholder="Votre message par ici"
          ></textarea>
        </div>

        <button
          class="w-full px-6 py-3 mt-4 text-sm font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-500 rounded-md hover:bg-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-50"
        >
          get in touch
        </button>
      </form>
    </div>
  </section>
  <!-- Section: Design Block -->
  <section class="container my-24 mb-32 mx-auto md:px-6">
    <div
      class="block rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)]"
    >
      <div class="flex flex-wrap items-center">
        <div
          class="block w-full shrink-0 grow-0 basis-auto lg:flex lg:w-6/12 xl:w-4/12"
        >
          <div class="h-[500px] w-full">
            <iframe
              src="https://maps.google.com/maps?q=hypercube,%20cite%20avaition,%20djibouti+(hypercube)&t=&z=13&ie=UTF8&iwloc=&output=embed"
              class="left-0 top-0 h-full w-full rounded-t-lg lg:rounded-tr-none lg:rounded-bl-lg"
              frameborder="0"
              allowfullscreen
            ></iframe>
          </div>
        </div>
        <div class="w-full shrink-0 grow-0 basis-auto lg:w-6/12 xl:w-8/12">
          <div class="flex flex-wrap px-3 pt-12 pb-12 md:pb-0 lg:pt-0">
            <div
              class="mb-12 w-full shrink-0 grow-0 basis-auto px-3 md:w-6/12 md:px-6 lg:w-full xl:w-6/12 xl:px-12"
            >
              <div class="flex items-start">
                <div class="shrink-0">
                  <div
                    class="inline-block rounded-md bg-pink-100 p-4 text-pink-700"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke-width="2"
                      stroke="currentColor"
                      class="h-6 w-6"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M14.25 9.75v-4.5m0 4.5h4.5m-4.5 0l6-6m-3 18c-8.284 0-15-6.716-15-15V4.5A2.25 2.25 0 014.5 2.25h1.372c.516 0 .966.351 1.091.852l1.106 4.423c.11.44-.054.902-.417 1.173l-1.293.97a1.062 1.062 0 00-.38 1.21 12.035 12.035 0 007.143 7.143c.441.162.928-.004 1.21-.38l.97-1.293a1.125 1.125 0 011.173-.417l4.423 1.106c.5.125.852.575.852 1.091V19.5a2.25 2.25 0 01-2.25 2.25h-2.25z"
                      />
                    </svg>
                  </div>
                </div>
                <div class="ml-6 grow">
                  <p class="mb-2 font-bold">Support technique</p>
                  <p class="text-neutral-500">contact@hypercube.dj</p>
                  <p class="text-neutral-500">+253 21 35 29 29</p>
                </div>
              </div>
            </div>
            <div
              class="mb-12 w-full shrink-0 grow-0 basis-auto px-3 md:w-6/12 md:px-6 lg:w-full xl:w-6/12 xl:px-12"
            >
              <div class="flex items-start">
                <div class="shrink-0">
                  <div
                    class="inline-block rounded-md bg-pink-100 p-4 text-pink-700"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke-width="2"
                      stroke="currentColor"
                      class="h-6 w-6"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z"
                      />
                    </svg>
                  </div>
                </div>
                <div class="ml-6 grow">
                  <p class="mb-2 font-bold">Questions sur les ventes</p>
                  <p class="text-neutral-500">sales@hypercube.dj</p>
                  <p class="text-neutral-500">+253 21 35 29 29</p>
                </div>
              </div>
            </div>
            <div
              class="mb-12 w-full shrink-0 grow-0 basis-auto px-3 md:w-6/12 md:px-6 lg:w-full xl:mb-0 xl:w-6/12 xl:px-12"
            >
              <div class="align-start flex">
                <div class="shrink-0">
                  <div
                    class="inline-block rounded-md bg-pink-100 p-4 text-pink-700"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke-width="2"
                      stroke="currentColor"
                      class="h-6 w-6"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M12 12.75c1.148 0 2.278.08 3.383.237 1.037.146 1.866.966 1.866 2.013 0 3.728-2.35 6.75-5.25 6.75S6.75 18.728 6.75 15c0-1.046.83-1.867 1.866-2.013A24.204 24.204 0 0112 12.75zm0 0c2.883 0 5.647.508 8.207 1.44a23.91 23.91 0 01-1.152 6.06M12 12.75c-2.883 0-5.647.508-8.208 1.44.125 2.104.52 4.136 1.153 6.06M12 12.75a2.25 2.25 0 002.248-2.354M12 12.75a2.25 2.25 0 01-2.248-2.354M12 8.25c.995 0 1.971-.08 2.922-.236.403-.066.74-.358.795-.762a3.778 3.778 0 00-.399-2.25M12 8.25c-.995 0-1.97-.08-2.922-.236-.402-.066-.74-.358-.795-.762a3.734 3.734 0 01.4-2.253M12 8.25a2.25 2.25 0 00-2.248 2.146M12 8.25a2.25 2.25 0 012.248 2.146M8.683 5a6.032 6.032 0 01-1.155-1.002c.07-.63.27-1.222.574-1.747m.581 2.749A3.75 3.75 0 0115.318 5m0 0c.427-.283.815-.62 1.155-.999a4.471 4.471 0 00-.575-1.752M4.921 6a24.048 24.048 0 00-.392 3.314c1.668.546 3.416.914 5.223 1.082M19.08 6c.205 1.08.337 2.187.392 3.314a23.882 23.882 0 01-5.223 1.082"
                      />
                    </svg>
                  </div>
                </div>
                <div class="ml-6 grow">
                  <p class="mb-2 font-bold">Rapport de bug</p>
                  <p class="text-neutral-500">mohamed.khaireh@hypercube.dj</p>
                  <p class="text-neutral-500">+253 77 564 580</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Section: Design Block -->
</template>
<script>
export default {
  name: "ContactPage",
  data() {
    return {
      //
    };
  },
};
</script>
