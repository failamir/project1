import Vue from 'vue'
import Vuex from 'vuex'

import Alert from './modules/alert'
import I18NStore from './modules/i18n'

import PermissionsIndex from './cruds/Permissions'
import PermissionsSingle from './cruds/Permissions/single'
import RolesIndex from './cruds/Roles'
import RolesSingle from './cruds/Roles/single'
import UsersIndex from './cruds/Users'
import UsersSingle from './cruds/Users/single'
import PangkatsIndex from './cruds/Pangkats'
import PangkatsSingle from './cruds/Pangkats/single'
import JabatansIndex from './cruds/Jabatans'
import JabatansSingle from './cruds/Jabatans/single'
import MataPelajaransIndex from './cruds/MataPelajarans'
import MataPelajaransSingle from './cruds/MataPelajarans/single'
import TugasIndex from './cruds/Tugas'
import TugasSingle from './cruds/Tugas/single'

Vue.use(Vuex)

const debug = process.env.NODE_ENV !== 'production'

export default new Vuex.Store({
  modules: {
    Alert,
    I18NStore,
    PermissionsIndex,
    PermissionsSingle,
    RolesIndex,
    RolesSingle,
    UsersIndex,
    UsersSingle,
    PangkatsIndex,
    PangkatsSingle,
    JabatansIndex,
    JabatansSingle,
    MataPelajaransIndex,
    MataPelajaransSingle,
    TugasIndex,
    TugasSingle
  },
  strict: debug
})
