<script setup>
const emit = defineEmits(['search']);

const search = (e) => {
  emit('search', e.target.value);
};
</script>

<template>
  <form class="py-3 px-4 flex items-center">
    <label class="sr-only">Search</label>
    <div class="relative w-full">
      <input type="text" @input="search" name="" id="" placeholder="Search" class="bg-gray-50 border border-gray-300 text-gray 900 rounded-md">
    </div>
  </form>
</template>

<style scoped>

</style>