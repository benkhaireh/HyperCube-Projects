<template>
    <div class="fixed bottom-4 left-4 right-4 z-50" v-if="alert">
        <div
            class="mx-auto max-w-md bg-white border-l-4 rounded-md px-4 py-3 shadow-lg"
            role="alert"
            :class="{
                'border-orange-500 text-orange-900': alertType == 'warning',
                'border-red-500 text-red-900': alertType == 'error',
                'border-green-500 text-green-900': alertType == 'success',
            }"
        >
            <div class="flex" v-if="alertLang != 'ae'">
                <div class="py-1">
                    <i
                        class="text-3xl text-green-500 ri-checkbox-circle-line mr-4"
                        v-if="alertType == 'success'"
                    ></i>
                    <i
                        class="text-3xl text-orange-500 ri-error-warning-line mr-4"
                        v-if="alertType == 'warning'"
                    ></i>
                    <i
                        class="text-3xl text-red-500 ri-close-circle-line mr-4"
                        v-if="alertType == 'error'"
                    ></i>
                </div>
                <div class="flex w-full items-center">
                    <div class="w-full block">
                        <p
                            class="font-bold text-lg"
                            v-if="alertType == 'warning'"
                        >
                            <span v-if="alertLang == 'fr'">Euh oh !</span>
                            <span v-if="alertLang == 'en'">Uh oh !</span>
                        </p>
                        <p
                            class="font-bold text-lg"
                            v-if="alertType == 'error'"
                        >
                            <span v-if="alertLang == 'fr'">Oups !</span>
                            <span v-if="alertLang == 'en'">Oops !</span>
                        </p>
                        <p
                            class="font-bold text-lg"
                            v-if="alertType == 'success'"
                        >
                            <span v-if="alertLang == 'fr'">Youpi !</span>
                            <span v-if="alertLang == 'en'">Yippee !</span>
                        </p>
                        <p class="text-sm text-gray-500" v-text="alertTxt"></p>
                    </div>
                    <div class="pl-2">
                        <button
                            class="text-gray-600"
                            @click="alertTiming('yes')"
                        >
                            FERMER
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    name: "alertcomp",
    props: ["alertType", "alertTxt", "alertLang"],
    emits: ["getLoader", "alert", "altType", "altTxt", "altLang"],
    data: () => {
        return {
            alert: true,
            timer: null,
        };
    },
    methods: {
        alertTiming(now = null) {
            if (now != null) {
                this.alert = false;
                this.$emit("alert", this.alert);
            }
            if (this.timer) window.clearTimeout(this.timer);
            this.timer = setTimeout(() => {
                this.alert = false;
                this.$emit("alert", this.alert);
            }, 15000);
        },
    },
    mounted() {
        this.alertTiming();
    },
    updated() {
        this.alertTiming();
    },
};
</script>
