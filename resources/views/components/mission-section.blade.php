@php
    $missionSection = \App\Models\MissionSection::first();
@endphp

<section class="section1" id="section1-id">
    <div class="section-cont service__container">
        <div class="service-grid">
            <div class="service-card">
                <h4 class="mvt-head">MISSION</h4>
                <img src="{{ asset('images/mission-icon.png') }}" alt="mission-logo" class="mission">
                <p class="para-m">
                    {{ $missionSection->mission ?? 'Default mission statement.' }}
                </p>
            </div>
            <div class="service-card">
                <h4 class="mvt-head">VISION</h4>
                <img src="{{ asset('images/vision-icon.jpg') }}" alt="vision-logo" class="vision">
                <p class="para-m">
                    {{ $missionSection->vision ?? 'Default vision statement.' }}
                </p>
            </div>
            <div class="service-card">
                <h4 class="mvt-head">TEAM</h4>
                <img src="{{ asset('images/team-icon.jpg') }}" alt="team-logo" class="team">
                <p class="para-m">
                    {{ $missionSection->team ?? 'Default team description.' }}
                </p>
            </div>
        </div>
    </div>
</section> <!-- Mission ends here -->
