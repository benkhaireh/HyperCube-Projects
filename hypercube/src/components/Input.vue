<template>
  <div class="mb-6">
    <input
      class="text-body-color border-[f0f0f0] focus:border-pink-700 w-full rounded border py-3 px-[14px] text-base outline-none focus-visible:shadow-none"
      :placeholder="placeholder"
      :value="modelValue"
    />
    <div
      class="p-4 my-8 text-sm text-red-800 rounded-lg bg-red-50"
      role="alert"
      v-if="error != ''"
    >
      {{ error }}
    </div>
  </div>
</template>
<script>
export default {
  name: "inputComp",
  props: {
    label: {
      type: String,
      default: "",
    },
    placeholder: {
      type: String,
      default: "",
    },
    error: {
      type: [String, Number],
      default: "",
    },
    modelValue: {
      type: [String, Number],
      default: "",
    },
  },
};
</script>
