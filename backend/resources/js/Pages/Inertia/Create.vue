<script setup>
import { reactive,defineProps,watchEffect, watch } from 'vue';
import { Inertia } from '@inertiajs/inertia';
import { useForm } from '@inertiajs/inertia-vue3';
// import InputError from '@/Components/InputError.vue';

const props = defineProps({
  errors: Object,
});
watchEffect(() => {
  console.log(props.errors); // ←ここで出力
  props = props.errors;
});
const form = useForm({
  title: null,
  content: null,
});
const submitFunction = () => {
  form.post('/inertia', form);
};

</script>

<template>
    <form @submit.prevent=submitFunction()>
      <input v-model="form.title" type="text" placeholder="タイトル" />
      <div v-if="props.errors && props.errors.title" style="color: red">
        {{ props.errors.title }}
      </div>
  
      <input v-model="form.content" type="text" placeholder="コンテンツ" />
      <div v-if="props.errors && props.errors.content" style="color: red">
        {{ props.errors.content }}
      </div>
  
      <button type="submit">送信</button>
  
      <!-- デバッグ用: 画面上に props.errors を表示 -->
      <pre>{{ props.errors }}</pre>
    </form>
  </template>
  