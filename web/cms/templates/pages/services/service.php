<?php
  perch_layout('/service/head');
  perch_layout('/service/header');

  echo '<main role="main">';
  perch_collection('Services', [
    'template' => 'service_detail.html',
    'filter'   => 'slug',
    'match'    => 'eq',
    'value'    => perch_get('s'),
    'count'    => 1,
  ]);
  $service = perch_collection('Services', [
    'filter' => 'slug',
    'match' => 'eq',
    'value' => perch_get('s'),
    'skip-template'=>'true',
  ]);
  PerchSystem::set_var('service_title', $service[0]["title"]);
  perch_collection('Projects', [
    'template' => 'project_services.html',
    'filter'   => 'services.slug',
    'match'    => 'eq',
    'value'    => perch_get('s'),
  ]);
  perch_layout('call_to_action');
  echo '<p><a href="/services/" class="back">Back to full list of services</a></p>';
  echo '</main>';

  perch_layout('footer');
  perch_layout('end');
