<template>
    <section id="#printers" class="w-full lg:max-w-6xl mx-auto">
        <div class="px-4 md:px-12 my-32">
            <div class="px-4 py-6 md:px-8 shadow-lg rounded-xl bg-white">
                <ol
                    class="flex items-center w-full p-3 space-x-2 text-sm font-medium text-center text-gray-500 bg-white border border-gray-200 rounded-lg shadow-sm sm:text-base sm:p-4 sm:space-x-4"
                >
                    <li class="flex items-center">
                        <a href="/guide" class="flex items-center">
                            <span
                                class="flex items-center justify-center w-5 h-5 mr-2 text-xs border border-gray-500 rounded-full shrink-0"
                            >
                                1
                            </span>
                            Guide
                        </a>
                        <svg
                            aria-hidden="true"
                            class="w-4 h-4 ml-2 sm:ml-4"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M13 5l7 7-7 7M5 5l7 7-7 7"
                            ></path>
                        </svg>
                    </li>
                    <li class="flex items-center text-blue-600">
                        <a href="/options" class="flex items-center">
                            <span
                                class="flex items-center justify-center w-5 h-5 mr-2 text-xs border border-blue-600 rounded-full shrink-0"
                            >
                                2
                            </span>
                            Options
                        </a>
                        <svg
                            aria-hidden="true"
                            class="w-4 h-4 ml-2 sm:ml-4"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M13 5l7 7-7 7M5 5l7 7-7 7"
                            ></path>
                        </svg>
                    </li>
                    <li class="flex items-center">
                        <a href="/maintenance" class="flex items-center">
                            <span
                                class="flex items-center justify-center w-5 h-5 mr-2 text-xs border border-gray-500 rounded-full shrink-0"
                            >
                                3
                            </span>
                            Maintenance
                        </a>
                    </li>
                </ol>
                <div class="px-8 my-6 mt-12 py-4 md:px-8 border-t border-gray-300">
                    <div class="w-3/4 lg:w-2/3 mx-auto">
                        <h2 class="font-bold text-3xl text-center">
                            Les options d'un photocopieur
                        </h2>
                        <p class="text-justify text-gray-500">
                            Vous souhaitez un photocopieur qui non seulement
                            imprime, mais peut également scanner ou encore faxer
                            ? Ce sont, en effet, des options très utiles qui
                            vous permettent de faciliter le quotidien de votre
                            entreprise. Document Solutions vous donne toutes
                            infos importantes à connaître sur ces options.
                        </p>
                    </div>

                    <h2 class="mt-12 mb-2 text-lg font-semibold text-gray-900">
                        Ces pros peuvent vous aider:
                    </h2>
                    <ul
                        class="max-w-md space-y-1 text-gray-500 list-disc list-inside"
                    >
                        <li>
                            <a href="/printcontroller" class="text-blue-500 underline"
                                >Contrôle d'impression</a
                            >
                        </li>
                        <li>
                            <a href="/printerdevice" class="text-blue-500 underline"
                                >Imprimante photocopieuse</a
                            >
                        </li>
                        <li>
                            <a href="/faxdevice" class="text-blue-500 underline">Fax</a>
                        </li>
                        <li>
                            <a href="/scannerdevice" class="text-blue-500 underline"
                                >Scanner</a
                            >
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</template>
<script>
export default {
    name: "printeroptions",
};
</script>
