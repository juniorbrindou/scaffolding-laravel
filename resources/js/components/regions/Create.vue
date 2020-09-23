<template>
  <div class="container">
    <div class="row justify-content-md-center">
      <div class="col-md-9 col-xl-7">
        <div class="card-header px-0 mt-2 bg-transparent clearfix">
          <h4 class="float-left pt-2">Nouvelle Region</h4>
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
            <label>Nom de Région</label>
            <input type="text" class="form-control" :class="{'is-invalid': errors.name}" v-model="region.name" placeholder="Abidjan">
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
      region: {
        roles: []
      },
      roles: [],
      errors: {},
      submiting: false
    }
  },
  mounted () {
    this.getRoles()
  },
  methods: {
    create () {
      if (!this.submiting) {
        this.submiting = true
        axios.post(`/api/regions/store`, this.region)
        .then(response => {
          this.$toasted.global.error('Created region!')
          location.href = '/regions'
        })
        .catch(error => {
          this.errors = error.response.data.errors
          this.submiting = false
        })
      }
    }
  }
}
</script>
