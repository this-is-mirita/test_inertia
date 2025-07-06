<template>
    <div class="mt-4">
        <div v-if="lists.length === 0" class="alert alert-secondary text-center border border-dark">
            Нет записей
        </div>
        <div v-else class="table-responsive border border-dark rounded">
            <table class="table table-bordered table-white mb-0">
                <thead class="table-light text-center align-middle">
                <tr class="">
                    <th scope="col" class="border-dark">#</th>
                    <th scope="col" class="border-dark">Заголовок</th>
                    <th scope="col" class="border-dark">Описание</th>
                    <th scope="col" class="border-dark">Создано</th>
                    <th scope="col" class="border-dark">Удалить</th>
                    <th scope="col" class="border-dark">Изменить</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="(list, index) in lists" :key="list.id" class="mt-2">
                    <th scope="row" class="border-dark text-center">{{ list.id }}</th>
                    <td class="border-dark">{{ list.title }}</td>
                    <td class="border-dark">{{ list.description }}</td>
                    <td class="border-dark text-nowrap">{{ new Date(list.created_at).toLocaleString() }}</td>
                    <td class="border-dark text-center">
                        <button
                            type="button"
                            class="btn btn-sm btn-dark"
                            @click="$emit('deleteElement', list.id)"
                            title="Удалить"
                        >
                            <i class="bi bi-x-lg"></i>
                        </button>
                    </td>
                    <td class="border-dark text-center">
                        <button
                            type="button"
                            class="btn btn-sm btn-dark"
                            @click="$emit('editElement', list.id)"
                            title="Редактировать">
                        <i class="bi bi-pencil"></i>
                        </button>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        lists: Array
    },
    mounted() {
        //console.log("Количество записей:", this.lists.length);
    }
}
</script>
