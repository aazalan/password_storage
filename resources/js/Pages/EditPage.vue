<template>
    <Head title="Редактирование пароля" />

    <div class="grid place-items-center">
        <div>
            <h2 class="text-3xl p-4">Редактирование пароля</h2>
        </div>

        <PasswordForm 
        :url="`/password/${password_data.id}`"
        :password="password_data.password"
        :login="password_data.login"/>
        <Link href="/" class="mt-4 text-blue-500 hover:underline">Вернуться к списку</Link>
    </div>

</template>

<script setup>
    import PasswordForm from '../Components/PasswordForm.vue';

    const props = defineProps({
        password_data: Array
    });
</script>

<style>

</style>