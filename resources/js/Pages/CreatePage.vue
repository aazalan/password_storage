<template>
    <Head title="Создание нового пароля" />

    <div class="grid place-items-center">
        <div>
            <h2 class="text-3xl p-4">Добавление нового пароля в хранилище</h2>
        </div>

        <PasswordForm 
        :url="'/password'"/>
        <Link href="/" class="mt-4 text-blue-500 hover:underline">Вернуться к списку</Link>
    </div>
</template>

<script setup>
    import PasswordForm from '../Components/PasswordForm.vue';
</script>

<style>

</style>