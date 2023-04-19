<template>

  <blockquote class="blockquote">
    <p class="mb-0">{{ citation }}</p>
    <footer class="blockquote-footer">{{ auteur }} <cite v-if="!!source" :title="source">source</cite></footer>
  </blockquote>

</template>
<script>

export default {

  props: {

    citation: {
      required: true
    },

    auteur: {
      required: true
    },

    source: {}

  }

}

</script>