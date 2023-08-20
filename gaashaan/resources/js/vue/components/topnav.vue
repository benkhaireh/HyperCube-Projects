<template>
    <header class="relative block w-full">
        <div class="hidden lg:flex items-center px-16 py-4 bg-[#282f37]">
            <span class="text-gray-500 mr-2"
                >Need Security?
                <router-link
                    to="/contactus"
                    class="text-[#01aae2] underline ml-1"
                    >Contact us</router-link
                ></span
            >
            <span class="flex items-center mr-2 text-gray-500">
                <i class="ri-map-pin-2-fill mx-2 text-[#01aae2]"></i> Cite
                aviation, Djibouti</span
            >
            <a
                href="mailto:contact@gaashaan.net"
                class="flex items-center mr-2 text-gray-500"
            >
                <i class="ri-mail-fill mx-2 text-[#01aae2]"></i>
                contact@gaashaan.net</a
            >
            <a
                href="tel:+25321352929"
                class="flex items-center mr-2 text-gray-500"
            >
                <i class="ri-phone-fill mx-2 text-[#01aae2]"></i> +253 21 35 29
                29</a
            >
        </div>
        <nav class="bg-gray-300 border-gray-200 px-4 py-4">
            <div
                class="container flex flex-wrap items-center justify-between mx-auto"
            >
                <a href="/" class="flex items-center">
                    <div class="flex items-center">
                        <img
                            src="/imgs/favicon.png"
                            alt="Gaashaan Cyber Tech"
                            class="block w-10 h-10 sm:w-12 sm:h-12 mr-2"
                        />
                        <img
                            src="/imgs/logo.png"
                            alt="Gaashaan Cyber Tech"
                            class="block w-24 sm:w-32"
                        />
                    </div>
                </a>
                <div
                    class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1"
                >
                    <ul
                        class="flex flex-col p-4 mt-4 border rounded-lg md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 bg-[#282f37] md:bg-[#282f37] border-gray-700"
                    >
                        <li>
                            <a
                                href="/"
                                class="block py-2 pl-3 pr-4 bold md:p-0 rounded"
                                :class="
                                    $route.path == '/'
                                        ? 'text-white bg-[#06a8d9] md:bg-transparent md:text-[#06a8d9]'
                                        : 'text-gray-400 md:hover:text-white hover:bg-gray-700 hover:text-white md:hover:bg-transparent border-gray-700'
                                "
                                aria-current="page"
                                >Home</a
                            >
                        </li>
                        <li>
                            <a
                                href="/aboutus"
                                class="block py-2 pl-3 pr-4 bold rounded md:p-0"
                                :class="
                                    $route.path == '/aboutus'
                                        ? 'text-white bg-[#06a8d9] md:bg-transparent md:text-[#06a8d9]'
                                        : 'text-gray-400 md:hover:text-white hover:bg-gray-700 hover:text-white md:hover:bg-transparent border-gray-700'
                                "
                                >About Us</a
                            >
                        </li>
                        <li
                            class="relative"
                            v-click-away="
                                () => {
                                    dropdown = false;
                                }
                            "
                        >
                            <button
                                type="button"
                                class="block py-2 pl-3 pr-4 bold rounded md:p-0"
                                :class="[
                                    $route.path == '/prevent' | $route.path == '/monitor' | $route.path == '/protect'
                                    ? 'text-white bg-[#06a8d9] md:bg-transparent md:text-[#06a8d9]'
                                        : 'text-gray-400 md:hover:text-white hover:bg-gray-700 hover:text-white md:hover:bg-transparent border-gray-700'
                                ]"
                                @click="dropdownSelect()"
                            >
                                Services
                            </button>
                            <div
                                id="dropdown"
                                class="absolute top-10 -left-8 z-10 bg-white divide-y divide-gray-100 rounded-lg shadow w-24 dark:bg-gray-700"
                                v-if="dropdown"
                            >
                                <ul
                                    class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                    aria-labelledby="dropdownDefaultButton"
                                >
                                    <li>
                                        <a
                                            href="/prevent"
                                            class="block px-4 py-2"
                                            :class="
                                                $route.path == '/prevent'
                                                    ? 'text-white bg-[#06a8d9]'
                                                    : 'text-gray-400 md:hover:text-white hover:bg-gray-700 hover:text-white md:hover:bg-transparent border-gray-700'
                                            "
                                        >
                                            Prevent</a
                                        >
                                    </li>
                                    <li>
                                        <a
                                            href="/monitor"
                                            class="block px-4 py-2"
                                            :class="
                                                $route.path == '/monitor'
                                                    ? 'text-white bg-[#06a8d9]'
                                                    : 'text-gray-400 md:hover:text-white hover:bg-gray-700 hover:text-white md:hover:bg-transparent border-gray-700'
                                            "
                                        >
                                            Monitor
                                        </a>
                                    </li>
                                    <li>
                                        <a
                                            href="/protect"
                                            class="block px-4 py-2"
                                            :class="
                                                $route.path == '/protect'
                                                    ? 'text-white bg-[#06a8d9]'
                                                    : 'text-gray-400 md:hover:text-white hover:bg-gray-700 hover:text-white md:hover:bg-transparent border-gray-700'
                                            "
                                        >
                                            Protect</a
                                        >
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a
                                href="/contactus"
                                class="block py-2 pl-3 pr-4 bold rounded md:p-0"
                                :class="
                                    $route.path == '/contactus'
                                        ? 'text-white bg-[#06a8d9] md:bg-transparent md:text-[#06a8d9]'
                                        : 'text-gray-400 md:hover:text-white hover:bg-gray-700 hover:text-white md:hover:bg-transparent border-gray-700'
                                "
                                >Contact Us</a
                            >
                        </li>
                    </ul>
                </div>
                <div
                    class="relative"
                    v-click-away="
                        () => {
                            mobilemenu = false;
                        }
                    "
                >
                    <button
                        @click="mobilemenuselect"
                        type="button"
                        class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
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
                    <div
                        class="absolute top-8 right-24 items-center justify-between w-full flex md:hidden md:w-auto md:order-1 z-50"
                        v-if="mobilemenu == true"
                    >
                        <ul
                            class="flex flex-col p-4 mt-4 border rounded-lg md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 bg-[#282f37] md:bg-[#282f37] border-gray-700"
                        >
                            <li>
                                <a
                                    href="/"
                                    class="block py-2 pl-3 pr-4 bold md:p-0 rounded whitespace-nowrap"
                                    :class="
                                        $route.path == '/'
                                            ? 'text-white bg-[#06a8d9] md:bg-transparent md:text-[#06a8d9]'
                                            : 'text-gray-400 md:hover:text-white hover:bg-gray-700 hover:text-white md:hover:bg-transparent border-gray-700'
                                    "
                                    aria-current="page"
                                    >Home</a
                                >
                            </li>
                            <li>
                                <a
                                    href="/aboutus"
                                    class="block py-2 pl-3 pr-4 bold rounded md:p-0 whitespace-nowrap"
                                    :class="
                                        $route.path == '/aboutus'
                                            ? 'text-white bg-[#06a8d9] md:bg-transparent md:text-[#06a8d9]'
                                            : 'text-gray-400 md:hover:text-white hover:bg-gray-700 hover:text-white md:hover:bg-transparent border-gray-700'
                                    "
                                    >About Us</a
                                >
                            </li>
                            <li
                                class="relative"
                                v-click-away="
                                    () => {
                                        dropdown = false;
                                    }
                                "
                            >
                                <button
                                    type="button"
                                    class="block py-2 pl-3 pr-4 bold rounded md:p-0 whitespace-nowrap"
                                    :class="[
                                        $route.path == '/prevent' | $route.path == '/monitor' | $route.path == '/protect'
                                        ? 'text-white bg-[#06a8d9] md:bg-transparent md:text-[#06a8d9]'
                                            : 'text-gray-400 md:hover:text-white hover:bg-gray-700 hover:text-white md:hover:bg-transparent'
                                    ]"
                                    @click="dropdownSelect()"
                                >
                                    Services
                                </button>
                                <div
                                    id="dropdown"
                                    class="absolute top-0 -left-32 z-10 bg-white divide-y divide-gray-100 rounded-lg shadow w-24 dark:bg-gray-700"
                                >
                                    <ul
                                        id="dropdown"
                                        class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                        v-if="dropdown"
                                    >
                                        <li>
                                            <a
                                                href="/prevent"
                                                class="block px-4 py-2"
                                                :class="
                                                    $route.path == '/prevent'
                                                        ? 'text-white bg-[#06a8d9] md:bg-transparent md:text-[#06a8d9]'
                                                        : 'text-gray-400 md:hover:text-white hover:bg-gray-700 hover:text-white md:hover:bg-transparent border-gray-700'
                                                "
                                            >
                                                Prevent</a
                                            >
                                        </li>
                                        <li>
                                            <a
                                                href="/monitor"
                                                class="block px-4 py-2"
                                                :class="
                                                    $route.path == '/monitor'
                                                        ? 'text-white bg-[#06a8d9] md:bg-transparent md:text-[#06a8d9]'
                                                        : 'text-gray-400 md:hover:text-white hover:bg-gray-700 hover:text-white md:hover:bg-transparent border-gray-700'
                                                "
                                            >
                                                Monitor
                                            </a>
                                        </li>
                                        <li>
                                            <a
                                                href="/protect"
                                                class="block px-4 py-2"
                                                :class="
                                                    $route.path == '/protect'
                                                        ? 'text-white bg-[#06a8d9] md:bg-transparent md:text-[#06a8d9]'
                                                        : 'text-gray-400 md:hover:text-white hover:bg-gray-700 hover:text-white md:hover:bg-transparent border-gray-700'
                                                "
                                            >
                                                Protect</a
                                            >
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a
                                    href="/contactus"
                                    class="block py-2 pl-3 pr-4 bold rounded md:p-0 whitespace-nowrap"
                                    :class="
                                        $route.path == '/contactus'
                                            ? 'text-white bg-[#06a8d9] md:bg-transparent md:text-[#06a8d9]'
                                            : 'text-gray-400 md:hover:text-white hover:bg-gray-700 hover:text-white md:hover:bg-transparent border-gray-700'
                                    "
                                    >Contact Us</a
                                >
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>
</template>
<script>
export default {
    name: "topnav",
    data() {
        return {
            mobilemenu: false,
            dropdown: false,
        };
    },
    methods: {
        mobilemenuselect: function () {
            if (this.mobilemenu == false) this.mobilemenu = true;
            else this.mobilemenu = false;
        },
        dropdownSelect: function () {
            if (this.dropdown == false) this.dropdown = true;
            else this.dropdown = false;
        },
    },
};
</script>
