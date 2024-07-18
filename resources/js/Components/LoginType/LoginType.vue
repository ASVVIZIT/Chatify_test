<template>
    <div class="wrapper">
        <TabsWrapper>
            <Tab active="true" title="Предоставляю услуги">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce gravida purus vitae vulputate commodo.
            </Tab>
            <Tab title="Получаю услуги">
                asdasd
            </Tab>
        </TabsWrapper>
        <slot></slot>
    </div>
</template>
<script>

import TabsWrapper from '@/Components/Tab/TabsWrapper.vue'
import Tab from '@/Components/Tab/Tab.vue'

export default {
    name: "LoginType",
    components: {
        TabsWrapper,
        Tab,
    },
}
</script>

<style scoped>
</style>
