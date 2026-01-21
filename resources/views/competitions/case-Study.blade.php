@extends('layouts.app')

@php
  $competition = [
    'title' => 'Case Study Competition',
    'description' => 'Kompetisi analisis studi kasus untuk mahasiswa Indonesia. Uji kemampuan problem-solving, analisis bisnis, dan penyusunan rekomendasi strategis berbasis data!',
    'status' => 'OPEN', // OPEN | CLOSED | COMING SOON
    'batch1_label' => 'Early Bird',
    'batch1' => '1 Jan - 28 Feb 2025',
    'batch2_label' => 'Regular',
    'batch2' => '1 Mar - 15 Mar 2025',
    'fee' => 'Rp 150.000',
    'register_url' => route('register'),
    'booklet_url' => 'https://drive.google.com/your-case-study-booklet-link',
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
      'title' => 'Paper & Poster Competition',
      'desc' => 'Kompetisi karya ilmiah dan poster dengan riset, analisis, dan visualisasi yang kuat',
      'url' => route('competitions.paper-And-Poster-Competition')
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
