
import {createApp} from 'vue';

import FindNews from './vue/FindNews.vue';

import {Tabs, Tab} from 'vue3-tabs-component';

const app = createApp(FindNews);


app.component('tabs', Tabs);
app.component('tab', Tab);
app.mount('#findNews');
