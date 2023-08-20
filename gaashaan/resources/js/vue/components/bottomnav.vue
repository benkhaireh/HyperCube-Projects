<template>
    <footer class="relative p-4 bg-[#141418] sm:p-6 mt-[50px]">
        <div class="absolute top-0 left-0 right-0 bottom-0">
            <img src="/imgs/footer-shape-3.png" class="w-full h-full" alt="Image" />
        </div>
        <div class="relative md:flex md:justify-between">
            <div class="mb-6 md:mb-0">
                <a href="https://www.gaashaan.net/" class="flex items-center">
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
                <p class="pt-2 max-w-xs text-gray-500 bold">
                    Our ambition is to create a broad security and defense
                    system dedicated to SMEs and large groups.
                </p>
            </div>
            <div class="md:grid md:gap-6 md:grid-cols-2">
                <div>
                    <h2 class="my-6 text-sm bold uppercase text-[#282f37]">
                        Company
                    </h2>
                    <ul class="text-gray-500">
                        <li class="mb-4">
                            <a
                                href="/"
                                class="hover:underline"
                                >Home</a
                            >
                        </li>
                        <li class="mb-4">
                            <a href="/aboutus" class="hover:underline">About Us</a>
                        </li>
                        <li>
                            <a
                                href="/contactus"
                                class="hover:underline"
                                >Contact Us</a
                            >
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="my-6 text-sm bold uppercase text-[#282f37]">
                        Contact Us
                    </h2>
                    <ul class="text-gray-500">
                        <li class="mb-4">
                            <span class="bold mr-2">Address:</span>
                            Cite Aviation, Djibouti.
                        </li>
                        <li class="mb-4">
                            <span class="bold mr-2">Email:</span>
                            <a href="mailto:contact@gaashaan.net">contact@gaashaan.net</a>
                        </li>
                        <li>
                            <span class="bold mr-2">Phone:</span>
                            <a href="tel:+25321352929">+25321352929</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <hr class="my-6 border-gray-400 sm:mx-auto lg:my-8" />
        <div class="text-center">
            <span class="text-sm sm:text-center text-gray-500 bold"
                >© {{ year }}
                <a href="https://www.gaashaan.net/" class="hover:underline"
                    >Gaashaan</a
                >. All Rights Reserved.
            </span>
        </div>
    </footer>
</template>
<script>
export default {
    name: "bottomnav",
    data() {
        return {
            year: new Date().getFullYear()
        }
    },
};
</script>
