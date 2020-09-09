<template>
        <Tippy
            :value="field.value"
            :text="field.text"
            :iconPath="field.iconPath"
            :iconUrl="field.iconUrl"
            :tipContent="field.tipContent"
            :id="field.id"
            :placement="field.placement"
            :tippyOptions="field.tippyOptions"
            :iconPosition="field.iconPosition" >
        </Tippy>
</template>

<script>
import Tippy from './Tippy';

export default {
    components : { Tippy },
    props: ['resourceName', 'field'],
}
</script>
