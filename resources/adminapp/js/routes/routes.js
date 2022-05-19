import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

const View = { template: '<router-view></router-view>' }

const routes = [
  {
    path: '/',
    component: () => import('@pages/Layout/DashboardLayout.vue'),
    redirect: 'dashboard',
    children: [
      {
        path: 'dashboard',
        name: 'dashboard',
        component: () => import('@pages/Dashboard.vue'),
        meta: { title: 'global.dashboard' }
      },
      {
        path: 'user-management',
        name: 'user_management',
        component: View,
        redirect: { name: 'permissions.index' },
        children: [
          {
            path: 'permissions',
            name: 'permissions.index',
            component: () => import('@cruds/Permissions/Index.vue'),
            meta: { title: 'cruds.permission.title' }
          },
          {
            path: 'permissions/create',
            name: 'permissions.create',
            component: () => import('@cruds/Permissions/Create.vue'),
            meta: { title: 'cruds.permission.title' }
          },
          {
            path: 'permissions/:id',
            name: 'permissions.show',
            component: () => import('@cruds/Permissions/Show.vue'),
            meta: { title: 'cruds.permission.title' }
          },
          {
            path: 'permissions/:id/edit',
            name: 'permissions.edit',
            component: () => import('@cruds/Permissions/Edit.vue'),
            meta: { title: 'cruds.permission.title' }
          },
          {
            path: 'roles',
            name: 'roles.index',
            component: () => import('@cruds/Roles/Index.vue'),
            meta: { title: 'cruds.role.title' }
          },
          {
            path: 'roles/create',
            name: 'roles.create',
            component: () => import('@cruds/Roles/Create.vue'),
            meta: { title: 'cruds.role.title' }
          },
          {
            path: 'roles/:id',
            name: 'roles.show',
            component: () => import('@cruds/Roles/Show.vue'),
            meta: { title: 'cruds.role.title' }
          },
          {
            path: 'roles/:id/edit',
            name: 'roles.edit',
            component: () => import('@cruds/Roles/Edit.vue'),
            meta: { title: 'cruds.role.title' }
          },
          {
            path: 'users',
            name: 'users.index',
            component: () => import('@cruds/Users/Index.vue'),
            meta: { title: 'cruds.user.title' }
          },
          {
            path: 'users/create',
            name: 'users.create',
            component: () => import('@cruds/Users/Create.vue'),
            meta: { title: 'cruds.user.title' }
          },
          {
            path: 'users/:id',
            name: 'users.show',
            component: () => import('@cruds/Users/Show.vue'),
            meta: { title: 'cruds.user.title' }
          },
          {
            path: 'users/:id/edit',
            name: 'users.edit',
            component: () => import('@cruds/Users/Edit.vue'),
            meta: { title: 'cruds.user.title' }
          }
        ]
      },
      {
        path: 'pangkats',
        name: 'pangkats.index',
        component: () => import('@cruds/Pangkats/Index.vue'),
        meta: { title: 'cruds.pangkat.title' }
      },
      {
        path: 'pangkats/create',
        name: 'pangkats.create',
        component: () => import('@cruds/Pangkats/Create.vue'),
        meta: { title: 'cruds.pangkat.title' }
      },
      {
        path: 'pangkats/:id',
        name: 'pangkats.show',
        component: () => import('@cruds/Pangkats/Show.vue'),
        meta: { title: 'cruds.pangkat.title' }
      },
      {
        path: 'pangkats/:id/edit',
        name: 'pangkats.edit',
        component: () => import('@cruds/Pangkats/Edit.vue'),
        meta: { title: 'cruds.pangkat.title' }
      },
      {
        path: 'jabatans',
        name: 'jabatans.index',
        component: () => import('@cruds/Jabatans/Index.vue'),
        meta: { title: 'cruds.jabatan.title' }
      },
      {
        path: 'jabatans/create',
        name: 'jabatans.create',
        component: () => import('@cruds/Jabatans/Create.vue'),
        meta: { title: 'cruds.jabatan.title' }
      },
      {
        path: 'jabatans/:id',
        name: 'jabatans.show',
        component: () => import('@cruds/Jabatans/Show.vue'),
        meta: { title: 'cruds.jabatan.title' }
      },
      {
        path: 'jabatans/:id/edit',
        name: 'jabatans.edit',
        component: () => import('@cruds/Jabatans/Edit.vue'),
        meta: { title: 'cruds.jabatan.title' }
      },
      {
        path: 'mata-pelajarans',
        name: 'mata_pelajarans.index',
        component: () => import('@cruds/MataPelajarans/Index.vue'),
        meta: { title: 'cruds.mataPelajaran.title' }
      },
      {
        path: 'mata-pelajarans/create',
        name: 'mata_pelajarans.create',
        component: () => import('@cruds/MataPelajarans/Create.vue'),
        meta: { title: 'cruds.mataPelajaran.title' }
      },
      {
        path: 'mata-pelajarans/:id',
        name: 'mata_pelajarans.show',
        component: () => import('@cruds/MataPelajarans/Show.vue'),
        meta: { title: 'cruds.mataPelajaran.title' }
      },
      {
        path: 'mata-pelajarans/:id/edit',
        name: 'mata_pelajarans.edit',
        component: () => import('@cruds/MataPelajarans/Edit.vue'),
        meta: { title: 'cruds.mataPelajaran.title' }
      },
      {
        path: 'tugas',
        name: 'tugas.index',
        component: () => import('@cruds/Tugas/Index.vue'),
        meta: { title: 'cruds.tuga.title' }
      },
      {
        path: 'tugas/create',
        name: 'tugas.create',
        component: () => import('@cruds/Tugas/Create.vue'),
        meta: { title: 'cruds.tuga.title' }
      },
      {
        path: 'tugas/:id',
        name: 'tugas.show',
        component: () => import('@cruds/Tugas/Show.vue'),
        meta: { title: 'cruds.tuga.title' }
      },
      {
        path: 'tugas/:id/edit',
        name: 'tugas.edit',
        component: () => import('@cruds/Tugas/Edit.vue'),
        meta: { title: 'cruds.tuga.title' }
      }
    ]
  }
]

export default new VueRouter({
  mode: 'history',
  base: '/admin',
  routes
})
