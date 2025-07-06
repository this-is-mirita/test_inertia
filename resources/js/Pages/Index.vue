<template>
    <div class="container py-4">
        <!-- Заголовок и кнопка создать -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="mb-0">Список записей</h2>
            <Link href="/create" class="btn btn-dark">Создать запись</Link>
        </div>

        <!-- Поиск -->
        <div class="mb-3">
            <VInput label="Поиск" inputId="message" />
        </div>

        <!-- Таблица -->
        <div class="">
            <VTable :lists="localLists" @deleteElement="deleteElement" @editElement="editElement" />
        </div>
    </div>
</template>


<script type="module">
import VInput from "@/Pages/Components/VInput.vue";
import VTable from "@/Pages/Components/VTable.vue";
import VModal from "@/Pages/Components/VModal.vue";
import {Link} from "@inertiajs/inertia-vue3";

    export default {
        components: {VTable, VInput, VModal, Link},
        // менять пропсы напрямуб запрещено надо создать их копию
        props: {
            lists: Array,
        },
        data() {
            return {
                // создали копию (локальную гпт поправил хз как это) в которую положили наш листс
                localLists: [...this.lists],
            }
        },
        methods: {
            deleteElement(id){
                axios.post(`/delete/${id}`).then((response) => {
                    // удаляем элемент из копии созданно
                    this.localLists = this.localLists.filter(list => list.id !== id);
                    alert(response.data.message);
                })
            },
            editElement(id){
                console.log("editElement" , id);
            },
        },
    }
</script>
