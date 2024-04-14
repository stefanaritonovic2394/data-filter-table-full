<script setup>
import DataTable from "./components/DataTable.vue";
import {onMounted, ref} from "vue";
import axios from "axios";

const items = ref([]);

onMounted(async () => {
  const response = await axios.get("http://app.localhost/api/tasks");
  items.value = response.data.data;
});
</script>

<template>
  <div class="p-8 bg-gray-100 min-h-screen">
    <DataTable :items="items" />
  </div>
</template>

<style scoped>

</style>
