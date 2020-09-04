Nova.booting((Vue, router, store) => {
  Vue.component('index-nova-tippy-field', require('./components/IndexField'))
  Vue.component('detail-nova-tippy-field', require('./components/DetailField'))
  Vue.component('form-nova-tippy-field', require('./components/FormField'))
})
