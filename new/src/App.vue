<template>
  <top-nav />
  <!-- ====== Main Section Start -->
  <main>
    <router-view />
  </main>
  <!-- ====== Main Section End -->
  <bottom-nav />
</template>

<script>
import topNav from "./components/Nav.vue";
import bottomNav from "./components/Footer.vue";
export default {
  name: "App",
  components: { topNav, bottomNav },
  data() {
    return {
      //
    };
  },
};
</script>
