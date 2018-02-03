<?php
  perch_layout('resource/head');
  $page = 'resource';
  perch_layout('header', [
    'page' => $page,
  ]);
  echo '<main role="main">';
  perch_collection('Resources', [
    'filter' => [
      [
        'filter' => 'slug',
        'match'  => 'eq',
        'value'  => perch_get('s'),
      ],
      [
        'filter' => 'status',
        'match'  => 'eq',
        'value'  => 'published',
      ],
    ]
  ]);
  echo '</main>';
  perch_layout('footer');
  perch_layout('end');
