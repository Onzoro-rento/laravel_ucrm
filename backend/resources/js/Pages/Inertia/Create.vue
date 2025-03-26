<script setup>
import {reactive} from 'vue';
import {Inertia} from '@inertiajs/inertia';

const form = reactive({
    title: null,
    content: null
})

const submitFunction = () => {
    Inertia.post('/inertia',form)
}
</script>

<template>
    <form @submit.prevent = "submitFunction">
        <input name = "title" v-model ="form.title" type="text"><br>
        <input name = "content" v-model = "form.content" type="text">
        <button>送信</button>
    </form>
</template>