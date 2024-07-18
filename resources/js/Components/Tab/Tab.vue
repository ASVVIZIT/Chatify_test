<template>
    <div class="tab" :class="(active === 'true') ? 'active' : ''" ref="tabs">
        <slot></slot>
    </div>
</template>

<script setup>
import { ref, onMounted } from 'vue';
const props = defineProps([ 'active' ]);
</script>

<style scoped>
    .tab {
        display: none;
    }
    .tab.active {
        display: block;
    }
</style>
