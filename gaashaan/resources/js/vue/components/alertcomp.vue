<template>
    <div class="block w-full my-[50px]">
        <div
            class="flex p-4 mb-4 rounded-lg"
            :class="[types == 'info' ? 'bg-blue-200' : '', types == 'error' ? 'bg-red-200' : '', types == 'success' ? 'bg-green-200' : '', types == 'warning' ? 'bg-yellow-200' : '']"
            v-if="alert"
        >
            <svg
                aria-hidden="true"
                class="flex-shrink-0 w-5 h-5"
                :class="[types == 'info' ? 'text-blue-800' : '', types == 'error' ? 'text-red-800' : '', types == 'success' ? 'text-green-800' : '', types == 'warning' ? 'text-yellow-800' : '']"
                fill="currentColor"
                viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg"
            >
                <path
                    fill-rule="evenodd"
                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                    clip-rule="evenodd"
                ></path>
            </svg>
            <span class="sr-only">Info</span>
            <div
                class="ml-3 text-sm font-medium"
                :class="[types == 'info' ? 'text-blue-800' : '', types == 'error' ? 'text-red-800' : '', types == 'success' ? 'text-green-800' : '', types == 'warning' ? 'text-yellow-800' : '']"
            >
                {{ content }}
            </div>
            <button
                type="button"
                class="ml-auto -mx-1.5 -my-1.5 rounded-lg focus:ring-2 p-1.5 inline-flex h-8 w-8"
                :class="[types == 'info' ? 'focus:ring-blue-400 bg-blue-200 text-blue-600 hover:bg-blue-300' : '', types == 'error' ? 'focus:ring-red-400 bg-red-200 text-red-600 hover:bg-red-300' : '', types == 'success' ? 'focus:ring-green-400 bg-green-200 text-green-600 hover:bg-green-300' : '', types == 'warning' ? 'focus:ring-yellow-400 bg-yellow-200 text-yellow-600 hover:bg-yellow-300' : '']"
                @click="hideAlert"
            >
                <span class="sr-only">Close</span>
                <svg
                    aria-hidden="true"
                    class="w-5 h-5"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                        fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"
                    ></path>
                </svg>
            </button>
        </div>
    </div>
</template>
<script>
export default {
    name: "alertcomp",
    props: {
        types: {
            type: String,
            default: ""
        },
        content: {
            type: String,
            default: ""
        },
        alert: {
            type: Boolean,
            default: false
        }
    },
    methods: {
        hideAlert: function() {
            this.$emit('setAlert', false);
        }
    },
};
</script>
