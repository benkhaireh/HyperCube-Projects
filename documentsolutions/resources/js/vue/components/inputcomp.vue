<template>
    <div class="block w-full mb-4">
        <label
            class="block text-grey-darker font-bold mb-2"
            :for="label"
            v-text="label_txt"
        ></label>
        <div class="relative w-full">
            <i
                :class="[
                    'absolute left-0 top-0 py-1 px-3 text-lg',
                    'ri-' + icon + '-fill',
                ]"
            ></i>
            <input
                v-bind="$attrs"
                :class="[
                    'shadow appearance-none border rounded w-full py-2 px-3 text-sm text-grey-darker pl-10 ' +
                        supclass,
                    error ? 'border-red-500 focus:border-red-700' : 'border',
                ]"
                :id="label"
                :placeholder="placeholder"
                :value="modelValue"
                @input="$emit('update:modelValue', $event.target.value)"
            />
        </div>
        <small
            class="block mt-2 px-2 text-sm text-gray-500 bold"
            v-text="small"
        ></small>
        <small class="flex items-start text-red-500 mt-2 font-bold" v-if="error !== ''">
            <i class="ri-alert-fill mr-2"></i>
            <span v-text="error"></span>
        </small>
    </div>
</template>
<script>
export default {
    name: "inputcomp",
    props: {
        label: {
            type: String,
            default: "",
        },
        label_txt: {
            type: String,
            default: "",
        },
        placeholder: {
            type: String,
            default: "",
        },
        icon: {
            type: String,
            default: "",
        },
        small: {
            type: String,
            default: "",
        },
        supclass: {
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