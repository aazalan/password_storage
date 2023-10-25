<template>
    <div class="mt-8 p-8 rounded-xl border w-1/3">
            <form @submit.prevent="submit">
                <div class="mb-6">
                    <input class="border rounded p-2 w-full" v-model="form.password" type="text" name="password" id="password" placeholder="Пароль">
                    <div v-if="form.errors.password">
                        <span class="text-xs">Пароль должен быть не менее 5 символов</span>
                    </div>
                </div>
                

                <div  class="mb-6">
                    <input class="border rounded p-2 w-full" v-model="form.login" type="text" name="login" id="login" placeholder="Логин">
                    <div v-if="form.errors.login">
                        <span class="text-xs">Логин должен быть не менее 5 символов</span>
                    </div>
                </div>
                

                <div>
                    <button class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500" type="submit">Сохранить</button>
                </div>
            </form> 
    </div>
</template>

<script setup>
    import { useForm } from '@inertiajs/vue3';

    const props = defineProps({
        password: String,
        login: String,
        url: String
    });

    let form = useForm({
        password: props.password ?? '',
        login: props.login ?? ''
    });


    let submit = () => {
        form.post(props.url);
    };
</script>

<style>

</style>