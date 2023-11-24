
import {createApp} from 'vue';

import HackerNews from './vue/HackerNews.vue';

import VueMarkdownEditor from '@kangc/v-md-editor';
import '@kangc/v-md-editor/lib/style/base-editor.css';
import vuepressTheme from '@kangc/v-md-editor/lib/theme/vuepress.js';
import '@kangc/v-md-editor/lib/theme/style/vuepress.css';


VueMarkdownEditor.use(vuepressTheme);


const app = createApp(HackerNews).use(VueMarkdownEditor);

app.mount('#hacker-news');
