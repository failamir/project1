<?php

return [
    'userManagement' => [
        'title'          => 'Manajemen User',
        'title_singular' => 'Manajemen User',
    ],
    'permission' => [
        'title'          => 'Izin',
        'title_singular' => 'Izin',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Title',
            'title_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'role' => [
        'title'          => 'Peranan',
        'title_singular' => 'Peranan',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'title'              => 'Title',
            'title_helper'       => ' ',
            'permissions'        => 'Permissions',
            'permissions_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'user' => [
        'title'          => 'Daftar Pengguna',
        'title_singular' => 'User',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => ' ',
            'name'                     => 'Name',
            'name_helper'              => ' ',
            'email'                    => 'Email',
            'email_helper'             => ' ',
            'email_verified_at'        => 'Email verified at',
            'email_verified_at_helper' => ' ',
            'password'                 => 'Password',
            'password_helper'          => ' ',
            'roles'                    => 'Roles',
            'roles_helper'             => ' ',
            'remember_token'           => 'Remember Token',
            'remember_token_helper'    => ' ',
            'created_at'               => 'Created at',
            'created_at_helper'        => ' ',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => ' ',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => ' ',
            'nip'                      => 'NIP',
            'nip_helper'               => ' ',
            'tanda_tangan'             => 'Tanda Tangan',
            'tanda_tangan_helper'      => ' ',
        ],
    ],
    'pangkat' => [
        'title'          => 'Pangkat',
        'title_singular' => 'Pangkat',
        'fields'         => [
            'id'                  => 'ID',
            'id_helper'           => ' ',
            'nama_pangkat'        => 'Nama Pangkat',
            'nama_pangkat_helper' => ' ',
            'created_at'          => 'Created at',
            'created_at_helper'   => ' ',
            'updated_at'          => 'Updated at',
            'updated_at_helper'   => ' ',
            'deleted_at'          => 'Deleted at',
            'deleted_at_helper'   => ' ',
        ],
    ],
    'jabatan' => [
        'title'          => 'Jabatan',
        'title_singular' => 'Jabatan',
        'fields'         => [
            'id'                  => 'ID',
            'id_helper'           => ' ',
            'nama_jabatan'        => 'Nama Jabatan',
            'nama_jabatan_helper' => ' ',
            'created_at'          => 'Created at',
            'created_at_helper'   => ' ',
            'updated_at'          => 'Updated at',
            'updated_at_helper'   => ' ',
            'deleted_at'          => 'Deleted at',
            'deleted_at_helper'   => ' ',
        ],
    ],
    'mataPelajaran' => [
        'title'          => 'Mata Pelajaran',
        'title_singular' => 'Mata Pelajaran',
        'fields'         => [
            'id'                         => 'ID',
            'id_helper'                  => ' ',
            'nama_mata_pelajaran'        => 'Nama Mata Pelajaran',
            'nama_mata_pelajaran_helper' => ' ',
            'created_at'                 => 'Created at',
            'created_at_helper'          => ' ',
            'updated_at'                 => 'Updated at',
            'updated_at_helper'          => ' ',
            'deleted_at'                 => 'Deleted at',
            'deleted_at_helper'          => ' ',
        ],
    ],
    'tuga' => [
        'title'          => 'Tugas',
        'title_singular' => 'Tuga',
        'fields'         => [
            'id'                     => 'ID',
            'id_helper'              => ' ',
            'pukul'                  => 'Pukul',
            'pukul_helper'           => ' ',
            'uraian_kegiatan'        => 'Uraian Kegiatan',
            'uraian_kegiatan_helper' => ' ',
            'hasil_output'           => 'Hasil Output',
            'hasil_output_helper'    => ' ',
            'vol'                    => 'Vol',
            'vol_helper'             => ' ',
            'paraf'                  => 'Paraf',
            'paraf_helper'           => ' ',
            'created_at'             => 'Created at',
            'created_at_helper'      => ' ',
            'updated_at'             => 'Updated at',
            'updated_at_helper'      => ' ',
            'deleted_at'             => 'Deleted at',
            'deleted_at_helper'      => ' ',
        ],
    ],
];
