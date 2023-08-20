<template>
    <section class="relative container mx-auto py-8 mt-20">
        <div class="absolute -top-[40px] left-[0px]">
            <img src="/imgs/consultations-shape-2.png" alt="Image" />
        </div>
        <div class="block max-w-[600px] mx-auto mb-[50px]">
            <p
                class="mb-[0.5rem] text-[#06a8d9] bold text-center max-w-sm mx-auto uppercase"
            >
                OUR SECURITY
                <b class="bg-[#06a8d9] px-2 py-[0.15rem] text-white"
                    >SOLUTIONS</b
                >
            </p>
            <h1 class="text-[38px] text-center bold text-[#f0f8ff]">
                PREVENT & ASSESS
            </h1>
            <p class="text-[17px] text-gray-400 text-center">
                Our offering provides services to ensure the prevention of
                attacks and incidents, as well as periodic testing to assess the
                readiness of systems while measuring their level of compliance
                with security requirements.
            </p>
        </div>
        <ul class="lg:flex items-center justify-center lg:overflow-x-auto py-8">
            <li class="mb-2">
                <button
                    type="button"
                    @click="changeSecondNav('GV')"
                    class="text-white hover:bg-brand-primary mx-4 px-6 py-2 font-bold text-sm whitespace-nowrap"
                    :class="
                        secondNav == 'GV'
                            ? 'bg-brand-primary'
                            : 'bg-brand-secondary'
                    "
                >
                    Vulnerability management
                </button>
            </li>
            <li class="mb-2">
                <button
                    type="button"
                    @click="changeSecondNav('GC')"
                    class="text-white hover:bg-brand-primary mx-4 px-6 py-2 font-bold text-sm whitespace-nowrap"
                    :class="
                        secondNav == 'GC'
                            ? 'bg-brand-primary'
                            : 'bg-brand-secondary'
                    "
                >
                    Compliance management
                </button>
            </li>
            <li class="mb-2">
                <button
                    type="button"
                    @click="changeSecondNav('SE')"
                    class="text-white hover:bg-brand-primary mx-4 px-6 py-2 font-bold text-sm whitespace-nowrap"
                    :class="
                        secondNav == 'SE'
                            ? 'bg-brand-primary'
                            : 'bg-brand-secondary'
                    "
                >
                    External Scan
                </button>
            </li>
            <li class="mb-2">
                <button
                    type="button"
                    @click="changeSecondNav('V')"
                    class="text-white hover:bg-brand-primary mx-4 px-6 py-2 font-bold text-sm whitespace-nowrap"
                    :class="
                        secondNav == 'V'
                            ? 'bg-brand-primary'
                            : 'bg-brand-secondary'
                    "
                >
                    Monitor
                </button>
            </li>
        </ul>
        <div
            class="container lg:w-2/3 bg-gray-600 p-8 my-8 mx-auto"
            v-if="secondNav == 'GV'"
        >
            <div class="flex items-center p-4 flex-wrap lg:flex-nowrap">
                <img
                    class="object-cover w-full md:w-96"
                    src="/imgs/service_page_GV.png"
                    alt=""
                />
                <div
                    class="flex flex-col justify-between p-4 leading-normal mx-4"
                >
                    <p class="mb-3 font-normal text-gray-100">
                        Conduct periodic system scans to identify
                        vulnerabilities and identify vulnerabilities and ensure
                        that they are corrected this will provide customers with
                        a vulnerability management process for managing
                        vulnerabilities.
                    </p>
                    <p class="mb-3 font-normal text-gray-100">
                        Customers will also have periodic reports describing
                        identified vulnerabilities and KPIs measuring the
                        measuring the level of security.
                    </p>
                </div>
            </div>
        </div>

        <div
            class="container lg:w-2/3 bg-gray-600 p-8 my-8 mx-auto"
            v-if="secondNav == 'GC'"
        >
            <div class="flex items-center p-4 flex-wrap lg:flex-nowrap">
                <img
                    class="object-cover w-full md:w-96"
                    src="/imgs/service_page_GC.png"
                    alt=""
                />
                <div
                    class="flex flex-col justify-between p-4 leading-normal mx-4"
                >
                    <p class="mb-3 font-normal text-gray-100">
                        Conduct periodic tests to measure system compliance with
                        compliance with standards, policies and best practices.
                        policies and best practices.
                    </p>
                    <p class="mb-3 font-normal text-gray-100">
                        The compliance reports will help the CISO, CIO or even
                        the even the CEO to have a dashboard and take the
                        necessary necessary actions in case of failure.
                    </p>
                </div>
            </div>
        </div>

        <div
            class="container lg:w-2/3 bg-gray-600 p-8 my-8 mx-auto"
            v-if="secondNav == 'SE'"
        >
            <div class="flex items-center p-4 flex-wrap lg:flex-nowrap">
                <img
                    class="object-cover w-full md:w-96"
                    src="/imgs/service_page_SE.png"
                    alt=""
                />
                <div
                    class="flex flex-col justify-between p-4 leading-normal mx-4"
                >
                    <p class="mb-3 font-normal text-gray-100">
                        The external perimeter scan provides the list of
                        services list of services accessible from the Internet
                        and the associated vulnerabilities, by conducting
                        periodic scans.
                    </p>
                    <p class="mb-3 font-normal text-gray-100">
                        This will allow us to identify any changes and to follow
                        up on follow up on the correction of the flaws.
                    </p>
                </div>
            </div>
        </div>

        <div
            class="container lg:w-2/3 bg-gray-600 p-8 my-8 mx-auto"
            v-if="secondNav == 'V'"
        >
            <div class="flex items-center p-4 flex-wrap lg:flex-nowrap">
                <img
                    class="object-cover w-full md:w-96"
                    src="/imgs/service_page_V.png"
                    alt=""
                />
                <div
                    class="flex flex-col justify-between p-4 leading-normal mx-4"
                >
                    <p class="mb-3 font-normal text-gray-100">
                        The monitoring service allows us to inform our clients
                        of all the news that concern them in terms of new
                        vulnerabilities new vulnerabilities, new software
                        versions, exploits exploits, attacks, etc.
                    </p>
                    <p class="mb-3 font-normal text-gray-100">
                        This is a personalized service for each client,
                        depending on the systems deployed in its perimeter.
                    </p>
                </div>
            </div>
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
                        v-model="formData.fullname"
                        :error="error.fullname"
                        required
                    />
                </div>
                <div class="flex-1 mr-4">
                    <input-comp
                        type="email"
                        label="email"
                        label_txt="Your email address"
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
                        label_txt="Your mobile number"
                        icon="phone"
                        v-model="formData.phone"
                        :error="error.phone"
                        required
                    />
                </div>
                <div class="block w-full mb-4 mr-4">
                    <span class="block text-grey-darker font-bold mb-2"
                        >Service selection</span
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
    name: "prevent",
    components: {
        InputComp,
        VueMultiselect,
        AlertComp,
        TextareaComp,
    },
    data() {
        return {
            secondNav: "GV",
            formData: {
                fullname: "",
                email: "",
                phone: "",
                service: "Monitoring 24/7",
                recaptcha: "",
                message: "",
            },
            error: {
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
        changeSecondNav: function (secondNav) {
            this.secondNav = secondNav;
        },
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
                this.formData.recaptcha = token;

                let data = await axios
                    .post("/send/quote", body, header)
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
                    this.formData.message = "";
                    this.quote = false;
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
