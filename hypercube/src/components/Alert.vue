<template>
  <div
    class="flex items-center p-4 mb-4 text-sm border rounded-lg"
    role="alert" v-if="title != ''"
    :class="[title == 'info' ? 'text-blue-800 border-blue-300 bg-blue-50' : '', title == 'error' ? 'text-red-800 border-red-300 bg-red-50' : '', title == 'success' ? 'text-green-800 border-green-300 bg-green-50' : '', title == 'warning' ? 'text-yellow-800 border-yellow-300 bg-yellow-50' : '', title == 'blank' ? 'text-gray-800 border-gray-300 bg-gray-50' : '',]"
  >
    <svg
      class="flex-shrink-0 inline w-4 h-4 mr-3"
      aria-hidden="true"
      xmlns="http://www.w3.org/2000/svg"
      fill="currentColor"
      viewBox="0 0 20 20"
    >
      <path
        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"
      />
    </svg>
    <span class="sr-only">Info</span>
    <div>
      {{ body }}
    </div>
  </div>
</template>
<script>
export default {
  name: "AlertComp",
  props: {
    title: {
        type: String,
        default: ''
    },
    body: {
        type: String,
        default: ''
    },
  },
};
</script>
