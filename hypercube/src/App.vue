<template>
  <!-- ====== Nav Section Start -->
  <top-nav />
  <!-- ====== Nav Section End -->
  <!-- ====== Main Section Start -->
  <main>
    <router-view />
  </main>
  <!-- ====== Main Section End -->
  <!-- ====== Bottom Section Start -->
  <bottom-nav />
  <!-- ====== Bottom Section End -->
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
