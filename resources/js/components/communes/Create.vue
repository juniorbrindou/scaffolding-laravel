<template>
  <div class="container">
    <div class="row justify-content-md-center">
      <div class="col-md-9 col-xl-7">
        <div class="card-header px-0 mt-2 bg-transparent clearfix">
          <h4 class="float-left pt-2">Nouvelle Commune</h4>
          <div class="card-header-actions mr-1">
            <a class="btn btn-primary" href="#" :disabled="submiting" @click.prevent="create">
              <i class="fas fa-spinner fa-spin" v-if="submiting"></i>
              <i class="fas fa-check" v-else></i>
              <span class="ml-1">Enregistrer</span>
            </a>
          </div>
        </div>
        <div class="card-body px-0">

            <div class="form-group">
              <label>Nom de Commune</label>
              <input type="text" class="form-control" :class="{'is-invalid': errors.name}" v-model="commune.name" placeholder="Commune">
              <div class="invalid-feedback" v-if="errors.name">{{errors.name[0]}}</div>
            </div>

          </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data () {
    return {
      commune:{},
      errors: {},
      loading: true,
      submiting: false
    }
  },
  methods: {
    create () {
      if (!this.submiting) {
        this.submiting = true
        axios.post('/api/communes/store', this.role)
        .then(response => {
          this.$toasted.global.error('Commune Crée!')
          location.href = '/communes'
        })
        .catch(error => {
          this.errors = error.response.data.errors
          this.submiting = false
        })
      }
    },
  },
}
</script>
