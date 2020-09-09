<template>
  <panel-item :field="field">
    <template slot="value">
      <excerpt
        :content="field.tipContent"
        :plain-text="true"
        :should-show="field.shouldShow"
      />
    </template>
  </panel-item>
</template>

<script>
export default {
  props: ['resource', 'resourceName', 'resourceId', 'field'],
}
</script>
