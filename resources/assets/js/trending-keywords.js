
import {createApp} from 'vue';

import TrendingKeywords from './vue/TrendingKeywords.vue';

import {Tabs, Tab} from 'vue3-tabs-component';

const app = createApp(TrendingKeywords);


app.component('tabs', Tabs);
app.component('tab', Tab);
app.mount('#trendingKeywords');
