<template>
    <div class="container">
        <p class="text-danger">{{ message }}</p>
        <VInput/>
    </div>
</template>

<script type="module">
import { ref } from 'vue'
import VInput from "@/Pages/App/VInput.vue";
    export default {
        components: {VInput},
        setup() {
            const message = ref('Привет Vue!')
            return {
                message
            }
        }
    }
</script>
