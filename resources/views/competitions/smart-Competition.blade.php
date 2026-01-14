@extends('layouts.app')

@php
  $competition = [
    'title' => 'Capture The Flag Competition',
    'description' => 'Kompetisi cybersecurity terbesar untuk mahasiswa Indonesia. Uji kemampuan penetration testing, reverse engineering, dan keamanan sistem kamu!',
    'status' => 'OPEN', // OPEN | CLOSED | COMING SOON
    'batch1_label' => 'Early Bird',
    'batch1' => '1 Jan - 28 Feb 2025',
    'batch2_label' => 'Regular',
    'batch2' => '1 Mar - 15 Mar 2025',
    'fee' => 'Rp 150.000',
    'register_url' => route('register'),
    'booklet_url' => 'https://drive.google.com/your-ctf-booklet-link',
  ];

  $others = [
    [
      'title' => 'Hackathon Challenge', 
      'desc' => 'Kompetisi membangun produk teknologi inovatif dalam waktu 48 jam', 
      'url' => route('competitions.business-Case-Competition')
    ],
    [
      'title' => 'UI/UX Design Competition', 
      'desc' => 'Desain pengalaman pengguna terbaik untuk aplikasi digital masa depan', 
      'url' => route('competitions.case-Study')
    ],
    [
      'title' => 'Data Science Challenge', 
      'desc' => 'Analisis data dan machine learning untuk menyelesaikan masalah bisnis nyata', 
      'url' => route('competitions.paper-And-Poster-Competition')
    ],
    [
      'title' => 'Essay Writing Competition', 
      'desc' => 'Tulis essay kreatif bertema teknologi dan dampaknya untuk masyarakat', 
      'url' => route('competitions.plan-Of-Development')
    ],
  ];
@endphp

@section('title', $competition['title'])

@section('content')
  @include('competitions._template', compact('competition','others'))
@endsection