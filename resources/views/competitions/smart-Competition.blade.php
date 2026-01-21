@extends('layouts.app')

@php
  $competition = [
    'title' => 'Smart Competition',
    'description' => 'Kompetisi inovasi solusi cerdas berbasis teknologi untuk menjawab masalah nyata. Tunjukkan ide, desain solusi, dan dampak implementasinya secara terukur!',
    'status' => 'OPEN', // OPEN | CLOSED | COMING SOON
    'batch1_label' => 'Early Bird',
    'batch1' => '1 Jan - 28 Feb 2025',
    'batch2_label' => 'Regular',
    'batch2' => '1 Mar - 15 Mar 2025',
    'fee' => 'Rp 150.000',
    'register_url' => route('register'),
    'booklet_url' => 'https://drive.google.com/your-smart-competition-booklet-link',
  ];

  // others = semua selain Smart Competition
  $others = [
    [
      'title' => 'Business Case Competition',
      'desc' => 'Kompetisi penyelesaian kasus bisnis dengan strategi dan pitching yang meyakinkan',
      'url' => route('competitions.business-Case-Competition')
    ],
    [
      'title' => 'Case Study Competition',
      'desc' => 'Kompetisi analisis studi kasus untuk melatih problem-solving dan rekomendasi strategis',
      'url' => route('competitions.case-Study')
    ],
    [
      'title' => 'Paper & Poster Competition',
      'desc' => 'Kompetisi paper dan poster untuk menyajikan riset dan ide secara jelas serta menarik',
      'url' => route('competitions.paper-And-Poster-Competition')
    ],
    [
      'title' => 'Plan of Development',
      'desc' => 'Kompetisi perencanaan pengembangan dari ide hingga roadmap eksekusi yang realistis',
      'url' => route('competitions.plan-Of-Development')
    ],
  ];
@endphp

@section('title', $competition['title'])

@section('content')
  @include('competitions._template', compact('competition','others'))
@endsection
