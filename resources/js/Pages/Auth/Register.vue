<script setup>
import LoginType from '@/Components/LoginType/LoginType.vue';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/Ui/InputError.vue';
import InputLabel from '@/Components/Ui/InputLabel.vue';
import Button from '@/Components/Ui/Button/Button.vue';
import TextInput from '@/Components/Ui/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

const form = useForm({
    type: '',
    name: '',
    email: '',
    password: '',
    password_confirmation: '',
});

const submit = () => {
    form.post(route('register'), {
        onFinish: () => form.reset('password', 'password_confirmation'),
    });
}

</script>
<script>
import { ref } from 'vue'

export default {
    data(){
        return {
            type: 'type_1',
        }
    },
    methods: {
        onSubmit() {
            if (!this.name) {
                alert('Please enter your name');
                return false;
            }

            // document.getElementById('form').submit();
            this.$refs.refForm.submit();
        }
    },
}
</script>

<template>
    <GuestLayout>
        <Head title="Регистрация профиля (Register)" />
        <form @submit.prevent="submit">
            <ul class="nav" style="display: inline-flex; width: 100%; padding: 6px; margin: 6px 6px; border-color: blue; border-width: 1px;">
                <li @click="type = 'type_1'" class="nav-item" :class="form.type === 'type_1'?'active':''" style="display: block; width: 50%; color: white; border-radius: 5px 5px 50px 5px; cursor: pointer;">Компания</li>
                <li @click="type = 'type_2'" class="nav-item" :class="form.type === 'type_2'?'active':''" style="display: block; width: 50%; color: white; border-radius: 50px 5px 5px 5px; cursor: pointer;">Пользователь</li>
            </ul>
            <div v-if="type === 'type_1'" class="" style="padding: 6px; margin: 6px 6px; border-color: #67c212; color: white; border-width: 1px;">
                Компания поля для заполнения
            </div>
            <div v-else-if="type === 'type_2'" class="" style="padding: 6px; margin: 6px 6px; border-color: #10c587; color: white; border-width: 1px;">
                Пользователь поля для заполнения
            </div>
            <div class="clear"></div>
            <div v-if="type === 'type_1'" class="" style="padding: 6px; margin: 6px 6px; border-color: red; border-width: 1px;">
                <div>
                    <TextInput
                        id="type"
                        type="text"
                        hidden
                        v-model="form.type"
                        autofocus
                        autocomplete="name"
                        :value="form.type = 'type_1'"
                    />
                </div>
                <div>
                    <InputLabel for="name" value="Имя (Name)" />
                    <TextInput
                        id="name"
                        type="text"
                        class="mt-1 block w-full"
                        v-model.lazy.trim="form.name"
                        required
                        autofocus
                        autocomplete="name"
                        :placeholder="'Ваша Имя'"
                    />
                    <InputError class="mt-2" :message="form.errors.name" />
                </div>
                <div class="mt-4">
                    <InputLabel for="email" value="Почта (Email)" />

                    <TextInput
                        id="email"
                        type="email"
                        class="mt-1 block w-full"
                        v-model="form.email"
                        required
                        autocomplete="username"
                        :placeholder="'Ваша электронная почта (mail@yandex.ru)'"
                    />

                    <InputError class="mt-2" :message="form.errors.email" />
                </div>
                <div class="mt-4">
                    <InputLabel for="password" value="Пароль (Password)" />

                    <TextInput
                        id="password"
                        type="password"
                        class="mt-1 block w-full"
                        v-model="form.password"
                        required
                        autocomplete="new-password"
                        :placeholder="'Введите пароль'"
                    />

                    <InputError class="mt-2" :message="form.errors.password" />
                </div>
                <div class="mt-4">
                    <InputLabel for="password_confirmation" value="Повторите пароль (Confirm Password)" />

                    <TextInput
                        id="password_confirmation"
                        type="password"
                        class="mt-1 block w-full"
                        v-model="form.password_confirmation"
                        required
                        autocomplete="new-password"
                        :placeholder="'Повторите пароль'"
                    />

                    <InputError class="mt-2" :message="form.errors.password_confirmation" />
                </div>
            </div>
            <div v-else-if="type === 'type_2'" class="" style="padding: 6px; margin: 6px 6px; border-color: blue; border-width: 1px;">
                <div>
                    <TextInput
                        id="type1"
                        type="text"
                        hidden
                        v-model="form.type"
                        autofocus
                        autocomplete="name"
                        :value="form.type = 'type_2'"
                    />
                </div>
                <div>
                    <InputLabel for="name1" value="Имя" />

                    <TextInput
                        id="name1"
                        type="text"
                        class="mt-1 block w-full"
                        v-model="form.name"
                        required
                        autofocus
                        autocomplete="name"
                        :placeholder="'Ваша Имя'"
                    />

                    <InputError class="mt-2" :message="form.errors.name" />
                </div>
                <div class="mt-4">
                    <InputLabel for="email1" value="Почта (Email)" />

                    <TextInput
                        id="email1"
                        type="email"
                        class="mt-1 block w-full"
                        v-model="form.email"
                        required
                        autocomplete="username"
                        :placeholder="'Ваша электронная почта (mail@yandex.ru)'"
                    />

                    <InputError class="mt-2" :message="form.errors.email" />
                </div>
                <div class="mt-4">
                    <InputLabel for="password1" value="Пароль (Password)" />

                    <TextInput
                        id="password1"
                        type="password"
                        class="mt-1 block w-full"
                        v-model="form.password"
                        required
                        autocomplete="new-password"
                        :placeholder="'Введите пароль'"
                    />

                    <InputError class="mt-2" :message="form.errors.password" />
                </div>
                <div class="mt-4">
                    <InputLabel for="password_confirmation1" value="Повторите пароль (Confirm Password)" />

                    <TextInput
                        id="password_confirmation1"
                        type="password"
                        class="mt-1 block w-full"
                        v-model="form.password_confirmation"
                        required
                        autocomplete="new-password"
                        :placeholder="'Повторите пароль'"
                    />

                    <InputError class="mt-2" :message="form.errors.password_confirmation" />
                </div>
            </div>
            <div class="flex items-center justify-end mt-4">
                <Link
                    :href="route('login')"
                    class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                >Вы уже зарегистрированы?</Link>

                <Button class="ms-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">Зарегистрация</Button>
            </div>
        </form>
    </GuestLayout>
</template>


<style scoped>
    li {
        list-style: none
    }
    .nav li {
        float: left;
        border: 1px solid purple;
        height: 30px;
        width: 100px;
        text-align: center;
        vertical-align: middle;
        line-height: 30px;
    }
    .clear {
        clear: both;
    }
    .active {
        background: blue;
    }
</style>
