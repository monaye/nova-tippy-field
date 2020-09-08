<template>
        <Tippy
            :value="field.value"
            :text="field.text"
            :icon="field.icon"
            :iconUrl="field.iconUrl"
            :toolContent="field.toolContent"
            :id="field.id"
            :placement="field.placement"
            :tippyOptions="field.tippyOptions"
            :position="field.position" >
        </Tippy>
</template>

<script>
import Tippy from './Tippy';

export default {
    components : { Tippy },
    props: ['resourceName', 'field'],
}
</script>
