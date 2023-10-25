<template>
    <div>
        <table class="min-w-full text-left">
            <tr class="border-b">
                <th class="px-6 py-4">ID</th>
                <th class="px-6 py-4">Пароль</th>
                <th class="px-6 py-4">Логин</th>
                <th class="px-6 py-4"></th>
            </tr>
            <tr v-for="password in passwords"
            :key="password.password_id">
                <td class="px-6 py-4">{{ password.password_id }}</td>
                <td class="px-6 py-4">{{ password.password_password }}</td>
                <td class="px-6 py-4">{{ password.password_login }}</td>
                <td class="px-6 py-4">
                    <Link class="text-blue-500 hover:underline" :href="`/password/${password.password_id}`">Редактировать</Link>
                </td>
            </tr>
        </table>
    </div>
    
</template>

<script setup>
    const props = defineProps({
        passwords: Array
    });
</script>

<style>

</style>