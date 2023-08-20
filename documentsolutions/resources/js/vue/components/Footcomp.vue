<template>
    <footer
        class="p-6 bg-white rounded-lg shadow md:px-8 md:py-8 mt-12"
    >
        <div class="sm:flex sm:items-center sm:justify-between">
            <a
                href="https://docu-solutions.com/"
                class="flex items-center mb-4 sm:mb-0"
            >
                <img
                    src="/imgs/logo.png"
                    class="h-12 mr-3"
                    alt="Document Solutions Logo"
                />
            </a>
            <ul
                class="flex flex-wrap items-center mb-6 text-sm text-gray-500 sm:mb-0"
            >
                <li>
                    <a href="#aboutus" class="mr-4 hover:underline md:mr-6 capitalize">à Propos</a>
                </li>
                <li>
                    <a href="#ourservice" class="mr-4 hover:underline md:mr-6 capitalize"
                        >Nos Services</a
                    >
                </li>
                <li>
                    <a href="#contactus" class="hover:underline capitalize">Nous-contacter</a>
                </li>
            </ul>
        </div>
        <hr
            class="my-6 border-gray-200 sm:mx-auto lg:my-8"
        />
        <span
            class="block text-sm text-gray-500 sm:text-center"
            >© {{ year  }}
            <a href="https://docu-solutions.com/" class="hover:underline">Document Solutions</a
            > Tous droits réservés.
        </span>
    </footer>
</template>
<script>
export default {
    name: "footer",
    data() {
        return {
            year: new Date().getFullYear(),
        }
    },
};
</script>
