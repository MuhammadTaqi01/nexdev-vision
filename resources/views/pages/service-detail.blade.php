<x-layout>
    <section class="hero-section" style="height: 60vh;">
        <div class="container">
            <div class="hero-content">
                <div class="icon-box mb-4" style="background: rgba(255,255,255,0.1); color: #fff;">
                    <i class="fas {{ $service['icon'] }}"></i>
                </div>
                <h1 class="hero-title">{{ $service['title'] }}</h1>
                <p class="hero-subtitle">{{ $service['subtitle'] }}</p>
                <div class="hero-buttons">
                    <a href="{{ route('contactus') }}" class="btn btn-primary">Get a Quote</a>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5" style="background: var(--bg-card); border-top: 1px solid var(--border-color);">
        <div class="container">
            <div style="display: grid; grid-template-columns: 2fr 1fr; gap: 60px;">

                <!-- Main Content -->
                <div>
                    <h2 class="mb-4">Overview</h2>
                    <p class="text-muted mb-5" style="font-size: 1.1rem;">{{ $service['description'] }}</p>

                    <h3 class="mb-4">Key Features</h3>
                    <div class="grid-3" style="grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));">
                        @foreach($service['features'] as $feature)
                            <div
                                style="background: rgba(255,255,255,0.02); padding: 20px; border-radius: 12px; border: 1px solid var(--border-color); display: flex; align-items: center; gap: 12px;">
                                <i class="fas fa-check-circle" style="color: var(--primary);"></i>
                                <span style="color: #fff; font-weight: 500;">{{ $feature }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Sidebar -->
                <aside>
                    <div class="card" style="padding: 24px;">
                        <h4 class="mb-4">Other Services</h4>
                        <ul style="display: flex; flex-direction: column; gap: 12px;">
                            @foreach($allServices as $key => $s)
                                @if($key !== $slug) <!-- Exclude current service -->
                                    <li>
                                        <a href="{{ route('service.show', $key) }}"
                                            style="display: block; padding: 12px; background: rgba(255,255,255,0.03); border-radius: 8px; color: var(--text-muted); transition: all 0.2s;">
                                            {{ $s['title'] }}
                                            <i class="fas fa-chevron-right"
                                                style="float: right; font-size: 0.8rem; margin-top: 4px;"></i>
                                        </a>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </aside>

            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="py-5 text-center">
        <div class="container">
            <h2 class="mb-4">Ready to get started?</h2>
            <p class="text-muted mb-5">Contact us today for a free consultation about your project.</p>
            <a href="{{ route('contactus') }}" class="btn btn-primary">Contact Us Now</a>
        </div>
    </section>
</x-layout>