@extends('frontend.layouts.app')

@section('title', 'Home | Pub Kamrup College')

@section('content')
    @include('frontend.home.component.principal_desk')
    <section class="info-section py-5">
        <div class="container-fluid px-lg-5">
            <div class="row g-4">
                <!-- Component 2: News & Notice -->
                <div class="col-lg-4 col-md-12">
                    @include('frontend.home.component.news_notice')
                </div>

                <!-- Component 3: About The College -->
                <div class="col-lg-4 col-md-12">
                    @include('frontend.home.component.about_the_college')
                </div>

                <!-- Component 4: Tenders -->
                <div class="col-lg-4 col-md-12">
                    @include('frontend.home.component.tenders')
                </div>
            </div>
        </div>
    </section>
    @include('frontend.home.component.bottom_icons')

    <div class="container-fluid my-4">
        <div class="row g-3">
            <!-- Achievements Slider -->
            @include('frontend.home.component.achievements')
            <!-- Events Slider -->
            @include('frontend.home.component.events')
        </div>
    </div>

    @include('frontend.home.component.gallery_video')
    @include('frontend.home.component.ragging-free-college-campus')

    <script>
        // Marquee-Style Infinite Loop Auto-scroll
        (function() {
            function createMarqueeScroll(containerId) {
                const container = document.getElementById(containerId);
                if (!container) return;

                let isPaused = false;
                let animationId;
                let scrollPosition = 0;
                const scrollSpeed = 0.5; // Adjust speed (0.5 = smooth, 1 = faster)

                // Clone content for seamless loop
                const content = container.innerHTML;
                container.innerHTML = content + content;

                function animate() {
                    if (!isPaused) {
                        scrollPosition += scrollSpeed;
                        container.scrollTop = scrollPosition;

                        // Reset when halfway through (seamless loop)
                        if (scrollPosition >= container.scrollHeight / 2) {
                            scrollPosition = 0;
                            container.scrollTop = 0;
                        }
                    }
                    animationId = requestAnimationFrame(animate);
                }

                // Pause on hover
                container.addEventListener('mouseenter', () => {
                    isPaused = true;
                });

                // Resume on mouse leave
                container.addEventListener('mouseleave', () => {
                    isPaused = false;
                });

                // Start animation
                animate();
            }

            // Initialize for both sections
            createMarqueeScroll('newsScrollContainer');
            createMarqueeScroll('tendersScrollContainer');
        })();
    </script>
@endsection
