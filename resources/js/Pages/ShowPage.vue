<template>
    <Head title="Пароли" />

    <div class="grid place-items-center">
        <div>
            <h2 class="text-3xl p-4">Пароли сохраненные в хранилище</h2>
        </div>

        <div class="hover:bg-gray-300 p-4 mb-8 mt-8 rounded-xl max-w-md mx-auto border">
            <Link href="/password">Добавить новый пароль</Link>
        </div>
        
        <div>
            <PasswordsList :passwords="passwords.data" />
        </div>

        <div>
            <PasswordPaginator :links="passwords.links" />
        </div>
    </div>
    
</template>

<script setup>
    import PasswordsList from '../Components/PasswordsList.vue';
    import PasswordPaginator from '../Components/PasswordPaginator.vue';

    const props = defineProps({
        passwords: Array
    });
</script>

<style>

</style>