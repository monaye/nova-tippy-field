<template>

    <span
        :id="'nova-simple-tooltip' + id "
        class="nova-simple-tooltip cursor-pointer items-center flex text-90 hover:text-primary mr-3"
        ref="tooltip">
        <span class="mr-2" v-if=" position === 'right'">{{ text }}</span>
        <img v-if="iconUrl" :width="size || 25" :src="iconUrl" alt="Image description." />
        <span class="inline-flex text-70" v-if="icon" v-html="icon"></span>
        <span class="ml-2" v-if=" position === 'left' || !position">{{text}}</span>

    </span>
</template>

<script>
    import tippy from 'tippy.js';
    import 'tippy.js/dist/tippy.css';

    export default {

        props: ['value', 'icon', 'iconUrl', 'text', 'position', 'toolContent', 'id', 'placement', 'tippyOptions'],

        mounted() {
            if(this.toolContent) {
                tippy('#nova-simple-tooltip' + this.id, {
                    content: this.toolContent,
                    placement: this.placement,
                    ...this.tippyOptions
                });
            }
        }

    }
</script>
