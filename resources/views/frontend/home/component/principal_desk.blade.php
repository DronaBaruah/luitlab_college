<section class="principals-desk-section py-5">
    <div class="container-fluid px-lg-5">
        <div class="row g-4 align-items-stretch">
            <!-- Media Slider Section (Video/Image) -->
            <div class="col-lg-7 col-md-12">
                <div class="video-slider-component h-100">
                    <div id="videoImageCarousel" class="carousel slide shadow rounded-4 overflow-hidden" data-bs-ride="carousel" data-bs-interval="5000">
                        <div class="carousel-inner">
                            <!-- Slide 2: Promo Image -->
                            <div class="carousel-item active">
                                <div class="carousel-media-wrapper position-relative">
                                    <img src="https://images.unsplash.com/photo-1519125323398-675f0ddb6308?w=730&fit=crop"
                                        alt="Campus Event 1"
                                        class="d-block w-100 rounded-4 slider-img" style="aspect-ratio:16/9; object-fit:cover;">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Annual Youth Festival</h5>
                                        <p>Success and talent at Demo College</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Slide 3: Promo Image -->
                            <div class="carousel-item">
                                <div class="carousel-media-wrapper position-relative">
                                    <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?w=800&fit=crop"
                                        alt="Campus Front"
                                        class="d-block w-100 rounded-4 slider-img" style="aspect-ratio:16/9; object-fit:cover;">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Our Beautiful Campus</h5>
                                        <p>Discover a green and inspiring environment</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Controls -->
                        <button class="carousel-control-prev" type="button" data-bs-target="#videoImageCarousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon bg-dark rounded-circle p-2" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#videoImageCarousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon bg-dark rounded-circle p-2" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                        <!-- Indicators -->
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#videoImageCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#videoImageCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#videoImageCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Principal's Message -->
            <div class="col-lg-5 col-md-12">
                <div class="principals-card h-100 d-flex flex-column">
                    <!-- Section Header -->
                    <div class="section-header">
                        <h2 class="section-title">From The Principal's Desk</h2>
                    </div>
                    <!-- Principal's Photo -->
                    <div class="principal-photo-wrapper text-center mb-3 mt-2">
                        <img src="https://luitlab.com/_next/image?url=%2FLuitlab_logo_final.png&w=128&q=75"
                            alt="Principal Dr. ----- Sarma"
                            class="principal-photo img-fluid rounded-3 shadow">
                    </div>
                    <!-- Principal's Details -->
                    <div class="principal-info text-center mb-3">
                        <h4 class="principal-name mb-1">Dr. ----- Sarma</h4>
                        <p class="principal-qualification text-muted mb-0">M.Sc., LL.B., Ph.D</p>
                        <p class="principal-designation fw-bold text-primary">Principal</p>
                    </div>
                    <!-- Principal's Message -->
                    <div class="principal-message flex-grow-1 d-flex flex-column justify-content-between">
                        <p class="message-text">
                            It feels good to start on with a website for the college. Demo College has been serving the
                            society since a long time and ... <a href="#read-more" class="read-more-link">Read More</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .principals-desk-section {
        background-color: #f8f9fa;
    }

    .video-slider-component {
        padding-bottom: 1rem;
    }

    .carousel-media-wrapper {
        width: 100%;
        min-height: 250px;
        background: #101d2b;
        border-radius: 1rem;
        overflow: hidden;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .slider-img {
        width: 100%;
        height: 100%;
        border-radius: 1rem;
    }

    .carousel-caption {
        background: rgba(14, 23, 53, 0.67);
        border-radius: 10px;
        padding: 0.5rem 1.2rem;
        left: 7%;
        right: 7%;
        bottom: 10px;
    }

    .carousel-indicators [data-bs-target] {
        background-color: #1461a3;
        width: 14px;
        height: 6px;
        border-radius: 3px;
        margin: 0 5px;
    }

    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        filter: invert(1);
    }

    .section-header {
        background: linear-gradient(135deg, #002855 0%, #003b7a 100%);
        color: white;
        padding: 12px 18px;
        border-radius: 1rem 1rem 0 0;
        text-align: center;
    }

    .section-title {
        margin: 0;
        font-size: 22px;
        font-weight: 700;
        letter-spacing: 0.5px;
    }

    .principals-card {
        background: #fff;
        border-radius: 1rem;
        box-shadow: 0 4px 18px rgba(0, 0, 0, 0.12);
        display: flex;
        flex-direction: column;
    }

    .principal-photo-wrapper {
        padding: 20px 18px 0 18px;
    }

    .principal-photo {
        max-width: 220px;
        width: 100%;
        border: 3px solid #e4e7ee;
        transition: transform 0.3s ease;
    }

    .principal-photo:hover {
        transform: scale(1.03);
    }

    .principal-info {
        padding: 0 20px;
    }

    .principal-name {
        color: #002855;
        font-size: 21px;
        font-weight: 700;
        margin-bottom: 4px;
    }

    .principal-qualification {
        font-size: 14px;
        color: #8b98b2;
    }

    .principal-designation {
        font-size: 16px;
        color: #2471da;
        margin-top: 5px;
    }

    .principal-message {
        padding: 0 24px 22px 24px;
    }

    .message-text {
        font-size: 16px;
        line-height: 1.7;
        color: #353742;
        text-align: justify;
    }

    .read-more-link {
        color: #003b7a;
        font-weight: 600;
        text-decoration: none;
        transition: color 0.3s;
    }

    .read-more-link:hover {
        color: #dc3545;
        text-decoration: underline;
    }

    @media (max-width: 991px) {
        .principals-desk-section {
            padding: 30px 0;
        }

        .carousel-media-wrapper {
            min-height: 170px;
        }

        .principal-photo {
            max-width: 160px;
        }
    }

    @media (max-width: 600px) {
        .carousel-media-wrapper {
            min-height: 95px;
        }

        .section-title {
            font-size: 16px;
        }

        .principal-photo-wrapper {
            padding: 12px 8px 0 8px;
        }

        .principal-photo {
            max-width: 110px;
        }

        .principal-info {
            padding: 0 8px;
        }

    }
</style>
