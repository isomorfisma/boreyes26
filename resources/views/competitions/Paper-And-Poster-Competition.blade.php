@extends('layouts.app')

@php
  $competition = [
    'title' => 'Paper & Poster Competition',
    'description' => 'Kompetisi karya ilmiah dan poster untuk mahasiswa Indonesia. Tunjukkan kemampuan riset, analisis, dan visualisasi ide secara jelas, sistematis, dan menarik!',
    'status' => 'OPEN', // OPEN | CLOSED | COMING SOON
    'batch1_label' => 'Early Bird',
    'batch1' => '1 Jan - 28 Feb 2025',
    'batch2_label' => 'Regular',
    'batch2' => '1 Mar - 15 Mar 2025',
    'fee' => 'Rp 150.000',
    'register_url' => route('register'),
    'booklet_url' => 'https://drive.google.com/your-paper-poster-booklet-link',
  ];

  $others = [
    [
      'title' => 'Business Case Competition',
      'desc' => 'Kompetisi penyelesaian kasus bisnis dengan strategi dan pitching yang meyakinkan',
      'url' => route('competitions.business-Case-Competition')
    ],
    [
      'title' => 'Smart Competition',
      'desc' => 'Kompetisi inovasi solusi cerdas berbasis teknologi untuk menjawab masalah nyata',
      'url' => route('competitions.smart-Competition')
    ],
    [
      'title' => 'Case Study Competition',
      'desc' => 'Kompetisi analisis studi kasus untuk melatih problem-solving dan rekomendasi strategis',
      'url' => route('competitions.case-Study')
    ],
    [
      'title' => 'Plan of Development',
      'desc' => 'Kompetisi perencanaan pengembangan produk/program dari ide hingga roadmap eksekusi',
      'url' => route('competitions.plan-Of-Development')
    ],
  ];
@endphp

@section('title', $competition['title'])

@section('content')
  @include('competitions._template', compact('competition','others'))
@endsection
