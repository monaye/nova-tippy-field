<template>

    <span
        :id="'nova-simple-tooltip' + id "
        class="nova-simple-tooltip cursor-pointer items-center flex text-90 hover:text-primary mr-3"
        ref="tooltip">
        <span class="mr-2" v-if=" iconPosition === 'right'">{{ text }}</span>
        <img v-if="iconUrl" :width="size || 25" :src="iconUrl" alt="Image description." />
        <span class="inline-flex text-70" v-if="iconPath" v-html="iconPath"></span>
        <span class="ml-2" v-if=" iconPosition === 'left'">{{text}}</span>

    </span>
</template>

<script>
    import tippy from 'tippy.js';
    import 'tippy.js/dist/tippy.css';

    export default {

        props: ['value', 'iconPath', 'iconUrl', 'text', 'iconPosition', 'tipContent', 'id', 'placement', 'tippyOptions'],

        mounted() {
            if(this.tipContent) {
                tippy('#nova-simple-tooltip' + this.id, {
                    content: this.tipContent,
                    placement: this.placement,
                    ...this.tippyOptions
                });
            }
        }

    }
</script>
