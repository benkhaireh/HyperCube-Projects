<template>
    <section class="relative block w-full p-[50px] bg-[#141418]">
        <div class="relative block w-full max-w-[600px] z-10">
            <ul class="flex items-center">
                <li class="text-white bold mx-4">
                    <router-link to="/">Home</router-link>
                </li>
                <li class="text-white bold">></li>
                <li class="text-gray-400 mx-4 bold">Contact Us</li>
            </ul>
            <div class="py-[140px]">
                <h2 class="text-[50px] text-white bold">Let's Work Together</h2>
                <p class="text-[17px] text-gray-400">
                    Let us know about you and we will find the best solution for
                    you and your business needs.
                </p>
            </div>
        </div>
        <div class="absolute top-[100px] right-[400px] z-0">
            <img src="/imgs/banner-shape-1.png" alt="Image" />
        </div>
        <div class="absolute top-[40px] right-[300px]">
            <img src="/imgs/banner-shape-4.png" alt="Image" />
        </div>
    </section>
    <section class="relative block w-full pt-[100px] pb-[100px]">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="flex-1">
                    <div class="mr-[50px]">
                        <h6 class="mb-[28px] text-white bold text-[15px]">
                            GET
                            <span class="bg-[#437FEC] px-2 py-1">IN TOUCH</span>
                        </h6>
                        <h2 class="text-white bold text-[38px] mb-[30px]">
                            To Make Requests For Further Information Contact Us
                        </h2>
                        <div
                            class="bg-[#1D212B] px-[40px] py-[35px] rounded-[10px] shadow-lg"
                        >
                            <ul>
                                <li class="mb-[10px] text-[18px] text-gray-400">
                                    <span
                                        class="text-white bold mr-[5px] text-[20px]"
                                        >Address :</span
                                    >
                                    Cite Aviation, Djibouti
                                </li>
                                <li class="mb-[10px] text-[18px] text-gray-400">
                                    <span
                                        class="text-white bold mr-[5px] text-[20px]"
                                        >Email :</span
                                    >
                                    <a href="mailto:contact@gaashaan.net"
                                        >contact@gaashaan.net</a
                                    >
                                </li>
                                <li class="mb-[10px] text-[18px] text-gray-400">
                                    <span
                                        class="text-white bold mr-[5px] text-[20px]"
                                        >Phone :</span
                                    >
                                    <a href="tel:+1-485-456-0102"
                                        >+253-21-352-929</a
                                    >
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="flex-1">
                    <div
                        class="px-[45px] py-[40px] ml-[50px] bg-[#1D212B] rounded-[10px]"
                    >
                        <h3 class="text-[20px] mb-[30px] bold text-white">
                            Send Us A Message
                        </h3>
                        <form
                            action=""
                            class="text-[17px] px-[calc(-.5 * 1.5rem]"
                            @submit.prevent="sendcontact"
                        >
                            <div class="mb-8">
                                <div class="flex">
                                    <span
                                        class="inline-flex items-center px-3 text-sm border border-r-0 rounded-l-md bg-gray-600 text-gray-400 border-gray-600"
                                    >
                                        <i class="ri-user-fill text-lg"></i>
                                    </span>
                                    <input
                                        type="text"
                                        class="rounded-none rounded-r-lg outline-none block flex-1 min-w-0 w-full text-sm p-2.5 bg-gray-700 placeholder-gray-400 text-white"
                                        placeholder="Your first & last name"
                                        :class="[
                                            error.fullname
                                                ? 'border-red-600 focus:ring-red-500 focus:border-red-500'
                                                : 'border-gray-600 focus:ring-blue-500 focus:border-blue-500',
                                        ]"
                                        v-model="formData.fullname"
                                    />
                                </div>
                                <small
                                    class="flex items-start text-red-500 mt-2"
                                    v-if="error.fullname"
                                >
                                    <i class="ri-alert-fill mr-2"></i>
                                    <span>{{ error.fullname }}</span>
                                </small>
                            </div>
                            <div class="mb-8">
                                <div class="flex">
                                    <span
                                        class="inline-flex items-center px-3 text-sm border border-r-0 rounded-l-md bg-gray-600 text-gray-400 border-gray-600"
                                    >
                                        <i class="ri-at-fill text-lg"></i>
                                    </span>
                                    <input
                                        type="text"
                                        class="rounded-none rounded-r-lg outline-none block flex-1 min-w-0 w-full text-sm p-2.5 bg-gray-700 placeholder-gray-400 text-white"
                                        placeholder="Your email address"
                                        :class="[
                                            error.email
                                                ? 'border-red-600 focus:ring-red-500 focus:border-red-500'
                                                : 'border-gray-600 focus:ring-blue-500 focus:border-blue-500',
                                        ]"
                                        v-model="formData.email"
                                    />
                                </div>
                                <small
                                    class="flex items-start text-red-500 mt-2"
                                    v-if="error.email"
                                >
                                    <i class="ri-alert-fill mr-2"></i>
                                    <span>{{ error.email }}</span>
                                </small>
                            </div>
                            <div class="mb-8">
                                <div class="flex">
                                    <span
                                        class="inline-flex items-center px-3 text-sm border border-r-0 rounded-l-md bg-gray-600 text-gray-400 border-gray-600"
                                    >
                                        <i class="ri-phone-fill text-lg"></i>
                                    </span>
                                    <input
                                        type="number"
                                        class="rounded-none rounded-r-lg outline-none block flex-1 min-w-0 w-full text-sm p-2.5 bg-gray-700 placeholder-gray-400 text-white"
                                        placeholder="Your mobile number"
                                        :class="[
                                            error.phone
                                                ? 'border-red-600 focus:ring-red-500 focus:border-red-500'
                                                : 'border-gray-600 focus:ring-blue-500 focus:border-blue-500',
                                        ]"
                                        v-model="formData.phone"
                                    />
                                </div>
                                <small
                                    class="flex items-start text-red-500 mt-2"
                                    v-if="error.phone"
                                >
                                    <i class="ri-alert-fill mr-2"></i>
                                    <span>{{ error.phone }}</span>
                                </small>
                            </div>
                            <div class="mb-8">
                                <div class="flex">
                                    <span
                                        class="inline-flex items-center px-3 text-sm border border-r-0 rounded-l-md bg-gray-600 text-gray-400 border-gray-600"
                                    >
                                        <i class="ri-mail-fill text-lg"></i>
                                    </span>
                                    <input
                                        type="text"
                                        class="rounded-none rounded-r-lg outline-none block flex-1 min-w-0 w-full text-sm p-2.5 bg-gray-700 placeholder-gray-400 text-white"
                                        placeholder="Purpose of your contact"
                                        :class="[
                                            error.subject
                                                ? 'border-red-600 focus:ring-red-500 focus:border-red-500'
                                                : 'border-gray-600 focus:ring-blue-500 focus:border-blue-500',
                                        ]"
                                        v-model="formData.subject"
                                    />
                                </div>
                                <small
                                    class="flex items-start text-red-500 mt-2"
                                    v-if="error.subject"
                                >
                                    <i class="ri-alert-fill mr-2"></i>
                                    <span>{{ error.subject }}</span>
                                </small>
                            </div>
                            <div class="mb-8">
                                <div class="flex">
                                    <span
                                        class="inline-flex items-start px-3 py-1.5 text-sm text-gray-900 bg-gray-200 border border-r-0 border-gray-300 rounded-l-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600"
                                    >
                                        <i class="ri-pencil-fill text-lg"></i>
                                    </span>
                                    <textarea
                                        class="rounded-none rounded-r-lg outline-none block flex-1 min-w-0 w-full text-sm p-2.5 bg-gray-700 placeholder-gray-400 text-white h-40"
                                        placeholder="Your message here"
                                        :class="[
                                            error.message
                                                ? 'border-red-600 focus:ring-red-500 focus:border-red-500'
                                                : 'border-gray-600 focus:ring-blue-500 focus:border-blue-500',
                                        ]"
                                        v-model="formData.message"
                                    ></textarea>
                                </div>
                                <small
                                    class="flex items-start text-red-500 mt-2"
                                    v-if="error.message"
                                >
                                    <i class="ri-alert-fill mr-2"></i>
                                    <span>{{ error.message }}</span>
                                </small>
                            </div>
                            <div class="text-right pt-[20px]">
                                <button
                                    type="submit"
                                    class="inline-table py-[16px] px-[30px] bg-[#266fe2] rounded-[50px] font-[700] text-[16px] text-white leading-[15px] relative text-center"
                                    style="pointer-events: all; cursor: pointer"
                                >
                                    Send Message
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="absolute top-[20px] left-[100px]">
            <img src="/imgs/team-shape-1.png" alt="Image" />
        </div>
        <div class="absolute bottom-[20px] right-[100px]">
            <img src="/imgs/team-shape-2.png" alt="Image" />
        </div>
    </section>
    <section
        class="relative block w-full py-[50px] md:py-[70px] mt-[150px] bg-[#1D212B]"
    >
        <div class="container mx-auto">
            <div class="flex flex-wrap md:flex-nowrap items-center px-8">
                <div class="block w-full my-4">
                    <h2 class="text-[32px] text-white bold">
                        Ready To Get Free Consultations For Powerful Cyber
                        Security Solutions?
                    </h2>
                </div>
                <div class="block w-full my-4">
                    <div class="text-right">
                        <button
                            @click="showQuote"
                            type="button"
                            class="px-[30px] py-[16px] text-white bg-[#266fe2] border-[#266fe2] rounded-[50px] font-[700] text-[16px] leading-[15px] cursor-pointer"
                        >
                            Get A Quote
                            <i
                                class="ri-arrow-right-line text-lg relative left-[3px] top-[3px]"
                            ></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="absolute bottom-0 left-[100px]">
            <img src="/imgs/consultations-shape-1.png" alt="Image" />
        </div>
    </section>
    <section class="fixed top-0 left-0 right-0 z-[1000] backdrop" v-if="quote">
        <div
            class="relative mx-auto px-4 md:px-auto w-full lg:w-2/4 sm:w-4/5 pt-8 pb-8 h-full z-10 overflow-y-auto"
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
                        >Quote request form</span
                    >
                    <i class="ri-money-dollar-circle-fill font-bold"></i>
                </h2>
                <div class="flex-1 mr-4">
                    <input-comp
                        type="text"
                        label="fullname"
                        label_txt="Your first & last name"
                        icon="user"
                        v-model="formQuote.fullname"
                        :error="errorQuote.fullname"
                        required
                    />
                </div>
                <div class="flex-1 mr-4">
                    <input-comp
                        type="email"
                        label="email"
                        label_txt="Your email address"
                        icon="at"
                        v-model="formQuote.email"
                        :error="errorQuote.email"
                        required
                    />
                </div>
                <div class="flex-1 mr-4">
                    <input-comp
                        type="number"
                        label="phone"
                        label_txt="Your mobile number"
                        icon="phone"
                        v-model="formQuote.phone"
                        :error="errorQuote.phone"
                        required
                    />
                </div>
                <div class="block w-full mb-4 mr-4">
                    <span class="block text-grey-darker font-bold mb-2"
                        >Service selection</span
                    >
                    <vue-multiselect
                        v-model="formQuote.service"
                        :options="options"
                        :allow-empty="false"
                        :taggable="true"
                        :multiple="true"
                    >
                    </vue-multiselect>
                    <small
                        class="flex items-start text-red-500 mt-2 font-bold"
                        v-if="errorQuote.service"
                    >
                        <i class="ri-alert-fill mr-2"></i>
                        <span v-text="errorQuote.service"></span>
                    </small>
                </div>
                <div class="flex-1">
                    <textarea-comp
                        label="message"
                        label_txt="Tell us more about your project"
                        icon="edit-2"
                        v-model="formData.message"
                        :error="error.message"
                        placeholder="What exactly do you need?"
                        :limitmaxCount="5020"
                        required
                    />
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
                        class="inline-block px-4 py-2 text-white bg-brand-primary rounded-lg"
                    >
                        Get the quote
                    </button>
                </div>
            </form>
        </div>
    </section>

    <div v-if="alert">
        <alert-comp
            :alertType="altType"
            :alertTxt="altTxt"
            :alertLang="altLang"
            @alert="theAlert"
        />
    </div>

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
</template>
<script>
import InputComp from "../components/inputcomp.vue";
import VueMultiselect from "vue-multiselect";
import AlertComp from "../components/AlertComp.vue";
import TextareaComp from "../components/TextareaComp.vue";
export default {
    name: "contact",
    components: {
        InputComp,
        VueMultiselect,
        AlertComp,
        TextareaComp,
    },
    data() {
        return {
            formData: {
                fullname: "",
                email: "",
                phone: "",
                subject: "",
                message: "",
                recaptcha: "",
            },
            error: {
                fullname: "",
                email: "",
                phone: "",
                subject: "",
                message: "",
            },
            formQuote: {
                fullname: "",
                email: "",
                phone: "",
                service: "Monitoring 24/7",
                recaptcha: "",
                message: "",
            },
            errorQuote: {
                fullname: "",
                email: "",
                phone: "",
                service: "",
                message: "",
            },
            options: [
                "Monitoring 24/7",
                "Intrusion Detection",
                "Incident Response",
                "Threat Intelligence",
                "Anti-Phishing",
                "Web Monitoring",
                "Virtual CISO",
                "Technical & Operational Support",
                "Security Devices Management",
                "Logs management",
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
        };
    },
    methods: {
        theAlert: function (e) {
            this.alert = e;
        },
        hideQuote: function () {
            this.quote = false;
        },
        showQuote: function () {
            this.loader = true;

            setTimeout(() => {
                this.quote = true;
                this.loader = false;
            }, 3000);
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
                const token = await this.$recaptcha("quote");
                this.formQuote.recaptcha = token;

                let data = await axios
                    .post("/send/quote/", body, header)
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
                    this.formQuote.fullname = "";
                    this.formQuote.email = "";
                    this.formQuote.phone = "";
                    this.formQuote.service = "";
                    this.formQuote.message = "";
                    this.quote = false;
                } else if (data.code == "UNKNOWN") {
                    this.alert = true;
                    this.altType = "error";
                    this.altTxt = data.message;
                } else {
                    console.log(data);
                }

                this.loader = false;
                this.quote = false;
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

            const body = JSON.stringify(this.formData);

            const getting = async () => {
                await this.$recaptchaLoaded();
                const token = await this.$recaptcha("contact");
                this.formData.recaptcha = token;

                let data = await axios
                    .post("/send/message", body, header)
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
                    this.formData.fullname = "";
                    this.formData.email = "";
                    this.formData.phone = "";
                    this.formData.service = "";
                } else if (data.code == "UNKNOWN") {
                    this.alert = true;
                    this.altType = "error";
                    this.altTxt = data.message;
                } else {
                    console.log(data);
                }

                this.loader = false;
            };

            setTimeout(() => {
                this.loader = false;
            }, 30000);
            getting();
        },
    },
};
</script>

<style src="vue-multiselect/dist/vue-multiselect.css"></style>
