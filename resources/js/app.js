import './bootstrap';
import '../css/app.css';

import { createApp, h } from 'vue/dist/vue.cjs';
import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from 'ziggy-js';

const appName = import.meta.env.VITE_APP_NAME || 'Laravel';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
    setup({ el, App, props, plugin }) {
        const VueApp = createApp({ render: () => h(App, props) });
        VueApp
            .use(plugin)
            .use(ZiggyVue);
        VueApp
            .mount(el);
    },
    progress: {
        color: '#4B5563',
    },
});
