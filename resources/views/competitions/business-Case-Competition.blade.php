@extends('layouts.app')

@php
  $competition = [
    'title' => 'Business Case Competition',
    'description' => 'Kompetisi analisis kasus bisnis untuk mahasiswa Indonesia. Uji kemampuan problem-solving, data-driven decision, dan strategi bisnis kamu!',
    'status' => 'OPEN', // OPEN | CLOSED | COMING SOON
    'batch1_label' => 'Early Bird',
    'batch1' => '1 Jan - 28 Feb 2025',
    'batch2_label' => 'Regular',
    'batch2' => '1 Mar - 15 Mar 2025',
    'fee' => 'Rp 150.000',
    'register_url' => route('register'),
    'booklet_url' => 'https://drive.google.com/your-bcc-booklet-link',
  ];

  $others = [
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
      'title' => 'Case Study Competition',
      'desc' => 'Kompetisi analisis studi kasus dengan rekomendasi strategis yang terstruktur',
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
