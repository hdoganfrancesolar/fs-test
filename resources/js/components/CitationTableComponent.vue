<template>

  <table class="table">
    <thead>
    <tr>
      <th scope="col">Auteur</th>
      <th scope="col">Citation</th>
      <template v-if="canDelete">
        <th scope="col">Utilisateur</th>
        <th scope="col">Action</th>
      </template>
    </tr>
    </thead>
    <tbody>
    <tr v-for="(item, index) in items" :key="getItemKey(item, index)">
      <td>{{ item.auteur }}</td>
      <td>
        <span class="d-inline-block text-truncate" style="max-width: 250px;">{{ item.citation }}</span>
      </td>
      <template v-if="canDelete">
        <td>{{ item.utilisateur }}</td>
        <td>
          <a @click.prevent="deleteItem(item)" class="btn btn-outline-danger" href="#">Supprimer</a>
        </td>
      </template>
    </tr>
    </tbody>
  </table>

</template>
<script>

export default {

  props: {

    items: {
      type: Array,
      default: () => []
    },

    canDelete: {
      type: Boolean,
      default: false
    }

  },

  methods: {

    getItemKey(item, index) {
      return `${index}-${item.auteur}`;
    },

    deleteItem(item) {
      this.$emit('delete', item);
    }

  }

}

</script>