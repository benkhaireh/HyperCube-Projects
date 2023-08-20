<template>
    <section class="hero-section" id="home">
        <div class="container px-6 md:px-12 mx-auto py-32">
            <div class="flex md:flex-nowrap justify-center">
                <div class="block w-full lg:w-1/2 mx-auto text-center py-20">
                    <span
                        class="bg-brand text-white p-1 px-3 font-bold text-xs md:text-md leading-10"
                        >Des solutions documentaires complet</span
                    >
                    <div class="typing-container">
                        <h1
                            class="text-[32px] md:text-3xl font-black mt-8 mb-4 text-justify"
                        >
                            Rendez vos documents
                            <span
                                id="sentence"
                                class="bg-brand sentence"
                            ></span>
                            <span id="feature-text"></span>
                            <span class="input-cursor h-4 md:h-[20px]"></span>
                        </h1>
                    </div>
                    <p class="pt-2 text-justify">
                        Que vous soyez une petite entreprise ou une grande
                        organisation, nous avons la solution adaptée à vos
                        besoins. Nous sommes fiers de fournir des services de
                        qualité supérieure pour aider nos clients à atteindre
                        leurs objectifs d'affaires. Contactez-nous dès
                        aujourd'hui pour en savoir plus sur nos solutions
                        documentaires.
                    </p>
                    <div
                        class="flex flex-wrap md:flex-nowrap items-center justify-center mt-10"
                    >
                        <button
                            type="button"
                            @click="quote = true"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center my-4 mx-4 md:mr-10"
                        >
                            Demander un devis
                        </button>
                        <a
                            href="#contactus"
                            class="py-2.5 px-5 text-sm font-bold text-gray-900 focus:outline-none bg-white rounded-full border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 my-4 mx-4 focus:ring-4 focus:ring-gray-200"
                        >
                            Nous-contacter
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <a href="#" class="block w-full mt-32"><img src="imgs/promo2.0.svg" style="height: 100%" /></a>
    <section id="ourservice">
        <div class="px-4 md:px-12 mx-auto my-32">
            <div
                class="w-full lg:w-[33.3333333337%] mb-[50px] text-center mx-auto"
            >
                <h2 class="text-[30px] font-bold mb-[15px] whitespace-nowrap">
                    Nos Services
                </h2>
                <div class="title-divider"></div>
                <p class="text-justify">
                    Que vous ayez besoin d'une gestion simplifiée des documents,
                    d'une signature électronique fiable ou d'imprimantes
                    adaptées à vos besoins, nous avons les solutions pour vous.
                </p>
            </div>
            <div class="flex flex-wrap items-center justify-between py-16">
                <div
                    class="w-full lg:max-w-sm bg-white border border-gray-200 rounded-lg shadow md:mx-4 mb-4"
                >
                    <a href="/guide" class="block p-4">
                        <img
                            class="rounded-t-lg mx-auto h-72"
                            src="/imgs/printing.svg"
                            alt=""
                        />
                    </a>
                    <div class="p-5">
                        <a href="/guide">
                            <h5
                                class="mb-2 text-2xl font-bold tracking-tight text-gray-900"
                            >
                                Imprimantes pour tout type d'entreprise
                            </h5>
                        </a>
                        <p class="mb-8 font-normal text-gray-700 text-justify">
                            Que vous soyez une petite entreprise en démarrage ou
                            une grande organisation, nous avons une gamme
                            d'imprimantes de qualité supérieure pour répondre à
                            vos besoins d'impression.
                        </p>
                        <button
                            type="button"
                            @click="getQuote('Imprimante Xerox')"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center"
                        >
                            Demander un devis
                        </button>
                    </div>
                </div>
                <div
                    class="w-full lg:max-w-sm bg-white border border-gray-200 rounded-lg shadow md:mx-4 mb-4"
                >
                    <a href="#ourservice" class="block p-4">
                        <img
                            class="rounded-t-lg mx-auto h-72"
                            src="/imgs/document-management.svg"
                            alt=""
                        />
                    </a>
                    <div class="p-5">
                        <a href="#ourservice">
                            <h5
                                class="mb-2 text-2xl font-bold tracking-tight text-gray-900"
                            >
                                Gestion des documents simple et efficace
                            </h5>
                        </a>
                        <p class="mb-8 font-normal text-gray-700 text-justify">
                            Nous comprenons que la gestion des documents peut
                            être complexe et fastidieuse, c'est pourquoi nous
                            offrons une solution intuitive et efficace pour
                            gérer vos documents de manière organisée et
                            efficace.
                        </p>
                        <button
                            type="button"
                            @click="getQuote('Gestion des documents')"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center"
                        >
                            Demander un devis
                        </button>
                    </div>
                </div>
                <div
                    class="w-full lg:max-w-sm bg-white border border-gray-200 rounded-lg shadow md:mx-4 mb-4"
                >
                    <button
                        type="button"
                        class="block p-4"
                        @click="signature = true"
                    >
                        <img
                            class="rounded-t-lg mx-auto h-72"
                            src="/imgs/e-signature.svg"
                            alt=""
                        />
                    </button>
                    <div class="p-5">
                        <button type="button" @click="signature = true">
                            <h5
                                class="mb-2 text-2xl font-bold tracking-tight text-gray-900 text-left"
                            >
                                Signature électronique pour tout vos documents
                            </h5>
                        </button>
                        <p class="mb-8 font-normal text-gray-700 text-justify">
                            C'est connu que la signature de documents peut être
                            chronophage et fastidieuse, c'est pourquoi nous
                            offrons une solution simple et efficace pour vous
                            aider à signer vos documents de manière rapide et
                            sécurisée.
                        </p>
                        <button
                            type="button"
                            @click="getQuote('Signature électronique')"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center"
                        >
                            Demander un devis
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="" id="aboutus">
        <div
            class="flex flex-wrap lg:flex-nowrap justify-between px-4 md:px-12 mx-auto py-32 bg-slate-800"
        >
            <div class="block w-[300px] mb-8 md:w-[500px] mx-auto">
                <img src="/imgs/about.jpg" alt="" class="block w-full" />
            </div>
            <div class="block w-full lg:w-1/2 text-white">
                <span
                    class="bg-brand text-white p-1 px-3 font-bold text-md leading-10 capitalize"
                    >à propos</span
                >
                <h1 class="text-xl md:text-4xl font-black">
                    Des experts dans la documentation à votre service
                </h1>
                <p class="pt-2 text-justify">
                    Nous, Document Solutions, se consacre à fournir des
                    solutions documentaires de qualité supérieure pour aider les
                    entreprises à gérer leurs documents de manière efficace et
                    rentable. Nous comprenons que les documents sont au cœur de
                    toute entreprise et que leur gestion peut être un défi
                    constant. C'est pourquoi nous avons développé une gamme
                    complète de solutions pour simplifier la gestion
                    documentaire, améliorer la productivité et accélérer la
                    croissance de nos clients.
                    <br /><br />Notre équipe de professionnels est dédiée à
                    fournir un service client de qualité pour vous aider à
                    choisir la solution documentaire la plus adaptée à vos
                    besoins. Nous offrons des solutions flexibles, fiables et
                    faciles à utiliser pour aider les entreprises à maximiser
                    leur potentiel. <br />
                    <br />N'hésitez pas à nous contacter pour en savoir plus sur
                    nos solutions documentaires et comment nous pouvons vous
                    aider à améliorer votre gestion de documents.
                </p>
                <ul class="pt-10">
                    <li class="flex items-start pb-4 font-light">
                        <i class="mr-4 ri-eye-2-line"></i>
                        <span class="text-justify"
                            >Devenir le choix numéro un pour les entreprises en
                            quête de solutions documentaires de qualité
                            supérieure.</span
                        >
                    </li>
                    <li class="flex items-start pb-4 font-light">
                        <i class="mr-4 ri-focus-3-line"></i>
                        <span class="text-justify"
                            >Proposer des solutions documentaires novatrices
                            pour simplifier la gestion de documents des
                            entreprises, augmenter leur productivité et stimuler
                            leur développement.</span
                        >
                    </li>
                    <li class="flex items-start pb-4 font-light">
                        <i class="mr-4 ri-medal-line"></i>
                        <span class="text-justify"
                            ><b class="font-bold">Innovation:</b> Nous sommes
                            constamment à la recherche de nouvelles façons de
                            simplifier la gestion documentaire pour nos
                            clients.<br /><br />
                            <b class="font-bold">Qualité: </b>Nous nous
                            engageons à fournir des solutions documentaires de
                            qualité supérieure pour garantir la satisfaction de
                            nos clients.<br /><br />
                            <b class="font-bold">Intégrité:</b> Nous nous
                            engageons à offrir un service transparent et éthique
                            à nos clients.</span
                        >
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section id="contactus">
        <div class="px-4 md:px-12 mx-auto my-32">
            <div class="mb-32 text-gray-800">
                <div
                    class="w-full lg:w-[33.3333333337%] mb-24 text-center mx-auto"
                >
                    <h2
                        class="text-[30px] font-bold mb-[15px] whitespace-nowrap"
                    >
                        Nous-contacter
                    </h2>
                    <div class="title-divider"></div>
                    <p class="text-justify">
                        N'hésitez plus et contactez-nous dès maintenant pour en
                        savoir plus sur nos services et comment nous pouvons
                        vous aider. Nous sommes impatients de travailler avec
                        vous pour vous offrir les solutions documentaires les
                        plus fiables et les plus efficaces pour votre
                        entreprise.
                    </p>
                </div>

                <div class="flex flex-wrap">
                    <div
                        class="grow-0 shrink-0 basis-auto mb-12 lg:mb-0 w-full lg:w-5/12 px-3 lg:px-6"
                    >
                        <form action="post" @submit.prevent="sendcontact">
                            <div class="form-group mb-6">
                                <input
                                    type="text"
                                    class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                    id="exampleInput7"
                                    placeholder="Votre nom complet"
                                    v-model="formContact.fullname"
                                />
                                <small
                                    class="flex items-start text-red-500 mt-2 font-bold"
                                    v-if="errorContact.fullname !== ''"
                                >
                                    <i class="ri-alert-fill mr-2"></i>
                                    <span v-text="errorContact.fullname"></span>
                                </small>
                            </div>
                            <div class="form-group mb-6">
                                <input
                                    type="number"
                                    class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                    id="exampleInput8"
                                    placeholder="Votre numéro mobile"
                                    v-model="formContact.phone"
                                />
                                <small
                                    class="flex items-start text-red-500 mt-2 font-bold"
                                    v-if="errorContact.phone !== ''"
                                >
                                    <i class="ri-alert-fill mr-2"></i>
                                    <span v-text="errorContact.phone"></span>
                                </small>
                            </div>
                            <div class="form-group mb-6">
                                <input
                                    type="email"
                                    class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                    id="exampleInput8"
                                    placeholder="Votre adresse e-mail"
                                    v-model="formContact.email"
                                />
                                <small
                                    class="flex items-start text-red-500 mt-2 font-bold"
                                    v-if="errorContact.email !== ''"
                                >
                                    <i class="ri-alert-fill mr-2"></i>
                                    <span v-text="errorContact.email"></span>
                                </small>
                            </div>
                            <div class="form-group mb-6">
                                <input
                                    type="text"
                                    class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                    id="exampleInput8"
                                    placeholder="L'objet de votre e-mail"
                                    v-model="formContact.subject"
                                />
                                <small
                                    class="flex items-start text-red-500 mt-2 font-bold"
                                    v-if="errorContact.subject !== ''"
                                >
                                    <i class="ri-alert-fill mr-2"></i>
                                    <span v-text="errorContact.subject"></span>
                                </small>
                            </div>
                            <div class="form-group mb-6">
                                <textarea
                                    class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                    id="exampleFormControlTextarea13"
                                    rows="5"
                                    placeholder="Votre message par ici"
                                    v-model="formContact.message"
                                ></textarea>
                                <small
                                    class="flex items-start text-red-500 mt-2 font-bold"
                                    v-if="errorContact.message !== ''"
                                >
                                    <i class="ri-alert-fill mr-2"></i>
                                    <span v-text="errorContact.message"></span>
                                </small>
                            </div>
                            <button
                                type="submit"
                                class="px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out"
                            >
                                Envoyer
                            </button>
                        </form>
                    </div>
                    <div class="grow-0 shrink-0 basis-auto w-full lg:w-7/12">
                        <div class="flex flex-wrap">
                            <div
                                class="mb-12 grow-0 shrink-0 basis-auto w-full lg:w-6/12 px-3 lg:px-6"
                            >
                                <div class="flex items-start">
                                    <div class="shrink-0">
                                        <div
                                            class="p-4 bg-blue-600 rounded-md shadow-md w-14 h-14 flex items-center justify-center"
                                        >
                                            <svg
                                                aria-hidden="true"
                                                focusable="false"
                                                data-prefix="fas"
                                                data-icon="headset"
                                                class="w-5 text-white"
                                                role="img"
                                                xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 512 512"
                                            >
                                                <path
                                                    fill="currentColor"
                                                    d="M192 208c0-17.67-14.33-32-32-32h-16c-35.35 0-64 28.65-64 64v48c0 35.35 28.65 64 64 64h16c17.67 0 32-14.33 32-32V208zm176 144c35.35 0 64-28.65 64-64v-48c0-35.35-28.65-64-64-64h-16c-17.67 0-32 14.33-32 32v112c0 17.67 14.33 32 32 32h16zM256 0C113.18 0 4.58 118.83 0 256v16c0 8.84 7.16 16 16 16h16c8.84 0 16-7.16 16-16v-16c0-114.69 93.31-208 208-208s208 93.31 208 208h-.12c.08 2.43.12 165.72.12 165.72 0 23.35-18.93 42.28-42.28 42.28H320c0-26.51-21.49-48-48-48h-32c-26.51 0-48 21.49-48 48s21.49 48 48 48h181.72c49.86 0 90.28-40.42 90.28-90.28V256C507.42 118.83 398.82 0 256 0z"
                                                ></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="grow ml-6">
                                        <p class="font-bold mb-1">
                                            Support Technique
                                        </p>
                                        <p class="text-gray-500">
                                            contact@docu-solutions.com
                                        </p>
                                        <p class="text-gray-500">
                                            +253 77 28 42 96
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="mb-12 grow-0 shrink-0 basis-auto w-full lg:w-6/12 px-3 lg:px-6"
                            >
                                <div class="flex items-start">
                                    <div class="shrink-0">
                                        <div
                                            class="p-4 bg-blue-600 rounded-md shadow-md w-14 h-14 flex items-center justify-center"
                                        >
                                            <svg
                                                aria-hidden="true"
                                                focusable="false"
                                                data-prefix="fas"
                                                data-icon="dollar-sign"
                                                class="w-3 text-white"
                                                role="img"
                                                xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 288 512"
                                            >
                                                <path
                                                    fill="currentColor"
                                                    d="M209.2 233.4l-108-31.6C88.7 198.2 80 186.5 80 173.5c0-16.3 13.2-29.5 29.5-29.5h66.3c12.2 0 24.2 3.7 34.2 10.5 6.1 4.1 14.3 3.1 19.5-2l34.8-34c7.1-6.9 6.1-18.4-1.8-24.5C238 74.8 207.4 64.1 176 64V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48h-2.5C45.8 64-5.4 118.7.5 183.6c4.2 46.1 39.4 83.6 83.8 96.6l102.5 30c12.5 3.7 21.2 15.3 21.2 28.3 0 16.3-13.2 29.5-29.5 29.5h-66.3C100 368 88 364.3 78 357.5c-6.1-4.1-14.3-3.1-19.5 2l-34.8 34c-7.1 6.9-6.1 18.4 1.8 24.5 24.5 19.2 55.1 29.9 86.5 30v48c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16v-48.2c46.6-.9 90.3-28.6 105.7-72.7 21.5-61.6-14.6-124.8-72.5-141.7z"
                                                ></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="grow ml-6">
                                        <p class="font-bold mb-1">
                                            Questions sur les ventes
                                        </p>
                                        <p class="text-gray-500">
                                            sales@docu-solutions.com
                                        </p>
                                        <p class="text-gray-500">
                                            +253 77 56 45 80
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="mb-12 grow-0 shrink-0 basis-auto w-full lg:w-6/12 px-3 lg:px-6"
                            >
                                <div class="flex align-start">
                                    <div class="shrink-0">
                                        <div
                                            class="p-4 bg-blue-600 rounded-md shadow-md w-14 h-14 flex items-center justify-center"
                                        >
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 24 24"
                                                class="w-5 text-white"
                                            >
                                                <path
                                                    fill="none"
                                                    d="M0 0h24v24H0z"
                                                />
                                                <path
                                                    d="M12 20.9l4.95-4.95a7 7 0 1 0-9.9 0L12 20.9zm0 2.828l-6.364-6.364a9 9 0 1 1 12.728 0L12 23.728zM12 13a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm0 2a4 4 0 1 1 0-8 4 4 0 0 1 0 8z"
                                                    fill="rgba(255,255,255,1)"
                                                />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="grow ml-6">
                                        <p class="font-bold mb-1">
                                            Nous-retrouver
                                        </p>
                                        <p class="text-gray-500">
                                            Cité aviation, Djibouti
                                        </p>
                                        <p class="text-gray-500">
                                            +253 21 35 29 29
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-gray-900 mb-32">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
            <div class="mx-auto max-w-screen-md sm:text-center">
                <h2
                    class="mb-4 text-3xl tracking-tight font-extrabold sm:text-4xl text-white"
                >
                    Inscrivez-vous à notre newsletter
                </h2>
                <p
                    class="mx-auto mb-8 max-w-2xl font-light md:mb-12 sm:text-xl text-gray-400 text-justify"
                >
                    Pour rester au courant de l'évolution de nos solutions
                    documentaires, des annonces et des réductions exclusives,
                    n'hésitez pas à vous inscrire par courriel. remises
                    exclusives, n'hésitez pas à vous inscrire avec votre e-mail.
                </p>
                <form action="" method="post" @submit.prevent="subscription">
                    <div
                        class="items-center mx-auto mb-3 space-y-4 max-w-screen-sm sm:flex sm:space-y-0"
                    >
                        <div class="relative w-full">
                            <label
                                for="email"
                                class="hidden mb-2 text-sm font-medium text-gray-300"
                                >Adresse e-mail</label
                            >
                            <div
                                class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none"
                            >
                                <svg
                                    class="w-5 h-5 text-gray-400"
                                    fill="currentColor"
                                    viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"
                                    ></path>
                                    <path
                                        d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"
                                    ></path>
                                </svg>
                            </div>
                            <input
                                class="block p-3 pl-10 w-full text-sm rounded-lg border sm:rounded-none sm:rounded-l-lg focus:ring-primary-500 focus:border-primary-500 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-primary-500 focus:border-primary-500"
                                placeholder="Entrez votre adresse e-mail"
                                type="email"
                                id="email"
                                required
                                v-model="formSubscripe.email"
                            />
                            <small
                                class="flex items-start text-red-500 mt-2 font-bold"
                                v-if="errorSubscripe.email !== ''"
                            >
                                <i class="ri-alert-fill mr-2"></i>
                                <span v-text="errorSubscripe.email"></span>
                            </small>
                        </div>
                        <div>
                            <button
                                type="submit"
                                class="py-3 px-5 w-full text-sm font-medium text-center text-white rounded-lg border cursor-pointer bg-primary-700 border-primary-600 sm:rounded-none sm:rounded-r-lg hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 bg-primary-600 hover:bg-primary-700 focus:ring-primary-800"
                            >
                                S'abonner
                            </button>
                        </div>
                    </div>
                    <div
                        class="mx-auto max-w-screen-sm text-sm newsletter-form-footer text-gray-300 text-justify"
                    >
                        Nous nous soucions de la protection de vos données. Nous
                        ne partageons en aucun cas vos renseignements personnels
                        avec des entreprises, des organisations, ni des
                        personnes extérieures à Document Solutions.
                    </div>
                </form>
            </div>
        </div>
    </section>
    <section
        class="fixed top-0 left-0 right-0 z-[1000] backdrop pt-12"
        v-if="quote"
    >
        <div
            class="relative mx-auto px-4 md:px-auto w-full lg:w-2/4 sm:w-4/5 pt-8 pb-8 h-full z-10 overflow-y-auto"
            v-click-away="hideQuote"
        >
            <form
                action=""
                class="px-4 py-6 md:px-8 shadow-lg rounded-xl bg-white"
                @submit.prevent="sendquote"
            >
                <h2
                    class="flex items-center justify-between w-full px-2 py-2 mb-6 border-b border-gray-400"
                >
                    <span class="text-brand-primary font-bold"
                        >Formulaire de demande de devis</span
                    >
                    <i class="ri-money-dollar-circle-fill font-bold"></i>
                </h2>
                <div class="flex-1 mr-4">
                    <input-comp
                        type="text"
                        label="fullname"
                        label_txt="Votre prénom et nom"
                        placeholder="Votre nom complet"
                        icon="user"
                        v-model="formData.fullname"
                        :error="error.fullname"
                        required
                    />
                </div>
                <div class="flex-1 mr-4">
                    <input-comp
                        type="email"
                        label="email"
                        label_txt="Votre adresse électronique"
                        placeholder="Votre adresse e-mail"
                        icon="at"
                        v-model="formData.email"
                        :error="error.email"
                        required
                    />
                </div>
                <div class="flex-1 mr-4">
                    <input-comp
                        type="number"
                        label="phone"
                        label_txt="Votre numéro portable"
                        placeholder="Votre numéro mobile"
                        icon="phone"
                        v-model="formData.phone"
                        :error="error.phone"
                        required
                    />
                </div>
                <div class="block w-full mb-4 mr-4">
                    <span class="block text-grey-darker font-bold mb-2"
                        >Choix du service</span
                    >
                    <vue-multiselect
                        v-model="formData.service"
                        :options="options"
                        :allow-empty="false"
                        :taggable="true"
                        :multiple="true"
                    >
                    </vue-multiselect>
                    <small
                        class="flex items-start text-red-500 mt-2 font-bold"
                        v-if="error.service"
                    >
                        <i class="ri-alert-fill mr-2"></i>
                        <span v-text="error.service"></span>
                    </small>
                </div>
                <div class="flex justify-between mt-8">
                    <button
                        type="button"
                        class="inline-block px-4 py-2 text-white bg-brand-secondary rounded-lg mr-8"
                        @click="hideQuote"
                    >
                        Annuler
                    </button>
                    <button
                        type="submit"
                        class="inline-block px-4 py-2 text-white bg-brand rounded-lg"
                    >
                        Obtenir un devis
                    </button>
                </div>
            </form>
        </div>
    </section>

    <div
        class="fixed top-0 left-0 right-0 bottom-0 flex items-center justify-center z-[1001]"
        v-if="loader"
    >
        <div class="absolute top-0 left-0 right-0 bottom-0 backdrop"></div>
        <div class="lds-ripple z-10">
            <div></div>
            <div></div>
        </div>
    </div>

    <div v-if="alert">
        <alert-comp
            :alertType="altType"
            :alertTxt="altTxt"
            :alertLang="altLang"
            @alert="theAlert"
        />
    </div>
    <section
        class="fixed top-0 left-0 right-0 z-[1000] backdrop pt-12"
        v-if="signature"
    >
        <div
            class="relative mx-auto px-4 md:px-auto w-full lg:w-2/4 sm:w-4/5 pt-8 pb-8 h-full z-10 overflow-y-auto"
            v-click-away="hideSignature"
        >
            <div class="px-4 py-6 md:px-8 shadow-lg rounded-xl bg-white">
                <h2
                    class="flex items-center justify-between w-full px-2 py-2 mb-6 border-b border-gray-400"
                >
                    <span class="text-brand-primary font-bold"
                        >Simulateur de signature</span
                    >
                    <i class="ri-pulse-fill font-bold"></i>
                </h2>
                <p
                    class="flex items-start text-gray-400 font-bold my-6 text-justify"
                >
                    <i class="ri-information-line mr-2 text-2xl"></i>
                    <span>
                        Essayez notre simulateur de signature électronique pour
                        voir à quel point cela peut être simple et pratique de
                        signer des documents importants en quelques clics, où
                        que vous soyez dans le monde !
                    </span>
                </p>
                <div class="border-2 border-gray-400 rounded-lg">
                    <VPerfectSignature
                        :stroke-options="strokeOptions"
                        ref="signaturePad"
                    />
                </div>
                <div class="flex justify-between mt-8">
                    <button
                        type="button"
                        class="inline-block px-4 py-2 text-white bg-brand-secondary rounded-lg mr-8"
                        @click="hideSignature"
                    >
                        Annuler
                    </button>
                    <button
                        class="inline-block px-4 py-2 text-white bg-brand rounded-lg"
                        @click="clearSignature"
                    >
                        Signer à nouveau
                    </button>
                </div>
            </div>
        </div>
    </section>
</template>
<script>
import InputComp from "../components/inputcomp.vue";
import VueMultiselect from "vue-multiselect";
import AlertComp from "../components/AlertComp.vue";
import { VPerfectSignature } from "v-perfect-signature";
export default {
    name: "home",
    components: {
        InputComp,
        VueMultiselect,
        AlertComp,
        VPerfectSignature,
    },
    data() {
        return {
            strokeOptions: {
                size: 16,
                thinning: 0.75,
                smoothing: 0.5,
                streamline: 0.5,
            },
            carouselText: [
                { text: "simples", color: "rgb(29 78 216)" },
                { text: "accessibles", color: "green" },
                { text: "sécurisé", color: "red" },
            ],
            formSubscripe: {
                email: "",
                recaptcha: "",
            },
            errorSubscripe: {
                email: "",
            },
            formContact: {
                fullname: "",
                email: "",
                phone: "",
                subject: "",
                message: "",
                recaptcha: "",
            },
            formData: {
                fullname: "",
                email: "",
                phone: "",
                service: "Imprimante Xerox",
                recaptcha: "",
            },
            errorContact: {
                fullname: "",
                email: "",
                phone: "",
                subject: "",
                message: "",
            },
            error: {
                fullname: "",
                email: "",
                phone: "",
                service: "",
            },
            options: [
                "Imprimante Xerox",
                "Gestion des documents",
                "Signature électronique",
            ],
            loader: false,
            csrf_token: document
                .querySelector('meta[name="_token"]')
                .getAttribute("content"),
            alert: false,
            altType: "",
            altTxt: "",
            altLang: "fr",
            quote: false,
            signature: false,
        };
    },
    methods: {
        toDataURL: function () {
            const dataURL = this.$refs.signaturePad.toDataURL();
            console.log(dataURL);
        },
        clearSignature: function () {
            this.$refs.signaturePad.clear();
        },
        theAlert: function (e) {
            this.alert = e;
        },
        hideQuote: function () {
            this.quote = false;
        },
        hideSignature: function () {
            this.signature = false;
        },
        getQuote: function (quote) {
            this.quote = true;
            this.formData.service = quote;
        },
        subscription: function () {
            this.loader = true;

            const header = {
                credentials: "same-origin",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": this.csrf_token,
                },
            };

            const getting = async () => {
                await this.$recaptchaLoaded();
                const token = await this.$recaptcha();
                this.formSubscripe.recaptcha = token;
                const body = JSON.stringify(this.formSubscripe);

                let data = await axios
                    .post("/app/subscripe", body, header)
                    .then((response) => {
                        return response.data;
                    })
                    .catch(function (error) {
                        if (error.response) {
                            console.error(error.response);
                        }
                    });
                if (data.code == "CREDENTIALS") {
                    const errors = Object.keys(data.message);
                    for (let i = 0; i < errors.length; i++) {
                        const errorTxt = data.message[errors[i]];
                        this.error[errors[i]] = errorTxt.toString();
                    }
                } else if (data.code == "SUCCESS") {
                    this.alert = true;
                    this.altType = "success";
                    this.altTxt = data.message;
                    this.formSubscripe.email = "";
                } else if (data.code == "UNKNOWN") {
                    this.alert = true;
                    this.altType = "error";
                    this.altTxt = data.message;
                } else if (data.code == "WARNING") {
                    this.alert = true;
                    this.altType = "warning";
                    this.altTxt = data.message;
                    this.formSubscripe.email = "";
                } else {
                    console.error(data);
                }

                this.loader = false;
            };

            setTimeout(() => {
                this.loader = false;
            }, 30000);
            getting();
        },
        sendcontact: function () {
            this.loader = true;

            const header = {
                credentials: "same-origin",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": this.csrf_token,
                },
            };

            const body = JSON.stringify(this.formContact);

            const getting = async () => {
                await this.$recaptchaLoaded();
                const token = await this.$recaptcha();
                this.formContact.recaptcha = token;

                let data = await axios
                    .post("/app/contact/", body, header)
                    .then((response) => {
                        return response.data;
                    })
                    .catch(function (error) {
                        if (error.response) {
                            console.error(error.response);
                        }
                    });
                console.log(data);
                if (data.code == "CREDENTIALS") {
                    const errors = Object.keys(data.message);
                    for (let i = 0; i < errors.length; i++) {
                        const errorTxt = data.message[errors[i]];
                        this.error[errors[i]] = errorTxt.toString();
                    }
                } else if (data.code == "SUCCESS") {
                    this.alert = true;
                    this.altType = "success";
                    this.altTxt = data.message;
                    this.formContact.fullname = "";
                    this.formContact.email = "";
                    this.formContact.phone = "";
                    this.formContact.subject = "";
                    this.formContact.message = "";
                } else if (data.code == "UNKNOWN") {
                    this.alert = true;
                    this.altType = "error";
                    this.altTxt = data.message;
                } else {
                    console.error(data);
                }

                this.loader = false;
            };

            setTimeout(() => {
                this.loader = false;
            }, 30000);
            getting();
        },
        sendquote: function () {
            this.loader = true;

            const header = {
                credentials: "same-origin",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": this.csrf_token,
                },
            };

            const body = JSON.stringify(this.formData);

            const getting = async () => {
                await this.$recaptchaLoaded();
                const token = await this.$recaptcha();
                this.formData.recaptcha = token;

                let data = await axios
                    .post("/app/quote/", body, header)
                    .then((response) => {
                        return response.data;
                    })
                    .catch(function (error) {
                        if (error.response) {
                            console.error(error.response);
                        }
                    });
                console.log(data);
                if (data.code == "CREDENTIALS") {
                    const errors = Object.keys(data.message);
                    for (let i = 0; i < errors.length; i++) {
                        const errorTxt = data.message[errors[i]];
                        this.error[errors[i]] = errorTxt.toString();
                    }
                } else if (data.code == "SUCCESS") {
                    this.alert = true;
                    this.altType = "success";
                    this.altTxt = data.message;
                    this.formData.fullname = "";
                    this.formData.email = "";
                    this.formData.phone = "";
                    this.formData.service = "";
                } else if (data.code == "UNKNOWN") {
                    this.alert = true;
                    this.altType = "error";
                    this.altTxt = data.message;
                } else {
                    console.error(data);
                }

                this.loader = false;
                this.quote = false;
            };

            setTimeout(() => {
                this.loader = false;
            }, 30000);
            getting();
        },
        typeSentence: async function (sentence, eleRef, delay = 100) {
            const letters = sentence.split("");
            let i = 0;
            while (i < letters.length) {
                await this.waitForMs(delay);
                document.querySelector(eleRef).append(letters[i]);
                i++;
            }
            return;
        },
        waitForMs: function (ms) {
            return new Promise((resolve) => setTimeout(resolve, ms));
        },
        deleteSentence: async function (eleRef) {
            const sentence = document.querySelector(eleRef).innerHTML;
            const letters = sentence.split("");
            let i = 0;
            while (letters.length > 0) {
                await this.waitForMs(100);
                letters.pop();
                document.querySelector(eleRef).innerHTML = letters.join("");
            }
        },
        carousel: async function (carouselList, eleRef) {
            var i = 0;
            while (true) {
                this.updateFontColor(eleRef, carouselList[i].color);
                await this.typeSentence(carouselList[i].text, eleRef);
                await this.waitForMs(1500);
                await this.deleteSentence(eleRef);
                await this.waitForMs(500);
                i++;
                if (i >= carouselList.length) {
                    i = 0;
                }
            }
        },
        updateFontColor: function (eleRef, color) {
            document.querySelector(eleRef).style.color = color;
        },
        startType: async function () {
            await this.typeSentence(
                "Mr. Stark, I don't feel so good..",
                "#sentence"
            );
            await this.waitForMs(2000);
            this.deleteSentence("#sentence");
        },
    },
    mounted() {
        this.carousel(this.carouselText, "#feature-text");
    },
};
</script>
<style src="vue-multiselect/dist/vue-multiselect.css"></style>
