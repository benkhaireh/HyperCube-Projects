<template>
    <div
        class="fixed top-0 left-0 right-0 bottom-0 flex items-center justify-center z-50"
        v-if="loader"
    >
        <div class="absolute top-0 left-0 right-0 bottom-0 backdrop"></div>
        <div class="lds-ripple z-10">
            <div></div>
            <div></div>
        </div>
    </div>
    <top-nav />
    <router-view />
    <bottom-nav />
</template>
<script>
import topNav from "./components/topnav.vue";
import bottomNav from "./components/bottomnav.vue";
export default {
    name: "App",
    components: { topNav, bottomNav },
    data() {
        return {
            loader: true,
        }
    },
    mounted() {
        setTimeout(() => {
            this.loader = false;
        }, 3000);
    },
};
</script>
