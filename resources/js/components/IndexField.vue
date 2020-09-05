<template>
        <Tippy
            :value="field.value"
            :text="field.text"
            :icon="field.icon"
            :url="field.url"
            :toolContent="field.toolContent"
            :id="field.id"
            :placement="field.placement"
            :tippyOptions="field.tippyOptions"
            :position="field.position" >
        </Tippy>
</template>

<script>
export default {
    components : { Tippy }
    props: ['resourceName', 'field'],
}
</script>
