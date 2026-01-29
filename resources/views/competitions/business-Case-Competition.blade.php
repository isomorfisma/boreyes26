@extends('layouts.app')

@php
  $competition = [
    'title' => 'Business Case Competition',
    'description' => 'Business Case Competition is a nationally and internationally recognized competition where teams or individual participants analyze and solve real-world business cases. Conducted in preliminary and final stages, the competition challenges participants to propose innovative, practical, and economically viable solutions with a strong focus on renewable energy, particularly the geothermal sector. Participants present their ideas professionally to judges and industry experts, emphasizing implementation, relevance, and minimal environmental impact to address current challenges in geothermal project development.',
    'status' => 'OPEN', // OPEN | CLOSED | COMING SOON
    'batch1_label' => 'Early Bird',
    'batch1' => '22 - 28 February 2026',
    'batch2_label' => 'Normal',
    'batch2' => '1 - 14 March 2026',
    'fee' => 'TBA',
    'register_url' => route('register'),
    'booklet_url' => 'https://drive.google.com/your-bcc-booklet-link',
  ];

  $others = [
    [
      'title' => 'Smart Competition',
      'desc' => 'Smart Competition is an academic quiz competition focused on energy, oil and gas, and sustainability issues. It aims to sharpen participants’ critical thinking and problem-solving skills while enhancing their understanding of current and future challenges in the energy sector. Through engaging and competitive rounds, Smart Competition encourages students to build awareness toward a sustainable and resilient energy future.',
      'url' => route('competitions.smart-Competition')
    ],
    [
      'title' => 'Paper & Poster Competition',
      'desc' => 'Paper and Poster Competition provides a platform for participants to address challenges in oil and gas processing through research-based ideas and innovations. The competition highlights key themes such as Upstream Digitalization, Industrial Decarbonization (including CCUS and methane abatement), and Energy Transition Synergy, encouraging solutions that support a sustainable and resilient energy future while enhancing critical thinking and problem-solving skills.',
      'url' => route('competitions.paper-And-Poster-Competition')
    ],
    [
      'title' => 'Case Study Competition',
      'desc' => 'Case Study Competition is a solution-based competition that challenges participants to analyze real-world problems in the oil and gas industry. Participants are required to conduct research and propose innovative, practical solutions through creative thinking, thorough analysis, and compelling presentations. The competition emphasizes real-world applicability, with solutions designed to address common challenges in upstream oil and gas operations, particularly in production processes and surface facility performance.',
      'url' => route('competitions.case-Study')
    ],
    [
      'title' => 'Plan of Development',
      'desc' => 'Plan of Development (POD) Competition challenges participants to design a comprehensive Field Development Plan using innovative reservoir management strategies. The competition emphasizes smart and sustainable hydrocarbon development by optimizing reservoir performance while considering technical, economic, and HSE aspects, and simulates real-world upstream decision-making.',
      'url' => route('competitions.plan-Of-Development')
    ],
  ];
@endphp

@section('title', $competition['title'])

@section('content')
  @include('competitions._template', compact('competition','others'))
@endsection
