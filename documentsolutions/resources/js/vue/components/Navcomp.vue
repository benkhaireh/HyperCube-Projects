<template>
    <nav
        class="fixed top-0 left-0 right-0 bg-white w-full z-20 border-b border-gray-200 shadow-md"
    >
        <a href="#" class="block w-full"><img src="imgs/promo.svg" style="width: 200%" /></a>
        <div
            class="container flex flex-wrap items-center justify-between mx-auto px-2 sm:px-4 py-2.5"
        >
            <a href="https://docu-solutions.com/" class="flex items-center">
                <img
                    src="/imgs/logo.png"
                    class="h-6 mr-3 sm:h-12 hidden md:block"
                    alt="Document Solutions Logo"
                />
                <img
                    src="/imgs/logoicon.png"
                    class="mr-3 h-12 md:hidden"
                    alt="Document Solutions Logo"
                />
            </a>
            <div class="flex items-center">
                <div class="flex md:order-2">
                    <a
                        href="/home#contactus"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full bold text-sm px-5 py-2.5 text-center mr-3 md:mr-0"
                    >
                        Nous-contacter
                    </a>
                    <button
                        data-collapse-toggle="navbar-sticky"
                        type="button"
                        class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
                        @click="navbarsticky = !navbarsticky"
                        aria-expanded="false"
                    >
                        <span class="sr-only">Open main menu</span>
                        <svg
                            class="w-6 h-6"
                            aria-hidden="true"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                clip-rule="evenodd"
                            ></path>
                        </svg>
                    </button>
                </div>
                <div
                    class="hidden items-center justify-between w-full md:flex md:w-auto md:order-1 md:mr-4"
                >
                    <ul
                        class="flex flex-col p-4 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white"
                    >
                        <li>
                            <a
                                href="/home"
                                class="block py-2 pl-3 pr-4 rounded md:p-0 bold capitalize text-gray-700 hover:bg-gray-100 md:hover:text-blue-700 md:hover:bg-transparent"
                                >Accueil</a
                            >
                        </li>
                        <li>
                            <a
                                href="/home#ourservice"
                                class="block py-2 pl-3 pr-4 rounded md:p-0 bold capitalize text-gray-700 hover:bg-gray-100 md:hover:text-blue-700 md:hover:bg-transparent"
                                >Nos Services</a
                            >
                        </li>
                        <li>
                            <a
                                href="/home#aboutus"
                                class="block py-2 pl-3 pr-4 rounded md:p-0 bold capitalize text-gray-700 hover:bg-gray-100 md:hover:text-blue-700 md:hover:bg-transparent"
                                >à Propos</a
                            >
                        </li>
                    </ul>
                </div>
                <div
                    class="absolute top-14 items-center justify-between w-full md:flex md:w-auto md:order-1 md:mr-4"
                    v-if="navbarsticky"
                    v-click-away="hideNavbarsticky"
                >
                    <ul
                        class="flex flex-col p-4 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white"
                    >
                        <li>
                            <a
                                href="/home"
                                class="block py-2 pl-3 pr-4 rounded md:p-0 bold capitalize"
                                :class="
                                    $route.hash == '#home'
                                        ? ''
                                        : 'text-gray-700 hover:bg-gray-100 md:hover:text-blue-700 md:hover:bg-transparent'
                                "
                                >Accueil</a
                            >
                        </li>
                        <li>
                            <a
                                href="/home#aboutus"
                                class="block py-2 pl-3 pr-4 rounded md:p-0 bold capitalize"
                                :class="$route.hash == '#aboutus' ? '' : ''"
                                >à Propos</a
                            >
                        </li>
                        <li>
                            <a
                                href="/home#ourservice"
                                class="block py-2 pl-3 pr-4 rounded md:p-0 bold capitalize"
                                :class="$route.hash == '#ourservice' ? '' : ''"
                                >Nos Services</a
                            >
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</template>
<script>
export default {
    name: "navcomp",
    data() {
        return {
            navbarsticky: false,
        };
    },
    methods: {
        hideNavbarsticky: function () {
            this.navbarsticky = false;
        },
    },
};
</script>
