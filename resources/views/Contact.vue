<template>
  <div class="container contact_block">
    <Information></Information>
    <Form></Form>
  </div>
</template>

<script>
import Information from "@/views/contact/Information.vue";
import Form from "@/views/contact/Form.vue";

export default {
  components: {
    Information,
    Form,
  },
};
</script>