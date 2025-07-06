<template>
    <div class="container py-4">
        <!-- title -->
        <div class="mb-3">
            <VInput v-model="title" label="title" inputId="title"/>
        </div>
        <!-- description -->
        <div class="mb-3">
            <VInput v-model="description" label="description" inputId="description"/>
        </div>
        <div class="mb-3">
            <button class="btn btn-primary" @click="createNewLists">Создать</button>
        </div>
    </div>
</template>

<script>
import VInput from "@/Pages/Components/VInput.vue";
import {Link} from "@inertiajs/inertia-vue3";

export default {
    components: {
        Link,
        VInput,
    },
    data(){
        return {
            title:"",
            description:"",
        }
    },
    methods: {
        createNewLists(){
            axios.post('/create', {
                title: title.value,
                description: description.value
            }).then((r) => {
                // можно перенаправить обратно или показать сообщение
                console.log(r.data.message);
                window.location.href = '/';
            });
        }
    }
}
</script>
