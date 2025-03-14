{{-- resources/views/dashboard.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="dashboard">
    <h1>Dashboard</h1>
    <div class="cards">
        <div class="card">
            <h3>Page Views</h3>
            <p>12,450 <span class="increase">+15.8%</span></p>
        </div>
        <div class="card">
            <h3>Total Revenue</h3>
            <p>$363.95 <span class="decrease">-34.0%</span></p>
        </div>
        <div class="card">
            <h3>Bounce Rate</h3>
            <p>86.5% <span class="increase">+24.2%</span></p>
        </div>
        <div class="card">
            <h3>Total Subscribers</h3>
            <p>24,473 <span class="increase">+8.3%</span></p>
        </div>
    </div>
</div>
@endsection
