<template>
  <div class="container-fluid">
    <form @submit.prevent="submitForm">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary card-header-icon">
              <div class="card-icon">
                <i class="material-icons">edit</i>
              </div>
              <h4 class="card-title">
                {{ $t('global.edit') }}
                <strong>{{ $t('cruds.tuga.title_singular') }}</strong>
              </h4>
            </div>
            <div class="card-body">
              <back-button></back-button>
            </div>
            <div class="card-body">
              <bootstrap-alert />
              <div class="row">
                <div class="col-md-12">
                  <div
                    class="form-group bmd-form-group"
                    :class="{
                      'has-items': entry.pukul,
                      'is-focused': activeField == 'pukul'
                    }"
                  >
                    <label class="bmd-label-floating">{{
                      $t('cruds.tuga.fields.pukul')
                    }}</label>
                    <datetime-picker
                      class="form-control"
                      type="text"
                      picker="time"
                      :value="entry.pukul"
                      @input="updatePukul"
                      @focus="focusField('pukul')"
                      @blur="clearFocus"
                    >
                    </datetime-picker>
                  </div>
                  <div class="form-group">
                    <label>{{ $t('cruds.tuga.fields.uraian_kegiatan') }}</label>
                    <ckeditor
                      :editor="editor"
                      :value="entry.uraian_kegiatan"
                      @input="updateUraianKegiatan"
                    >
                    </ckeditor>
                  </div>
                  <div class="form-group">
                    <label>{{ $t('cruds.tuga.fields.hasil_output') }}</label>
                    <ckeditor
                      :editor="editor"
                      :value="entry.hasil_output"
                      @input="updateHasilOutput"
                    >
                    </ckeditor>
                  </div>
                  <div
                    class="form-group bmd-form-group"
                    :class="{
                      'has-items': entry.vol,
                      'is-focused': activeField == 'vol'
                    }"
                  >
                    <label class="bmd-label-floating">{{
                      $t('cruds.tuga.fields.vol')
                    }}</label>
                    <input
                      class="form-control"
                      type="text"
                      :value="entry.vol"
                      @input="updateVol"
                      @focus="focusField('vol')"
                      @blur="clearFocus"
                    />
                  </div>
                  <div
                    class="form-group bmd-form-group"
                    :class="{
                      'has-items': entry.paraf_id !== null,
                      'is-focused': activeField == 'paraf'
                    }"
                  >
                    <label class="bmd-label-floating">{{
                      $t('cruds.tuga.fields.paraf')
                    }}</label>
                    <v-select
                      name="paraf"
                      label="name"
                      :key="'paraf-field'"
                      :value="entry.paraf_id"
                      :options="lists.paraf"
                      :reduce="entry => entry.id"
                      @input="updateParaf"
                      @search.focus="focusField('paraf')"
                      @search.blur="clearFocus"
                    />
                  </div>
                </div>
              </div>
            </div>
            <div class="card-footer">
              <vue-button-spinner
                class="btn-primary"
                :status="status"
                :isLoading="loading"
                :disabled="loading"
              >
                {{ $t('global.save') }}
              </vue-button-spinner>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</template>

<script>
import { mapGetters, mapActions } from 'vuex'
import ClassicEditor from '@ckeditor/ckeditor5-build-classic'

export default {
  components: {
    ClassicEditor
  },
  data() {
    return {
      status: '',
      activeField: '',
      editor: ClassicEditor
    }
  },
  computed: {
    ...mapGetters('TugasSingle', ['entry', 'loading', 'lists'])
  },
  beforeDestroy() {
    this.resetState()
  },
  watch: {
    '$route.params.id': {
      immediate: true,
      handler() {
        this.resetState()
        this.fetchEditData(this.$route.params.id)
      }
    }
  },
  methods: {
    ...mapActions('TugasSingle', [
      'fetchEditData',
      'updateData',
      'resetState',
      'setPukul',
      'setUraianKegiatan',
      'setHasilOutput',
      'setVol',
      'setParaf'
    ]),
    updatePukul(e) {
      this.setPukul(e.target.value)
    },
    updateUraianKegiatan(value) {
      this.setUraianKegiatan(value)
    },
    updateHasilOutput(value) {
      this.setHasilOutput(value)
    },
    updateVol(e) {
      this.setVol(e.target.value)
    },
    updateParaf(value) {
      this.setParaf(value)
    },
    submitForm() {
      this.updateData()
        .then(() => {
          this.$router.push({ name: 'tugas.index' })
          this.$eventHub.$emit('update-success')
        })
        .catch(error => {
          this.status = 'failed'
          _.delay(() => {
            this.status = ''
          }, 3000)
        })
    },
    focusField(name) {
      this.activeField = name
    },
    clearFocus() {
      this.activeField = ''
    }
  }
}
</script>
