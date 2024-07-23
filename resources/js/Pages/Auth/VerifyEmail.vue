<script setup>
import { computed } from 'vue';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import Button from '@/Components/Ui/Button/Button.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

const props = defineProps({
    status: {
        type: String,
    },
});

const form = useForm({});

const submit = () => {
    form.post(route('verification.send'));
};

const verificationLinkSent = computed(() => props.status === 'verification-link-sent');
</script>

<template>
    <GuestLayout>
        <Head title="Подтверждение электронной почты (Email Verification)" />

        <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
            Спасибо, что зарегистрировались! Прежде чем приступить к работе, не могли бы вы подтвердить свой адрес электронной почты, перейдя по ссылке,
            которую мы только что отправили вам по электронной почте? Если вы не получили это письмо, мы с радостью отправим вам другое.
        </div>

        <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400" v-if="verificationLinkSent">
            На адрес электронной почты, который вы указали при регистрации, была отправлена новая ссылка для подтверждения.
        </div>

        <form @submit.prevent="submit">
            <div class="mt-4 flex items-center justify-between">
                <Button :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Повторно отправьте электронное письмо с подтверждением
                </Button>

                <Link
                    :href="route('logout')"
                    method="post"
                    as="button"
                    class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                    >Выход</Link
                >
            </div>
        </form>
    </GuestLayout>
</template>
