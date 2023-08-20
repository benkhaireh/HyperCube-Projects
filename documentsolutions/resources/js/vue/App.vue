<template>
    <nav-comp />
    <div>
        <router-view />
        <foot-comp />
    </div>
</template>
<script>
import NavComp from "./components/Navcomp.vue";
import FootComp from "./components/Footcomp.vue";
export default {
    name: "app",
    components: { NavComp, FootComp },
};
</script>
