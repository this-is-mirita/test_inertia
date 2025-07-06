<template>
    <div class="form-floating mt-4">
        <input
            :value="modelValue"
            @input="$emit('update:modelValue', $event.target.value)"
            type="text"
            class="form-control"
            :id="inputId"
            :placeholder="label"
        />
        <label :for="inputId">{{ label }}</label>
    </div>
</template>

<script>
export default {
    props: {
        label: {
            type: String,
            default: 'Введите значение',
        },
        inputId: {
            type: String,
            default: 'floatingInput',
        },
        modelValue: {
            type: String,
            default: '',
        },
    },
}
</script>
